<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-13 19:27:38
         compiled from "D:\www\enabled\okaycms\design\okay_shop\html\wishlist_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62065beafb7a1b4b32-16709122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7caebe61edd04863d502206e8b5a3fbc667d9e5c' => 
    array (
      0 => 'D:\\www\\enabled\\okaycms\\design\\okay_shop\\html\\wishlist_informer.tpl',
      1 => 1542121290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62065beafb7a1b4b32-16709122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wished_products' => 0,
    'lang_link' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beafb7a1c06b7_63563275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beafb7a1c06b7_63563275')) {function content_5beafb7a1c06b7_63563275($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['wished_products']->value)>0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
wishlist">
        <i class="wish_icon"></i>
        <span class="informer_name tablet-hidden" data-language="wishlist_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->wishlist_header;?>
</span> <span class="informer_counter">(<?php echo count($_smarty_tpl->tpl_vars['wished_products']->value);?>
)</span>
    </a>
<?php } else { ?>
    <span>
        <i class="wish_icon"></i>
        <span class="informer_name tablet-hidden" data-language="wishlist_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->wishlist_header;?>
</span>
    </span>
<?php }?>
<?php }} ?>
