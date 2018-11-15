<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-15 08:31:33
         compiled from "backend\design\html\order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230505bed04b5b1f612-57226532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1119ff0fbed6dcd029f24b466c09c9eeaffa30b2' => 
    array (
      0 => 'backend\\design\\html\\order.tpl',
      1 => 1542121290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230505bed04b5b1f612-57226532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'btr' => 0,
    'all_status' => 0,
    'status_item' => 0,
    'hasVariantNotInStock' => 0,
    'labels' => 0,
    'l' => 0,
    'order_labels' => 0,
    'neighbors_orders' => 0,
    'message_error' => 0,
    'message_success' => 0,
    'currency' => 0,
    'purchases' => 0,
    'purchase' => 0,
    'settings' => 0,
    'v' => 0,
    'subtotal' => 0,
    'deliveries' => 0,
    'd' => 0,
    'delivery' => 0,
    'payment_methods' => 0,
    'pm' => 0,
    'payment_method' => 0,
    'payment_currency' => 0,
    'user' => 0,
    'languages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5bed04b5d4a197_22870359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bed04b5d4a197_22870359')) {function content_5bed04b5d4a197_22870359($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['order']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['btr']->value->general_order_number)." ".((string)$_smarty_tpl->tpl_vars['order']->value->id), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->order_new, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>

<form method="post" enctype="multipart/form-data" class="fn_fast_button">
    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="wrap_heading">
                <div class="box_heading heading_page">
                    <?php if ($_smarty_tpl->tpl_vars['order']->value->id) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_order_number, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_new, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
                
                <div class="boxes_inline">
                    <select class="selectpicker" name="status_id">
                        <?php  $_smarty_tpl->tpl_vars['status_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status_item']->key => $_smarty_tpl->tpl_vars['status_item']->value) {
$_smarty_tpl->tpl_vars['status_item']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['status_item']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['order']->value->status_id==$_smarty_tpl->tpl_vars['status_item']->value->id) {?>selected=""<?php }?> <?php if ($_smarty_tpl->tpl_vars['hasVariantNotInStock']->value&&!$_smarty_tpl->tpl_vars['order']->value->closed&&$_smarty_tpl->tpl_vars['status_item']->value->is_close) {?> disabled<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_item']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                        <?php } ?>
                    </select>
                </div>
                <div data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_print, ENT_QUOTES, 'UTF-8', true);?>
" class="boxes_inline hint-bottom-middle-t-info-s-small-mobile  hint-anim ml-h">
                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('view'=>'print','id'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl);?>
" target="_blank" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_print, ENT_QUOTES, 'UTF-8', true);?>
" class="print_block">
                        <i class="fa fa-print"></i>
                    </a>
                </div>
                
                <div class="box_btn_heading ml-h hidden-xs-down">
                    <div class="add_order_marker">
                        <span class="fn_ajax_label_wrapper">
                            <span class="fn_labels_show box_labels_show box_btn_heading ml-h"><?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'tag'), 0);?>
 <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_select_label, ENT_QUOTES, 'UTF-8', true);?>
</span> </span>

                            <div class='fn_labels_hide box_labels_hide'>
                                <span class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_labels, ENT_QUOTES, 'UTF-8', true);?>
 <i class="fn_delete_labels_hide btn_close delete_labels_hide"><?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>
