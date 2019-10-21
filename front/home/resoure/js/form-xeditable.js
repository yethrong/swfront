$(function () {
    $.fn.editable.defaults.inputclass = 'form-control';
    $.fn.editable.defaults.url = $('#URLS_ROOT').attr('value') + 'index/groupseting/put_editablelist_list';
    initeditable();
});
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
$('#selframname').editable({
	display: function (value) {
		$(this).text($('#controlpanelhead').find('.caption').text());
    },
	validate: function (value) { //字段验证
        if (!$.trim(value)) {return '不能为空';}
        $('#controlpanelhead').find('.caption').text(value);
    }
});
/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
initeditable = function () {
    $('.portlet-scroll').slimScroll({
        "height": "250",
        "alwaysVisible": true
    });
    $('#menu-toggle').click(function(){
        //console.log($('#form-layouts').css('overflow'));
        if($('#form-layouts').css('overflow') == 'hidden')  {
        	$('#form-layouts-sub2').css('display','initial');
        }else{
            $('#form-layouts-sub1').addClass('active'); 
            $('#form-layouts-sub2').removeClass('active'); 
        	$('#form-layouts-sub2').css('display','none');
            document.getElementById("tab-form-actions").className = 'tab-pane fade active in'; 
            document.getElementById("tab-two-columns").className = 'tab-pane fade'; 
        }
    });
    $(".column").sortable({
        connectWith: ".column",
        opacity: 0.6,
        coneHelperSize: true,
        placeholder: 'sortable-placeholder',
        forcePlaceholderSize: true,
        tolerance: "pointer"
    });
    $(".column").disableSelection();
	$("form").each(function() {$(this).attr("method","POST");});
    /*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    if(getURL('mode') == 'inline'){
        $("#inline-editing").iCheck('check');
        $.fn.editable.defaults.mode = 'inline';
    } else{
        $("#inline-editing").iCheck('uncheck');
        $.fn.editable.defaults.mode = 'popup';
    }
    /*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	$(".selectframcolorclick").click(function() {
		$('#selectframcolor').attr('conname',$(this).attr('id'));
		$('#selectframcolor').trigger("click");
	});
	$('.selecticonlist').click(function(){
		$('#iconselectbutton').attr('conname',$(this).attr('id'));
	});
    /*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    $('.editableemptdata').editable({
    	validate: function (value) {
            if (!$.trim(value)) {value = ' ';}
			$(this).attr('data-value',value);   
			getcontrollseting(value,$(this));
        }
    });
    /*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    $('.editabletextdata').editable({
    	validate: function (value) { //字段验证
            if (!$.trim(value)) {return '不能为空';}
			$(this).attr('data-value',value);   
			getcontrollseting(value,$(this));
        }
    });
    /*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    $('.editablebooldata').editable({
        source: [{value: 1, text: '是'},	{value: 0, text: '否'},],
        display: function(value, sourceData) {
            var colors = {"": "green", 1: "gray", 2: "blue"},
            elem = $.grep(sourceData, function(o){return o.value == value;});
            if(elem.length) $(this).text(elem[0].text).css("color", colors[value]);
            else            $(this).empty();
        },
    	validate: function (value) {
			$(this).attr('data-value',value);   
			getcontrollseting(value,$(this));
        }
    });
    /*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    $('.editablecusedata').editable({
    	source: function() {var countries = [{value:'0', text:''},{value:$(this).attr('cusetlist'), text:$(this).attr('cusetlist')},];return countries;},
		validate: function(value) {
			$(this).attr('data-value',value);   
			getcontrollseting(value,$(this));
        }
    });
    /*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    $('.editsubcontrol').editable({
        source: [{value: 1, text: '是'},	{value: 0, text: '否'},],
        validate: function(value) {
            $(this).attr('data-value',value);
            getcontrollseting(value,$(this));
        }
    });
    /*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    $('.editablelistdata').editable({
    	source: function() {
    		var countries = [];
    		var xhr = $.ajax({url:$('#URLS_ROOT').attr('value') + 'index/groupseting/get_editablelist_list',type: 'POST',async: false,data:"post-pk=" + $(this).attr("data-pk") + "&id="  + $(this).attr("id") + "&controlname="  + $(this).attr("controlname") + "&controlvale="  + $(this).attr("controlvale") + "&data-type="  + $(this).attr("data-type") + "&data-value="  + $(this).attr("data-value")});
    		var sellist =xhr.responseText.parseJSON();
            $.each(sellist,function(k, v) {countries.push({value: k, text: v}); });
			return countries;
		},
        display: function(value, sourceData) {
            var colors = {"": "green", 1: "gray", 2: "blue"},
            elem = $.grep(sourceData, function(o){return o.value == value;});
            if(elem.length)  $(this).text(elem[0].text).css("color", colors[value]);
            else                     $(this).empty();
        },
		validate: function(value) {
			$(this).attr('data-value',value);   
			getcontrollseting(value,$(this));
			if($(this).attr('id') == 'selframbtnlist'){
		    		if(value == 0) {$(this).css("color", 'gray');$('#controltoolsmodal').removeClass('fa-cog');}
		    		else{		    $(this).css("color", 'green');$('#controltoolsmodal').addClass('fa-cog');}
			}
        }
    });
   /*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    getcontrollseting = function(value,thethis){
        var oldve = 0;
        var oldid =	'00';
        var thearray = [];
    	$('#usercontrol').find('.editableemptdata').each(function() {if(!$.trim($(this).attr('data-value'))) $(this).attr('data-value',' ');});
        var thetabel = $('#usercontrol').find('a');
		var thecolumn = document.getElementById($("#control-attri").attr('getcontrol'));
		var thecontype = $(thecolumn).find('.form-group').attr('controlvale');
        for (var i=0;i<thetabel.length;i++){
        	if(oldid != $(thetabel[i]).attr('id').substring(0,oldid.length)){
        		if(!isEmpty($(thetabel[i]).attr('data-value'))) {
        			oldid = $(thetabel[i]).attr('id');
        			oldve = $(thetabel[i]).attr('data-value');
        		}
        	}
        	else if(oldid == $(thetabel[i]).attr('id').substring(0,oldid.length)){
        		if(oldve == 0) $(thetabel[i]).parent().parent().css('display','none');
        		else           $(thetabel[i]).parent().parent().css('display','');
        	}
        	thearray[i] =[$(thetabel[i]).attr('id'),$(thetabel[i]).attr('data-value')];
       }
    	getcontrollhtml(thecontype,thecolumn,false,JSON.stringify(thearray));
    }
    /*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    $('#selframreflash').editable({
        source: [{value: 0, text: ''},{value: 1, text: '数据刷新'},{value: 2, text: '表单刷新'}],
        validate: function(value) {
            $(this).attr('data-value',value);   
    		if(value == 0) {
    			$(this).css("color", 'gray');
    			$('#controltoolsfresh').removeClass('fa-refresh');
    		}
    		else{
    			$(this).css("color", 'green');
    			$('#controltoolsfresh').addClass('fa-refresh');
    		}
        }
    });
    /*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    $('.editselframaling').editable({
        source: [{value:'0',text:''},{value:'1',text:'md-1'},{value:'2',text:'md-2'},{value:'3',text:'md-3'},{value:'4',text:'md-4'},{value:'5',text:'md-5'},{value:'6',text:'md-6'},{value:'7',text:'md-7'},{value:'8',text:'md-8'},{value:'9',text:'md-9'},{value:'10',text:'md-10'},{value:'11',text:'md-11'},{value:'12',text:'md-12'}],
        	validate: function(value) {
		       	 var x=document.getElementById("control-attri").getAttribute('getcontrol');
		       	 var y=document.getElementById(x);
		       	 value = "column columnpanel col-md-" + value;
	             $(y).attr('class',value);
	        },
	        errorsince : function(response, newValue) {}
    });
    /*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    $('#selframtype').editable({
        prepend: "模板表单", source: [{value: 1, text: '数据表单'},{value: 2, text: '弹窗表单'}],
        display: function(value, sourceData) {
            var colors = {"": "green", 1: "gray", 2: "blue"},
            elem = $.grep(sourceData, function(o){return o.value == value;});
            if(elem.length)  $(this).text(elem[0].text).css("color", colors[value]);
            else                     $(this).empty();
            $(this).attr('data-value',value);
    		if($(this).text() == '数据表单') {
    			$('#tehformlist').css("display", '');
    			$('#selframdata_tr').css("display", '');
    		}
    		else{
    			$('#tehformlist').css("display", 'none');
    			$('#tehformedit').find('a').trigger("click");
    			$('#selframdata_tr').css("display", 'none');
    		}
            $("a[controlname='targetfields']").css('display',$('#selframdata_tr').css('display'));
        }
    });
    /*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    $('.workselfram').editable({
        source: [{value: 1, text: '是'},	{value: 0, text: '否'}],
        display: function(value, sourceData) {
            var colors = {"": "green", 1: "gray", 2: "blue"},
            elem = $.grep(sourceData, function(o){return o.value == value;});
            if(elem.length)  $(this).text(elem[0].text).css("color", colors[value]);
            else                     $(this).empty();
        	var thisid = $(this).attr('id');
            $(this).attr('data-value',value);
    		if($(this).text() == '否') {
    			if(thisid == 'selframclose') $('#controltoolsclose').removeClass('fa-close');
    			else if(thisid == 'selframmin') $('#controltoolschevron').removeClass('fa-chevron-up');
    			else if(thisid == 'selframfullScreen') $('#controltoolsScreen').removeClass('fa-arrows-alt');
    			else if(thisid == 'selframhead') {$('#selframcolor_tr').css('display','none');$('#selframmin_tr').css('display','none');$('#selframclose_tr').css('display','none');$('#selframanert_tr').css('display','none');$('#selframbtnlist_tr').css('display','none');$('#selframreflash_tr').css('display','none');$('#selframfullScreen_tr').css('display','none');$('#controlpanelhead').css('display','none');}
    		}
    		else {
    			 if(thisid == 'selframclose') $('#controltoolsclose').addClass('fa-close');
    			else if(thisid == 'selframmin') $('#controltoolschevron').addClass('fa-chevron-up');
    			else if(thisid == 'selframfullScreen') $('#controltoolsScreen').addClass('fa-arrows-alt');
    			else if(thisid == 'selframhead') {$('#selframcolor_tr').css('display','');$('#selframmin_tr').css('display','');$('#selframclose_tr').css('display','');$('#selframanert_tr').css('display','');$('#selframbtnlist_tr').css('display','');$('#selframreflash_tr').css('display','');$('#selframfullScreen_tr').css('display','');$('#controlpanelhead').css('display','');
    			}
    		}
        }
    });
    /*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    function getURL (name) {
        var searchString = window.location.search.substring(1),
            i, val, params = searchString.split("&");
        for (i = 0; i < params.length; i++) {
            val = params[i].split("=");
            if (val[0] == name) {return unescape(val[1]);}
        }
        return null;
    }
}