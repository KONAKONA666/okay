<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-13 20:17:55
         compiled from "backend\design\html\orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206805beb0743427ee7-23093119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c219f8baab12838ef457cd25a2b91967a651055b' => 
    array (
      0 => 'backend\\design\\html\\orders.tpl',
      1 => 1542121290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206805beb0743427ee7-23093119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'orders_count' => 0,
    'keyword' => 0,
    'message_error' => 0,
    'error_orders' => 0,
    'error_order_id' => 0,
    'status' => 0,
    'is_mobile' => 0,
    'is_tablet' => 0,
    'from_date' => 0,
    'to_date' => 0,
    'all_status' => 0,
    'order_status' => 0,
    'labels' => 0,
    'l' => 0,
    'label' => 0,
    'orders' => 0,
    'order' => 0,
    'orders_status' => 0,
    'currency' => 0,
    'purchase' => 0,
    'settings' => 0,
    'change_label' => 0,
    'change_status' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beb07435fcb54_65637556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beb07435fcb54_65637556')) {function content_5beb07435fcb54_65637556($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->general_orders, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if ($_smarty_tpl->tpl_vars['orders_count']->value) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_orders, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['orders_count']->value;?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_no, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['orders_count']->value>0&&!$_smarty_tpl->tpl_vars['keyword']->value) {?>
                    <div class="export_block hint-bottom-middle-t-info-s-small-mobile hint-anim" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_export, ENT_QUOTES, 'UTF-8', true);?>
">
                        <span class="fn_start_export fa fa-file-excel-o"></span>
                    </div>
                <?php }?>
            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrderAdmin'),$_smarty_tpl);?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-5 col-xs-12 float-xs-right">
        <div class="boxed_search">
            <form class="search" method="get">
                <input type="hidden" name="module" value="OrdersAdmin">
                <div class="input-group">
                    <input name="keyword" class="form-control" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_search, ENT_QUOTES, 'UTF-8', true);?>
" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn_blue"><i class="fa fa-search"></i> <span class="hidden-md-down"></span></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='error_closing') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_in, ENT_QUOTES, 'UTF-8', true);?>

                        <?php  $_smarty_tpl->tpl_vars['error_order_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error_order_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error_order_id']->key => $_smarty_tpl->tpl_vars['error_order_id']->value) {
$_smarty_tpl->tpl_vars['error_order_id']->_loop = true;
?>
                            <div>
                                № <?php echo $_smarty_tpl->tpl_vars['error_order_id']->value;?>

                            </div>
                        <?php } ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_shortage, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<div class="boxed fn_toggle_wrap">
    <div class="row">
        <div class="col-lg-12 col-md-12 ">
            <div class="fn_toggle_wrap">
                <div class="heading_box visible_md">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_filter, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="boxed_sorting toggle_body_wrap off fn_card">
                <div class="row">
                    <div class="col-md-11 col-lg-11 col-xl-7 col-sm-12 mb-1">
                        <div class="date">
                            
                            <form class="date_filter row" method="get">
                                <input type="hidden" name="module" value="OrdersAdmin">
                                <input type="hidden" name="status" value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
">

                                <div class="col-md-5 col-lg-5 pr-0 pl-0">
                                    <div class="input-group mobile_input-group">
                                        <span class="input-group-addon-date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_from, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value||$_smarty_tpl->tpl_vars['is_tablet']->value) {?>
                                            <input type="date" class="fn_from_date form-control" name="from_date" value="<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
" autocomplete="off" >
                                        <?php } else { ?>
                                            <input type="text" class="fn_from_date form-control" name="from_date" value="<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
" autocomplete="off" >
                                        <?php }?>
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-lg-5 pr-0 pl-0">
                                    <div class="input-group mobile_input-group">
                                        <span class="input-group-addon-date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_to, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value||$_smarty_tpl->tpl_vars['is_tablet']->value) {?>
                                            <input type="date" class="fn_to_date form-control" name="to_date" value="<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
