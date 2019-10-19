	        //console.log(selobject.attr('controltype'));
        /*
         通过 jQuery
		$( 'body').addClass( 'class1 class2' );
		$( 'body' ).removeClass( 'class1 class2' );
		支持 classList 的高级浏览器（IE10+，Chrome，Firefox，Safari）
		document.body.classList.add( 'class1', 'class2' );
		document.body.classList.remove( 'class1', 'class2' );
         */
                     <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
                <div id="form-layouts" class="sidebar-collapse menu-scroll ">
                            <ul class="nav ul-edit nav-tabs responsive">
                                <li id = 'form-layouts-sub1'  iscloed =0  class="active"><a href="#tab-form-actions" data-toggle="tab">系统管理</a> </li>
                                <li id = 'form-layouts-sub2'  style="pointer-events: none;"><a href="#tab-two-columns" data-toggle="tab">属性修改</a> </li>
                            </ul>
                    <div class="clearfix"></div>
                    <div style="background: transparent; border: 0; box-shadow: none !important" class="tab-content pan mtl mbn responsive">
	                    <div id="tab-form-actions" class="tab-pane fade active in">
	                    
	                       <ul id="side-menu" class="nav " style="list-style-type:none;"><li></li>
		                        <li><a href="#"><i class="fa fa-desktop fa-fw"><div class="icon-bg bg-pink"></div></i><span class="menu-title">应用管理</span><span class="fa arrow"></span></a>
		                            <ul class="nav nav-second-level in">
		                               <li><a href="#"><i class="fa fa-angle-double-right"></i><span class="submenu-title">基础信息设置</span></a>  </li>
		                                <li><a href="#"><i class="fa fa-columns"></i><span class="submenu-title">信息设置</span><span class="fa arrow"></span></a>
		                                    <ul class="nav nav-third-level">
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title">基础信息设置</span></a>  </li>
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title">Third Level Item</span></a> </li>
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title"> Third Level Item</span></a>  </li>
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title">Third Level Item</span></a> </li>
		                                    </ul>
		                                </li>
		                                <li><a href="#"><i class="fa fa-columns"></i><span class="submenu-title">页面设置</span><span class="fa arrow"></span></a>
		                                    <ul class="nav nav-third-level">
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title">基础信息设置</span></a>  </li>
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title">Third Level Item</span></a> </li>
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title"> Third Level Item</span></a>  </li>
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title">Third Level Item</span></a> </li>
		                                    </ul>
		                                </li>
		                                <li><a href="#"><i class="fa fa-columns"></i><span class="submenu-title">模块设置</span><span class="fa arrow"></span></a>
		                                    <ul class="nav nav-third-level">
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title">基础信息设置</span></a>  </li>
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title">Third Level Item</span></a> </li>
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title"> Third Level Item</span></a>  </li>
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title">Third Level Item</span></a> </li>
		                                    </ul>
		                                </li>
		                                <li><a href="#"><i class="fa fa-columns"></i><span class="submenu-title">Third Level</span><span class="fa arrow"></span></a>
		                                    <ul class="nav nav-third-level">
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title">基础信息设置</span></a>  </li>
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title">Third Level Item</span></a> </li>
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title"> Third Level Item</span></a>  </li>
		                                        <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i><span class="submenu-title">Third Level Item</span></a> </li>
		                                    </ul>
		                                </li>
		                            </ul>
		                        </li>
		                         <li><a href="#"><i class="fa fa-send-o fa-fw"><div class="icon-bg bg-green"></div></i><span class="menu-title">模块管理</span><span class="fa arrow"></span></a>
		                            <ul class="nav nav-second-level" >
		                            	<li><a href="#"><i class="fa fa-columns"></i><span class="submenu-title">基本元件</span><span class="fa arrow"></span></a>
		                                    <ul class="nav nav-third-level">
					                                <li><a href="#" class = "controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-columns"></i><span class="submenu-title">进  度  条</span></a>  </li>
					                                <li><a href="#" class = "controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-link"></i><span class="submenu-title">分  隔  符</span></a> </li>
					                                <li><a href="#" class = "controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-left"></i><span class="submenu-title">文本输入</span></a> </li>
					                                <li ><a href="#" class ="controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-align-right"></i><span class="submenu-title">下拉列表</span></a> </li>
					                                <li><a href="#" class = "controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-header"></i><span class="submenu-title">单复选框</span></a> </li>
					                                <li><a href="#" class = "controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-h-square"></i><span class="submenu-title">按钮元件</span></a>  </li>
					                                <li><a href="#" class = "controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-magnet"></i><span class="submenu-title">日期时间</span></a> </li>
					                                <li><a href="#" class = "controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-eye-slash"></i><span class="submenu-title">滑标元件</span></a> </li>
					                                <li><a href="#" class = "controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-paperclip"></i><span class="submenu-title">标签元件</span></a>  </li>
					                                <li><a href="#" class = "controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-align-left"></i><span class="submenu-title">树形列表</span></a> </li>
		                                    </ul>
		                                </li>
										<li><a href="#"><i class="fa fa-columns"></i><span class="submenu-title">组件管理</span><span class="fa arrow"></span></a>
		                                    <ul class="nav nav-third-level">
					                                <li><a href="#" class = "controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-columns"></i><span class="submenu-title">test</span></a>  </li>
		                                    </ul>
		                                </li>
										<li><a href="#"><i class="fa fa-columns"></i><span class="submenu-title">自定组件</span><span class="fa arrow"></span></a>
		                                    <ul class="nav nav-third-level">
					                                <li><a href="#" class = "controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-columns"></i><span class="submenu-title">test</span></a>  </li>
		                                    </ul>
		                                </li>
										<li><a href="#"><i class="fa fa-columns"></i><span class="submenu-title">图形组件</span><span class="fa arrow"></span></a>
		                                    <ul class="nav nav-third-level">
					                                <li><a href="#" class = "controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-columns"></i><span class="submenu-title">test</span></a>  </li>
		                                    </ul>
		                                </li>
										<li><a href="#"><i class="fa fa-columns"></i><span class="submenu-title">表格组件</span><span class="fa arrow"></span></a>
		                                    <ul class="nav nav-third-level">
					                                <li><a href="#" class = "controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-columns"></i><span class="submenu-title">test</span></a>  </li>
		                                    </ul>
		                                </li>
										<li><a href="#"><i class="fa fa-columns"></i><span class="submenu-title">面板元件</span><span class="fa arrow"></span></a>
		                                    <ul class="nav nav-third-level">
					                                <li><a href="#" class = "controlmang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-columns"></i><span class="submenu-title">test</span></a>  </li>
		                                    </ul>
		                                </li>
		                            </ul>
		                        </li>
		                        <li><a href="#"><i class="fa fa-send-o fa-fw"><div class="icon-bg bg-green"></div></i><span class="menu-title">数据管理</span><span class="fa arrow"></span></a>
		                            <ul class="nav nav-second-level" >
		                                <li><a href="ui-buttons.html"><i class="fa fa-hand-o-up"></i><span class="submenu-title">Buttons</span></a>
		                                </li>
		                                <li><a href="ui-tabs.html"><i class="fa fa-trello"></i><span class="submenu-title">Tabs</span></a>
		                                </li>
		                                <li><a href="ui-progressbars.html"><i class="fa fa-ellipsis-h"></i><span class="submenu-title">Progress Bars</span></a>
		                                </li>
		                                <li><a href="ui-typography.html"><i class="fa fa-font"></i><span class="submenu-title">Typography</span></a>
		                                </li>
		                                <li><a href="ui-modals.html"><i class="fa fa-list-alt"></i><span class="submenu-title">Modals</span></a>
		                                </li>
		                                <li><a href="ui-sliders.html"><i class="fa fa-arrows-h"></i><span class="submenu-title">Sliders</span></a>
		                                </li>
		                                <li><a href="ui-icons.html"><i class="fa fa-tint"></i><span class="submenu-title">Icons</span></a>
		                                </li>
		                                <li><a href="ui-checkbox-radio.html"><i class="fa fa-dot-circle-o"></i><span class="submenu-title">Checkbox & Radio</span></a>
		                                </li>
		                                <li><a href="ui-panels.html"><i class="fa fa-th-large"></i><span class="submenu-title">Panels</span></a>
		                                </li>
		                            </ul>
		                        </li>
		                        <hr />
		                        <li><a href="#"><i class="fa fa-rocket fa-fw"><div class="icon-bg bg-green"></div></i><span class="menu-title">组件管理</span><span class="fa arrow"></span></a>
		                            <ul class="nav nav-second-level">
			                                <li><a href="#" class = "controlmang"><i class="fa fa-columns"></i><span class="submenu-title">面板组件</span></a>  </li>
			                                <li><a href="#" class = "controlmang"><i class="fa fa-columns"></i><span class="submenu-title">导航组件</span></a>  </li>
			                                <li><a href="#" class = "controlmang"><i class="fa fa-columns"></i><span class="submenu-title">编辑组件</span></a>  </li>
			                                <li><a href="#" class = "controlmang"><i class="fa fa-columns"></i><span class="submenu-title">列表组件</span></a>  </li>
			                                <li><a href="#" class = "controlmang"><i class="fa fa-columns"></i><span class="submenu-title">表格组件</span></a>  </li>
			                                <li><a href="#" class = "controlmang"><i class="fa fa-columns"></i><span class="submenu-title">标签组件</span></a>  </li>
			                                <li><a href="#" class = "controlmang"><i class="fa fa-columns"></i><span class="submenu-title">图形组件</span></a>  </li>
			                                <li><a href="#" class = "controlmang"><i class="fa fa-columns"></i><span class="submenu-title">自定组件</span></a>  </li>
		                            </ul>
		                        </li>
	                        </ul> 
	                    
	                     </div>
	                     <div id="tab-two-columns" class="tab-pane fade">
                                 <div class="panel" style="margin:5px 5px 5px 5px;;">
                                     <div class="panel-heading" id = 'control-attri'  getcontrol ="">元件：Portlet的属性</div>
                                     <div class="panel-body pan">
                                         <form action="#">
                                             <div class="form-body pal">
                                                 <div class="form-group">
                                                     <label for="inputUsername" class="control-label">Username <span class='require'>*</span>
                                                     </label>
                                                     <div class="input-icon"><i class="fa fa-user"></i>
                                                         <input id="inputUsername" type="text" placeholder="Username" class="form-control" />
                                                     </div>
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="inputEmail" class="control-label">Email <span class='require'>*</span>
                                                     </label>
                                                     <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                         <input type="text" placeholder="Email Address" class="form-control" />
                                                     </div>
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="inputAddress" class="control-label">Address <span class='require'>*</span>
                                                     </label>
                                                     <div class="input-icon right"><i class="fa fa-location-arrow"></i>
                                                         <input type="text" placeholder="Address" class="form-control" />
                                                     </div>
                                                 </div>
                                                 <div class="form-group mbn">
                                                     <label for="inputContent" class="control-label">Content</label>
                                                     <textarea id="inputContent" rows="3" class="form-control"></textarea>
                                                 </div>
                                             </div>
                                             <div class="form-actions text-right pll prl">
                                                 <button type="submit" class="btn btn-primary">Send</button>&nbsp;
                                                 <button type="button" class="btn btn-green">Cancel</button>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
	                      </div>
                     </div>
                </div>
            </nav>
            <!--END SIDEBAR MENU-->