<?php /* Smarty version Smarty-3.1.21, created on 2021-03-15 02:34:07
         compiled from "D:\xampp\htdocs\cscart\design\backend\templates\addons\help_center\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1215414384604e9d6f855ee8-04009699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af64f42ec0e335ab0661f885200762ac668218e5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\styles.post.tpl',
      1 => 1612160263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1215414384604e9d6f855ee8-04009699',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_604e9d6f85a4c9_27939287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604e9d6f85a4c9_27939287')) {function content_604e9d6f85a4c9_27939287($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'D:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.style.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