" autocomplete="off" >
                                            <?php } else { ?>
                                            <input type="text" class="fn_to_date form-control" name="to_date" value="<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
" autocomplete="off" >
                                        <?php }?>
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-lg-2 pr-0 mobile_text_right">
                                    <button class="btn btn_blue" type="submit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <?php if ($_smarty_tpl->tpl_vars['all_status']->value) {?>
                        <div class="col-md-6 col-lg-4 col-sm-12">
                            <select name="status" class="selectpicker"  onchange="location = this.value;">
                                <?php  $_smarty_tpl->tpl_vars['order_status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order_status']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order_status']->key => $_smarty_tpl->tpl_vars['order_status']->value) {
$_smarty_tpl->tpl_vars['order_status']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersAdmin','status'=>$_smarty_tpl->tpl_vars['order_status']->value->id,'keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['status']->value==$_smarty_tpl->tpl_vars['order_status']->value->id) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrdersAdmin','status'=>'all','keyword'=>null,'id'=>null,'page'=>null,'label'=>null,'from_date'=>null,'to_date'=>null),$_smarty_tpl);?>
" <?php if ($_GET['status']&&$_smarty_tpl->tpl_vars['status']->value=="all"||!$_smarty_tpl->tpl_vars['status']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['labels']->value) {?>
                        <div class="col-md-6 col-lg-4 col-sm-12">
                            <select class="selectpicker" onchange="location = this.value;">
                                <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['labels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('label'=>$_smarty_tpl->tpl_vars['l']->value->id),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['label']->value->id==$_smarty_tpl->tpl_vars['l']->value->id) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('label'=>null),$_smarty_tpl);?>
" <?php if (!$_smarty_tpl->tpl_vars['label']->value) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    <?php }?>
                </div>
            </div>
            </div>
        </div>
    </div>

    
    <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="fn_form_list" method="post">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

                    <div class="orders_list okay_list products_list">
                        
                        <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_order_number">№ </div>
                            <div class="okay_list_heading okay_list_orders_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_full_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_order_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_status, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_order_product_count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_products, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_orders_price"><?php echo $_smarty_tpl->tpl_vars['btr']->value->general_sales_amount;?>
</div>
                            <div class="okay_list_heading okay_list_order_marker"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_label, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                        
                        <div class="okay_list_body">
                            <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
                            <div class="fn_row okay_list_body_item " style="border-left: 5px solid #<?php echo $_smarty_tpl->tpl_vars['order']->value->status_color;?>
;">
                                <div class="okay_list_row">
                                    <div class="okay_list_boding okay_list_check">
                                        <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
"/>
                                        <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
"></label>
                                    </div>

                                    <div class="okay_list_boding okay_list_order_number">
                                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrderAdmin','id'=>$_smarty_tpl->tpl_vars['order']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_order, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</a>
                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->paid) {?>
                                            <div class="order_paid">
                                                <span class="tag tag-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_paid, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            </div>
                                        <?php }?>
                                    </div>

                                    <div class="okay_list_boding okay_list_orders_name">
                                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'OrderAdmin','id'=>$_smarty_tpl->tpl_vars['order']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
" class="text_dark text_bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->note) {?>
                                            <div class="note"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->note, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <?php }?>
                                        <div class="hidden-lg-up mt-q">
                                            <span class="tag tag-warning"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orders_status']->value[$_smarty_tpl->tpl_vars['order']->value->status_id]->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </div>
                                        <div class="mt-q"><span class="hidden-md-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_order_in, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <span class="tag tag-default"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
 | <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
</span></div>
                                    </div>

                                    <div class="okay_list_boding okay_list_order_status">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orders_status']->value[$_smarty_tpl->tpl_vars['order']->value->status_id]->name, ENT_QUOTES, 'UTF-8', true);?>

                                    </div>

                                    <div class="okay_list_boding okay_list_order_product_count">
                                        <span><?php echo count($_smarty_tpl->tpl_vars['order']->value->purchases);?>