</i></span>
                                <ul class="option_labels_box">
                                    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['labels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                                        <li class="fn_ajax_labels" data-order_id="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
"  style="background-color: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->color, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <input id="l<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" type="checkbox" class="hidden_check_1" name="order_labels[]"  value="<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['l']->value->id,$_smarty_tpl->tpl_vars['order_labels']->value)&&is_array($_smarty_tpl->tpl_vars['order_labels']->value)) {?>checked=""<?php }?> />
                                            <label   for="l<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" class="label_labels"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></label>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="fn_order_labels orders_labels box_btn_heading ml-h">
                                <?php echo $_smarty_tpl->getSubTemplate ("labels_ajax.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            </div>
                        </span>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['neighbors_orders']->value) {?>
                    <div class="neighbors_orders">
                        <?php if ($_smarty_tpl->tpl_vars['neighbors_orders']->value['prev']->id) {?>
                            <span>
                                <a title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->order_prev;?>
" class="prev_order" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('id'=>$_smarty_tpl->tpl_vars['neighbors_orders']->value['prev']->id),$_smarty_tpl);?>
">&lt;</a>
                            </span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['neighbors_orders']->value['next']) {?>
                            <span>
                                <a title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->order_next;?>
" class="next_order" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('id'=>$_smarty_tpl->tpl_vars['neighbors_orders']->value['next']->id),$_smarty_tpl);?>
">&gt;</a>
                            </span>
                        <?php }?>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['hasVariantNotInStock']->value&&!$_smarty_tpl->tpl_vars['order']->value->closed) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="boxed boxed_warning">
                    <div class="">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_not_in_stock, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                </div>
            </div>
        </div>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="boxed boxed_warning">
                    <div class="heading_box">
                        <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='error_closing') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_shortage, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='empty_purchase') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_empty_purchases, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    
    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="boxed boxed_success">
                    <div class="heading_box">
                        <?php if ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_updated, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='added') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_added, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_success']->value, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                        <?php if ($_GET['return']) {?>
                            <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'return'), 0);?>

                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>

    <div class="row">
        
        <div class="col-xl-8 break_1300_12  pr-0">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_content, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="">
                        <div id="fn_purchase" class="okay_list">
                            
                            <div class="okay_list_head">
                                <div class="okay_list_heading okay_list_photo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="okay_list_heading okay_list_order_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_name_option, ENT_QUOTES, 'UTF-8', true);?>
 </div>
                                <div class="okay_list_heading okay_list_price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="okay_list_heading okay_list_count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_qty, ENT_QUOTES, 'UTF-8', true);?>

                                </div>
                                <div class="okay_list_heading okay_list_order_amount_price"><?php echo $_smarty_tpl->tpl_vars['btr']->value->general_sales_amount;?>
</div>
                            </div>
                            
                            <div class="okay_list_body">
                                <?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
                                    <div class="fn_row okay_list_body_item purchases">
                                        <div class="okay_list_row">
                                            <input type=hidden name=purchases[id][<?php echo $_smarty_tpl->tpl_vars['purchase']->value->id;?>
] value='<?php echo $_smarty_tpl->tpl_vars['purchase']->value->id;?>
'>

                                            <div class="okay_list_boding okay_list_photo">
                                                <?php if ($_smarty_tpl->tpl_vars['purchase']->value->product->image) {?>
                                                    <img class=product_icon src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['purchase']->value->product->image->filename,50,50);?>
">
                                                <?php } else { ?>
                                                    <img width="50" src="design/images/no_image.png"/>
                                                <?php }?>
                                            </div>
                                            <div class="okay_list_boding okay_list_order_name">
                                                <div class="boxes_inline">
                                                    <?php if ($_smarty_tpl->tpl_vars['purchase']->value->product) {?>
                                                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['purchase']->value->product->id),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                        <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant_name) {?>
                                                            <span class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_option, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['purchase']->value->sku) {?>
                                                            <span class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_sku, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['purchase']->value->sku)===null||$tmp==='' ? "&mdash;" : $tmp);?>
</span>
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                        <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant_name) {?>
                                                            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_option, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['purchase']->value->sku) {?>
                                                            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_sku, ENT_QUOTES, 'UTF-8', true);?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['purchase']->value->sku)===null||$tmp==='' ? "&mdash;" : $tmp);?>
</div>
                                                        <?php }?>
                                                    <?php }?>
                                                    <div class="hidden-lg-up mt-q">
                                                        <span class="text_primary text_600"><?php echo $_smarty_tpl->tpl_vars['purchase']->value->price;?>
