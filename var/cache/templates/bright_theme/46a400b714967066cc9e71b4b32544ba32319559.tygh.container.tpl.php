<?php /* Smarty version Smarty-3.1.21, created on 2021-03-15 02:35:34
         compiled from "D:\xampp\htdocs\cscart\design\themes\responsive\templates\views\block_manager\render\container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:984254316604e9dc69cf4e9-86083160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a400b714967066cc9e71b4b32544ba32319559' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\views\\block_manager\\render\\container.tpl',
      1 => 1615764811,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '984254316604e9dc69cf4e9-86083160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'location_data' => 0,
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_604e9dc69d4016_28280571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604e9dc69d4016_28280571')) {function content_604e9dc69d4016_28280571($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("backend:views/block_manager/frontend_render/container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
<?php }?><?php }} ?>
