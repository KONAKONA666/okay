<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-13 19:27:40
         compiled from "D:\www\enabled\okaycms\design\okay_shop\html\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27115beafb7c9f68c4-77047687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '649d773b4954b4cf28936cf95f84d15de5c6404e' => 
    array (
      0 => 'D:\\www\\enabled\\okaycms\\design\\okay_shop\\html\\product.tpl',
      1 => 1542121290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27115beafb7c9f68c4-77047687',
  'function' => 
  array (
    'comments_tree' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'product' => 0,
    'brand' => 0,
    'lang' => 0,
    'lang_link' => 0,
    'settings' => 0,
    'image' => 0,
    'wished_products' => 0,
    'comparison' => 0,
    'v' => 0,
    'currency' => 0,
    'f' => 0,
    'category' => 0,
    'comments' => 0,
    'comment' => 0,
    'level' => 0,
    'children' => 0,
    'error' => 0,
    'comment_name' => 0,
    'comment_email' => 0,
    'comment_text' => 0,
    'captcha_product' => 0,
    'prev_product' => 0,
    'next_product' => 0,
    'related_products' => 0,
    'p' => 0,
    'related_posts' => 0,
    'r_p' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beafb7cc158c8_43320718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beafb7cc158c8_43320718')) {function content_5beafb7cc158c8_43320718($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/products/".((string)$_smarty_tpl->tpl_vars['product']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>

<div class="block padding">
    <div class="fn_product product" itemscope itemtype="http://schema.org/Product">
        
        
        <h1 class="product_heading">
            <span data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)==1&&!empty($_smarty_tpl->tpl_vars['product']->value->variant->name)) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->variant->name, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></span>
        </h1>

        
        <div class="sku clearfix">
            <?php if ($_smarty_tpl->tpl_vars['brand']->value) {?>
                <div class="product_brand_block clearfix">
                    <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_brand_name;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></span>
                </div>
            <?php }?>
            <div class="<?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->sku) {?> hidden<?php }?>">
                <span data-language="product_sku"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_sku;?>
:</span>
                <span class="fn_sku sku_nubmer"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->variant->sku, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </div>
        </div>

        <div class="row fn_transfer">
            <div class="col-lg-5 col-xl-6">
                <div class="product_image">
                    
                    <?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,800,600,'w');?>
" data-fancybox="group" data-caption="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                            <img class="fn_img product_img" itemprop="image" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,300,300);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                        </a>
                    <?php } else { ?>
                        <img class="fn_img" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/no_image.png" width="340" height="340" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                    <?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['product']->value->special) {?>
                        <img class="promo_img" alt='<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
' title="<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
"  src='files/special/<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
'/>
                    <?php }?>
                </div>

                
                <?php if (count($_smarty_tpl->tpl_vars['product']->value->images)>1) {?>
                    <div class="fn_images images clearfix">
                        
                        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['cut'][0][0]->cut_modifier($_smarty_tpl->tpl_vars['product']->value->images); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
 $_smarty_tpl->tpl_vars['image']->iteration++;
?>
                            <div class="images_item">
                                <a class="images_link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,800,600,'w');?>
" data-fancybox="group" data-caption="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 #<?php echo $_smarty_tpl->tpl_vars['image']->iteration;?>
">
                                    <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,75,75);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                <?php }?> 
            </div>

            <div class="col-lg-7 col-xl-6">
                <div class="product_details">
                    <div class="row">
                        <div class="col-sm-6">
                            
                            <div>
                                <?php if (in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['wished_products']->value)) {?>
                                    <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="fn_wishlist selected product_wish" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_remove_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_favorite;?>
" data-language="product_remove_favorite"></a>
                                <?php } else { ?>
                                    <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="fn_wishlist product_wish" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_remove_favorite;?>
" data-language="product_add_favorite"></a>
                                <?php }?>
                            </div>

                            
                            <div>
                                <?php if (!in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['comparison']->value->ids)) {?>
                                    <a class="fn_comparison product_compare" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_remove_comparison;?>
" data-language="product_add_comparison"></a>
                                <?php } else { ?>
                                    <a class="fn_comparison selected product_compare" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_remove_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_comparison;?>
" data-language="product_remove_comparison"></a>
                                <?php }?>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="clearfix">
                                <span class="details_label" data-language="product_rating"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_rating;?>
