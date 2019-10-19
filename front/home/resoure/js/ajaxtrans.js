var Transport = { filename : "ajaxtrans.js", debugging : {isDebugging : 0, debuggingMode : 0, linefeed : "", containerId : 0 },
	debug : function(isDebugging, debuggingMode) {
		this.debugging = { "isDebugging" : isDebugging, "debuggingMode" : debuggingMode, "linefeed" : debuggingMode ? "<br />" : "\n", "containerId" : "dubugging-container" + new Date().getTime() }
	},
	onComplete : function() { },
	onRunning : function() { },
	run : function(url, params, callback, transferMode, responseType, asyn, quiet) {
		params = this.parseParams(params);
		transferMode = typeof (transferMode) === "string"
				&& transferMode.toUpperCase() === "GET" ? "GET" : "POST";
		if (transferMode === "GET") {
			var d = new Date();
			url += params ? (url.indexOf("?") === -1 ? "?" : "&") + params : "";
			url = encodeURI(url) + (url.indexOf("?") === -1 ? "?" : "&") + d.getTime() + d.getMilliseconds();
			params = null
		}
		responseType = typeof (responseType) === "string"
				&& ((responseType = responseType.toUpperCase()) === "JSON" || responseType === "XML") ? responseType : "TEXT";
		asyn = asyn === false ? false : true;
		var xhr = this.createXMLHttpRequest();
		try {
			var self = this;
			if (typeof (self.onRunning) === "function" && !quiet) {
				self.onRunning()
			}
			xhr.open(transferMode, url, asyn);
			if (transferMode === "POST") {
				xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
			}
			if (asyn) {
				xhr.onreadystatechange = function() {
					if (xhr.readyState == 4) {
						switch (xhr.status) {
						case 0:
						case 200:
							if (typeof (self.onComplete) === "function") {
								self.onComplete()
							}
							if (typeof (callback) === "function") {
								callback.call(self, self.parseResult( responseType, xhr), xhr.responseText)
							}
							break;
						case 304:
							break;
						case 400:
							alert("XmlHttpRequest status: [400] Bad Request");
							break;
						case 404:
							alert("XmlHttpRequest status: [404] \nThe requested URL "
									+ url + " was not found on this server.");
							break;
						case 409:
							break;
						case 503:
							alert("XmlHttpRequest status: [503] Service Unavailable");
							break;
						default:
							alert("XmlHttpRequest status: [" + xhr.status
									+ "] Unknow status.")
						}
						xhr = null
					}
				};
				if (xhr != null) {
					xhr.send(params)
				}
			} else {
				if (typeof (self.onRunning) === "function") {
					self.onRunning()
				}
				xhr.send(params);
				var result = self.parseResult(responseType, xhr);
				if (typeof (self.onComplete) === "function") {
					self.onComplete()
				}
				if (typeof (callback) === "function") {
					callback.call(self, result, xhr.responseText)
				}
				return result
			}
		} catch (ex) {
			if (typeof (self.onComplete) === "function") {
				self.onComplete()
			}
			alert(this.filename + "/run() error:" + ex.description)
		}
	},
	displayDebuggingInfo : function(info, type) {
		if (!this.debugging.debuggingMode) {
			alert(info)
		} else {
			var id = this.debugging.containerId;
			if (!document.getElementById(id)) {
				div = document.createElement("DIV");
				div.id = id;
				div.style.position = "absolute";
				div.style.width = "98%";
				div.style.border = "1px solid #f00";
				div.style.backgroundColor = "#eef";
				var pageYOffset = document.body.scrollTop || window.pageYOffset || 0;
				div.style.top = document.body.clientHeight * 0.6 + pageYOffset + "px";
				document.body.appendChild(div);
				div.innerHTML = "<div></div>" + "<hr style='height:1px;border:1px dashed red;'>" + "<div></div>"
			}
			var subDivs = div.getElementsByTagName("DIV");
			if (type === "param") {
				subDivs[0].innerHTML = info
			} else {
				subDivs[1].innerHTML = info
			}
		}
	},
	createXMLHttpRequest : function() {
		var xhr = null;
		if (window.ActiveXObject) {
			var versions = [ "Microsoft.XMLHTTP", "MSXML6.XMLHTTP", "MSXML5.XMLHTTP", "MSXML4.XMLHTTP", "MSXML3.XMLHTTP", "MSXML2.XMLHTTP", "MSXML.XMLHTTP" ];
			for (var i = 0; i < versions.length; i++) {
				try {
					xhr = new ActiveXObject(versions[i]);
					break
				} catch (ex) {
					continue
				}
			}
		} else {
			xhr = new XMLHttpRequest()
		}
		return xhr
	},
	onXMLHttpRequestError : function(xhr, url) {
		throw "URL: " + url + "\n" + "readyState: " + xhr.readyState + "\n" + "state: " + xhr.status + "\n" + "headers: " + xhr.getAllResponseHeaders()
	},
	parseParams : function(params) {
		var legalParams = "";
		params = params ? params : "";
		if (typeof (params) === "string") {
			legalParams = params
		} else {
			if (typeof (params) === "object") {
				try {
					legalParams = "JSON=" + params.toJSONString()
				} catch (ex) {
					alert("Can't stringify JSON!");
					return false
				}
			} else {
				alert("Invalid parameters!");
				return false
			}
		}
		if (this.debugging.isDebugging) {
			var lf = this.debugging.linefeed, info = "[Original Parameters]" + lf + params + lf + lf + "[Parsed Parameters]" + lf + legalParams;
			this.displayDebuggingInfo(info, "param")
		}
		return legalParams
	},
	preFilter : function(result) {
		return result.replace(/\xEF\xBB\xBF/g, "")
	},
	parseResult : function(responseType, xhr) {
		var result = null;
		switch (responseType) {
		case "JSON":
			result = this.preFilter(xhr.responseText);
			try {
				result = result.parseJSON()
			} catch (ex) {
				throw this.filename + "/parseResult() error: can't parse to JSON.\n\n" + xhr.responseText
			}
			break;
		case "XML":
			result = xhr.responseXML;
			break;
		case "TEXT":
			result = this.preFilter(xhr.responseText);
			break;
		default:
			throw this.filename + "/parseResult() error: unknown response type:" + responseType
		}
		if (this.debugging.isDebugging) {
			var lf = this.debugging.linefeed, info = "[Response Result of " + responseType + " Format]" + lf + result;
			if (responseType === "JSON") {
				info = "[Response Result of TEXT Format]" + lf + xhr.responseText + lf + lf + info
			}
			this.displayDebuggingInfo(info, "result")
		}
		return result
	}
};
var Ajax = Transport;
Ajax.call = Transport.run;
if (!Object.toJSONString) {
	Array.toJSONString = function() {
		var a = [ "[" ], b, i, l = this.length, v;
		function p(s) {
			if (b) {
				a.push(",")
			}
			a.push(s);
			b = true
		}
		for (i = 0; i < l; i++) {
			v = this[i];
			switch (typeof v) {
			case "undefined":
			case "function":
			case "unknown":
				break;
			case "object":
				if (v) {
					if (typeof v.toJSONString === "function") {
						p(v.toJSONString())
					}
				} else {
					p("null")
				}
				break;
			default:
				p(v.toJSONString())
			}
		}
		a.push("]");
		return a.join("")
	};
	Boolean.toJSONString = function() {
		return String(this)
	};
	Date.toJSONString = function() {
		function f(n) {
			return n < 10 ? "0" + n : n
		}
		return '"' + this.getFullYear() + "-" + f(this.getMonth() + 1) + "-" + f(this.getDate()) + "T" + f(this.getHours()) + ":" + f(this.getMinutes()) + ":" + f(this.getSeconds()) + '"'
	};
	Number.toJSONString = function() {
		return isFinite(this) ? String(this) : "null"
	};
	Object.toJSONString = function() {
		var a = [ "{" ], b, k, v;
		function p(s) {
			if (b) {
				a.push(",")
			}
			a.push(k.toJSONString(), ":", s);
			b = true
		}
		for (k in this) {
			if (this.hasOwnProperty(k)) {
				v = this[k];
				switch (typeof v) {
				case "undefined":
				case "function":
				case "unknown":
					break;
				case "object":
					if (this !== window) {
						if (v) {
							if (typeof v.toJSONString === "function") {
								p(v.toJSONString())
							}
						} else {
							p("null")
						}
					}
					break;
				default:
					p(v.toJSONString())
				}
			}
		}
		a.push("}");
		return a.join("")
	};
	(function(s) {
		var m = { "\b" : "\\b", "\t" : "\\t", "\n" : "\\n", "\f" : "\\f", "\r" : "\\r", '"' : '\\"', "\\" : "\\\\" };
		s.parseJSON = function(filter) {
			try {
				if (/^("(\\.|[^"\\\n\r])*?"|[,:{}\[\]0-9.\-+Eaeflnr-u \n\r\t])+?$/ .test(this)) {
					var j = eval("(" + this + ")");
					if (typeof filter === "function") {
						function walk(k, v) {
							if (v && typeof v === "object") {
								for ( var i in v) {
									if (v.hasOwnProperty(i)) {
										v[i] = walk(i, v[i])
									}
								}
							}
							return filter(k, v)
						}
						j = walk("", j)
					}
					return j
				}
			} catch (e) {
			}
		//	throw new SyntaxError("parseJSON")
		};
		s.toJSONString = function() {
			var _self = this.replace("&", "%26");
			if (/["\\\x00-\x1f]/.test(this)) {
				return '"'
						+ _self.replace(/([\x00-\x1f\\"])/g, function(a, b) {
							var c = m[b];
							if (c) {
								return c
							}
							c = b.charCodeAt();
							return "\\u00" + Math.floor(c / 16).toString(16)
									+ (c % 16).toString(16)
						}) + '"'
			}
			return '"' + _self + '"'
		}
	})(String.prototype)
}
Ajax.onRunning = showLoader;
Ajax.onComplete = hideLoader;
function showLoader() {
	document.getElementsByTagName("body").item(0).style.cursor = "wait";
	if (top.frames["header-frame"]
			&& top.frames["header-frame"].document.getElementById("load-div")) {
		top.frames["header-frame"].document.getElementById("load-div").style.display = "block"
	} else {
		var obj = document.getElementById("loader");
		if (!obj && typeof (process_request) != "undefined") {
			obj = document.createElement("DIV");
			obj.id = "loader";
			obj.innerHTML = process_request;
			document.body.appendChild(obj)
		}
	}
}
function hideLoader() {
	document.getElementsByTagName("body").item(0).style.cursor = "auto";
	if (top.frames["header-frame"] && top.frames["header-frame"].document.getElementById("load-div")) {
		setTimeout(
				function() {
					top.frames["header-frame"].document.getElementById("load-div").style.display = "none"
				}, 10)
	} else {
		try {
			var obj = document.getElementById("loader");
			obj.style.display = "none";
			document.body.removeChild(obj)
		} catch (ex) {
		}
	}
}
function showdiv(bid) {
	document.getElementById(bid).style.display = "block";
}
function hidediv(bid) {
	document.getElementById(bid).style.display = "none";
}
function get_cat_recommend(inc_soure, rec_object, get_query, callback) {
	if(callback == null) callback = cat_rec_response;
	if(get_query == null) get_query = 'querypragrm';
	if(rec_object == null) rec_object = 'objectpragrm';
	Ajax.call(inc_soure,"rec_object=" + rec_object + "&get_query=" + get_query, callback, "POST", "TEXT");
}
function cat_rec_response(result) {
	var res = result.parseJSON();
	if(document.getElementById(res.rec_object)) 
	{ 
		var ele = document.getElementById(res.rec_object);
		ele.innerHTML = res.content;
	}else{
		console.log('无页面元素' + res.rec_object + '，请检查！');
	}
};
function get_cat_syncmend (url, senddata, id) {
	  var req = false;
	  // Safari, Firefox, 及其他非微软浏览器
	  if (window.XMLHttpRequest) {
	    try {
	      req = new XMLHttpRequest();
	    } catch (e) {
	      req = false;
	    }
	  } else if (window.ActiveXObject) {
	 
	    // For Internet Explorer on Windows
	    try {
	      req = new ActiveXObject("Msxml2.XMLHTTP");
	    } catch (e) {
	      try {
	        req = new ActiveXObject("Microsoft.XMLHTTP");
	      } catch (e) {
	        req = false;
	      }
	    }
	  }
	  if (req) {
		    // 同步请求，等待收到全部内容
		    req.open('POST', url, false);
		    req.send(senddata);
	} else {
		return "对不起，你的浏览器不支持 XMLHTTPRequest 对象。这个网页的显示要求 Internet Explorer 5 以上版本, 或 Firefox 或 Safari 浏览器，也可能会有其他可兼容的浏览器存在。";
	  }
	  var element = document.getElementById(id);
	  if (!element) {
	    //alert("函数clientSideInclude无法找到id " + id + "。" + "你的网页中必须有一个含有这个id的div 或 span 标签。");
	    return req.responseText;
	  }
    if (req.status == 404) {
      clientSideInclude(id, 'error.html')
    } else {
      element.innerHTML = req.responseText;
    }
	  return req.responseText;
};