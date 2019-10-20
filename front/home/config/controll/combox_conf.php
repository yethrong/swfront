<?php
namespace yethrong\config
{
    return array(
        array('controlid' => 1, 'controltype' => 'subcontrol','subname' => 'div','fixed' => 1 ,
            'controlvale' => array('controlid' => 10, 'controltype' => 'text', 'fixed' => 1 , 'value' => 'combox'),/*多选*/
            array('controlid' => 16, 'controltype' => 'subcontrol' ,'subname' => 'class','fixed' => 1 , 
                'formgroup ' => array('controlid' => 161, 'controltype' => 'cusetlist', 'fixed' => 1 , 'value' => 'form-group'),
                'formcursor' => array('controlid' => 162, 'controltype' => 'cusetlist', 'fixed' => 1 , 'value' => 'form-cursor'),
            ),
        ),
            array('controlid' => 18, 'controltype' => 'subcontrol','subname' => 'label','subtitle' => '标题样式' ,'fixed' => 2 ,  'groupstart' => true,
                        array('controlid' => 181, 'controltype' => 'subcontrol' ,'subname' => 'class',
                            'caption'            => array('controlid' => 1811, 'controltype' => 'text',  'fixed' => 1 , 'value' => 'caption'),/*标题样式：control-label*/
                            'labelclasslist'     => array('controlid' => 1812, 'controltype' => 'cusetlist',  'fixed' => 1 , 'value' => 'control-label'),/*标题样式：control-label*/
                            'labelcolorlist'     => array('controlid' => 1813, 'caption' => '标题颜色' , 'controltype' => 'textlcolorlist', 'fixed' => 0 , 'value' => '0'),/*色彩样式*/
                            //'colmdlist'            => array('controlid' => 1813, 'caption' => '标题宽度' , 'controltype' => 'colmdlist', 'fixed' => 0 , 'value' => 'col-md-3'),/*标题宽度*/
                        ),
            ),
            array('controlid' => 182, 'caption' => '标题名称' ,  'controltype' => 'text', 'fixed' => 3 , 'value' => '标题...'),/*标题名称*/
            array('controlid' => 183, 'controltype' => 'subcontrol','subname' => 'span','fixed' => 1,
                array('controlid' => 1831, 'controltype' => 'subcontrol' ,'subname' => 'class',
                    'require'           => array('controlid' => 18311, 'controltype' => 'text',  'fixed' => 1 , 'value' => 'require'),
                ),
            ),
            array('controlid' => 184, 'caption' => '强调符号' , 'controltype' => 'empt', 'fixed' => 3 , 'value' => ' '),
            array('end' => 'span', 'controltype' => 'subcontrol'),
            array('groupend' => 'label', 'controltype' => 'subcontrol'),
            array('end' => 'label', 'controltype' => 'subcontrol'),

            array('controlid' => 20, 'controltype' => 'subcontrol','subname' => 'div','subtitle' => '导航图标' , 'fixed' => 0 , 'groupstart' => true,
                    array('controlid' => 201, 'controltype' => 'subcontrol' ,'subname' => 'class',
                        'group ' => array( 'controlid' => 2011, 'controltype' => 'cusetlist', 'fixed' => 1 , 'value' => 'input-group'),
                    ),  
                ),
                    array('controlid' => 202, 'controltype' => 'subcontrol','subname' => 'div','fixed' => 1 , 
                        array('controlid' => 2021, 'controltype' => 'subcontrol' ,'subname' => 'class',
                            'addon ' => array( 'controlid' => 20211, 'controltype' => 'cusetlist', 'fixed' => 1 , 'value' => 'input-group-addon'),
                            ),
                        ),
                        array('controlid' => 203, 'controltype' => 'subcontrol','subname' => 'i','fixed' => 1 , 
                            array('controlid' => 2031, 'controltype' => 'subcontrol' , 'subname' => 'class','format' => 'class = "fa {fas}"',
                                'fas' => array('controlid' => 20311 ,'caption' => '图标样式' , 'controltype' => 'icon', 'fixed' => 1 , 'value' => 'fa-flag'),
                                    ),
                        ),
                        array('end' => 'i', 'controltype' => 'subcontrol'),
                    array('end' => 'div', 'controltype' => 'subcontrol'),
            array('groupend' => 'div' , 'controltype' => 'subcontrol'),
                    array('controlid' => 304, 'controltype' => 'subcontrol','subname' => 'select','subtitle' => '元件属性' ,'fixed' => 2 ,
                            //'name'                      => array('controlid' => 3041, 'caption' => '名称属性' , 'controltype' => 'name', 'fixed' => 1 , 'value' => 'column'),/*多选*/
                            'targetfieldstype'          => array('controlid' => 3042, 'caption' => '字段类型', 'controltype' => 'fieldetypelist',  'fixed' => 1 , 'value' => '0'),/*多选*/
                            'targetfieldsnull'          => array('controlid' => 3043, 'caption' => '是否必填' ,'controltype' => 'bool', 'fixed' => 1 , 'value' => '0'),/*多选*/
                            'targetfieldsindex'         => array('controlid' => 3044, 'caption' => '主键索引' , 'controltype' => 'bool', 'fixed' => 1 , 'value' => '0'),/*多选*/
                            //'targetfieldsleng'        => array('controlid' => 3045, 'caption' => '字段长度' , 'controltype' => 'numb', 'fixed' => 1 , 'value' => '50'),/*多选*/
                            'multiple'                  => array('controlid' => 3046, 'caption' => '是否多选' ,  'controltype' => 'cusetlist', 'fixed' => 0 , 'value' => 'multiple'),/*多选*/
                            'disabled'                  => array('controlid' => 3047, 'caption' => '是否禁用' , 'controltype' => 'cusetlist', 'fixed' => 0 , 'value' => 'disabled'),/*禁用**/
                            'data-title'                => array('controlid' => 3048, 'caption' => '弹出信息' ,  'controltype' => 'text', 'fixed' => 0 , 'value' => '弹出文字'),/*提示信息*/
                            'data-size'                 => array('controlid' => 3049, 'caption' => '显示行数' , 'controltype' => 'numb', 'fixed' => 0 , 'value' => '10'),/*列表显示行数*/
                            'data-width'                => array('controlid' => 30410, 'caption' => '元件宽度' , 'controltype' => 'numb', 'fixed' => 0 , 'value' => '100%'),/*指定宽度**/
                            'data-style'                => array('controlid' => 30411, 'caption' => '元件色彩' , 'controltype' => 'btncolorlist', 'fixed' => 1 , 'value' => 'btn-white'),/*色彩样式*/
                            'data-show-subtext'         => array('controlid' => 30412, 'caption' => '显示小标题' , 'controltype' => 'cusetlist', 'fixed' => 0 , 'value' => 'true'),/*显示列表小标题*/
                            'data-live-search'          => array('controlid' => 30413, 'caption' => '搜索显示' ,   'controltype' => 'cusetlist', 'fixed' => 0 , 'value' => 'true'),/*搜索输入*/
                            'data-selected-text-format' => array('controlid' => 30414, 'caption' => '多选统计' ,  'controltype' => 'cusetlist', 'fixed' => 0 , 'value' => 'count'),/*多选:COUNT统计:count */
                            //'placeholder'               => array('controlid' => 30415, 'caption' => '提示信息' , 'controltype' => 'numb', 'fixed' => 0 , 'value' => '提示文字'),/*列表显示行数*/
                            'sourcetable'               => array('controlid' => 30416, 'caption' => '数据来源' , 'controltype' => 'tablelist', 'fixed' => 1 , 'value' => '0' , 'sqltext' => 'SELECT {fields} FROM {table} {where} {groupby}'),/*多选*/
                            array('controlid' => 30420, 'controltype' => 'subcontrol' ,'subname' => 'class','subtitle' => '样式选项' ,'fixed' => 2 , 
                                'selectlist'            => array('controlid' => 304201, 'controltype' => 'selectlist', 'fixed' => 1 , 'value' => 'selectpicker'),/*主体样式1与样式2：selectpicker | select2-multi-value*/
                                'formcontrol'           => array('controlid' => 304202, 'controltype' => 'cusetlist',  'fixed' => 1 , 'value' => 'form-control'), /* 面板样式：必需 ： form-control */
                                'showtick'              => array('controlid' => 304203, 'caption' => '内容钩选' , 'controltype' => 'cusetlist',  'fixed' => 0 , 'value' => 'show-tick'),/*钩选列表*/
                                'showarrow'             => array('controlid' => 304204, 'caption' => '指示箭头' , 'controltype' => 'cusetlist',  'fixed' => 0 , 'value' => 'show-menu-arrow'),/* 下拉列表带指示箭头 */
                            ),
                        ),
                        array('controlid' => 305,  'controltype' => 'subcontrol','subname' => 'optgroup','subtitle' => '分组选项' , 'fixed' => 0 , 'groupstart' => true,'datalist' => true, 'checkidentical' => true,
                                'label'                 => array('controlid' => 3051, 'caption' => '分组标题' , 'controltype' => 'fieldelist',  'fixed' => 1 , 'value' => '0'),
                        ),
                        array('controlid' => 3052, 'groupend' => 'optgroup' , 'controltype' => 'subcontrol'),
                        array('controlid' => 307, 'controltype' => 'subcontrol','subname' => 'option','subtitle' => '列表选项' , 'fixed' => 2 ,'datalist' => true, 
                                'data-value'            => array('controlid' => 3071, 'caption' => '数据字段' , 'controltype' => 'fieldelist', 'fixed' => 1 , 'value' => '0'),/*主体样式1与样式2*/
                                'data-icon'             => array('controlid' => 3072, 'caption' => '图标字段' , 'controltype' => 'icon', 'fixed' => 0 , 'value' => ' '), /* 面板样式：必需  */
                                'data-subtext'          => array('controlid' => 3073, 'caption' => '小 标 题' , 'controltype' => 'fieldelist' , 'fixed' => 0 , 'value' => '0'),/* 下拉列表带指示箭头 */
                                //array('controlid' => 3074, 'controltype' => 'subcontrol', 'subname' => 'class', 'fixed' => 0 , 'format' => 'data-content="Mustard <span class=\'label lable-sm label-success\'>{fieldsnumb}</span>"',
                                        //'fieldsnumb'         => array('controlid' => 30741, 'caption' => '提示标题' , 'controltype' => 'fieldelist' , 'fixed' => 1 , 'value' => 0),/* 下拉列表带指示箭头 */
                                        //'labelsuccess'      => array('controlid' => 30742, 'caption' => '提示背景' ,'controltype' => 'labelcolorlist' , 'fixed' => 1 , 'value' => 'label-success'),/* 下拉列表带指示箭头 */
                                // ),
                                     ),
                                    array('controlid' => 308, 'caption' => '标题名称' ,  'controltype' => 'fieldelist', 'fixed' => 3 , 'value' => '无'),/*标题名称*/
                                    array('end' => 'option', 'controltype' => 'subcontrol'),
                                array('end' => 'optgroup', 'controltype' => 'subcontrol'),
                        array('end' => 'select', 'controltype' => 'subcontrol'),
                array('end' => 'div', 'controltype' => 'subcontrol'),
        array('end' => 'div', 'controltype' => 'subcontrol'),
    );
}