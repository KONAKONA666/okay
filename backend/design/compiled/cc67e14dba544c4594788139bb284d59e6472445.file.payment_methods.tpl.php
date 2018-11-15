<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-13 18:11:10
         compiled from "backend\design\html\payment_methods.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198025beae98e8b80a0-52730880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc67e14dba544c4594788139bb284d59e6472445' => 
    array (
      0 => 'backend\\design\\html\\payment_methods.tpl',
      1 => 1542121290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198025beae98e8b80a0-52730880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'payment_methods' => 0,
    'payment_method' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beae98e948943_14116960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beae98e948943_14116960')) {function content_5beae98e948943_14116960($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->payment_methods_methods, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->payment_methods_methods, ENT_QUOTES, 'UTF-8', true);?>

            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'PaymentMethodAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->payment_methods_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="boxed fn_toggle_wrap">
    <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
        <form class="fn_form_list" method="post">
            <div class="okay_list products_list fn_sort_list">
                <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                
                <div class="okay_list_head">
                    <div class="okay_list_boding okay_list_drag"></div>
                    <div class="okay_list_heading okay_list_check">
                        <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                        <label class="okay_ckeckbox" for="check_all_1"></label>
                    </div>
                    <div class="okay_list_heading okay_list_delivery_photo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_image, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_delivery_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_delivery_condit"></div>
                    <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_close"></div>
                </div>

                
                <div class="deliveries_wrap okay_list_body sortable">
                    <?php  $_smarty_tpl->tpl_vars['payment_method'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_method']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->key => $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->_loop = true;
?>
                        <div class="fn_row okay_list_body_item fn_sort_item">
                            <div class="okay_list_row">
                                <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->position;?>
">

                                <div class="okay_list_boding okay_list_drag move_zone">
                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                </div>

                                <div class="okay_list_boding okay_list_check">
                                    <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
"/>
                                    <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
"></label>
                                </div>

                                <div class="okay_list_boding okay_list_delivery_photo">
                                    <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->image) {?>
                                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'PaymentMethodAdmin','id'=>$_smarty_tpl->tpl_vars['payment_method']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier(htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->image, ENT_QUOTES, 'UTF-8', true),55,55,false,$_smarty_tpl->tpl_vars['config']->value->resized_payments_dir);?>
"/>
                                        </a>
                                    <?php } else { ?>
                                        <img height="55" width="55" src="design/images/no_image.png"/>
                                    <?php }?>
                                </div>

                                <div class="okay_list_boding okay_list_delivery_name">
                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'PaymentMethodAdmin','id'=>$_smarty_tpl->tpl_vars['payment_method']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </div>
                                <div class="okay_list_boding okay_list_delivery_condit"></div>
                                <div class="okay_list_boding okay_list_status">
                                    
                                    <label class="switch switch-default">
                                        <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->enabled) {?>fn_active_class<?php }?>" data-module="payment" data-action="enabled" data-id="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
" name="visible" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->enabled) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>

                                <div class="okay_list_boding okay_list_close">
                                    
                                    <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                
                <div class="okay_list_footer fn_action_block">
                    <div class="okay_list_foot_left">
                        <div class="okay_list_boding okay_list_drag"></div>
                        <div class="okay_list_heading okay_list_check">
                            <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                            <label class="okay_ckeckbox" for="check_all_2"></label>
                        </div>
                        <div class="okay_list_option">
                            <select name="action" class="selectpicker">
                                <option value="enable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="disable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn_small btn_blue">
                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
            </div>
        </form>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->payment_methods_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>
<?php }} ?>
