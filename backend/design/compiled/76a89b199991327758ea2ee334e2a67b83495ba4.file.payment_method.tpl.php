<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-13 18:19:24
         compiled from "backend\design\html\payment_method.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46885beaeb7cf0e394-13999905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76a89b199991327758ea2ee334e2a67b83495ba4' => 
    array (
      0 => 'backend\\design\\html\\payment_method.tpl',
      1 => 1542121290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46885beaeb7cf0e394-13999905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_method' => 0,
    'btr' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'lang_id' => 0,
    'config' => 0,
    'payment_modules' => 0,
    'payment_module' => 0,
    'currencies' => 0,
    'currency' => 0,
    'setting' => 0,
    'option' => 0,
    'payment_settings' => 0,
    'deliveries' => 0,
    'delivery' => 0,
    'payment_deliveries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beaeb7d0f0f59_04170270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beaeb7d0f0f59_04170270')) {function content_5beaeb7d0f0f59_04170270($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['payment_method']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['payment_method']->value->name, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->payment_method_new, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<div class="row">
    <div class="col-lg-7 col-md-7">
        <?php if (!$_smarty_tpl->tpl_vars['payment_method']->value->id) {?>
            <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->payment_method_add, ENT_QUOTES, 'UTF-8', true);?>
</div>
        <?php } else { ?>
            <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
        <?php }?>
    </div>
    <div class="col-lg-7 col-md-7 text-xs-right float-xs-right"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value=='added') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->payment_method_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->payment_method_updated, ENT_QUOTES, 'UTF-8', true);?>

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


<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='empty_name') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_title, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<form method="post" enctype="multipart/form-data" class="fn_fast_button">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />

    <div class="row">
        <div class="col-xs-12">
            <div class="boxed">
                
                <div class="row d_flex">
                    <div class="col-lg-10 col-md-9 col-sm-12">
                        <div class="heading_label">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                        <div class="form-group">
                            <input class="form-control mb-h" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="activity_of_switch">
                            <div class="activity_of_switch_item"> 
                                <div class="okay_switch clearfix">
                                    <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="enabled" value='1' type="checkbox" id="visible_checkbox" <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->enabled) {?>checked=""<?php }?>/>
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
    </div>

    
    <div class="row">
        <div class="col-lg-4 col-md-12 pr-0">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_image, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <ul class="brand_images_list">
                        <li class="brand_image_item">
                            <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->image) {?>
                                <input type="hidden" class="fn_accept_delete" name="delete_image" value="">
                                <div class="fn_parent_image">
                                    <div class="category_image image_wrapper fn_image_wrapper text-xs-center">
                                        <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                        <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['payment_method']->value->image,300,120,false,$_smarty_tpl->tpl_vars['config']->value->resized_payments_dir);?>
" alt="" />
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="fn_parent_image"></div>
                            <?php }?>
                            <div class="fn_upload_image dropzone_block_image <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->image) {?> hidden<?php }?>">
                                <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                                <input class="dropzone_image" name="image" type="file" />
                            </div>
                            <div class="category_image image_wrapper fn_image_wrapper fn_new_image text-xs-center">
                                <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                <img src="" alt="" />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->payment_method_settings, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 toggle_body_wrap on fn_card">
                        <div class="row">
                            <div class="col-lg-6 pr-0">
                                <div class="form-group clearfix">
                                    <div class="heading_label" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->payment_method_type, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <select name="module" class="selectpicker">
                                        <option value='null'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->payment_method_manual, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php  $_smarty_tpl->tpl_vars['payment_module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_module']->key => $_smarty_tpl->tpl_vars['payment_module']->value) {
$_smarty_tpl->tpl_vars['payment_module']->_loop = true;
?>
                                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_module']->key, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['payment_method']->value->module==$_smarty_tpl->tpl_vars['payment_module']->key) {?>selected<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_module']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group clearfix">
                                    <div class="heading_label" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_currency, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <select name="currency_id" class="selectpicker">
                                        <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['currency']->value->id==$_smarty_tpl->tpl_vars['payment_method']->value->currency_id) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <?php  $_smarty_tpl->tpl_vars['payment_module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_module']->key => $_smarty_tpl->tpl_vars['payment_module']->value) {
$_smarty_tpl->tpl_vars['payment_module']->_loop = true;
?>
                                    <div class="row fn_module_settings" <?php if ($_smarty_tpl->tpl_vars['payment_module']->key!=$_smarty_tpl->tpl_vars['payment_method']->value->module) {?>style="display:none;"<?php }?> module="<?php echo $_smarty_tpl->tpl_vars['payment_module']->key;?>
">
                                        <div class="col-lg-12 col-md-12 heading_box"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_module']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                        <?php  $_smarty_tpl->tpl_vars['setting'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['setting']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_module']->value->settings; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['setting']->key => $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->_loop = true;
