<?php /* Smarty version Smarty-3.1.21, created on 2021-03-15 02:33:57
         compiled from "D:\xampp\htdocs\cscart\design\backend\templates\addons\call_requests\settings\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:456410349604e9d65a95648-49085330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f77514eb1fdf285ef1918675b0338aeee39fadc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\call_requests\\settings\\info.tpl',
      1 => 1612160263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '456410349604e9d65a95648-49085330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_604e9d65ac66b9_26399955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604e9d65ac66b9_26399955')) {function content_604e9d65ac66b9_26399955($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.phone_from_settings'));
?>
<div class="control-group setting-wide call_requests">

    <label for="addon_option_call_requests_phone" class="control-label "><?php echo $_smarty_tpl->__("call_requests.phone_from_settings");?>
:</label>

    <div class="controls">
        <p><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></p>
    </div>

</div><?php }} ?>
