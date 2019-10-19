var controltext = '{ "text" : [' +
	'"type": "text" , ' +
	'"formclass": "form-group {hasview}" , ' +
    '"controltype": "input-text" , ' +
    '"controlName": "" , ' +
    '"labelcaption": {"type":"text" , "default":"请输入名称"},' +
    '"labelclass": "control-label caption" , ' +
    '"placeholder": "请输入提示信息" , ' +
    '"controlclass": "form-control {required} {intype}" , ' +
    '"require": "require" ,' +
    '"requiretext": "*" , ' +
    '"minlength": "" , ' +
    '"maxlength": "" , ' +
    '"iconinput": "input-icon {float}" , ' +
    '"iconclass": "glyphicon glyphicon-ok" , ' +
    '"icondatahover": "tooltip" , ' +
    '"iconoriginaltitle": "Last Name is empty" , ' +/*图标提示*/
    '"content":"<div class={formclass}  controltype = {controltype} >' + 
    '<label for={controlName} class= {labelclass}> {labelcaption} <span class={require}> {requiretext }</span> </label>'+
    '<div class={iconinput}><i data-hover={icondatahover} originaltitle = {iconoriginaltitle} class={iconclass}></i> >' + 
    '<input id={controlName} type={type}  placeholder={placeholder} controlclass={controlclass} /> >' + 
    '</div> > </div>" }]}';
//obj = JSON.parse(text);
//document.getElementById("demo").innerHTML = obj.text[1].name + " " + obj.text[1].url;

var controlcombox = '{"type": "text" , ' +
										'"formclass": "form-group {hasview}" , ' +
									    '"controltype": "input-text" , ' +
									    '"controlName": "" , ' +
									    '"labelcaption": {"type":"text" , "default":"请输入名称"},' +
									    '"labelclass": "control-label caption" , ' +
									    '"placeholder": "请输入提示信息" , ' +
									    '"controlclass": "form-control {required} {intype}"}';
var controlcombox = '{}';