</span>
                                        <?php if (count($_smarty_tpl->tpl_vars['order']->value->purchases)>0) {?>
                                            <span  class="fn_orders_toggle">
                                                <i class="fn_icon_arrow fa fa-angle-down fa-lg m-t-2 "></i>
                                            </span>
                                        <?php }?>
                                    </div>

                                    <div class="okay_list_boding okay_list_orders_price">
                                        <div class="input-group">
                                            <span class="form-control">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->total_price, ENT_QUOTES, 'UTF-8', true);?>

                                            </span>
                                            <span class="input-group-addon">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

                                            </span>
                                        </div>
                                    </div>

                                    <div class="okay_list_boding okay_list_order_marker">
                                        <span class="fn_ajax_label_wrapper">
                                            <span class="fn_labels_show box_labels_show"><?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'tag'), 0);?>
 <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_choose, ENT_QUOTES, 'UTF-8', true);?>
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
" type="checkbox" class="hidden_check_1"  value="<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" <?php if (is_array($_smarty_tpl->tpl_vars['order']->value->labels_ids)&&in_array($_smarty_tpl->tpl_vars['l']->value->id,$_smarty_tpl->tpl_vars['order']->value->labels_ids)) {?>checked=""<?php }?> />
                                                            <label   for="l<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" class="label_labels"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></label>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                            <div class="fn_order_labels orders_labels">
                                                <?php echo $_smarty_tpl->getSubTemplate ("labels_ajax.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                            </div>
                                        </span>
                                    </div>

                                    <div class="okay_list_boding okay_list_close">
                                        
                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));" >
                                           <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                        </button>
                                    </div>
                                </div>
                                
                                <div class="okay_list_row">
                                    <?php if (count($_smarty_tpl->tpl_vars['order']->value->purchases)>0) {?>
                                        <div class="orders_purchases_block" style="display: none">
                                            <div class="purchases_table">
                                                <div class="purchases_head">
                                                    <div class="purchases_heading purchases_table_orders_num">№</div>
                                                    <div class="purchases_heading purchases_table_orders_sku"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_sku, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                    <div class="purchases_heading purchases_table_orders_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                    <div class="purchases_heading purchases_table_orders_price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                    <div class="purchases_heading col-lg-2 purchases_table_orders_unit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_qty, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                    <div class="purchases_heading purchases_table_orders_total"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_total_price, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                </div>
                                                <div class="purchases_body">
                                                    <?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value->purchases; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['purchase']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
 $_smarty_tpl->tpl_vars['purchase']->iteration++;
?>
                                                        <div class="purchases_body_items">
                                                            <div class="purchases_body_item">
                                                                <div class="purchases_bodyng purchases_table_orders_num"><?php echo $_smarty_tpl->tpl_vars['purchase']->iteration;?>
</div>
                                                                <div class="purchases_bodyng purchases_table_orders_sku"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['purchase']->value->sku)===null||$tmp==='' ? "&mdash;" : $tmp);?>
</div>
                                                                <div class="purchases_bodyng purchases_table_orders_name">
                                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>

                                                                    <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant_name) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?>
                                                                </div>
                                                                <div class="purchases_bodyng purchases_table_orders_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['purchase']->value->price);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                                <div class="purchases_bodyng purchases_table_orders_unit"> <?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