:</span>

                                
                                <div id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="product_rating"<?php if ($_smarty_tpl->tpl_vars['product']->value->rating>0) {?> itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"<?php }?>>
                                    
                                    <span class="rating_starOff">
                                        <span class="rating_starOn" style="width:<?php echo $_smarty_tpl->tpl_vars['product']->value->rating*90/sprintf('%.0f',5);?>
px;"></span>
                                    </span>
                                    <span class="rating_text"></span>

                                    
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value->rating>0) {?>
                                        <span class="hidden" itemprop="reviewCount"><?php echo sprintf("%.0f",$_smarty_tpl->tpl_vars['product']->value->votes);?>
</span>
                                        <span class="hidden" itemprop="ratingValue">(<?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['product']->value->rating);?>
)</span>
                                        
                                        <span class="hidden" itemprop="bestRating" style="display:none;">5</span>
                                    <?php } else { ?>
                                        <span class="hidden">(<?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['product']->value->rating);?>
)</span>
                                    <?php }?>
                                </div>
                            </div>

                            
                            <span class="details_label" data-language="available"><?php echo $_smarty_tpl->tpl_vars['lang']->value->available;?>
:</span>

                            <div class="available">
                                <span class="no_stock fn_not_stock<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock>0) {?> hidden<?php }?>" data-language="product_out_of_stock"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_out_of_stock;?>
</span>

                                <span class="in_stock fn_in_stock<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock<1) {?> hidden<?php }?>" data-language="product_in_stock"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_in_stock;?>
</span>
                            </div>
                        </div>
                    </div>

                    <form class="fn_variants" action="/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
cart">
                        <div class="row">
                            <div class="col-sm-6">
                                
                                <select name="variant" class="fn_variant variant_select<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?> hidden<?php }?>">
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" data-price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
" data-stock="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?> data-cprice="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['v']->value->sku) {?> data-sku="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->sku, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['v']->value->units) {?>data-units="<?php echo $_smarty_tpl->tpl_vars['v']->value->units;?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-sm-6 fn_is_stock<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock<1) {?> hidden<?php }?>">
                                <span class="details_label quontity_label" data-language="product_quantity">
                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value->product_quantity;?>
<span class="fn_units"><?php if ($_smarty_tpl->tpl_vars['product']->value->variant->units) {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->variant->units, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>:
                                </span>

                                
                                <div class="amount fn_product_amount">
                                    <span class="minus">&minus;</span>
                                    <input class="input_amount" type="text" name="amount" value="1" data-max="<?php echo $_smarty_tpl->tpl_vars['product']->value->variant->stock;?>
">
                                    <span class="plus">&plus;</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                            <div class="col-sm-6">
                                
                                <div class="old_price<?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?> hidden<?php }?>">
                                    <span class="fn_old_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->compare_price);?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

                                </div>

                                
                                <div class="price ">
                                    <span class="fn_price" itemprop="price" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->price,'',false);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->price);?>
</span>
                                    <span itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                            </div>

                            <div class="col-sm-6 product_buttons">
                                <?php if (!$_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?>
                                    
                                    <div class="fn_not_preorder <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock>0) {?> hidden<?php }?>">
                                        <button class="disable_button" type="button" data-language="product_out_of_stock"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_out_of_stock;?>
</button>
                                    </div>
                                <?php } else { ?>
                                    
                                    <div class="fn_is_preorder <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock>0) {?> hidden<?php }?>">
                                        <button class="button product_btn" type="submit" data-language="product_pre_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_pre_order;?>
</button>
                                    </div>
                                <?php }?>
                                
                                
                                <button class="fn_is_stock button product_btn<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock<1) {?> hidden<?php }?>" type="submit" data-language="product_add_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_cart;?>
</button>

                                
                                <span class="hidden">
                                    <time itemprop="priceValidUntil" datetime="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['product']->value->created,'Ymd');?>
"></time>
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock>0) {?>
                                    <link itemprop="availability" href="https://schema.org/InStock" />
                                    <?php } else { ?>
                                    <link itemprop="availability" href="http://schema.org/OutOfStock" />
                                    <?php }?>
                                    <link itemprop="itemCondition" href="https://schema.org/NewCondition" />
                                    <span itemprop="seller" itemscope itemtype="http://schema.org/Organization">
                                    <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['settings']->value->company_name;?>
</span></span>
                                </span>
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        
                        <div class="col-sm-6">
                            <div class="info_delivery fn_col">
                                <div class="h5">
                                    <span data-language="product_delivery"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery;?>
