<?php
/* Smarty version 3.1.33, created on 2019-09-25 02:39:56
  from '/usr/WebSites/front/home/template/index/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8ab75c7029b5_52959741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3098469532a04fa39cd4de158e0916e7fa25578' => 
    array (
      0 => '/usr/WebSites/front/home/template/index/content.tpl',
      1 => 1568700245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tplmode/meta.tpl' => 1,
  ),
),false)) {
function content_5d8ab75c7029b5_52959741 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- start: Content -->
		
        <div id="wrapper">
			<?php $_smarty_tpl->_subTemplateRender('file:tplmode/meta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">Portlets</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['URLS_PATH']->value;?>
">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><a href="#">UI</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Portlets</li>
                    </ol>
                    <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i class="fa fa-angle-down"></i>
                        <input type="hidden" name="datestart" />
                        <input type="hidden" name="endstart" />
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="portlet box portlet-pink">
                                <div class="portlet-header">
                                    <div class="caption">Default</div>
                                    <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt nulla elit, at sollicitudin ipsum mattis quis. Vivamus vitae diam at libero fringilla condimentum. Vestibulum laoreet nulla ut neque eleifend, ut hendrerit felis mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam congue, risus ac tincidunt ultrices, nunc enim consectetur purus, vitae faucibus dolor turpis ut justo. Duis id feugiat sem, ac commodo nisi. Curabitur tincidunt volutpat nisi id ullamcorper.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt nulla elit, at sollicitudin ipsum mattis quis. Vivamus vitae diam at libero fringilla condimentum. Vestibulum laoreet nulla ut neque eleifend, ut hendrerit felis mollis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="portlet box color portlet-primary">
                                <div class="portlet-header">
                                    <div class="caption">Colors</div>
                                    <div class="actions"><a href="#" class="btn btn-white btn-sm"><i class="fa fa-edit"></i>&nbsp;Edit</a>&nbsp;
                                        <div class="btn-group">
                                            <button type="button" data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle"><i class="fa fa-user"></i>&nbsp; User &nbsp;
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-refresh"></i>&nbsp;Update</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <p>Pellentesque augue dui, tempus nec consequat bibendum, facilisis non nulla. Aliquam ac mollis libero, vel mattis ligula. Aenean viverra metus ligula, ut rhoncus tortor vulputate vitae. Quisque rhoncus tempus dignissim. Curabitur nisl augue, gravida in dignissim sed, imperdiet vitae nibh.</p>
                                    <p>Aliquam ac mollis libero, vel mattis ligula. Pellentesque augue dui, tempus nec consequat bibendum, facilisis non nulla. Aliquam ac mollis libero, vel mattis ligula. Aenean viverra metus ligula Pellentesque augue dui, tempus nec consequat bibendum, facilisis non nulla. Aliquam ac mollis libero, vel mattis ligula. Aenean viverra metus ligula, ut rhoncus tortor vulputate vitae. Quisque rhoncus tempus dignissim. Curabitur nisl augue, gravida in dignissim sed, imperdiet vitae nibh.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="portlet box portlet-yellow">
                                <div class="portlet-header">
                                    <div class="caption">Scroll</div>
                                    <div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div style="overflow: hidden;" class="portlet-body">
                                    <div class="portlet-scroll">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt nulla elit, at sollicitudin ipsum mattis quis. Vivamus vitae diam at libero fringilla condimentum. Vestibulum laoreet nulla ut neque eleifend, ut hendrerit felis mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam congue, risus ac tincidunt ultrices, nunc enim consectetur purus, vitae faucibus dolor turpis ut justo. Duis id feugiat sem, ac commodo nisi. Curabitur tincidunt volutpat nisi id ullamcorper.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt nulla elit, at sollicitudin ipsum mattis quis. Vivamus vitae diam at libero fringilla condimentum. Vestibulum laoreet nulla ut neque eleifend, ut hendrerit felis mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam congue, risus ac tincidunt ultrices, nunc enim consectetur purus, vitae faucibus dolor turpis ut justo. Duis id feugiat sem, ac commodo nisi. Curabitur tincidunt volutpat nisi id ullamcorper.</p>
                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam congue, risus ac tincidunt ultrices, nunc enim consectetur purus, vitae faucibus dolor turpis ut justo. Duis id feugiat sem, ac commodo nisi. Curabitur tincidunt volutpat nisi id ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="portlet box portlet-blue tabbable">
                                <div class="portlet-header">
                                    <div class="caption">Tabs</div>
                                </div>
                                <div class="portlet-body">
                                    <div class="tabbable portlet-tabs">
                                        <ul class="nav nav-tabs">
                                            <li><a href="#portlet-tab3" data-toggle="tab">Tab 3</a>
                                            </li>
                                            <li><a href="#portlet-tab2" data-toggle="tab">Tab 2</a>
                                            </li>
                                            <li class="active"><a href="#portlet-tab1" data-toggle="tab">Tab 1</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="portlet-tab1" class="tab-pane fade in active">
                                                <p>Maecenas nec justo non neque vulputate gravida id ac risus. Aliquam dictum est non mattis condimentum. Sed tincidunt laoreet elit eu cursus. Etiam venenatis libero aliquet magna rhoncus blandit. Mauris sed sapien vitae magna imperdiet rutrum et eget quam.</p>
                                                <p>Maecenas nec justo non neque vulputate gravida id ac risus. Aliquam dictum est non mattis condimentum. Sed tincidunt laoreet elit eu cursus. Etiam venenatis libero aliquet magna rhoncus blandit. Mauris sed sapien vitae magna imperdiet rutrum et eget quam.</p>
                                            </div>
                                            <div id="portlet-tab2" class="tab-pane fade">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.</p>
                                                <p>Maecenas nec justo non neque vulputate gravida id ac risus. Aliquam dictum est non mattis condimentum. Sed tincidunt laoreet elit eu cursus. Etiam venenatis libero aliquet magna rhoncus blandit. Mauris sed sapien vitae magna imperdiet rutrum et eget quam.</p>
                                            </div>
                                            <div id="portlet-tab3" class="tab-pane fade">
                                                <p>Ut wisi enim ad btn-smm veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                                <p>Maecenas nec justo non neque vulputate gravida id ac risus. Aliquam dictum est non mattis condimentum. Sed tincidunt laoreet elit eu cursus. Etiam venenatis libero aliquet magna rhoncus blandit. Mauris sed sapien vitae magna imperdiet rutrum et eget quam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="portlet box portlet-violet">
                                <div class="portlet-header">
                                    <div class="caption">Paginations</div>
                                    <ul class="pagination pagination-sm">
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <li><a href="#">1</a>
                                        </li>
                                        <li><a href="#">2</a>
                                        </li>
                                        <li><a href="#">3</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <p>Pellentesque augue dui, tempus nec consequat bibendum, facilisis non nulla. Aliquam ac mollis libero, vel mattis ligula. Aenean viverra metus ligula, ut rhoncus tortor vulputate vitae. Quisque rhoncus tempus dignissim. Curabitur nisl augue, gravida in dignissim sed, imperdiet vitae nibh.Maecenas nec justo non neque vulputate gravida id ac risus. Aliquam dictum est non mattis condimentum. Sed tincidunt laoreet elit eu cursus. Etiam venenatis libero aliquet magna rhoncus blandit. Mauris sed sapien vitae magna imperdiet rutrum et eget quam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 sortable column">
                            <div class="portlet box portlet-orange">
                                <div class="portlet-header">
                                    <div class="caption">Portlet</div>
                                    <div class="actions"><a href="#" class="btn btn-sm btn-white"><i class="fa fa-edit"></i>&nbsp;Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-white"><i class="fa fa-user"></i>&nbsp;User</a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <p>Pellentesque augue dui, tempus nec consequat bibendum, facilisis non nulla. Aliquam ac mollis libero, vel mattis ligula. Aenean viverra metus ligula, ut rhoncus tortor vulputate vitae. Quisque rhoncus tempus dignissim. Curabitur nisl augue, gravida in dignissim sed, imperdiet vitae nibh.</p>
                                </div>
                            </div>
                            <div class="portlet box portlet-green">
                                <div class="portlet-header">
                                    <div class="caption">Portlet</div>
                                    <div class="actions"><a href="#" class="btn btn-sm btn-white"><i class="fa fa-edit"></i>&nbsp;Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-white"><i class="fa fa-user"></i>&nbsp;User</a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <p>Pellentesque augue dui, tempus nec consequat bibendum, facilisis non nulla. Aliquam ac mollis libero, vel mattis ligula. Aenean viverra metus ligula, ut rhoncus tortor vulputate vitae. Quisque rhoncus tempus dignissim. Curabitur nisl augue, gravida in dignissim sed, imperdiet vitae nibh.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 sortable column">
                            <div class="portlet box portlet-yellow">
                                <div class="portlet-header">
                                    <div class="caption">Portlet</div>
                                    <div class="actions"><a href="#" class="btn btn-sm btn-white"><i class="fa fa-edit"></i>&nbsp;Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-white"><i class="fa fa-user"></i>&nbsp;User</a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <p>Pellentesque augue dui, tempus nec consequat bibendum, facilisis non nulla. Aliquam ac mollis libero, vel mattis ligula. Aenean viverra metus ligula, ut rhoncus tortor vulputate vitae. Quisque rhoncus tempus dignissim. Curabitur nisl augue, gravida in dignissim sed, imperdiet vitae nibh.</p>
                                </div>
                            </div>
                            <div class="portlet box portlet-blue">
                                <div class="portlet-header">
                                    <div class="caption">Portlet</div>
                                    <div class="actions"><a href="#" class="btn btn-sm btn-white"><i class="fa fa-edit"></i>&nbsp;Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-white"><i class="fa fa-user"></i>&nbsp;User</a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <p>Pellentesque augue dui, tempus nec consequat bibendum, facilisis non nulla. Aliquam ac mollis libero, vel mattis ligula. Aenean viverra metus ligula, ut rhoncus tortor vulputate vitae. Quisque rhoncus tempus dignissim. Curabitur nisl augue, gravida in dignissim sed, imperdiet vitae nibh.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 sortable column">
                            <div class="portlet box portlet-pink">
                                <div class="portlet-header">
                                    <div class="caption">Portlet</div>
                                    <div class="actions"><a href="#" class="btn btn-sm btn-white"><i class="fa fa-edit"></i>&nbsp;Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-white"><i class="fa fa-user"></i>&nbsp;User</a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <p>Pellentesque augue dui, tempus nec consequat bibendum, facilisis non nulla. Aliquam ac mollis libero, vel mattis ligula. Aenean viverra metus ligula, ut rhoncus tortor vulputate vitae. Quisque rhoncus tempus dignissim. Curabitur nisl augue, gravida in dignissim sed, imperdiet vitae nibh.</p>
                                </div>
                            </div>
                            <div class="portlet box portlet-violet">
                                <div class="portlet-header">
                                    <div class="caption">Portlet</div>
                                    <div class="actions"><a href="#" class="btn btn-sm btn-white"><i class="fa fa-edit"></i>&nbsp;Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-white"><i class="fa fa-user"></i>&nbsp;User</a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <p>Pellentesque augue dui, tempus nec consequat bibendum, facilisis non nulla. Aliquam ac mollis libero, vel mattis ligula. Aenean viverra metus ligula, ut rhoncus tortor vulputate vitae. Quisque rhoncus tempus dignissim. Curabitur nisl augue, gravida in dignissim sed, imperdiet vitae nibh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    
<!-- end: Content --><?php }
}
