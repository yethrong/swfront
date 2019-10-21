        <div id="wrapper" class="right-sidebar">
			<!-- {include file='./meta.tpl'} -->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">模块管理<span style="font-size:14px;"> - 应用名称：智慧灯杆云管理平台</span></div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="<!-- {$URLS_PATH} -->">首页</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><a href="#">UI</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Portlets</li>
                    </ol>
                    <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i class="fa fa-angle-down"></i>
                        <input id="URLS_ROOT" type="hidden" name="datestart" value="<!-- {$URLS_ROOT} -->" />
                        <input type="hidden" name="endstart" />
                    </div>
                </div>
                <div class="col-md-12">
                     <ul id="myTab" class="nav nav-tabs">
                         <li id = "tehformedit" class="active"><a href="#home" data-toggle="tab">表单编辑</a></li>
                         <li id = "tehformlist" class="" style="display:none;"><a href="#profile" data-toggle="tab">字段编辑</a></li>
                     </ul>
                     <div id="myTabContent" class="tab-content" style="background-color: #ffffff54;padding: 5px;">
                         <div id="home" class="tab-pane fade in active">
                             <!--END TITLE & BREADCRUMB PAGE-->
			                <div class="clearfix page-content"  id = "pageContent">
				                <div class="row" id = "rowContent">
									<div id = "controlpanel" class="portlet box portlet-blue ">
										<div id = "controlpanelhead" class="portlet-header small">
											<div class="caption">表单名称</div>
											<div class="tools">
												<i id="controltoolsdatabase" class="fa"></i>&nbsp;
												<i id="controltoolsmodal" data-toggle="modal" data-target="#modal-sql-config" class="fa"></i>
												<i id="controltoolsfresh" class="fa"></i>
												<i id="controltoolsScreen" onclick="return winFullScreen()" class="fa"></i>
												<i id="controltoolschevron" class="fa"></i>
												<i id="controltoolsclose" class="fa"></i>
											</div>
										</div>
										<div class="portlet-body">
											<!--BEGIN CONTENT-->
											<form id="formvalidatesignup" action="formvalidateupdate.html" class="form-validate">
											</form>
											<!--END CONTENT-->
										</div>
										<div class="clearfix"></div>
									</div>
				                </div>
			                  </div>           
                         </div>
                         <div id="profile" class="tab-pane fade">
                            <!--BEGIN FORM-->
							<div class="clearfix table-responsive">
								<table id="example1" class="table table-hover table-advanced table-bordered">
                                    <thead class="blue">
                                        <tr>
                                            <th style="text-align: center;">字段标题</th>
                                            <th style="text-align: center;">字段名称</th>
                                            <th style="text-align: center;">字段类型</th>
                                            <th style="text-align: center;">是否必填</th>
                                            <th style="text-align: center;">主键索引</th>
                                            <th style="text-align: center;">编辑</th>
                                        </tr>
                                    </thead>
                                    <tbody id = "tabletbody"></tbody>
                                </table>
							</div>
							<!--BEGIN FORM-->
                         </div>
                     </div>
                 </div>
			</div>
            <div id = "tempContent" style="display:none"></div>
        </div>