?>
                                            <?php $_smarty_tpl->tpl_vars['variable_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['setting']->value->variable, null, 0);?>
                                            <?php if (count($_smarty_tpl->tpl_vars['setting']->value->options)>1) {?>
                                                <div class="col-lg-6">
                                                    <div class="form-group clearfix">
                                                        <div class="heading_label" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                        <div class="">
                                                            <select name="payment_settings[<?php echo $_smarty_tpl->tpl_vars['setting']->value->variable;?>
]" class="selectpicker">
                                                                <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setting']->value->options; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->value;?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value->value==$_smarty_tpl->tpl_vars['payment_settings']->value[$_smarty_tpl->tpl_vars['setting']->value->variable]) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } elseif (count($_smarty_tpl->tpl_vars['setting']->value->options)==1) {?>
                                                <?php $_smarty_tpl->tpl_vars['option'] = new Smarty_variable($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['first'][0][0]->first_modifier($_smarty_tpl->tpl_vars['setting']->value->options), null, 0);?>
                                                <div class="col-lg-6">
                                                    <div class="form-group clearfix">
                                                        <div class="boxes_inline">
                                                            <input name="payment_settings[<?php echo $_smarty_tpl->tpl_vars['setting']->value->variable;?>
]" class="hidden_check" type="checkbox" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value->value==$_smarty_tpl->tpl_vars['payment_settings']->value[$_smarty_tpl->tpl_vars['setting']->value->variable]) {?>checked<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->variable;?>
" />
                                                            <label class="okay_ckeckbox" for="<?php echo $_smarty_tpl->tpl_vars['setting']->value->variable;?>
"></label>
                                                        </div>
                                                        <div class="heading_label boxes_inline" for="<?php echo $_smarty_tpl->tpl_vars['setting']->value->variable;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="col-lg-6">
                                                    <div class="form-group clearfix">
                                                        <div class="heading_label" for="<?php echo $_smarty_tpl->tpl_vars['setting']->value->variable;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setting']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                        <div class="">
                                                            <input name="payment_settings[<?php echo $_smarty_tpl->tpl_vars['setting']->value->variable;?>
]" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value[$_smarty_tpl->tpl_vars['setting']->value->variable], ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo $_smarty_tpl->tpl_vars['setting']->value->variable;?>
"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->payment_method_shipping, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="row wrap_payment_item">
                       <?php  $_smarty_tpl->tpl_vars['delivery'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['delivery']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deliveries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['delivery']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['delivery']->key => $_smarty_tpl->tpl_vars['delivery']->value) {
$_smarty_tpl->tpl_vars['delivery']->_loop = true;
 $_smarty_tpl->tpl_vars['delivery']->iteration++;
?>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="payment_item">
                                    <input class="hidden_check" id="id_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['delivery']->value->id,$_smarty_tpl->tpl_vars['payment_deliveries']->value)) {?>checked<?php }?> type="checkbox" name="payment_deliveries[]">
                                    <label for="id_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
" class="okay_ckeckbox <?php if (in_array($_smarty_tpl->tpl_vars['delivery']->value->id,$_smarty_tpl->tpl_vars['payment_deliveries']->value)) {?>active_payment<?php }?>">
                                        <span class="payment_img_wrap">
                                            <?php if ($_smarty_tpl->tpl_vars['delivery']->value->image) {?>
                                                <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['delivery']->value->image,50,50,false,$_smarty_tpl->tpl_vars['config']->value->resized_deliveries_dir);?>
">
                                            <?php } else { ?>
                                                <img width="50" src="design/images/no_image.png"/>
                                            <?php }?>
                                        </span>
                                        <span class="payment_name_wrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>

                                    </label>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['delivery']->iteration%3==0) {?>
                                <div class="col-xs-12 clearfix"></div>
                            <?php }?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed match fn_toggle_wrap tabs">
                <div class="heading_tabs">
                    <div class="tab_navigation">
                        <a href="#tab1" class="tab_navigation_link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->payment_method_description, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="tab_container">
                        <div id="tab1" class="tab">
                            <textarea name="description" class="editor_small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-12 col-md-12 mt-1">
                        <button type="submit" class="btn btn_small btn_blue float-md-right">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<?php echo $_smarty_tpl->getSubTemplate ('tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



    <script>
        $(function() {
            $('div.fn_module_settings').filter(':hidden').find("input, select, textarea").attr("disabled", true);

            $('select[name=module]').on('change',function(){
                $('div.fn_module_settings').hide().find("input, select, textarea").attr("disabled", true);
                $('div.fn_module_settings[module='+$(this).val()+']').show().find("input, select, textarea").attr("disabled", false);
                $('div.fn_module_settings[module='+$(this).val()+']').find('select').selectpicker('refresh');
            });
        });
    </script>

<?php }} ?>
