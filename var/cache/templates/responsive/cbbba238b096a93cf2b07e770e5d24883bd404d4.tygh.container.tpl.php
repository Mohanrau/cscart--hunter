<?php /* Smarty version Smarty-3.1.21, created on 2017-02-12 16:31:54
         compiled from "C:\OpenServer\domains\localhost\cscart\design\themes\responsive\templates\views\block_manager\render\container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1303458a063ca55ad25-50087844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbbba238b096a93cf2b07e770e5d24883bd404d4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\cscart\\design\\themes\\responsive\\templates\\views\\block_manager\\render\\container.tpl',
      1 => 1486903167,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1303458a063ca55ad25-50087844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58a063ca570848_43811809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a063ca570848_43811809')) {function content_58a063ca570848_43811809($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
