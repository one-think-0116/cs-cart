<?php /* Smarty version Smarty-3.1.21, created on 2021-03-15 02:36:22
         compiled from "D:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\rss_feed\hooks\wrapper\mainbox_general_title_wrapper.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:707214954604e9df68a11d8-63317966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c773d7ae6a267db1c8479368dccfa3cba9b7764a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\rss_feed\\hooks\\wrapper\\mainbox_general_title_wrapper.post.tpl',
      1 => 1615764818,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '707214954604e9df68a11d8-63317966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_604e9df68ae899_56616275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604e9df68ae899_56616275')) {function content_604e9df68ae899_56616275($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'D:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_REQUEST['category_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['rss_feed']['display_rss_feed_in_category']=="Y") {
echo $_smarty_tpl->getSubTemplate ("addons/rss_feed/blocks/rss_feed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('param'=>"&category_id=".((string)$_REQUEST['category_id'])), 0);
}?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rss_feed/hooks/wrapper/mainbox_general_title_wrapper.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rss_feed/hooks/wrapper/mainbox_general_title_wrapper.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_REQUEST['category_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['rss_feed']['display_rss_feed_in_category']=="Y") {
echo $_smarty_tpl->getSubTemplate ("addons/rss_feed/blocks/rss_feed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('param'=>"&category_id=".((string)$_REQUEST['category_id'])), 0);
}?>
<?php }
}?><?php }} ?>