</span>
                                </div>
                                <p data-language="product_delivery_1"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery_1;?>
</p>
                                <p data-language="product_delivery_2"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery_2;?>
</p>
                                <p data-language="product_delivery_3"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery_3;?>
</p>
                                <p data-language="product_delivery_4"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery_4;?>
</p>
                            </div>
                        </div>

                        
                        <div class="col-sm-6">
                            <div class="info_payment fn_col">
                                <div class="h5">
                                    <span data-language="product_payment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment;?>
</span>
                                </div>
                                <p data-language="product_payment_1"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment_1;?>
</p>
                                <p data-language="product_payment_2"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment_2;?>
</p>
                                <p data-language="product_payment_3"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment_3;?>
</p>
                                <p data-language="product_payment_4"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment_4;?>
</p>
                            </div>
                        </div>
                    </div>

                    
                    <div class="product_share">
                        <div class="share_text">
                            <span data-language="product_share"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_share;?>
</span>
                        </div>
                        <div class="fn_share jssocials"></div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="tabs clearfix">
            <div class="tab_navigation">
                <?php if ($_smarty_tpl->tpl_vars['product']->value->description) {?>
                    <a href="#description" data-language="product_description"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_description;?>
</a>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value->features) {?>
                    <a href="#features" data-language="product_features"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_features;?>
</a>
                <?php }?>

                <a href="#comments" data-language="product_comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_comments;?>
</a>
            </div>
        
            <div class="tab_container">
                <?php if ($_smarty_tpl->tpl_vars['product']->value->description) {?>
                    <div id="description" class="tab product_description" itemprop="description">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>

                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value->features) {?>
                    <div id="features" class="tab">    
                        <ul class="features">
                            <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->features; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                                <li>
                                    <span class="features_name"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
                                    <span class="features_value">
                                        <?php if ($_smarty_tpl->tpl_vars['category']->value&&$_smarty_tpl->tpl_vars['f']->value->url_in_product&&$_smarty_tpl->tpl_vars['f']->value->in_filter) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['category']->value->url;?>
/<?php echo $_smarty_tpl->tpl_vars['f']->value->url;?>
-<?php echo $_smarty_tpl->tpl_vars['f']->value->translit;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                        <?php } else { ?>
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value->value, ENT_QUOTES, 'UTF-8', true);?>

                                        <?php }?>
                                    </span>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php }?>

                
                <div id="comments" class="tab">
                    <div class="row">
                        <div class="col-lg-7">
                            <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
                                <?php if (!function_exists('smarty_template_function_comments_tree')) {
    function smarty_template_function_comments_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['comments_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                                    <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>

                                        
                                        <a name="comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"></a>

                                        
                                        <div class="comment_item<?php if ($_smarty_tpl->tpl_vars['level']->value>0) {?> admin_note<?php }?>">

                                            <div class="comment_header">
                                                
                                                <span class="comment_author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            </div>

                                            
                                            <div class="comment_content">
                                                <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->text, ENT_QUOTES, 'UTF-8', true));?>

                                            </div>
                                            <div class="comment_footer">
                                                
                                                <span class="comment_date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['comment']->value->date);?>
, <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['comment']->value->date);?>
</span>
                                                
                                                <?php if (!$_smarty_tpl->tpl_vars['comment']->value->approved) {?>
                                                <span data-language="post_comment_status">(<?php echo $_smarty_tpl->tpl_vars['lang']->value->post_comment_status;?>
)</span>
                                                <?php }?>
                                            </div>
                                            <?php if (isset($_smarty_tpl->tpl_vars['children']->value[$_smarty_tpl->tpl_vars['comment']->value->id])) {?>
                                                <?php smarty_template_function_comments_tree($_smarty_tpl,array('comments'=>$_smarty_tpl->tpl_vars['children']->value[$_smarty_tpl->tpl_vars['comment']->value->id],'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                                            <?php }?>
                                        </div>
                                    <?php } ?>
                                <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                                <?php smarty_template_function_comments_tree($_smarty_tpl,array('comments'=>$_smarty_tpl->tpl_vars['comments']->value));?>

                            <?php } else { ?>
                                <div class="no_comments">
                                    <span data-language="product_no_comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_no_comments;?>
</span>
                                </div>
                            <?php }?>
                        </div>

                        <div class="col-lg-5">
                            
                            <form id="captcha_id" class="comment_form fn_validate_product" method="post">

                                <div class="h3">
                                    <span data-language="product_write_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_write_comment;?>
</span>
                                </div>

                                
                                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                                    <div class="message_error">
                                        <?php if ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
                                            <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
                                            <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_comment') {?>
                                            <span data-language="form_enter_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_email') {?>
                                            <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                                        <?php }?>
                                    </div>
                                <?php }?>

                                <div class="row">
                                    
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input class="form_input placeholder_focus" type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                                        </div>
                                    </div>

                                    
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input class="form_input placeholder_focus" type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment_email']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_email" />
                                            <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
