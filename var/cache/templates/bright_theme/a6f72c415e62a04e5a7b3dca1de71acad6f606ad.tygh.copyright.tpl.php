<?php /* Smarty version Smarty-3.1.21, created on 2021-03-15 02:35:42
         compiled from "D:\xampp\htdocs\cscart\design\themes\responsive\templates\blocks\static_templates\copyright.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1669675971604e9dce0b5dc9-15183568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6f72c415e62a04e5a7b3dca1de71acad6f606ad' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\blocks\\static_templates\\copyright.tpl',
      1 => 1615764810,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1669675971604e9dce0b5dc9-15183568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'config' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_604e9dce0de4a9_12272194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604e9dce0de4a9_12272194')) {function content_604e9dce0de4a9_12272194($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:/xampp/htdocs/cscart/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include 'D:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('powered_by','copyright_shopping_cart','powered_by','copyright_shopping_cart'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<p class="bottom-copyright">
    &copy;
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']&&smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%Y")!=$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']) {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'], ENT_QUOTES, 'UTF-8');?>
 -
    <?php }?>
    
    <?php echo htmlspecialchars(smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%Y"), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>
. &nbsp;<?php echo $_smarty_tpl->__("powered_by");?>
 <a class="bottom-copyright" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['resources']['product_url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("copyright_shopping_cart",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</a>
</p><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/copyright.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/copyright.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<p class="bottom-copyright">
    &copy;
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']&&smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%Y")!=$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']) {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year'], ENT_QUOTES, 'UTF-8');?>
 -
    <?php }?>
    
    <?php echo htmlspecialchars(smarty_modifier_date_format((defined('TIME') ? constant('TIME') : null),"%Y"), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>
. &nbsp;<?php echo $_smarty_tpl->__("powered_by");?>
 <a class="bottom-copyright" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['resources']['product_url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("copyright_shopping_cart",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>
</a>
</p><?php }?><?php }} ?>
