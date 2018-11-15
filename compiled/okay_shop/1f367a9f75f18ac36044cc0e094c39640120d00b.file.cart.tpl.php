<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-13 19:27:43
         compiled from "D:\www\enabled\okaycms\design\okay_shop\html\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149535beafb7f474fb8-00305904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f367a9f75f18ac36044cc0e094c39640120d00b' => 
    array (
      0 => 'D:\\www\\enabled\\okaycms\\design\\okay_shop\\html\\cart.tpl',
      1 => 1542121290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149535beafb7f474fb8-00305904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'cart' => 0,
    'error' => 0,
    'name' => 0,
    'phone' => 0,
    'email' => 0,
    'address' => 0,
    'comment' => 0,
    'settings' => 0,
    'captcha_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beafb7f4f1fd6_72191393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beafb7f4f1fd6_72191393')) {function content_5beafb7f4f1fd6_72191393($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang']->value->cart_title, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value->purchases) {?>
    
    <form id="captcha_id" method="post" name="cart" class="fn_validate_cart">
        
        <h1 class="h2"><span data-language="cart_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_header;?>
</span></h1>

        
        <div id="fn_purchases">
            <?php echo $_smarty_tpl->getSubTemplate ('cart_purchases.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>

        
        <div id="fn_ajax_deliveries">
            <?php echo $_smarty_tpl->getSubTemplate ('cart_deliveries.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        
        
        <div class="h2" data-language="cart_form_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_form_header;?>
</div>

        <div class="block padding"> 
            
            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="message_error">
                    <?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
                        <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_email') {?>
                        <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
                        <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_phone') {?>
                        <span data-language="form_error_phone"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_phone;?>
</span>
                    <?php }?>
                </div>
            <?php }?>

            <div class="row">
                
                <div class="col-sm-6">
                    <div class="form_group">
                        <input class="form_input placeholder_focus" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_name" >
                        <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                    </div>
                </div>

                
                <div class="col-sm-6">
                    <div class="form_group">
                        <input class="form_input placeholder_focus" name="phone" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_phone" >
                        <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
</span>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-sm-6">
                    <div class="form_group">
                        <input class="form_input placeholder_focus" name="email" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_email" >
                        <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*</span>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="form_group">
                        <input class="form_input placeholder_focus" name="address" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_address" >
                        <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_address;?>
</span>
                    </div>
                </div>
            </div>

            
            <div class="form_group">
                <textarea class="form_textarea placeholder_focus" rows="5" name="comment" data-language="cart_order_comment" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_order_comment;?>
</span>
            </div>

            
            <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_cart) {?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="v2") {?>
                    <div class="captcha row" style="">
                        <div id="recaptcha1"></div>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="default") {?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0][0]->get_captcha_plugin(array('var'=>"captcha_cart"),$_smarty_tpl);?>

                    <div class="captcha">
                        <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_cart']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_cart']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <span class="form_captcha">
                            <input class="form_input input_captcha placeholder_focus" type="text" name="captcha_code" value="" data-language="form_enter_captcha" >
                            <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                         </span>
                    </div>
                <?php }?>
            <?php }?>
            <input type="hidden" name="checkout" value="1">
            
            <input class="button g-recaptcha" type="submit" name="checkout" data-language="cart_checkout" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="invisible") {?>data-sitekey="<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible;?>
" data-badge='bottomleft' data-callback="onSubmit"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_checkout;?>
">
        </div>    
    </form>

<?php } else { ?>
    <div class="block"> 
        
        <h1 class="h1"><span data-language="cart_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_header;?>
</span></h1>

        <p class="block padding" data-language="cart_empty"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_empty;?>
</p>
    </div>
<?php }?>

<?php }} ?>
