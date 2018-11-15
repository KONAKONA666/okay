<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-13 19:27:43
         compiled from "D:\www\enabled\okaycms\design\okay_shop\html\cart_purchases.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33105beafb7f4f9cd8-85596582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0a9747d0a9cb0b8e8406a0ac5a330d827d282d2' => 
    array (
      0 => 'D:\\www\\enabled\\okaycms\\design\\okay_shop\\html\\cart_purchases.tpl',
      1 => 1542121290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33105beafb7f4f9cd8-85596582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'cart' => 0,
    'lang_link' => 0,
    'purchase' => 0,
    'settings' => 0,
    'currency' => 0,
    'user' => 0,
    'coupon_request' => 0,
    'coupon_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beafb7f592271_05251673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beafb7f592271_05251673')) {function content_5beafb7f592271_05251673($_smarty_tpl) {?><table class="purchase">
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
            <th></th>
        </tr>
    </thead>

    <?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->purchases; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
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
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant->name, ENT_QUOTES, 'UTF-8', true);?>
</i>
                <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->stock==0) {?><span class="preorder_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_pre_order;?>
</span><?php }?>
            </td>

            
            <td>
                <span class="nowrap"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->variant->price));?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->units) {?>/ <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant->units, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
            </td>

            
            <td class="purchase_amount">
                <div class="fn_product_amount<?php if ($_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?> fn_is_preorder<?php }?> amount">
                    <span class="minus">&minus;</span>
                    <input class="input_amount" type="text" data-id="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
" name="amounts[<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
" onblur="ajax_change_amount(this, <?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
);" data-max="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->stock;?>
">
                    <span class="plus">&plus;</span>
                </div>
            </td>

            
            <td class="purchase_sum">
                <span class="nowrap"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->variant->price*$_smarty_tpl->tpl_vars['purchase']->value->amount));?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span>
            </td>

            
            <td class="purchase_remove">
                <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
cart/remove/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
" onclick="ajax_remove(<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
);return false;" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_remove;?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'remove_icon'), 0);?>

                </a>
            </td>
        </tr>
    <?php } ?>

    
    <?php if ($_smarty_tpl->tpl_vars['user']->value->discount) {?>
        <tr>
            <td></td>
            <td class="text_left" data-language="cart_discount"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_discount;?>
</td>
            <td></td>
            <td></td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->discount;?>
%</td>
            <td></td>
        </tr>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['coupon_request']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value->coupon_discount>0) {?>
            <tr>
                <td></td>
                <td class="text_left" data-language="cart_coupon"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon;?>
</td>
                <td></td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->coupon->coupon_percent, ENT_QUOTES, 'UTF-8', true);?>
 %</td>
                <td>&minus; <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->coupon_discount);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td></td>
            </tr>
        <?php }?>
    <?php }?>

    <tfoot>
        <tr>
            <?php if ($_smarty_tpl->tpl_vars['coupon_request']->value) {?>
                <td colspan="3" class="coupon text_left">
                

                    
                    <?php if ($_smarty_tpl->tpl_vars['coupon_error']->value) {?>
                        <div class="message_error">
                            <?php if ($_smarty_tpl->tpl_vars['coupon_error']->value=='invalid') {?>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon_error;?>

                            <?php }?>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['cart']->value->coupon->min_order_price>0) {?>
                        <div class="message_success">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->coupon->code, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon_min;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->coupon->min_order_price);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                    <?php }?>

                    
                    <input class="fn_coupon input_coupon" type="text" name="coupon_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->coupon->code, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon;?>
">

                    <input class="coupon_button fn_sub_coupon" type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_purchases_coupon_apply;?>
">
                </td>
            <?php }?>

            <td <?php if ($_smarty_tpl->tpl_vars['coupon_request']->value) {?>colspan="2"<?php } else { ?>colspan="5"<?php }?> class="purchase_total">
                
                <span data-language="cart_total_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_total_price;?>
:</span>
                <span class="total_sum nowrap"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->total_price);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </td>

            <td></td>
        </tr>
    </tfoot>
</table>
<?php }} ?>