</span>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="form_group">
                                    <textarea class="form_textarea placeholder_focus" rows="3" name="text" ><?php echo $_smarty_tpl->tpl_vars['comment_text']->value;?>
</textarea>
                                    <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
*</span>
                                </div>

                                
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_product) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="v2") {?>
                                        <div class="captcha">
                                             <div id="recaptcha1"></div>
                                        </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="default") {?>
                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0][0]->get_captcha_plugin(array('var'=>"captcha_product"),$_smarty_tpl);?>

                                        <div class="captcha">
                                            <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_product']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_product']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <span class="form_captcha">
                                                <input class="form_input input_captcha placeholder_focus" type="text" name="captcha_code" value="" />
                                                <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                                            </span>
                                        </div>
                                    <?php }?>
                                <?php }?>
                                <input type="hidden" name="comment" value="1">
                                
                                <input class="button g-recaptcha" type="submit" name="comment" data-language="form_send" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="invisible") {?>data-sitekey="<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible;?>
" data-badge='bottomleft' data-callback="onSubmit"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_send;?>
"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        
        <?php if ($_smarty_tpl->tpl_vars['prev_product']->value||$_smarty_tpl->tpl_vars['next_product']->value) {?>
            <nav>
                <ol class="pager row">
                    <li class="col-xs-12<?php if ($_smarty_tpl->tpl_vars['next_product']->value) {?> col-sm-6<?php } else { ?> col-sm-12<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['prev_product']->value) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['prev_product']->value->url;?>
">← <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></a>
                        <?php }?>
                    </li>
                    <li class="col-xs-12 col-sm-6">
                        <?php if ($_smarty_tpl->tpl_vars['next_product']->value) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['next_product']->value->url;?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span> →</a>
                        <?php }?>
                    </li>
                </ol>
            </nav>
        <?php }?>
    </div>
</div>

        

<?php if ($_smarty_tpl->tpl_vars['related_products']->value) {?>
    <div class="h2">
        <span data-language="product_recommended_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_recommended_products;?>
</span>
    </div>

    <div class="related clearfix">
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <div class="products_item no_padding col-sm-6 col-xl-3">
                <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['p']->value), 0);?>

            </div>
        <?php } ?>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['related_posts']->value) {?>
    <div class="h2">
        <span data-language="product_related_post"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_related_post;?>
</span>
    </div>
    <div class="blog clearfix">
        <?php  $_smarty_tpl->tpl_vars['r_p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r_p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r_p']->key => $_smarty_tpl->tpl_vars['r_p']->value) {
$_smarty_tpl->tpl_vars['r_p']->_loop = true;
?>
            <div class="blog_item no_padding col-sm-6 col-lg-4 col-xl-3">

                
                <a class="blog_image" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['r_p']->value->type_post;?>
/<?php echo $_smarty_tpl->tpl_vars['r_p']->value->url;?>
">
                    <?php if ($_smarty_tpl->tpl_vars['r_p']->value->image) {?>
                        <img class="blog_img" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['r_p']->value->image,360,360,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
" />
                    <?php }?>
                </a>

                <div class="blog_content">
                    
                    <div class="h5">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['r_p']->value->type_post;?>
/<?php echo $_smarty_tpl->tpl_vars['r_p']->value->url;?>
" data-post="<?php echo $_smarty_tpl->tpl_vars['r_p']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r_p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>

                    
                    <div class="blog_date">
                        <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['r_p']->value->date);?>
</span>
                    </div>

                    
                    <div class="blog_annotation"><?php echo $_smarty_tpl->tpl_vars['r_p']->value->annotation;?>
</div>
                </div>  
            </div>
        <?php } ?>
    </div>
<?php }?>




<?php }} ?>
