<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
/**
 * 通过POST发送文章
 * 
 * @package NewPost
 * @author ilay
 * @version 1.1
 * @link https://wei.bz
 */
class NewPost_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Helper::addAction("import", "NewPost_Action");
        return "请完成相关设置";
    }
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
    {
        Helper::removeAction('import');
    }
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {
     	$pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';  
    for($i=0;$i<26;$i++)   
   {   
        $signkey .= $pattern[mt_rand(0,35)];    //生成php随机数   
    }   
        echo '<a href=\'https://github.com/iLay1678/NewPost\' target=_blank>使用说明</a>';
        $username = new Typecho_Widget_Helper_Form_Element_Text('username', NULL, _t(''), _t('username'));
        $form->addInput($username);
        $password = new Typecho_Widget_Helper_Form_Element_Text('password', NULL, _t(''), _t('password'));
        $form->addInput($password);
        $key = new Typecho_Widget_Helper_Form_Element_Text('sign', NULL, _t($signkey), _t('key'));
        $form->addInput($key);
    }
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form)
    {
    }
    /**
     * 插件实现方法
     * 
     * @access public
     * @return void
     */  
}
