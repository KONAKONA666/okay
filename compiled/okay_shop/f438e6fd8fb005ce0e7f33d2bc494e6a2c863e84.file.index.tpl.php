<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-15 07:32:17
         compiled from "D:\www\enabled\okaycms\design\okay_shop\html\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152965beafb79e28283-29823928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f438e6fd8fb005ce0e7f33d2bc494e6a2c863e84' => 
    array (
      0 => 'D:\\www\\enabled\\okaycms\\design\\okay_shop\\html\\index.tpl',
      1 => 1542256335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152965beafb79e28283-29823928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beafb7a078463_35457158',
  'variables' => 
  array (
    'language' => 0,
    'config' => 0,
    'settings' => 0,
    'js_version' => 0,
    'css_version' => 0,
    'counters' => 0,
    'counter' => 0,
    'menu_header' => 0,
    'user' => 0,
    'lang_link' => 0,
    'lang' => 0,
    'languages' => 0,
    'ln' => 0,
    'cnt' => 0,
    'l' => 0,
    'currencies' => 0,
    'currency' => 0,
    'c' => 0,
    'keyword' => 0,
    'is_mobile' => 0,
    'is_tablet' => 0,
    'banner_group1' => 0,
    'bi' => 0,
    'module' => 0,
    'page' => 0,
    'content' => 0,
    'subscribe_error' => 0,
    'subscribe_success' => 0,
    'menu_footer' => 0,
    'categories' => 0,
    'admintooltip' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beafb7a078463_35457158')) {function content_5beafb7a078463_35457158($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\www\\enabled\\okaycms\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html <?php if ($_smarty_tpl->tpl_vars['language']->value->href_lang) {?>lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value->href_lang, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> prefix="og: http://ogp.me/ns#">
<head>
    
    <base href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/">

    
    <?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    
    <link href="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/favicon.png" type="image/x-icon" rel="icon">
    <link href="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/favicon.png" type="image/x-icon" rel="shortcut icon">

    
    <script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-3.3.1.min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>"></script>

    
    <script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/slick.min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>"></script>

    
    <script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.matchHeight-min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>"></script>
    
    <script src="https://widget.cloudpayments.kz/bundles/checkout"></script>
    
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">

    
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/font-awesome.min.css<?php if ($_smarty_tpl->tpl_vars['css_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['css_version']->value;?>
<?php }?>" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/libs.css<?php if ($_smarty_tpl->tpl_vars['css_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['css_version']->value;?>
<?php }?>" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/style.css<?php if ($_smarty_tpl->tpl_vars['css_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['css_version']->value;?>
<?php }?>" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/responsive.css<?php if ($_smarty_tpl->tpl_vars['css_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['css_version']->value;?>
<?php }?>" rel="stylesheet">

    <?php if ($_smarty_tpl->tpl_vars['counters']->value['head']) {?>
        <?php  $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['counter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['counters']->value['head']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['counter']->key => $_smarty_tpl->tpl_vars['counter']->value) {
$_smarty_tpl->tpl_vars['counter']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['counter']->value->code;?>

        <?php } ?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="v2") {?>
        <script type="text/javascript">
            var onloadCallback = function() {
                mysitekey = "<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha;?>
";
                if($('#recaptcha1').size()>0){
                    grecaptcha.render('recaptcha1', {
                        'sitekey' : mysitekey
                    });
                }
                if($('#recaptcha2').size()>0){
                    grecaptcha.render('recaptcha2', {
                        'sitekey' : mysitekey
                    });
                }
            };
        </script>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="invisible") {?>
        <script>
            function onSubmit(token) {
                document.getElementById("captcha_id").submit();
            }
            function onSubmitCallback(token) {
                document.getElementById("fn_callback").submit();
            }
            function onSubmitBlog(token) {
                document.getElementById("fn_blog_comment").submit();
            }
        </script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php }?>

</head>

<body>
<?php if ($_smarty_tpl->tpl_vars['counters']->value['body_top']) {?>
    <?php  $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['counter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['counters']->value['body_top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['counter']->key => $_smarty_tpl->tpl_vars['counter']->value) {
$_smarty_tpl->tpl_vars['counter']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['counter']->value->code;?>

    <?php } ?>
<?php }?>