</span>
                                                        <span class="hidden-md-up text_500">
                                                        <?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
 <?php if ($_smarty_tpl->tpl_vars['purchase']->value->units) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->units, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
                                                    </div>
                                                </div>

                                                <?php if (!$_smarty_tpl->tpl_vars['purchase']->value->variant) {?>
                                                    <input class="form-control " type="hidden" name="purchases[variant_id][<?php echo $_smarty_tpl->tpl_vars['purchase']->value->id;?>
]" value="" />
                                                <?php } else { ?>
                                                    <div class="boxes_inline">
                                                        <select name="purchases[variant_id][<?php echo $_smarty_tpl->tpl_vars['purchase']->value->id;?>
]" class="selectpicker <?php if (count($_smarty_tpl->tpl_vars['purchase']->value->product->variants)==1) {?>hidden<?php }?> fn_purchase_variant">
                                                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchase']->value->product->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                                                                <option data-price="<?php echo $_smarty_tpl->tpl_vars['v']->value->price;?>
" data-units="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->units, ENT_QUOTES, 'UTF-8', true);?>
" data-amount="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value->id==$_smarty_tpl->tpl_vars['purchase']->value->variant_id) {?>selected<?php }?> >
                                                                    <?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?>
                                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                                                    <?php } else { ?>
                                                                        #<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>

                                                                    <?php }?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                <?php }?>
                                            </div>
                                            <div class="okay_list_boding okay_list_price">
                                                <div class="input-group">
                                                    <input type="text" class="form-control fn_purchase_price" name="purchases[price][<?php echo $_smarty_tpl->tpl_vars['purchase']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->price;?>
">
                                                    <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span>
                                                </div>
                                            </div>
                                            <div class="okay_list_boding okay_list_count">
                                                <div class="input-group">
                                                    <input class="form-control fn_purchase_amount" type="text" name="purchases[amount][<?php echo $_smarty_tpl->tpl_vars['purchase']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
"/>
                                                    <span class="input-group-addon p-0 fn_purchase_units">
                                                         <?php if ($_smarty_tpl->tpl_vars['purchase']->value->units) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->units, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="okay_list_boding okay_list_order_amount_price">
                                                <div class="text_dark">
                                                    <span><?php echo ($_smarty_tpl->tpl_vars['purchase']->value->price)*($_smarty_tpl->tpl_vars['purchase']->value->amount);?>
</span>
                                                    <span class=""><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span>
                                                </div>
                                            </div>
                                            <div class="okay_list_boding okay_list_close">
                                                
                                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile  hint-anim" >
                                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="okay_list_body fn_new_purchase" style="display: none">
                                <div class="fn_row okay_list_body_item " >
                                <div class="okay_list_row">

                                    <div class="okay_list_boding okay_list_photo">
                                        <input type="hidden" name="purchases[id][]" value="" />
                                        <img class="fn_new_image" src="">
                                    </div>

                                    <div class="okay_list_boding okay_list_order_name">
                                        <div class="boxes_inline">
                                            <a class="fn_new_product" href=""></a>
                                            <div class="fn_new_variant_name"></div>
                                        </div>
                                        <div class="boxes_inline">
                                            <select name="purchases[variant_id][]" class="fn_new_variant"></select>
                                        </div>

                                    </div>
                                    <div class="okay_list_boding okay_list_price">
                                        <div class="input-group">
                                            <input type="text" class="form-control fn_purchase_price" name=purchases[price][] value="">
                                            <span class="input-group-addon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </div>
                                    </div>
                                    <div class="okay_list_boding okay_list_count">
                                        <div class="input-group">
                                            <input class="form-control fn_purchase_amount" type="text" name="purchases[amount][]" value="1"/>
                                            <span class="input-group-addon p-0 fn_purchase_units">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="okay_list_boding okay_list_order_amount_price">
                                        <div class="text_dark">
                                            <span></span>
                                            <span class=""></span>
                                        </div>
                                    </div>
                                    <div class="okay_list_boding okay_list_close">
                                        
                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col-lg-6 col-md-12">
                                <div class="autocomplete_arrow">
                                    <input type="text" name="new_purchase" id="fn_add_purchase" class="form-control" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_add_product, ENT_QUOTES, 'UTF-8', true);?>
">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <?php if ($_smarty_tpl->tpl_vars['purchases']->value) {?>
                                    <div class="text_dark text_500 text-xs-right mr-1 mt-h">
                                        <div class="h5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_sum, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_parameters, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="">
                        <div class="">
                            <div class="okay_list">
                                <div class="okay_list_body">
                                    <div class="okay_list_body_item">
                                        <div class="okay_list_row  d_flex">
                                            <div class="okay_list_boding okay_list_ordfig_name">
                                                <div class="text_600 text_dark"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_discount, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            </div>
                                            <div class="okay_list_boding okay_list_ordfig_val">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="discount" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->discount;?>
