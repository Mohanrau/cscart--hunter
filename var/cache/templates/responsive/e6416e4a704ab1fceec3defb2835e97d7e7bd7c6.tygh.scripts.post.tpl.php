<?php /* Smarty version Smarty-3.1.21, created on 2017-02-12 16:32:09
         compiled from "C:\OpenServer\domains\localhost\cscart\design\themes\responsive\templates\addons\yandex_delivery\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314858a063d95432e8-17187681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6416e4a704ab1fceec3defb2835e97d7e7bd7c6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\cscart\\design\\themes\\responsive\\templates\\addons\\yandex_delivery\\hooks\\index\\scripts.post.tpl',
      1 => 1486906283,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '314858a063d95432e8-17187681',
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
  'unifunc' => 'content_58a063d958f6f7_58837169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a063d958f6f7_58837169')) {function content_58a063d958f6f7_58837169($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/OpenServer/domains/localhost/cscart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/localhost/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['yandex_delivery']['autocomplete']=="Y") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/yandex_delivery/autocomplete.js"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['yandex_delivery']['autopostcode']=="Y") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/yandex_delivery/postcode.js"),$_smarty_tpl);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/yandex_delivery/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/yandex_delivery/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['yandex_delivery']['autocomplete']=="Y") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/yandex_delivery/autocomplete.js"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['yandex_delivery']['autopostcode']=="Y") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/yandex_delivery/postcode.js"),$_smarty_tpl);?>

<?php }
}?><?php }} ?>