<header class="header">
    <nav class="top_nav">
        <div class="container">
            
            <div class="fn_menu_switch menu_switch md-hidden"></div>

            
            
            <?php echo $_smarty_tpl->tpl_vars['menu_header']->value;?>


            
            <ul class="informers">

                
                <li id="wishlist" class="informer">
                    <?php echo $_smarty_tpl->getSubTemplate ("wishlist_informer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </li>

                
                <li id="comparison" class="informer">
                    <?php echo $_smarty_tpl->getSubTemplate ("comparison_informer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </li>

                <li class="informer md-hidden">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                        
                        <a class="account_informer" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user"></a>
                    <?php } else { ?>
                        
                        <a class="account_informer" href="javascript:;" onclick="document.location.href = '<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user/login'" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
"></a>
                    <?php }?>
                </li>

                
                <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
                    <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['ln'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ln']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ln']->key => $_smarty_tpl->tpl_vars['ln']->value) {
$_smarty_tpl->tpl_vars['ln']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['ln']->value->enabled) {?>
                            <?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable($_smarty_tpl->tpl_vars['cnt']->value+1, null, 0);?>
                        <?php }?>
                    <?php } ?>
                    <?php if ($_smarty_tpl->tpl_vars['cnt']->value>1) {?>
                        <li class="informer languages">
                            <div class="fn_switch lang_switch">
                                <i class="angle_icon tablet-hidden"></i>
                                <span class="informer_name tablet-hidden"><?php echo $_smarty_tpl->tpl_vars['language']->value->current_name;?>
</span>
                                <span class="informer_name lg-hidden"><?php echo $_smarty_tpl->tpl_vars['language']->value->label;?>
</span>
                            </div>
                            <div class="dropdown">
                                <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['l']->value->enabled) {?>
                                        <a class="dropdown_item<?php if ($_smarty_tpl->tpl_vars['language']->value->id==$_smarty_tpl->tpl_vars['l']->value->id) {?> active<?php }?>"
                                           href="<?php echo preg_replace('/^(.+)\/$/','$1',$_smarty_tpl->tpl_vars['l']->value->url);?>
">
                                            <span class="tablet-hidden"><?php echo $_smarty_tpl->tpl_vars['l']->value->current_name;?>
</span>
                                            <span class="lg-hidden"><?php echo $_smarty_tpl->tpl_vars['l']->value->label;?>
</span>
                                        </a>
                                    <?php }?>
                                <?php } ?>
                            </div>
                        </li>
                    <?php }?>
                <?php }?>

                
                <?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
                    <li class="informer currencies">
                        <div class="fn_switch cur_switch">
                            <i class="angle_icon tablet-hidden"></i>
                            <span class="informer_name tablet-hidden"><?php echo $_smarty_tpl->tpl_vars['currency']->value->name;?>
</span>
                            <span class="informer_name lg-hidden"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span>
                        </div>
                        <div class="dropdown">
                            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['c']->value->enabled) {?>
                                    <a class="dropdown_item<?php if ($_smarty_tpl->tpl_vars['currency']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?> active<?php }?>" href="#" onClick="change_currency(<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
); return false;">
                                        <span class="tablet-hidden"><?php echo $_smarty_tpl->tpl_vars['c']->value->name;?>
</span>
                                        <span class="lg-hidden"><?php echo $_smarty_tpl->tpl_vars['c']->value->sign;?>
</span>
                                    </a>
                                <?php }?>
                            <?php } ?>
                        </div>
                    </li>
                <?php }?>
            </ul>
        </div>
    </nav>

    <div class="container">

        
        <a class="logo" href="<?php if ($_GET['module']=='MainView') {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php }?>">
            <img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
"/>
        </a>
        
        

        <div class="account mobile-hidden">
            <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                
                <a class="account_link" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user">
                    <span class="small-hidden" data-language="index_account"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_account;?>
</span>
                    <span class="account_name small-hidden"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            <?php } else { ?>
                
                <a class="account_link" href="javascript:;" onclick="document.location.href = '<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user/login'" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
">
                    <span class="small-hidden" data-language="index_account"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_account;?>
</span>
                    <span class="account_name small-hidden" data-language="index_login"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
</span>
                </a>
            <?php }?>
        </div>

        
        <div class="times">
            <div class="times_inner">
                <span class="times_text" data-language="index_we_open"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_we_open;?>
