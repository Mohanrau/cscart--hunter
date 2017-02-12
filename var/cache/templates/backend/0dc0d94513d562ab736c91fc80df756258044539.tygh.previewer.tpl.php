<?php /* Smarty version Smarty-3.1.21, created on 2017-02-12 16:30:59
         compiled from "C:\OpenServer\domains\localhost\cscart\design\backend\templates\common\previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1567958a06393cc9ca6-90026890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dc0d94513d562ab736c91fc80df756258044539' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\cscart\\design\\backend\\templates\\common\\previewer.tpl',
      1 => 1480317996,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1567958a06393cc9ca6-90026890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58a06393cd2b48_13074190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a06393cd2b48_13074190')) {function content_58a06393cd2b48_13074190($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/OpenServer/domains/localhost/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
