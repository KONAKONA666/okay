<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-13 19:28:11
         compiled from "D:\www\enabled\okaycms\design\okay_shop\html\order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175095beafb9bd41755-80058139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbc4e95886a28575d17b386217ae0e1fca87a150' => 
    array (
      0 => 'D:\\www\\enabled\\okaycms\\design\\okay_shop\\html\\order.tpl',
      1 => 1542121290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175095beafb9bd41755-80058139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'order' => 0,
    'purchases' => 0,
    'lang_link' => 0,
    'purchase' => 0,
    'settings' => 0,
    'currency' => 0,
    'delivery' => 0,
    'order_status' => 0,
    'payment_methods' => 0,
    'payment_method' => 0,
    'config' => 0,
    'cart' => 0,
    'all_currencies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beafb9be7de20_99574394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beafb9be7de20_99574394')) {function content_5beafb9be7de20_99574394($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['lang']->value->email_order_title)." ".((string)$_smarty_tpl->tpl_vars['order']->value->id), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="order_notify_v2">
    <div class="o_notify_v2_head">
        <?php echo $_smarty_tpl->getSubTemplate ("svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>"success_icon"), 0);?>

        <span class="o_notify_v2_heading"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_greeting;?>
 <span data-language="order_success_issued"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_success_issued;?>
</span></span>

    </div>
    <div class="o_notify_v2_content">
        <div class="o_notify_v2_content_inner" data-language="order_success_text">
            <p><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</strong>, <?php echo $_smarty_tpl->tpl_vars['lang']->value->order_success_text;?>

             </p>
        </div>
    </div>
    <div class="o_notify_v2_order_id">
        <div class="o_notify_v2_order_id_box">
            <div data-language="order_number_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_number_text;?>
</div>
            <span class="o_notify_v2_order_id_bold">№ <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</span>
        </div>
    </div>
</div>


<table class="purchase">
    <thead class="mobile-hidden">
        <tr>
            <th data-language="cart_head_img"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_img;?>
</th>
            <th class="text_left" data-language="cart_head_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_name;?>
</th>
            <th data-language="cart_head_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_price;?>
</th>
            <th data-language="cart_head_amoun"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_amoun;?>
</th>
            <th data-language="cart_head_total"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_total;?>
</th>
        </tr>
    </thead>

    <?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
        <tr>
            
            <td class="purchase_image">
                <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
">
                    <?php if ($_smarty_tpl->tpl_vars['purchase']->value->product->image) {?>
                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['purchase']->value->product->image->filename,50,50);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php } else { ?>
                        <img width="50" height="50" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/no_image.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php }?>
                </a>
            </td>

            
            <td class="text_left">
                <a class="purchase_name" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>
</i>
                <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->stock==0) {?><span class="preorder_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_pre_order;?>
</span><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order']->value->paid&&$_smarty_tpl->tpl_vars['purchase']->value->variant->attachment) {?>
                    <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
order/<?php echo $_smarty_tpl->tpl_vars['order']->value->url;?>
/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->attachment;?>
" data-language="order_download_file"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_download_file;?>
</a>
                <?php }?>
            </td>

            
            <td class="purchase_price">
                <span class="nowrap"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->variant->price));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['purchase']->value->units) {?>/ <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->units, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
            </td>

            
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->amount, ENT_QUOTES, 'UTF-8', true);?>
</td>

            
            <td class="purchase_sum">
                <span class="nowrap"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->price*$_smarty_tpl->tpl_vars['purchase']->value->amount));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </td>
        </tr>
    <?php } ?>

    
    <?php if ($_smarty_tpl->tpl_vars['order']->value->discount>0) {?>
        <tr>
            <td></td>
            <td class="text_left" data-language="cart_discount"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_discount;?>
</td>
            <td></td>
            <td></td>
            <td><?php echo $_smarty_tpl->tpl_vars['order']->value->discount;?>
%</td>
        </tr>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['order']->value->coupon_discount>0) {?>
        <tr>
            <td></td>
            <td class="text_left">
                <span data-language="cart_coupon"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon;?>
</span>
            </td>
            <td></td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->coupon->coupon_percent, ENT_QUOTES, 'UTF-8', true);?>
 %</td>
            <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->coupon_discount);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</td>
        </tr>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['order']->value->separate_delivery||!$_smarty_tpl->tpl_vars['order']->value->separate_delivery&&$_smarty_tpl->tpl_vars['order']->value->delivery_price>0) {?>
        <tr>
            <td></td>
            <td class="text_left">
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </td>
            <td></td>
            <td></td>
            <?php if (!$_smarty_tpl->tpl_vars['order']->value->separate_delivery) {?>
                <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->delivery_price);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</td>
            <?php } else { ?>
                <td></td>
            <?php }?>
        </tr>
    <?php }?>

    
    <tfoot>
        <tr>
            <td colspan="5" class="purchase_total">
                <span data-language="cart_total_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_total_price;?>
:</span>
                <span class="total_sum nowrap"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->total_price);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </td>
        </tr>
    </tfoot>
</table>

<div class="wrap_block clearfix">
    <div class="col-lg-6 no_padding">
        <div class="h2">
            <span data-language="order_details"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_details;?>