">
                                                    <span class="input-group-addon p-0"><i class="fa fa-percent"></i></span>
                                                </div>
                                            </div>
                                            <div class="okay_list_boding okay_list_ordfig_price">
                                                <div class="text_dark">
                                                    <span><?php echo round(($_smarty_tpl->tpl_vars['subtotal']->value-$_smarty_tpl->tpl_vars['subtotal']->value*$_smarty_tpl->tpl_vars['order']->value->discount/100),2);?>
</span>
                                                    <span class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="okay_list_body_item">
                                        <div class="okay_list_row d_flex">
                                            <div class="okay_list_boding okay_list_ordfig_name">
                                                <div class="text_600 text_dark"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_coupon, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['order']->value->coupon_code) {?> (<?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_code;?>
)<?php }?></div>
                                            </div>
                                            <div class="okay_list_boding okay_list_ordfig_val">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="coupon_discount" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_discount;?>
" />
                                                    <span class="input-group-addon p-0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                </div>
                                            </div>
                                            <div class="okay_list_boding okay_list_ordfig_price">
                                                <div class="text_dark">
                                                    <span><?php echo round(($_smarty_tpl->tpl_vars['subtotal']->value-$_smarty_tpl->tpl_vars['subtotal']->value*$_smarty_tpl->tpl_vars['order']->value->discount/100-$_smarty_tpl->tpl_vars['order']->value->coupon_discount),2);?>
</span>
                                                    <span class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="okay_list_body_item">
                                        <div class="okay_list_row  d_flex">
                                            <div class="okay_list_boding okay_list_ordfig_name">
                                                <div class="text_600 text_dark boxes_inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_shipping, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <div class="boxes_inline">
                                                    <select name="delivery_id" class="selectpicker">
                                                        <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_not_selected, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                        <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deliveries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value->id==$_smarty_tpl->tpl_vars['delivery']->value->id) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="okay_list_boding okay_list_ordfig_val">
                                                <div class="input-group">
                                                    <input type=text name=delivery_price class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['order']->value->delivery_price;?>
'>
                                                    <span class="input-group-addon p-0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                </div>
                                            </div>
                                            <div class="okay_list_boding okay_list_ordfig_price">
                                                <div class="input-group"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-lg-4 col-md-12 mt-2">
                                    <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_payment_selected, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <div class="">
                                        <select name="payment_method_id" class="selectpicker">
                                            <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_not_selected, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php  $_smarty_tpl->tpl_vars['pm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pm']->key => $_smarty_tpl->tpl_vars['pm']->value) {
$_smarty_tpl->tpl_vars['pm']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['pm']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['pm']->value->id==$_smarty_tpl->tpl_vars['payment_method']->value->id) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pm']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12">
                                    <div class="text_dark text_500 text-xs-right mr-1 mt-1">
                                        <div class="h5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_total, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->total_price;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    </div>
                                    <div class="text_grey text_500 text-xs-right mr-1 mt-1">
                                        <?php if ($_smarty_tpl->tpl_vars['payment_method']->value) {?>
                                            <div class=" text-xs-right">
                                                <div class="h5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_to_pay, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->total_price,$_smarty_tpl->tpl_vars['payment_currency']->value->id);?>
 <?php echo $_smarty_tpl->tpl_vars['payment_currency']->value->sign;?>
</div>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-12 col-md-12 mt-1">

                                <label class="switch_label boxes_inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_paid, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                <label class="switch switch-default switch-pill switch-primary-outline-alt boxes_inline">
                                    <input class="switch-input" name="paid" value='1' type="checkbox" id="paid" <?php if ($_smarty_tpl->tpl_vars['order']->value->paid) {?>checked<?php }?>/>
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>

                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="col-xl-4 break_1300_12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_buyer_information, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="box_border_buyer">
                        <div class="mb-1">
                            <div class="heading_label boxes_inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_date, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="boxes_inline text_dark text_600"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
</div>
                        </div>
                        <div class="mb-1">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <input name="name" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
                        </div>
                        <div class="mb-1">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_phone, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <input name="phone" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
" />
                        </div>
                        <div class="mb-1">
                            <div class="heading_label">E-mail</div>
                            <input name="email" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->email, ENT_QUOTES, 'UTF-8', true);?>