<?php if ($_smarty_tpl->tpl_vars['purchase']->value->units) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->units, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></div>
                                                                <div class="purchases_bodyng purchases_table_orders_total"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->amount*$_smarty_tpl->tpl_vars['purchase']->value->price));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</div>

                                                             </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        
                        <div class="okay_list_footer">
                            <div class="okay_list_foot_left">
                                <div class="okay_list_heading okay_list_check">
                                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                                    <label class="okay_ckeckbox" for="check_all_2"></label>
                                </div>
                                <div class="okay_list_option">
                                    <select name="action" class="selectpicker fn_change_orders">
                                        <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_select_action, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option data-item="status" value="change_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_change_status, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option data-item="label" value="set_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_set_label, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option data-item="label" value="unset_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_unset_label, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option data-item="remove" value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_permanently_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    </select>
                                </div>
                                <div class="okay_list_option fn_show_label" style="display: none">
                                    <select name="change_label_id" class="selectpicker px-0 fn_labels_select" >
                                        <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_select_label, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php  $_smarty_tpl->tpl_vars['change_label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['change_label']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['labels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['change_label']->key => $_smarty_tpl->tpl_vars['change_label']->value) {
$_smarty_tpl->tpl_vars['change_label']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['change_label']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['change_label']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="okay_list_option fn_show_status" style="display: none;">
                                    <select name="change_status_id" class="selectpicker px-0 fn_labels_select">
                                        <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_select_status, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php  $_smarty_tpl->tpl_vars['change_status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['change_status']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['change_status']->key => $_smarty_tpl->tpl_vars['change_status']->value) {
$_smarty_tpl->tpl_vars['change_status']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['change_status']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['change_status']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class=" btn btn_small btn_blue">
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
                <?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->orders_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/backend/design/js/piecon/piecon.js"></script>



<script>

$(function() {

    $(document).on('click','.fn_orders_toggle',function(){
        $(this).find('.fn_icon_arrow').toggleClass('rotate_180');
        $(this).parents('.fn_row').find('.orders_purchases_block').slideToggle();
    });

    $(".fn_labels_show").click(function(){
        $(this).next('.fn_labels_hide').toggleClass("active_labels");
    });
    $(".fn_delete_labels_hide").click(function(){
        $(this).closest('.box_labels_hide').removeClass("active_labels");
    });

    if($(window).width() >= 1199 ){
        $(".fn_from_date, .fn_to_date ").datepicker({
            dateFormat: 'dd-mm-yy'
        });
    }


    $(document).on("change", ".fn_change_orders", function () {
       var item = $(this).find("option:selected").data("item");
       if(item == "status") {
           $(".fn_show_label").hide();
           $(".fn_show_status").show();

       } else if (item == "label") {
           $(".fn_show_label").show();
           $(".fn_show_status").hide();
       } else {
           $(".fn_show_label").hide();
           $(".fn_show_status").hide();
       }

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
    
    var status = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8', true);?>
',
        label='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value->id, ENT_QUOTES, 'UTF-8', true);?>
',
        from_date = '<?php echo $_smarty_tpl->tpl_vars['from_date']->value;?>
',
        to_date = '<?php echo $_smarty_tpl->tpl_vars['to_date']->value;?>
';
    
    // On document load
    $(document).on('click','.fn_start_export',function() {
        
        Piecon.setOptions({fallback: 'force'});
        Piecon.setProgress(0);
        var progress_item = $("#progressbar"); //указываем селектор элемента с анимацией
        progress_item.show();
        do_export('',progress_item);
    });

    function do_export(page,progress) {
        page = typeof(page) != 'undefined' ? page : 1;
        label = typeof(label) != 'undefined' ? label : null;
        status = typeof(status) != 'undefined' ? status : null;
        from_date = typeof(from_date) != 'undefined' ? from_date : null;
        to_date = typeof(to_date) != 'undefined' ? to_date : null;
        $.ajax({
            url: "ajax/export_orders.php",
            data: {
                page:page, 
                label:label,
                status:status, 
                from_date:from_date, 
                to_date:to_date
            },
            dataType: 'json',
            success: function(data){
                if(data && !data.end) {
                    Piecon.setProgress(Math.round(100*data.page/data.totalpages));
                    progress.attr('value',100*data.page/data.totalpages);
                    do_export(data.page*1+1,progress);
                }
                else {
                    Piecon.setProgress(100);
                    progress.attr('value','100');
                    window.location.href = 'files/export/export_orders.csv';
                    progress.fadeOut(500);
                }
            },
            error:function(xhr, status, errorThrown) {
                alert(errorThrown+'\n'+xhr.responseText);
            }
        });
    }
});
</script>

<?php }} ?>
