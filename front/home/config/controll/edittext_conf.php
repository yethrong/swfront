<?php
namespace yethrong\config
{
    return array(
        array('controlid' => 1, 'controltype' => 'subcontrol','subname' => 'div','fixed' => 1 ,
            'controlvale' => array('controlid' => 10, 'controltype' => 'text', 'fixed' => 1 , 'value' => 'edittext'),/*多选*/
            array('controlid' => 16, 'controltype' => 'subcontrol' ,'subname' => 'class',
                'formgroup' => array('controlid' => 162, 'controltype' => 'cusetlist', 'fixed' => 1 , 'value' => 'form-group'),
                'formcursor' => array('controlid' => 163, 'controltype' => 'cusetlist', 'fixed' => 1 , 'value' => 'form-cursor'),
                'hascolors' => array('controlid' => 164, 'caption' => '边框类型' , 'controltype' => 'hascolors', 'fixed' => 0 , 'value' => '0'),/*边框色彩样式*/
            ),
        ),
            array('controlid' => 18, 'controltype' => 'subcontrol','subname' => 'label','subtitle' => '标题样式' ,'fixed' => 2 ,  'groupstart' => true,
                array('controlid' => 181, 'controltype' => 'subcontrol' ,'subname' => 'class',
                    'caption'           => array('controlid' => 1811, 'controltype' => 'text',  'fixed' => 1 , 'value' => 'caption'),/*标题样式：control-label*/
                    'labelclasslist'    => array('controlid' => 1812, 'controltype' => 'cusetlist',  'fixed' => 1 , 'value' => 'control-label'),/*标题样式：control-label*/
                    'textlcolorlist'    => array('controlid' => 1813, 'caption' => '标题颜色' , 'controltype' => 'textlcolorlist', 'fixed' => 0 , 'value' => '0'),/*色彩样式*/
                ),
            ),
            array('controlid' => 182, 'caption' => '标题名称' , 'controltype' => 'text', 'fixed' => 3 , 'value' => '标题...'),/*标题名称*/

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
                    'group ' => array( 'controlid' => 2011, 'controltype' => 'cusetlist', 'fixed' => 1 , 'value' => 'input-icon'),
                ),
            ),

            array('controlid' => 203, 'controltype' => 'subcontrol','subname' => 'i','fixed' => 1 ,
                array('controlid' => 2031, 'controltype' => 'subcontrol' , 'subname' => 'class','format' => 'class = "fa {fas}"',
                    'fas' => array('controlid' => 20311 ,'caption' => '图标样式' , 'controltype' => 'icon', 'fixed' => 1 , 'value' => 'fa-flag'),
                ),
            ),
            array('end' => 'i', 'controltype' => 'subcontrol'),

            array('groupend' => 'div' , 'controltype' => 'subcontrol'),
                array('controlid' => 304, 'controltype' => 'subcontrol','subname' => 'input','subtitle' => '元件属性' ,'fixed' => 2 ,
                    //'name'                  => array('controlid' => 3041,  'caption' => '名称属性' , 'controltype' => 'name', 'fixed' => 1 , 'value' => 'edittext'),/*多选*/
                    'type'                  => array('controlid' => 3042,  'caption' => '输入类型' , 'controltype' => 'edittypelist', 'fixed' => 0 , 'value' => 'text'),/*多选*/
                    //'title'                 => array('controlid' => 3044,  'caption' => '弹出信息' , 'controltype' => 'text', 'fixed' => 0 , 'value' => ' '),/*提示信息*/
                    'disabled'              => array('controlid' => 3043,  'caption' => '是否禁用' , 'controltype' => 'cusetlist', 'fixed' => 0 , 'value' => 'disabled'),/*禁用**/
                    //'sourcetable'           => array('controlid' => 3048,  'caption' => '数据来源' , 'controltype' => 'tablelist', 'fixed' => 1 , 'value' => '0' , 'sqltext' => 'SELECT {fields} FROM {table} {where} {groupby}'),/*多选*/
                    'targetfieldstype'      => array('controlid' => 3049,  'caption' => '字段类型' , 'controltype' => 'fieldetypelist',  'fixed' => 1 , 'value' => '0'),/*多选*/
                    'targetfieldsnull'      => array('controlid' => 30410, 'caption' => '是否必填' , 'controltype' => 'bool', 'fixed' => 1 , 'value' => '0'),/*多选*/
                    'targetfieldsindex'     => array('controlid' => 30411, 'caption' => '主键索引' , 'controltype' => 'bool', 'fixed' => 1 , 'value' => '0'),/*多选*/
                    //'targetfieldsleng'      => array('controlid' => 30412, 'caption' => '字段长度' , 'controltype' => 'numb', 'fixed' => 1 , 'value' => '50'),/*多选*/
                    'equalTo'               => array('controlid' => 30413, 'caption' => '重复密码' , 'controltype' => 'cusetlist', 'fixed' => 0 , 'value' => '#password'),/*禁用**/
                    'minlength'             => array('controlid' => 30414, 'caption' => '最小长度' , 'controltype' => 'numb', 'fixed' => 0 , 'value' => '0'),/*提示信息*/
                    'maxlength'             => array('controlid' => 30415, 'caption' => '最大长度' , 'controltype' => 'numb', 'fixed' => 0 , 'value' => '0'),/*列表显示行数*/
                    'placeholder'           => array('controlid' => 30416, 'caption' => '提示信息' , 'controltype' => 'text', 'fixed' => 1 , 'value' => '提示文字'),/*列表显示行数*/
                    array('controlid' => 30417, 'controltype' => 'subcontrol' ,'subname' => 'class','subtitle' => '样式选项' ,'fixed' => 2 ,
                        'formcontrol'       => array('controlid' => 304171, 'controltype' => 'cusetlist','fixed' => 1 , 'value' => 'form-control'), /* 面板样式：必需 ： form-control */
                        'required'          => array('controlid' => 304172, 'caption' => '是否校验' , 'controltype' => 'cusetlist', 'fixed' => 0 , 'value' => 'required'),/*钩选列表*/
                        'classtype'         => array('controlid' => 304173, 'caption' => '校验类型' , 'controltype' => 'edittypelist', 'fixed' => 0 , 'value' => 'text'),/* email,password,url,number */
                    ),
                ),
                array('end' => 'input', 'controltype' => 'subcontrol'),
            array('end' => 'div', 'controltype' => 'subcontrol'),
        array('end' => 'div', 'controltype' => 'subcontrol'),
        );
}