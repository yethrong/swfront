$(function () {
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    getportlet = function  (event) {
    	var isfind = 0;
        var oldject = event.target;
        var eldject = event.target;
        while(isfind == 0)  {
        	if(eldject.className.indexOf('column') > -1){
        		isfind = 1; 
                eldject.classList.add( 'sortable' );
           } else {
       				oldject = eldject;
        			eldject = eldject.parentNode;
        	}
        }
		switch(oldject.getAttribute('controlvale')){
			case "panel":
			default:
		}
        var selobject=$(oldject); 
    	$(".column").each(function() {$(this).find('.caption').removeClass('selected'); });
        selobject.find('.caption').addClass('selected');  
        var x=document.getElementById("control-attri");
        x.innerHTML = '控件属性:(' + selobject.find('.caption').html() + ')'; 
        x.setAttribute('getcontrol',eldject.getAttribute('id'));
        var eldjectattr=  $(eldject).attr('class');
        eldjectattr = eldjectattr.replace('columnpanel','');
        eldjectattr = eldjectattr.replace('ui-sortable','');
        eldjectattr = eldjectattr.replace('sortable','');
        eldjectattr = eldjectattr.replace('column','');
        eldjectattr = eldjectattr.replace('   ','');
        eldjectattr = eldjectattr.replace(' ','');
        $('#selframaling').attr('data-value', eldjectattr.replace('col-md-',''));
        $('#selframaling').text(eldjectattr.replace('col-',''));
        var xhr = $.ajax({url:$('#URLS_ROOT').attr('value') + 'index/groupseting/get_editablelist_list',type: 'POST',async: false,data:'controlvale='+selobject.attr('controlvale')+'&data-type=attribute'});
        $('#collapseTwo1').find('.panel-body').html(xhr.responseText);
        updatetable(eldject, $('#usercontrol'));
        $('#selectframcolor').attr('colname',selobject.attr('id'));
        $("a[controlname='targetfields']").css('display',$('#selframdata_tr').css('display'));
        if(isEmpty($('#usercontrol').attr('sourcetable'))) $('#usercontrol').attr('targettable', $('#selframdata').text());
	    initeditable ();
    }
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    updatetable = function(thecontrol , thetable){
    	var trList = $('#tempContent').html($(thecontrol).html());
    	trList.find('.btn-group').remove();
    	var pattern = /<\!--\d+-->\s+(?:[a-z0-9\-]+|[^\u00-\uFF]+)/igm;
    	var matchResult = trList.html().match(pattern);
    	thetable.find('a').each(function(){
    		var thisuser = false;
    		if($(this).attr('data-value') == 1) $(this).attr('data-value',0);
    		var theid = '<!--' + $(this).attr('id') + '--> ' ;
    		for (var i=1;i<matchResult.length;i++){
    			if(matchResult[i].indexOf(theid) > -1){
	        		var erdgt = matchResult[i].replace(theid,'').replace(' ','');
        			if($(this).attr('controlvale') =="icon"){
            			$(this).attr('data-value',erdgt);
        				$(this).find('i').attr('class','fa ' + erdgt);
        		    }else{
        		    	$(this).attr('data-value',erdgt);
        		    	if($(this).attr('controlvale') !="subcontrol") $(this).text(erdgt);
        		    }
	        		thisuser = true; //break;
    			}
    		}
    		if(thisuser == false) {
    			if(!isEmpty($(this).attr('controlname')) && !isEmpty(trList.find("[" + $(this).attr('controlname') + "]").attr($(this).attr('controlname')))){
    				var thisdata = trList.find("[" + $(this).attr('controlname') + "]").attr($(this).attr('controlname'));
    				if($(this).attr('controlvale') =="icon"){
        				$(this).find('i').attr('class','fa '+ thisdata);
            			$(this).attr('data-value',thisdata.replace('fa ',''));
        		    }else{
        				$(this).attr('data-value',thisdata);
        				if($(this).attr('controlvale') !="subcontrol") $(this).text(thisdata);
        		    }
    			}
    			else if($(this).attr('controlvale') == 'cusetlist') {$(this).attr('data-value','0');$(this).text('');}
    		}
    	});
    	
        var oldve = 0;
        var oldid = '00';
        var thetabel = $('#usercontrol').find('a');
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
       }
        $('#tempContent').html('');
    }
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	$(".controlmang").each(function() {
		$(this).click(function() {
			getcontrollhtml($(this).attr('controlvale'),document.getElementById('formvalidatesignup'),true,'');
		});
	});
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	getcontrollhtml = function(thecontrol,selobject,setparent,postdata){
		var control = '';
		var comid = 'columns-' + parseInt(Math.random()*(10000000+1),10).toString();
        var xhr = $.ajax({url:$('#URLS_ROOT').attr('value') + 'index/groupseting/get_editablelist_list',type: 'POST',async: false,data:'controlvale='+thecontrol+'&data-type=getcontrol&postdata=' + postdata});//
        if(setparent){
				control = '<div class="col-md-6 column columnpanel" controlvale = "column" id="' + comid + '">';
				control += xhr.responseText;
				control += '</div>';
				selobject.innerHTML += control;
		}else{
			control += xhr.responseText;
			$('#tempContent').html(control);
			$(selobject).html($('#tempContent').html());
			$('#tempContent').html('');
		}
        if(setparent) {
        	$('#'+comid).find('.selectpicker').selectpicker({iconBase: 'fa',tickIcon: 'fa-check'});
        }
        else{
        	$(selobject).find('.selectpicker').selectpicker({iconBase: 'fa',tickIcon: 'fa-check'});
        	$(".column").each(function() {$(this).find('.caption').removeClass('selected'); });
            $(selobject).find('.caption').addClass('selected');  
            $(".select2-multi-value").select2();
        }
        initeditable ();
	}
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    isEmpty = function (obj){
        if(typeof obj == "undefined" || obj == null || obj == ""){
            return true;
        }else{
            return false;
        }
    }
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	$(".iconlist").click(function() {
		$(".iconlist").css('color','#383838'); 
		$(".iconlist").css('font-weight','normal');
		$(this).css('color','green');
		$(this).css('font-weight','bold');
		$("#iconselectbutton").attr('data-dismiss','modal');
		$("#iconselectbutton").removeAttr('disabled','none');
		$("#modal-wide-width-label").text('你选择的图标是:' + $(this).text());
		$("#modal-wide-width-label").attr('selname',$(this).find('i').attr('class'));

    });
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	winFullScreen = function() {
		var docElm = document.documentElement;
		if (docElm.requestFullscreen) { docElm.requestFullscreen(); }//W3C  
		else if (docElm.mozRequestFullScreen) { docElm.mozRequestFullScreen(); }//FireFox  
		else if (docElm.webkitRequestFullScreen) { docElm.webkitRequestFullScreen(); }//Chrome等  
		else if (elem.msRequestFullscreen) { elem.msRequestFullscreen(); }//IE11
	};
	winexitFullScreen = function () {
		if (document.exitFullscreen) { document.exitFullscreen(); }  
		else if (document.mozCancelFullScreen) { document.mozCancelFullScreen(); }  
		else if (document.webkitCancelFullScreen) { document.webkitCancelFullScreen(); }
		else if (document.msExitFullscreen) { document.msExiFullscreen(); }
	};
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	$("#selectframcolor").change(function() {
		var thisid = document.getElementById($('#selectframcolor').attr('conname'));
		$(thisid).css("color",document.querySelector("#selectframcolor").value);
		if($('#selectframcolor').attr('conname') == 'selframcolor'){
				$("#controlpanelhead").css("background-color",document.querySelector("#selectframcolor").value);
		}else{
			var corlid = document.getElementById($('#selectframcolor').attr('colname'));
			$(corlid).find('.caption').css("color",document.querySelector("#selectframcolor").value);
		}
	});
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	$('#selframdata').click(function(){
		get_cat_recommend($('#URLS_ROOT').attr('value') + 'index/groupseting/get_datatable_list','selframdatatable');
        initeditable ();
	});
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	$('#iconselectbutton').click(function(){
		var thisid = document.getElementById($('#iconselectbutton').attr('conname'));
		$(thisid).find('i').attr('class',$("#modal-wide-width-label").attr('selname'));
		$(thisid).attr('data-value',$("#modal-wide-width-label").attr('selname').replace('fa ',''));
		getcontrollseting('',$(thisid));
	});
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	$('#tehformlist').click(function(){
		var tablenumb = 0;
		var tabledata = '';
		$('#formvalidatesignup').find('.column').each(function(){
			tablenumb++;
			tabledata += '<tr>';
			tabledata += '<td>Trident</td>';
			tabledata += '<td>column' + tablenumb + '</td>';
			tabledata += '<td>Win 95+</td>';
			tabledata += '<td class="center"> 4</td>';
			tabledata += '<td class="center">X</td>';
			tabledata += '<td><button type="button" class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp; Edit</button></td>';
			tabledata += '</tr>';
		});
		$('#tabletbody').html(tabledata);
	});
});