</span>
        </div>
        
        <div class="block padding">
            <table class="order_details">
                <tr>
                    <td>
                        <span data-language="user_order_status"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_order_status;?>
</span>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                        <?php if ($_smarty_tpl->tpl_vars['order']->value->paid==1) {?>
                            , <span data-language="status_paid"><?php echo $_smarty_tpl->tpl_vars['lang']->value->status_paid;?>
</span>
                        <?php }?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span data-language="order_date"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_date;?>
</span>
                    </td>
                    <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
 <span data-language="order_time"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_time;?>
</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
</td>
                </tr>
                <tr>
                    <td>
                        <span data-language="order_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_name;?>
</span>
                    </td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
                <tr>
                    <td>
                        <span data-language="order_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_email;?>
</span>
                    </td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['order']->value->phone) {?>
                    <tr>
                        <td>
                            <span data-language="order_phone"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_phone;?>
</span>
                        </td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</td>
                    </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order']->value->address) {?>
                    <tr>
                        <td>
                            <span data-language="order_address"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_address;?>
</span>
                        </td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>
</td>
                    </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order']->value->comment) {?>
                    <tr>
                        <td>
                            <span data-language="order_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_comment;?>
</span>
                        </td>
                        <td><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->comment, ENT_QUOTES, 'UTF-8', true));?>
</td>
                    </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['delivery']->value) {?>
                    <tr>
                        <td>
                            <span data-language="order_delivery"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_delivery;?>
</span>
                        </td>
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
                    </tr>
                <?php }?>
            </table>
        </div>
    </div>

    <div class="col-lg-6 no_padding">
        <?php if (!$_smarty_tpl->tpl_vars['order']->value->paid) {?>
            
            <div class="h2">
                <span data-language="order_payment_details"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_payment_details;?>
</span>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value&&!$_smarty_tpl->tpl_vars['payment_method']->value&&$_smarty_tpl->tpl_vars['order']->value->total_price>0) {?>
                <div class="delivery padding block">
                    <form method="post">
                        <?php  $_smarty_tpl->tpl_vars['payment_method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['payment_method']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->key => $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->_loop = true;
 $_smarty_tpl->tpl_vars['payment_method']->index++;
 $_smarty_tpl->tpl_vars['payment_method']->first = $_smarty_tpl->tpl_vars['payment_method']->index === 0;
?>
                            <div class="delivery_item">
                                <label class="delivery_label<?php if ($_smarty_tpl->tpl_vars['payment_method']->first) {?> active<?php }?>">
                                    <input class="input_delivery"  type="radio" name="payment_method_id" value="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['delivery']->first&&$_smarty_tpl->tpl_vars['payment_method']->first) {?> checked<?php }?> id="payment_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
">

                                    <span class="delivery_name">
                                        <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->image) {?>
                                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['payment_method']->value->image,50,50,false,$_smarty_tpl->tpl_vars['config']->value->resized_payments_dir);?>
"/>
                                        <?php }?>
                                        <?php $_smarty_tpl->tpl_vars['total_price_with_delivery'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->total_price, null, 0);?>
                                        <?php if (!$_smarty_tpl->tpl_vars['delivery']->value->separate_payment&&$_smarty_tpl->tpl_vars['cart']->value->total_price<$_smarty_tpl->tpl_vars['delivery']->value->free_from) {?>
                                            <?php $_smarty_tpl->tpl_vars['total_price_with_delivery'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value->total_price+$_smarty_tpl->tpl_vars['delivery']->value->price, null, 0);?>
                                        <?php }?>
                                    
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_deliveries_to_pay;?>
 <span class="nowrap"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->total_price,$_smarty_tpl->tpl_vars['payment_method']->value->currency_id);?>
 <?php echo $_smarty_tpl->tpl_vars['all_currencies']->value[$_smarty_tpl->tpl_vars['payment_method']->value->currency_id]->sign;?>
</span>
                                    </span>
                                </label>
                                <div class="delivery_description">
                                    <?php echo $_smarty_tpl->tpl_vars['payment_method']->value->description;?>

                                </div>
                            </div>
                        <?php } ?>

                        <input type="submit" data-language="cart_checkout" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_checkout;?>
" name="checkout" class="button">
                    </form>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['payment_method']->value) {?>
                
                <div class="padding block clearfix">
                    <div class="method">
                        <span data-language="order_payment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_payment;?>
</span>
                        <span class="method_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>

                        <form class="method_form" method="post">
                            <input class="button" type=submit name='reset_payment_method' data-language="order_change_payment" value='<?php echo $_smarty_tpl->tpl_vars['lang']->value->order_change_payment;?>
'/>
                        </form>

                        <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->description) {?>
                            <div class="method_description">
                                <?php echo $_smarty_tpl->tpl_vars['payment_method']->value->description;?>

                            </div>
                        <?php }?>
                    </div>

                    
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['checkout_form'][0][0]->checkout_form(array('order_id'=>$_smarty_tpl->tpl_vars['order']->value->id,'module'=>$_smarty_tpl->tpl_vars['payment_method']->value->module),$_smarty_tpl);?>

                </div>                
            <?php }?>
        <?php }?>
    </div>
</div><?php }} ?>
