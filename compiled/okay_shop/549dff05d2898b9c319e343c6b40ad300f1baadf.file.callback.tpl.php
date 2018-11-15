<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-13 19:27:38
         compiled from "D:\www\enabled\okaycms\design\okay_shop\html\callback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198995beafb7a2741d8-31613674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '549dff05d2898b9c319e343c6b40ad300f1baadf' => 
    array (
      0 => 'D:\\www\\enabled\\okaycms\\design\\okay_shop\\html\\callback.tpl',
      1 => 1542121290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198995beafb7a2741d8-31613674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'call_error' => 0,
    'callname' => 0,
    'user' => 0,
    'callphone' => 0,
    'callmessage' => 0,
    'settings' => 0,
    'captcha_callback' => 0,
    'call_sent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beafb7a2be564_05008940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beafb7a2be564_05008940')) {function content_5beafb7a2be564_05008940($_smarty_tpl) {?>
<div class="hidden">
    <form id="fn_callback" class="callback_form popup fn_validate_callback" method="post">

        
        <div class="popup_heading">
            <span data-language="callback_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_header;?>
</span>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['call_error']->value) {?>
            <div class="message_error">
                <?php if ($_smarty_tpl->tpl_vars['call_error']->value=='captcha') {?>
                    <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['call_error']->value=='empty_name') {?>
                    <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['call_error']->value=='empty_phone') {?>
                    <span data-language="form_enter_phone"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_phone;?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['call_error']->value=='empty_comment') {?>
                    <span data-language="form_enter_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
</span>
                <?php } else { ?>
                    <span><?php echo $_smarty_tpl->tpl_vars['call_error']->value;?>
</span>
                <?php }?>
            </div>
        <?php }?>

        
        <div class="form_group">
            <input class="form_input placeholder_focus" type="text" name="name" value="<?php if ($_smarty_tpl->tpl_vars['callname']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callname']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" data-language="form_name">
            <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
        </div>

        
        <div class="form_group">
            <input class="form_input placeholder_focus" type="text" name="phone" value="<?php if ($_smarty_tpl->tpl_vars['callphone']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callphone']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" data-language="form_phone">
            <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
*</span>
        </div>

        
        <div class="form_group">
            <textarea class="form_textarea placeholder_focus" rows="3" name="message" data-language="form_enter_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callmessage']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
            <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_message;?>
</span>
        </div>

        
        <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_callback) {?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="v2") {?>
                <div class="captcha row">
                    <div id="recaptcha2"></div>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="default") {?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0][0]->get_captcha_plugin(array('var'=>"captcha_callback"),$_smarty_tpl);?>

                <div class="captcha">
                    <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_callback']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_callback']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <span class="form_captcha">
                    <input class="form_input input_captcha placeholder_focus" type="text" name="captcha_code" value="" >
                        <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                    </span>
                </div>
            <?php }?>
        <?php }?>
        <input name="callback" type="hidden" value="1">
        
        <div class="center">
            <input class="button g-recaptcha" type="submit" name="callback" data-language="callback_order" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="invisible") {?>data-sitekey="<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible;?>
" data-badge='bottomleft' data-callback="onSubmitCallback"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_order;?>
">
        </div>

    </form>
</div>


<?php if ($_smarty_tpl->tpl_vars['call_sent']->value) {?>
    <div class="hidden">
        <div id="fn_callback_sent" class="popup">
            <div class="popup_heading">
                <span data-language="callback_sent_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_sent_header;?>
</span>
            </div>

            <div data-language="callback_sent_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_sent_text;?>
</div>
        </div>
    </div>
<?php }?>
<?php }} ?>
