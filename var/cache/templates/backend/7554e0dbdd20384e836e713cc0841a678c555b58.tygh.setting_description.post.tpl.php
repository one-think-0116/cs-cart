<?php /* Smarty version Smarty-3.1.21, created on 2021-03-15 02:33:58
         compiled from "D:\xampp\htdocs\cscart\design\backend\templates\addons\seo\hooks\settings_fields\setting_description.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:400278756604e9d66dc81f5-21689705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7554e0dbdd20384e836e713cc0841a678c555b58' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\seo\\hooks\\settings_fields\\setting_description.post.tpl',
      1 => 1612160264,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '400278756604e9d66dc81f5-21689705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'show_language_warning' => 0,
    'is_default_storefront_affected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_604e9d66dd40e0_09196647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604e9d66dd40e0_09196647')) {function content_604e9d66dd40e0_09196647($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warning','seo.default_storefront_frontend_default_language_warning','seo.storefront_frontend_default_language_warning'));
?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['name']==="frontend_default_language"&&$_smarty_tpl->tpl_vars['show_language_warning']->value) {?>
    <div class="text-warning">
        <strong><?php echo $_smarty_tpl->__("warning");?>
!</strong>
        <?php if ($_smarty_tpl->tpl_vars['is_default_storefront_affected']->value) {?>
            <?php echo $_smarty_tpl->__("seo.default_storefront_frontend_default_language_warning",array("[link]"=>fn_url("addons.update?addon=seo")));?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("seo.storefront_frontend_default_language_warning",array("[link]"=>fn_url("addons.update?addon=seo")));?>

        <?php }?>
    </div>
<?php }?><?php }} ?>
