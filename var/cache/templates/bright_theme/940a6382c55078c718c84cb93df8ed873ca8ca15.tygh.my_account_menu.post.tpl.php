<?php /* Smarty version Smarty-3.1.21, created on 2021-03-15 02:35:32
         compiled from "D:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\wishlist\hooks\profiles\my_account_menu.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1014814809604e9dc43e4332-53350917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '940a6382c55078c718c84cb93df8ed873ca8ca15' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\wishlist\\hooks\\profiles\\my_account_menu.post.tpl',
      1 => 1615764831,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1014814809604e9dc43e4332-53350917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'wishlist_count' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_604e9dc43efaf7_20706410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604e9dc43efaf7_20706410')) {function content_604e9dc43efaf7_20706410($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'D:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('wishlist','wishlist'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a" href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("wishlist");
if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?> (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/profiles/my_account_menu.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/profiles/my_account_menu.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a" href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("wishlist");
if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?> (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li><?php }?><?php }} ?>
