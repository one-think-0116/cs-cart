<?php /* Smarty version Smarty-3.1.21, created on 2021-03-15 02:35:28
         compiled from "D:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\discussion\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1348359552604e9dc02bf063-20947597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a6feea669924f80575aa874605ffb79a8fc559' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\discussion\\hooks\\index\\styles.post.tpl',
      1 => 1615764831,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1348359552604e9dc02bf063-20947597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_604e9dc02d3b66_77342728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604e9dc02d3b66_77342728')) {function content_604e9dc02d3b66_77342728($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'D:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.style.php';
if (!is_callable('smarty_function_set_id')) include 'D:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_style(array('src'=>"addons/discussion/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/discussion/responsive.less"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_style(array('src'=>"addons/discussion/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/discussion/responsive.less"),$_smarty_tpl);
}?><?php }} ?>
