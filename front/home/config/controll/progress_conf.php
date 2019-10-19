<?php
namespace yethrong\config
{
    return array(
        array('controlid' => 1, 'type' => 'subcontrol','subname' => 'div','fixed' => 1 ,
            'controltype'               => array('controlid' => 10, 'type' => 'text', 'fixed' => 1 , 'value' => 'combox'),/*多选*/
            'sourcetable'               => array('controlid' => 17, 'caption' => '数据来源' , 'type' => 'tablelist', 'fixed' => 1 , 'value' => '0' , 'sqltext' => 'SELECT {fields} FROM {table} {where} {groupby}'),/*多选*/
            array('controlid' => 16, 'type' => 'subcontrol' ,'subname' => 'class','fixed' => 1 ,
                'formgroup ' => array('controlid' => 161, 'caption' => '元件样式' , 'type' => 'cusetlist', 'fixed' => 1 , 'value' => 'form-group'),
            ),
        ),
        array('controlid' => 18, 'type' => 'subcontrol','subname' => 'label','subtitle' => '标题样式' ,'fixed' => 2 ,
            array('controlid' => 181, 'type' => 'subcontrol' ,'subname' => 'class',
                'caption'               => array('controlid' => 1811, 'type' => 'text',  'fixed' => 1 , 'value' => 'caption'),/*标题样式：control-label*/
                'labelclasslist'     => array('controlid' => 1812, 'caption' => '标题样式' , 'type' => 'cusetlist',  'fixed' => 1 , 'value' => 'control-label'),/*标题样式：control-label*/
                'labelcolorlist'     => array('controlid' => 1813, 'caption' => '标题颜色' , 'type' => 'textlcolorlist', 'fixed' => 0 , 'value' => '0'),/*色彩样式*/
                //'colmdlist'            => array('controlid' => 1813, 'caption' => '标题宽度' , 'type' => 'colmdlist', 'fixed' => 0 , 'value' => 'col-md-3'),/*标题宽度*/
            ),
        ),
        array('controlid' => 19, 'caption' => '标题名称' ,  'type' => 'text', 'fixed' => 3 , 'value' => '标题...'),/*标题名称*/
        array('end' => 'label', 'type' => 'subcontrol'),
        
        array('controlid' => 20, 'type' => 'subcontrol','subname' => 'div','subtitle' => '导航图标' , 'fixed' => 0 , 'groupstart' => true,
            array('controlid' => 201, 'type' => 'subcontrol' ,'subname' => 'class',
                'group ' => array( 'controlid' => 2011, 'type' => 'cusetlist', 'fixed' => 1 , 'value' => 'input-group'),
            ),
        ),
        array('controlid' => 202, 'type' => 'subcontrol','subname' => 'div','fixed' => 1 ,
            array('controlid' => 2021, 'type' => 'subcontrol' ,'subname' => 'class',
                'addon ' => array( 'controlid' => 20211, 'type' => 'cusetlist', 'fixed' => 1 , 'value' => 'input-group-addon'),
            ),
        ),
        array('controlid' => 203, 'type' => 'subcontrol','subname' => 'i','fixed' => 1 ,
            array('controlid' => 2031, 'type' => 'subcontrol' , 'subname' => 'class','format' => 'class = "fa {fas}"',
                'fas' => array('controlid' => 20311 ,'caption' => '图标样式' , 'type' => 'icon', 'fixed' => 1 , 'value' => 'fa-flag'),
            ),
        ),
        array('end' => 'i', 'type' => 'subcontrol'),
        array('end' => 'div', 'type' => 'subcontrol'),
        array('groupend' => 'div' , 'type' => 'subcontrol'),
        array('controlid' => 304, 'type' => 'subcontrol','subname' => 'select','subtitle' => '元件属性' ,'fixed' => 2 ,
            'name'                                           => array('controlid' => 3041, 'type' => 'name', 'fixed' => 1 , 'value' => 'column'),/*多选*/
            'targetfieldstype'                       => array('controlid' => 3042, 'caption' => '字段类型', 'type' => 'fieldetypelist',  'fixed' => 1 , 'value' => '0'),/*多选*/
            'targetfieldsnull'                         => array('controlid' => 3043, 'caption' => '是否必填' ,'type' => 'bool', 'fixed' => 1 , 'value' => '0'),/*多选*/
            'targetfieldsindex'                      => array('controlid' => 3044, 'caption' => '主键索引' , 'type' => 'bool', 'fixed' => 1 , 'value' => '0'),/*多选*/
            'targetfieldsleng'                        => array('controlid' => 3045, 'caption' => '字段长度' , 'type' => 'numb', 'fixed' => 1 , 'value' => '50'),/*多选*/
            'multiple'                                       => array('controlid' => 3046, 'caption' => '是否多选' ,  'type' => 'cusetlist', 'fixed' => 0 , 'value' => 'multiple'),/*多选*/
            'disabled'                                       => array('controlid' => 3047, 'caption' => '是否禁用' , 'type' => 'cusetlist', 'fixed' => 0 , 'value' => 'disabled'),/*禁用**/
            'data-title'                                     => array('controlid' => 3048, 'caption' => '提示信息' ,  'type' => 'text', 'fixed' => 0 , 'value' => '提示信息'),/*提示信息*/
            'data-size'                                     => array('controlid' => 3049, 'caption' => '显示行数' , 'type' => 'numb', 'fixed' => 0 , 'value' => '10'),/*列表显示行数*/
            'data-width'                                  => array('controlid' => 30410, 'caption' => '元件宽度' , 'type' => 'numb', 'fixed' => 0 , 'value' => '100%'),/*指定宽度**/
            'data-style'                                    => array('controlid' => 30411, 'caption' => '元件色彩' , 'type' => 'btncolorlist', 'fixed' => 0 , 'value' => '0'),/*色彩样式*/
            'data-show-subtext'                   => array('controlid' => 30412, 'caption' => '显示小标题' , 'type' => 'cusetlist', 'fixed' => 0 , 'value' => 'true'),/*显示列表小标题*/
            'data-live-search'                        => array('controlid' => 30413, 'caption' => '搜索显示' ,   'type' => 'cusetlist', 'fixed' => 0 , 'value' => 'true'),/*搜索输入*/
            'data-selected-text-format'     => array('controlid' => 30414, 'caption' => '多选统计' ,  'type' => 'cusetlist', 'fixed' => 0 , 'value' => 'count'),/*多选:COUNT统计:count */
            array('controlid' => 30415, 'type' => 'subcontrol' ,'subname' => 'class','subtitle' => '样式选项' ,'fixed' => 1 ,
                'selectlist'                    => array('controlid' => 304151, 'caption' => '元件样式' , 'type' => 'selectlist',  'fixed' => 1 , 'value' => 'selectpicker'),/*主体样式1与样式2：selectpicker | select2-multi-value*/
                'formcontrol'               => array('controlid' => 304152, 'caption' => '面板样式' , 'type' => 'cusetlist','fixed' => 1 , 'value' => 'form-control'), /* 面板样式：必需 ： form-control */
                'showtick'                    => array('controlid' => 304153, 'caption' => '内容钩选' , 'type' => 'cusetlist', 'fixed' => 0 , 'value' => 'show-tick'),/*钩选列表*/
                'showarrow'                => array('controlid' => 304154, 'caption' => '指示箭头' , 'type' => 'cusetlist', 'fixed' => 0 , 'value' => 'show-menu-arrow'),/* 下拉列表带指示箭头 */
            ),
        ),
        array('controlid' => 305,  'type' => 'subcontrol','subname' => 'optgroup','subtitle' => '分组选项' , 'fixed' => 0 , 'groupstart' => true,'datalist' => true, 'checkidentical' => true,
            'label'                              => array('controlid' => 3051, 'caption' => '分组标题' , 'type' => 'fieldelist',  'fixed' => 1 , 'value' => '0'),
        ),
        array('controlid' => 3052, 'groupend' => 'optgroup' , 'type' => 'subcontrol'),
        array('controlid' => 307, 'type' => 'subcontrol','subname' => 'option','subtitle' => '列表选项' , 'fixed' => 2 ,'datalist' => true,
            'data-value'                  => array('controlid' => 3071, 'caption' => '数据字段' , 'type' => 'fieldelist', 'fixed' => 1 , 'value' => '0'),/*主体样式1与样式2*/
            'data-icon'                     => array('controlid' => 3072, 'caption' => '图标字段' , 'type' => 'icon', 'fixed' => 0 , 'value' => ''), /* 面板样式：必需  */
            'data-subtext'              => array('controlid' => 3073, 'caption' => '小 标 题' , 'type' => 'fieldelist' , 'fixed' => 0 , 'value' => '0'),/* 下拉列表带指示箭头 */
            //array('controlid' => 3074, 'type' => 'subcontrol', 'subname' => 'class', 'fixed' => 0 , 'format' => 'data-content="Mustard <span class=\'label lable-sm label-success\'>{fieldsnumb}</span>"',
            //'fieldsnumb'         => array('controlid' => 30741, 'caption' => '提示标题' , 'type' => 'fieldelist' , 'fixed' => 1 , 'value' => 0),/* 下拉列表带指示箭头 */
            //'labelsuccess'      => array('controlid' => 30742, 'caption' => '提示背景' ,'type' => 'labelcolorlist' , 'fixed' => 1 , 'value' => 'label-success'),/* 下拉列表带指示箭头 */
        // ),
        ),
        array('controlid' => 308, 'caption' => '标题名称' ,  'type' => 'fieldelist', 'fixed' => 3 , 'value' => '无'),/*标题名称*/
        array('end' => 'option', 'type' => 'subcontrol'),
        array('end' => 'optgroup', 'type' => 'subcontrol'),
        array('end' => 'select', 'type' => 'subcontrol'),
        array('end' => 'div', 'type' => 'subcontrol'),
        array('end' => 'div', 'type' => 'subcontrol'),
        );
}