</span>
                <div><span data-language="company_open_hours"><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_open_hours;?>
</span></div>
            </div>
        </div>

        
        <div class="phones">
            <div class="phones_inner">
                <div><a href="tel:<?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
" data-language="company_phone_1" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
</a></div>
                <div><a href="tel:<?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_2;?>
" data-language="company_phone_2" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_2;?>
</a></div>
            </div>
        </div>

        
        <a class="fn_callback callback" href="#fn_callback" data-language="index_back_call"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_back_call;?>
</span></a>

    </div>

    <div class="header_bottom">
        <div class="container">
            
            <div id="cart_informer">
                <?php echo $_smarty_tpl->getSubTemplate ('cart_informer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>

            
            <form id="fn_search" class="search" action="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
all-products">
                <input class="fn_search search_input" type="text" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="index_search" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_search;?>
"/>
                <button class="search_button" type="submit"><?php echo $_smarty_tpl->getSubTemplate ("svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>"search_icon"), 0);?>
</button>
            </form>

            <div class="categories">
                
                <div class="categories_heading fn_switch">
                    <?php echo $_smarty_tpl->getSubTemplate ("svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>"menu_icon"), 0);?>

                    <span class="small-hidden" data-language="index_categories"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_categories;?>
</span>
                </div>

                <?php echo $_smarty_tpl->getSubTemplate ("categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    </div>
</header>


<div id="fn_content" class="main">
    
    <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value===false&&$_smarty_tpl->tpl_vars['is_tablet']->value===false) {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_banner'][0][0]->get_banner_plugin(array('var'=>'banner_group1','group'=>'group1'),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['banner_group1']->value->items) {?>
            <div class="fn_banner_group1 banners container">
                <?php  $_smarty_tpl->tpl_vars['bi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner_group1']->value->items; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bi']->key => $_smarty_tpl->tpl_vars['bi']->value) {
$_smarty_tpl->tpl_vars['bi']->_loop = true;
?>
                    <div>
                        <?php if ($_smarty_tpl->tpl_vars['bi']->value->url) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['bi']->value->url;?>
" target="_blank">
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bi']->value->image) {?>
                                <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['bi']->value->image,1170,390,false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bi']->value->alt;?>
" title="<?php echo $_smarty_tpl->tpl_vars['bi']->value->title;?>
"/>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bi']->value->url) {?>
                        </a>
                        <?php }?>
                    </div>
                <?php } ?>
            </div>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['module']->value=="MainView"||$_smarty_tpl->tpl_vars['page']->value->url=='404') {?>
        <div class="fn_ajax_content">
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    <?php } else { ?>
        <div class="container">
            <?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <div class="fn_ajax_content">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        </div>
    <?php }?>
</div>

<div class="to_top"></div>


<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <span class="payments_text tablet-hidden" data-language="index_payments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_payments;?>
</span>
            <div class="footer_payment">
                <img src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/payments.png" alt="visa" title="visa">
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="foot col-sm-6 col-lg-4">

                    
                    <div id="subscribe_container">
                        <div class="h3">
                            <span data-language="subscribe_heading"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_heading;?>
</span>
                        </div>

                        <form class="subscribe_form fn_validate_subscribe" method="post">
                            <input type="hidden" name="subscribe" value="1"/>

                            <input class="subscribe_input" type="email" name="subscribe_email" value="" data-format="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
"/>

                            <button class="subscribe_button" type="submit"><span data-language="subscribe_button"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_button;?>
</span></button>

                            <?php if ($_smarty_tpl->tpl_vars['subscribe_error']->value) {?>
                                <div id="subscribe_error" class="popup">
                                    <?php if ($_smarty_tpl->tpl_vars['subscribe_error']->value=='email_exist') {?>
                                        <span data-language="subscribe_already"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_subscribe_already;?>
</span>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['subscribe_error']->value=='empty_email') {?>
                                        <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                                    <?php }?>
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['subscribe_success']->value) {?>
                                <div id="fn_subscribe_sent" class="popup">
                                    <span data-language="subscribe_sent"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_subscribe_sent;?>
</span>
                                </div>
                            <?php }?>
                        </form>

                        <div class="subscribe_promotext">
                            <span data-language="subscribe_promotext"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_promotext;?>
</span>
                        </div>
                    </div>

                    
                    <div class="h3">
                        <span data-language="index_in_networks"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_in_networks;?>
</span>
                    </div>

                    <div class="foot_social">
                        <a class="fb" href="https://facebook.com/okaycms" target="_blank" title="Facebook"></a>
                        <a class="vk" href="https://vk.com/club72497645" target="_blank" title="В контакте"></a>
                        <a class="ok" href="<?php echo preg_replace('/^(.+)\/$/','$1',$_smarty_tpl->tpl_vars['lang_link']->value);?>
#" target="_blank" title="Одноклассники"></a>
                        <a class="tw" href="https://twitter.com/okaycms" target="_blank" title="Twitter"></a>
                        <a class="ins" href="<?php echo preg_replace('/^(.+)\/$/','$1',$_smarty_tpl->tpl_vars['lang_link']->value);?>
#" target="_blank"  title="Instagram"></a>
                    </div>

                </div>

                
                <div class="foot col-sm-6 col-lg-2">
                    <div class="h3">
                        <span data-language="index_about_store"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_about_store;?>
</span>
                    </div>

                    <div class="foot_menu">
                        
                        <?php echo $_smarty_tpl->tpl_vars['menu_footer']->value;?>

                    </div>
                </div>

                
                <div class="foot col-sm-6 col-lg-3">
                    <div class="h3">
                        <span data-language="index_categories"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_categories;?>
</span>
                    </div>

                    <div class="foot_menu">
                        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
                                <div class="foot_item">
                                    <a  href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                </div>

                
                <div class="foot col-sm-6 col-lg-3">
                    <div class="h3">
                        <span data-language="index_contacts"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_contacts;?>
</span>
                    </div>

                    <div class="footer_contacts">
                        <div class="foot_item">
                            <a href="tel:<?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
" data-language="company_phone_1" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
</a>
                        </div>
                        <div class="foot_item">
                            <a href="tel:<?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_2;?>
" data-language="company_phone_2" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_2;?>
</a>
                        </div>
                        <div class="foot_item">
                            <span data-language="company_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_email;?>
</span>
                        </div>
                    </div>
                </div>

            </div>

            
            <div class="copyright">
                <span>© <?php echo smarty_modifier_date_format(time(),"%Y");?>
</span>
                <a href="http://okay-cms.com" target="_blank">
                    <span data-language="index_copyright"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_copyright;?>
</span>
                </a>
            </div>
        </div>
    </div>
</footer>



<?php echo $_smarty_tpl->getSubTemplate ('callback.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-ui.min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>"></script>


<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/jquery.fancybox.min.css<?php if ($_smarty_tpl->tpl_vars['css_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['css_version']->value;?>
<?php }?>" rel="stylesheet">
<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jquery.fancybox.min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>" defer></script>


<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.autocomplete-min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>" defer></script>

<?php echo $_smarty_tpl->tpl_vars['admintooltip']->value;?>



<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.validate.min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>" ></script>
<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/additional-methods.min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>"></script>


<?php if ($_GET['module']=='ProductView'||$_GET['module']=="BlogView") {?>

    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/jssocials.css<?php if ($_smarty_tpl->tpl_vars['css_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['css_version']->value;?>
<?php }?>" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/jssocials-theme-flat.css<?php if ($_smarty_tpl->tpl_vars['css_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['css_version']->value;?>
<?php }?>" rel="stylesheet">
    <script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jssocials.min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>" ></script>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ("scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/okay.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>"></script>


<?php if ($_smarty_tpl->tpl_vars['counters']->value['body_bottom']) {?>
    <?php  $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['counter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['counters']->value['body_bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['counter']->key => $_smarty_tpl->tpl_vars['counter']->value) {
$_smarty_tpl->tpl_vars['counter']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['counter']->value->code;?>

    <?php } ?>
<?php }?>


<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/cloudpayment.js"></script>
</body>
</html>
<?php }} ?>
