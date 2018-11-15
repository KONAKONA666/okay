<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-14 02:45:54
         compiled from "D:\www\enabled\okaycms\design\okay_shop\html\page_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302715beb6232460825-56360650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeb065584fbdc5fdc08c7d434c01c528a96abf5e' => 
    array (
      0 => 'D:\\www\\enabled\\okaycms\\design\\okay_shop\\html\\page_404.tpl',
      1 => 1542121290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302715beb6232460825-56360650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'lang' => 0,
    'menu_404' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beb623248b7a4_08619435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beb623248b7a4_08619435')) {function content_5beb623248b7a4_08619435($_smarty_tpl) {?>





<div class="block padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

            </div>
            <div class="col-sm-12 col-md-7">
                <div class="menu_404">
                    <div class="text_404">
                        <span data-language="page404_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->page404_text;?>
</span>
                    </div>
                    
                    <?php echo $_smarty_tpl->tpl_vars['menu_404']->value;?>

                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