" />
                        </div>
                        <div class="mb-1">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_adress, ENT_QUOTES, 'UTF-8', true);?>
 <a href="https://www.google.com/maps/search/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>
?hl=ru" target="_blank"><i class="fa fa-map-marker"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_on_map, ENT_QUOTES, 'UTF-8', true);?>
</a></div>
                            <textarea name="address" class="form-control short_textarea"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                        <div class="mb-1">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_comment, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <textarea name="comment" class="form-control short_textarea"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->comment, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                         <div class="mb-1">
                            <div class="heading_label boxes_inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_ip, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['order']->value->id) {?><a href="https://who.is/whois-ip/ip-address/<?php echo $_smarty_tpl->tpl_vars['order']->value->ip;?>
" target="_blank"><i class="fa fa-map-marker"></i> whois</a><?php }?></div>
                            <div class="boxes_inline text_dark text_600"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->ip, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        </div>
                    </div>
                    <div class="box_border_buyer">
                        <div class="mb-1">
                            <div style="position:relative;">
                                <?php if (!$_smarty_tpl->tpl_vars['user']->value) {?>
                                    <div class="heading_label">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_buyer_not_registred, ENT_QUOTES, 'UTF-8', true);?>

                                    </div>
                                    <div style="position:relative;">
                                        <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" />

                                        <input type="text" class="fn_user_complite form-control" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_user_select, ENT_QUOTES, 'UTF-8', true);?>
" />
                                    </div>
                                <?php } else { ?>
                                    <div class="fn_user_row">
                                        <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" />
                                        <div class="heading_label boxes_inline">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_buyer, ENT_QUOTES, 'UTF-8', true);?>

                                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'UserAdmin','id'=>$_smarty_tpl->tpl_vars['user']->value->id),$_smarty_tpl);?>
" target=_blank>
                                                 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                            </a>
                                        </div>
                                        <a href="javascript:;" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->users_delete, ENT_QUOTES, 'UTF-8', true);?>
