<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-13 19:27:43
         compiled from "D:\www\enabled\okaycms\design\okay_shop\html\cart_deliveries.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137115beafb7f5a1c79-06635406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78603d7dad3eae9da28a46691a8dd8663bce5f92' => 
    array (
      0 => 'D:\\www\\enabled\\okaycms\\design\\okay_shop\\html\\cart_deliveries.tpl',
      1 => 1542121290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137115beafb7f5a1c79-06635406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'deliveries' => 0,
    'lang' => 0,
    'delivery' => 0,
    'delivery_id' => 0,
    'config' => 0,
    'cart' => 0,
    'currency' => 0,
    'payment_method' => 0,
    'total_price_with_delivery' => 0,
    'all_currencies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beafb7f61ec94_83461404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beafb7f61ec94_83461404')) {function content_5beafb7f61ec94_83461404($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['deliveries']->value) {?>
    
    <div class="h2">
        <span data-language="cart_delivery"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_delivery;?>
</span>
    </div>

    <div class="delivery padding block">
        <?php  $_smarty_tpl->tpl_vars['delivery'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['delivery']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deliveries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['delivery']->iteration=0;
 $_smarty_tpl->tpl_vars['delivery']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['delivery']->key => $_smarty_tpl->tpl_vars['delivery']->value) {
$_smarty_tpl->tpl_vars['delivery']->_loop = true;
 $_smarty_tpl->tpl_vars['delivery']->iteration++;
 $_smarty_tpl->tpl_vars['delivery']->index++;
 $_smarty_tpl->tpl_vars['delivery']->first = $_smarty_tpl->tpl_vars['delivery']->index === 0;
?>
            <div class="delivery_item">

                <label class="delivery_label<?php if ($_smarty_tpl->tpl_vars['delivery']->first) {?> active<?php }?>" for="deliveries_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
">

                    <input class="input_delivery" id="deliveries_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
" onclick="change_payment_method(<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
)" type="radio" name="delivery_id" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['delivery_id']->value==$_smarty_tpl->tpl_vars['delivery']->value->id||$_smarty_tpl->tpl_vars['delivery']->first) {?> checked<?php }?> />

                    <span class="delivery_name">
                        <?php if ($_smarty_tpl->tpl_vars['delivery']->value->image) {?>
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['delivery']->value->image,50,50,false,$_smarty_tpl->tpl_vars['config']->value->resized_deliveries_dir);?>
" />
                        <?php }?>

                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>


                        <?php if ($_smarty_tpl->tpl_vars['cart']->value->total_price<$_smarty_tpl->tpl_vars['delivery']->value->free_from&&$_smarty_tpl->tpl_vars['delivery']->value->price>0&&!$_smarty_tpl->tpl_vars['delivery']->value->separate_payment) {?>
                            <span class="nowrap">(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['delivery']->value->price);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
)</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['delivery']->value->separate_payment) {?>
                            <span data-language="cart_free">(<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_paid_separate;?>
)</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cart']->value->total_price>=$_smarty_tpl->tpl_vars['delivery']->value->free_from&&!$_smarty_tpl->tpl_vars['delivery']->value->separate_payment) {?>
                            <span data-language="cart_free">(<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_free;?>
)</span>
                        <?php }?>
                    </span>
                </label>

                <div class="delivery_description">
                    <?php echo $_smarty_tpl->tpl_vars['delivery']->value->description;?>

                </div>
            </div>
        <?php } ?>
    </div>
    
    
    
    <?php  $_smarty_tpl->tpl_vars['delivery'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['delivery']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deliveries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['delivery']->iteration=0;
 $_smarty_tpl->tpl_vars['delivery']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['delivery']->key => $_smarty_tpl->tpl_vars['delivery']->value) {
$_smarty_tpl->tpl_vars['delivery']->_loop = true;
 $_smarty_tpl->tpl_vars['delivery']->iteration++;
 $_smarty_tpl->tpl_vars['delivery']->index++;
 $_smarty_tpl->tpl_vars['delivery']->first = $_smarty_tpl->tpl_vars['delivery']->index === 0;
?>
        <?php if ($_smarty_tpl->tpl_vars['delivery']->value->payment_methods) {?>
            <div class="fn_delivery_payment" id="fn_delivery_payment_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['delivery']->iteration!=1) {?> style="display:none"<?php }?>>

                <div class="h2"><span data-language="cart_payment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_payment;?>
</span></div>

                <div class="delivery block padding">
                    <?php  $_smarty_tpl->tpl_vars['payment_method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['delivery']->value->payment_methods; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['payment_method']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->key => $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->_loop = true;
 $_smarty_tpl->tpl_vars['payment_method']->index++;
 $_smarty_tpl->tpl_vars['payment_method']->first = $_smarty_tpl->tpl_vars['payment_method']->index === 0;
?>
                        <div class="delivery_item">

                            <label class="delivery_label<?php if ($_smarty_tpl->tpl_vars['payment_method']->first) {?> active<?php }?>" for="payment_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
">

                                <input class="input_delivery" id="payment_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
" type="radio" name="payment_method_id" value="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['delivery']->first&&$_smarty_tpl->tpl_vars['payment_method']->first) {?> checked<?php }?> />

                                <span class="delivery_name">
                                    <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->image) {?>
                                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['payment_method']->value->image,50,50,false,$_smarty_tpl->tpl_vars['config']->value->resized_payments_dir);?>
" />
                                    <?php }?>

                                    <?php $_smarty_tpl->tpl_vars['total_price_with_delivery'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->total_price, null, 0);?>
                                    <?php if (!$_smarty_tpl->tpl_vars['delivery']->value->separate_payment&&$_smarty_tpl->tpl_vars['cart']->value->total_price<$_smarty_tpl->tpl_vars['delivery']->value->free_from) {?>
                                        <?php $_smarty_tpl->tpl_vars['total_price_with_delivery'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->total_price+$_smarty_tpl->tpl_vars['delivery']->value->price, null, 0);?>
                                    <?php }?>

                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_deliveries_to_pay;?>

                                    <span class="nowrap"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['total_price_with_delivery']->value,$_smarty_tpl->tpl_vars['payment_method']->value->currency_id);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['all_currencies']->value[$_smarty_tpl->tpl_vars['payment_method']->value->currency_id]->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </span>
                            </label>
                            <div class="delivery_description">
                                <?php echo $_smarty_tpl->tpl_vars['payment_method']->value->description;?>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php }?>
    <?php } ?>    
<?php }?>
<?php }} ?>
