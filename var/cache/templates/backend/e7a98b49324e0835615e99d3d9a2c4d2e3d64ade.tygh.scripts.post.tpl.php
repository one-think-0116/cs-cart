<?php /* Smarty version Smarty-3.1.21, created on 2021-03-15 02:34:17
         compiled from "D:\xampp\htdocs\cscart\design\backend\templates\addons\help_center\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:288826481604e9d79254551-95306903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7a98b49324e0835615e99d3d9a2c4d2e3d64ade' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\scripts.post.tpl',
      1 => 1612160263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '288826481604e9d79254551-95306903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'help_center_server_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_604e9d79260077_30657475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604e9d79260077_30657475')) {function content_604e9d79260077_30657475($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'D:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_function_script')) include 'D:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('all','help_center.see_all_n_results'));
?>
<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
        (function (_, $) {
            $.extend(_, {
                help_center_server_url: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['help_center_server_url']->value, ENT_QUOTES, 'UTF-8');?>
',
            });

            _.tr({
                all: '<?php echo strtr($_smarty_tpl->__("all"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                see_all_n_results: '<?php echo strtr($_smarty_tpl->__("help_center.see_all_n_results"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
            });
        }(Tygh, Tygh.$));
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/help_center/func.js"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