" class="btn_close delete_grey fn_delete_user hint-bottom-right-t-info-s-small-mobile  hint-anim boxes_inline" >
                                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                        </a>
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->group_id>0) {?>
                                            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->group->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <?php } else { ?>
                                            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_not_in_group, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="box_border_buyer">
                        <div class="mb-1">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_language, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <select name="entity_lang_id" class="selectpicker">
                                <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['l']->value->id==$_smarty_tpl->tpl_vars['order']->value->lang_id) {?>selected=""<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_note, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <textarea name="note" class="form-control short_textarea"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->note, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-2">
            <button type="submit" class="btn btn_small btn_blue float-sm-right">
                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </button>
            <div class="checkbox_email float-sm-right text_dark mr-1">
                <input id="order_to_email" name="notify_user" type="checkbox" class="hidden_check_1"  value="1" />
                <label for="order_to_email" class="checkbox_label mr-h"></label>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_email, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </div>
        </div>
    </div>
</form>



<script src="design/js/autocomplete/jquery.autocomplete-min.js"></script>
<link rel="stylesheet" type="text/css" href="design/js/autocomplete/styles.css" media="screen" />

<script>
$(function() {
    // Удаление товара
    $(document).on( "click", "#fn_purchase .fn_remove_item", function() {
         $(this).closest(".fn_row").fadeOut(200, function() { $(this).remove(); });
         return false;
    });

    $(".fn_labels_show").click(function(){
        $(this).next('.fn_labels_hide').toggleClass("active_labels");
    });
    $(".fn_delete_labels_hide").click(function(){
        $(this).closest('.box_labels_hide').removeClass("active_labels");
    });

    $(".fn_from_date, .fn_to_date ").datepicker({
        dateFormat: 'dd-mm-yy'
    });

    $(document).on("change", ".fn_ajax_labels input", function () {
        elem = $(this);
       var order_id = parseInt($(this).closest(".fn_ajax_labels").data("order_id"));
       var state = "";
       session_id = '<?php echo $_SESSION['id'];?>
';
       var label_id = parseInt($(this).closest(".fn_ajax_labels").find("input").val());
       if($(this).closest(".fn_ajax_labels").find("input").is(":checked")){
            state = "add";
       } else {
            state = "remove";
       }

        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "ajax/update_order.php",
            data: {
                order_id : order_id,
                state : state,
                label_id : label_id,
                session_id : session_id
            },
            success: function(data){
                var msg = "";
                if(data){
                    elem.closest(".fn_ajax_label_wrapper").find(".fn_order_labels").html(data.data);
                    toastr.success(msg, "Success");
                } else {
                    toastr.error(msg, "Error");

                }
            }
        });
    });


    // Добавление товара
    var new_purchase = $('#fn_purchase .fn_new_purchase').clone(true);
    $('#fn_purchase .fn_new_purchase').remove().removeAttr('class');

    $("#fn_add_purchase").devbridgeAutocomplete({
    serviceUrl:'ajax/add_order_product.php',
    minChars:0,
    orientation:'auto',
    noCache: false,
    onSelect:
        function(suggestion){
            new_item = new_purchase.clone().appendTo('#fn_purchase');
            new_item.removeAttr('id');
            new_item.find('.fn_new_product').html(suggestion.data.name);
            new_item.find('.fn_new_product').attr('href', 'index.php?module=ProductAdmin&id='+suggestion.data.id);

            // Добавляем варианты нового товара
            var variants_select = new_item.find("select.fn_new_variant");

            for(var i in suggestion.data.variants) {
                variants_select.append("<option value='"+suggestion.data.variants[i].id+"' data-price='"+suggestion.data.variants[i].price+"' data-amount='"+suggestion.data.variants[i].stock+"' data-units='"+suggestion.data.variants[i].units+"'>"+suggestion.data.variants[i].name+"</option>");
            }

            if(suggestion.data.variants.length> 1 || suggestion.data.variants[0].name != '') {
                variants_select.show();
                variants_select.selectpicker();
            } else {
                variants_select.hide();
            }
            variants_select.find('option:first').attr('selected',true);

            variants_select.bind('change', function(){
                change_variant(variants_select);
            });
            change_variant(variants_select);

            if(suggestion.data.image) {
                new_item.find('.fn_new_image').attr("src", suggestion.data.image);
            } else {
                new_item.find('.fn_new_image').remove();
            }
            $("input#fn_add_purchase").val('').focus().blur();
            new_item.show();
        },
        formatResult:
            function(suggestions, currentValue){
                    var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
                    var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
                    return "<div>" + (suggestions.data.image?"<img align=absmiddle src='"+suggestions.data.image+"'> ":'') + "</div>" +  "<span>" + suggestions.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>') + "</span>";
                }


  });

  // Изменение цены и макс количества при изменении варианта
    function change_variant(element) {
        var price = element.find('option:selected').data('price');
        var amount = element.find('option:selected').data('amount');
        var units = element.find('option:selected').data('units');
        element.closest('.fn_row').find('input.fn_purchase_price').val(price);
        element.closest('.fn_row').find('.fn_purchase_units').text(units);
        var amount_input = element.closest('.fn_row').find('input.fn_purchase_amount');
        amount_input.val('1');
        amount_input.data('max',amount);
        return false;
  }

    $(".fn_user_complite").devbridgeAutocomplete({
        serviceUrl:'ajax/search_users.php',
        minChars:0,
        orientation:'auto',
        noCache: false,
        onSelect:
            function(suggestion){
                $('input[name="user_id"]').val(suggestion.data.id);
            },
            formatResult:
                function(suggestions, currentValue){
                        var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
                        var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
                        return "<span>" + suggestions.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>') + "</span>";
                    }
    });

    $(document).on("click", ".fn_delete_user", function () {
        $(this).closest(".fn_user_row").hide();
        $('input[name="user_id"]').val(0);
    });


    $("select.fn_purchase_variant").bind("change", function(){
        change_variant($(this));
    });

});

</script>

<?php }} ?>
