<?php
if (!defined('__TYPECHO_ROOT_DIR__'))
    exit ;
    
function themeConfig($form) {
	$options = Helper::options();
    //头像
	$avatarUrl = new Typecho_Widget_Helper_Form_Element_Text('avatarUrl', null, null, _t('头像链接指向'), _t('头像所指向的链接，可以是 ABOUT 页面等等'));
    $form -> addInput($avatarUrl);
}