<?php /* Smarty version Smarty-3.1.21, created on 2021-03-15 02:34:14
         compiled from "D:\xampp\htdocs\cscart\design\backend\templates\components\notifications_center\opener.tpl" */ ?>
<?php /*%%SmartyHeaderCode:504794060604e9d76a0ffa8-36599976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '853b3b2d5c3ae4d0053f2d1ea36e87b677988890' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\components\\notifications_center\\opener.tpl',
      1 => 1612160264,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '504794060604e9d76a0ffa8-36599976',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_604e9d76a1e0b9_84314732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604e9d76a1e0b9_84314732')) {function content_604e9d76a1e0b9_84314732($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'D:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notifications_center.notifications','notifications_center.notifications','notifications_center.notifications','loading','loading','show_more','show_less','notifications_center.no_notifications','notifications_center.notifications'));
?>
<li class="dropdown hover-show--disabled notifications-center__opener-wrapper cm-dropdown-skip-processing">
    <a class="dropdown-toggle" data-toggle="dropdown">
        <span
            class="icon icon-bell-alt cc-notify" 
            title="<?php echo $_smarty_tpl->__("notifications_center.notifications");?>
"
            data-ca-notifications-center-counter
        >
        </span>
        <span class="" ></span>
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu pull-right notifications-center__root" data-ca-notifications-center-root>
        <div class="cc-dropdown">
            <div class="cc-dropdown__title-wrapper" text="<?php echo $_smarty_tpl->__("notifications_center.notifications");?>
">
                <span class="cc-dropdown__title"><?php echo $_smarty_tpl->__("notifications_center.notifications");?>
</span>
            </div>
            <div class="cc-all-read">
                <div class="cc-all-read--inner"><?php echo $_smarty_tpl->__("loading");?>
</div>
            </div>
        </div>
    </ul>
</li>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function (_, $) {
    _.tr({
        loading: '<?php echo strtr($_smarty_tpl->__("loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        showMore: '<?php echo strtr($_smarty_tpl->__("show_more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        showLess: '<?php echo strtr($_smarty_tpl->__("show_less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        "notifications_center.noData": '<?php echo strtr($_smarty_tpl->__("notifications_center.no_notifications"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        "notifications_center.notifications": '<?php echo strtr($_smarty_tpl->__("notifications_center.notifications"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    });

    $.ceEvent('one', 'ce.commoninit', function (context) {
        $(context).find('.notifications-center__opener-wrapper a').on('click', function () {
            if (Tygh.ceNotificationsCenterInited) {
                $.ceEvent('trigger', 'ce.notifications_center.enabled');
            }
        });
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
