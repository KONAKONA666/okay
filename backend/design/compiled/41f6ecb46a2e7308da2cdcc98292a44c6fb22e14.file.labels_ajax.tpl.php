<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-13 20:17:55
         compiled from "backend\design\html\labels_ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13775beb074365e5f1-92788793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41f6ecb46a2e7308da2cdcc98292a44c6fb22e14' => 
    array (
      0 => 'backend\\design\\html\\labels_ajax.tpl',
      1 => 1542121290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13775beb074365e5f1-92788793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'labels' => 0,
    'l' => 0,
    'order_labels' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beb0743681871_78880388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beb0743681871_78880388')) {function content_5beb0743681871_78880388($_smarty_tpl) {?>
<?php if ($_GET['module']=="OrderAdmin") {?>
    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['labels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
        <?php if (in_array($_smarty_tpl->tpl_vars['l']->value->id,$_smarty_tpl->tpl_vars['order_labels']->value)) {?>
            <span class="tag font-xs" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['l']->value->color;?>
;" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
            <input type="hidden" name="order_labels[]" value="<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
">
        <?php }?>
    <?php } ?>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->labels) {?>
        <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value->labels; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
            <span class="tag" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['l']->value->color;?>
;" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
        <?php } ?>
    <?php }?>
<?php }?>
<?php }} ?>
