<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-13 19:28:11
         compiled from "D:\www\enabled\okaycms\design\okay_shop\html\email\email_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46165beafb9b95d4f1-92068405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49b88f2ef1036630fed4ea00d855cf838a372c49' => 
    array (
      0 => 'D:\\www\\enabled\\okaycms\\design\\okay_shop\\html\\email\\email_order.tpl',
      1 => 1542121290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46165beafb9b95d4f1-92068405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'order' => 0,
    'config' => 0,
    'settings' => 0,
    'order_status' => 0,
    'purchases' => 0,
    'lang_link' => 0,
    'purchase' => 0,
    'currency' => 0,
    'delivery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beafb9ba4b9a8_03077258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beafb9ba4b9a8_03077258')) {function content_5beafb9ba4b9a8_03077258($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['subject'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['lang']->value->email_order_title)." ".((string)$_smarty_tpl->tpl_vars['order']->value->id), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['subject'] = clone $_smarty_tpl->tpl_vars['subject'];?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><style type="text/css">
        /*<![CDATA[*/
        div, p, a, li, td, span {
            -webkit-text-size-adjust:none;
        }
        @media only screen and (max-width: 600px) {
            *[class="gmail-fix"] {
                display: none !important;
            }
        }
        /*]]>*/
    </style>
</head>
<body style="margin: 0">
<div style="padding: 15px 5px; background-color: rgb(239, 239, 239); background: rgb(239, 239, 239) url(<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/email_pattern.png); background-repeat: repeat; padding-left: 0px !important; padding-right: 0px !important;height: 100%">
    <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="margin: 0 auto">
        <tbody>
        <tr>
            <td style="border: 0; height: 5px" border="0" class="td"></td>
        </tr>
        <tr>
            <td class="td" border="0" valign="top" align="left" style="border: 0">
                <div style="border-width: 0px; border-style: solid; border-radius: 0px; border-color: rgb(204, 204, 204)">
                    <!-- CONTENT BEGIN  -->
                    <div>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding: 5px; background-color: rgb(255, 255, 255); background: rgb(255, 255, 255) no-repeat; border-top-left-radius: 0px; border-top-right-radius: 0px; overflow: hidden">
                            <tbody>
                            <tr>
                                <td border="0" class="td" valign="top" width="1%" align="left" style="border: 0">
                                    <div>
                                        <div style="text-align: left"><a><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
" width="200" align="left" style="border: 0; display: block; margin: 0 auto" /></a></div>
                                    </div>
                                </td>

                                <td border="0" class="td" valign="middle" align="left" style="border: 0">
                                    <div>
                                        <div style="text-align: left; font-family: 'Trebuchet MS'; font-size: 14px; color: rgb(51, 51, 51); line-height: normal">
                                            <div style="text-align: right;">
                                                <span style="font-size:18px;">
                                                    <span style="font-family:trebuchet ms,helvetica,sans-serif;">
                                                        <span style="color:#333333;">
                                                            <strong><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
</strong><br />
                                                            <strong><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_2;?>
</strong>
                                                        </span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="height: 30px; width: 100%; background: transparent;"></div>
                    <div>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding: 5px;background: rgb(255, 255, 255)">
                            <tbody>
                            <tr>
                                <td border="0" class="td" valign="top" align="left" style="border: 0">
                                    <div>
                                        <div style="text-align: left; font-family: 'Trebuchet MS'; font-size: 14px; color: rgb(51, 51, 51); line-height: 1.5">
                                            <span style="font-size:18px;">
                                                <span style="font-family:trebuchet ms,helvetica,sans-serif;">
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_hello;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</strong>
                                                </span>
                                            </span>
                                            <br />
                                            <span style="font-family:trebuchet ms,helvetica,sans-serif;">
                                                <span style="font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_your_status;?>
 <strong>№<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['lang']->value->order_text_of;?>
 <strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
:<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['order']->value->date);?>
</strong>.</span></span><br />
                                            <br />
                                            <table border="0" cellpadding="3" cellspacing="0" style="font-family: 'Trebuchet MS'; font-size: 14px; color: rgb(51, 51, 51); line-height: 1.5; width:100%; border-collapse: collapse">
                                                <tbody>
                                                <tr>
                                                    <td style="background-color:#38c0f3;border-bottom: 1px solid #fff;"><span style="font-size:14px;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><span style="color:#ffffff;"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_status;?>
</strong></span></span></span></td>
                                                    <td style="border: 1px solid #38c0f3;"><span style="font-size:14px;">&nbsp; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#38c0f3;border-bottom: 1px solid #38c0f3">
                                                        <span style="font-size:14px;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><span style="color:#ffffff;"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_payment;?>
</strong></span></span></span>
                                                    </td>
                                                    <td style="border: 1px solid #38c0f3;">
                                                        <span style="font-size:14px;">
                                                             <?php if ($_smarty_tpl->tpl_vars['order']->value->paid==1) {?>
                                                                 <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_paid;?>

                                                             <?php } else { ?>
                                                                 <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_not_paid;?>

                                                             <?php }?>
                                                        </span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div style="height: 30px; width: 100%; background: transparent;"></div>
                        <div>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding: 5px;background: rgb(255, 255, 255)">
                                <tbody>
                                <tr>
                                    <td border="0" class="td" valign="top" align="left" style="border: 0">
                                        <div>
                                            <div style="text-align: left; font-family: 'Trebuchet MS'; font-size: 14px; color: rgb(51, 51, 51); line-height: 1.5"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><span style="font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->order_details;?>
</span></span><br />
                                                <br />
                                                <table border="0" cellpadding="3" cellspacing="0" style="font-family: 'Trebuchet MS'; font-size: 14px; color: rgb(51, 51, 51); line-height: 1.5; width:100%; border-collapse: collapse">
                                                    <tbody>
                                                    <tr>
                                                        <td style="background-color:#38c0f3; border-bottom: 1px solid #fff;"><span style="font-size:14px;"><span style="color:#ffffff;"><strong><span style="font-family:trebuchet ms,helvetica,sans-serif;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_name;?>
</span></strong></span></span></td>
                                                        <td style="border: 1px solid #38c0f3;"><span style="font-size:14px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color:#38c0f3;border-bottom: 1px solid #fff;"><span style="font-size:14px;"><span style="color:#ffffff;"><strong><span style="font-family:trebuchet ms,helvetica,sans-serif;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_email;?>
</span></strong></span></span></td>
                                                        <td style="border: 1px solid #38c0f3;"><span style="font-size:14px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color:#38c0f3;border-bottom: 1px solid #fff;"><span style="font-size:14px;"><span style="color:#ffffff;"><strong><span style="font-family:trebuchet ms,helvetica,sans-serif;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_phone;?>
</span></strong></span></span></td>
                                                        <td style="border: 1px solid #38c0f3;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color:#38c0f3;border-bottom: 1px solid #fff;"><span style="font-size:14px;"><span style="color:#ffffff;"><strong><span style="font-family:trebuchet ms,helvetica,sans-serif;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_address;?>
</span></strong></span></span></td>
                                                        <td style="border: 1px solid #38c0f3;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->address, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color:#38c0f3;border-bottom: 1px solid #38c0f3"><span style="font-size:14px;"><span style="color:#ffffff;"><strong><span style="font-family:trebuchet ms,helvetica,sans-serif;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_comment;?>
</span></strong></span></span></td>
                                                        <td style="border: 1px solid #38c0f3;"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->comment, ENT_QUOTES, 'UTF-8', true));?>
</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="height: 30px; width: 100%; background: transparent;"></div>
                        <div>
                            <table style="padding: 5px;background: rgb(255, 255, 255); border-collapse: separate;" width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                    <td style="padding-bottom: 15px;">
                                        <div>
                                            <div style="font-family: 'Trebuchet MS'; font-size: 16px; color: rgb(51, 51, 51); font-weight: normal; text-align: left; font-style: normal; line-height: normal; text-transform: none">
                                                <span style="font-family:trebuchet ms,helvetica,sans-serif;">
                                                    <span style="font-size:18px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_purchases;?>
</span>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style=" padding-bottom: 15px;">
                                        <div>
                                            <div style="text-align: left; font-family: 'Trebuchet MS'; font-size: 14px; color: rgb(51, 51, 51); line-height: 1.5">
                                                <table width="100%" style="padding: 5px;font-family: 'Trebuchet MS'; font-size: 14px; color: rgb(51, 51, 51); line-height: 1.5">
                                                    <tbody>
                                                    <?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>
                                                        <tr>
                                                            <td valign="middle">
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
">
                                                                    <?php if ($_smarty_tpl->tpl_vars['purchase']->value->product->image) {?>
                                                                        <img align="middle" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['purchase']->value->product->image->filename,70,70);?>
" />
                                                                    <?php } else { ?>
                                                                        <img width="70" height="70" src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/no_image.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                                    <?php }?>
                                                                </a>
                                                            </td>

                                                            <td valign="middle">
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
" style="font-family: 'Trebuchet MS'; font-size: 14px; color: rgb(29, 103, 164); text-decoration: underline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
</a><br />
                                                                <span style="font-family:verdana,geneva,sans-serif;"><em><span style="color: rgb(128, 128, 128); font-size: 11px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>
</span></em></span>
                                                                <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->stock==0) {?><span class="preorder_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_pre_order;?>
</span><?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['order']->value->paid&&$_smarty_tpl->tpl_vars['purchase']->value->variant->attachment) {?>
                                                                    <div style="font-family:verdana,geneva,sans-serif;">
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
order/<?php echo $_smarty_tpl->tpl_vars['order']->value->url;?>
/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->attachment;?>
">
                                                                            <em><span style="color: rgb(128, 128, 128); font-size: 11px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_download;?>
 <?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->attachment;?>
</span></em>
                                                                        </a>
                                                                    </div>
                                                                <?php }?>
                                                            </td>
                                                            <td style=";padding-right:10px;white-space:nowrap" valign="middle"><?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
 <?php if ($_smarty_tpl->tpl_vars['purchase']->value->units) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->units, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['settings']->value->units;?>
<?php }?></td>
                                                            <td align="right" nowrap="nowrap" valign="middle">
                                                                <b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['purchase']->value->price,$_smarty_tpl->tpl_vars['currency']->value->id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</b>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <div style="border-bottom: 1px solid #ddd"></div>
                                <tr>
                                    <td style=" padding-bottom: 15px;">
                                        <div>
                                            <div style="text-align: left; font-family: 'Trebuchet MS'; font-size: 14px; color: rgb(51, 51, 51); line-height: 1.5">
                                                <table cellpadding="4" cellspacing="0" width="100%" style="padding: 5px;font-family: 'Trebuchet MS'; font-size: 14px; color: rgb(51, 51, 51); line-height: 1.5">
                                                    <tbody>
                                                    <?php if ($_smarty_tpl->tpl_vars['order']->value->discount) {?>
                                                        <tr>
                                                            <td style="padding-right: 10px; white-space: nowrap; text-align: right;" valign="middle"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_discount;?>
</td>
                                                            <td align="right" nowrap="nowrap" valign="middle"><?php echo $_smarty_tpl->tpl_vars['order']->value->discount;?>
&nbsp;%</td>
                                                        </tr>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['order']->value->coupon_discount>0) {?>
                                                        <tr>
                                                            <td style="padding-right: 10px; white-space: nowrap; text-align: right;" valign="middle"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_coupon;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_code;?>
</td>
                                                            <td align="right" nowrap="nowrap" valign="middle">&minus;<?php echo $_smarty_tpl->tpl_vars['order']->value->coupon_discount;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</td>
                                                        </tr>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['order']->value->separate_delivery||!$_smarty_tpl->tpl_vars['order']->value->separate_delivery&&$_smarty_tpl->tpl_vars['order']->value->delivery_price>0) {?>
                                                        <tr>
                                                            <td style="padding-right: 10px; white-space: nowrap; text-align: right;" valign="middle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                            <?php if (!$_smarty_tpl->tpl_vars['order']->value->separate_delivery) {?>
                                                                <td align="right" nowrap="nowrap" valign="middle"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->delivery_price,$_smarty_tpl->tpl_vars['currency']->value->id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</td>
                                                            <?php } else { ?>
                                                                <td></td>
                                                            <?php }?>
                                                        </tr>
                                                    <?php }?>
                                                    <tr>
                                                        <td style="padding-right: 10px; white-space: nowrap; text-align: right;" valign="middle"><span style="font-size:16px;"><strong><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_total;?>
</strong></span></td>
                                                        <td align="right" nowrap="nowrap" valign="middle"><b><span style="font-size:16px;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['order']->value->total_price,$_smarty_tpl->tpl_vars['currency']->value->id);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span></b></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="padding: 5px; background: rgb(255, 255, 255)">
                                <tbody>
                                <tr>
                                    <td align="center" valign="top" border="0" class="td" style="border: 0">
                                        <div>
                                            <div style="text-align: center; font-family: 'Trebuchet MS'; font-size: 14px; color: rgb(51, 51, 51); line-height: 1.5">
                                                <span style="font-family:trebuchet ms,helvetica,sans-serif;">
                                                    <span style="border-style: solid; border-color: rgb(234, 182, 9); background-color: rgb(234, 182, 9); border-width: 0px 0px 0px 0px; display: inline-block; border-radius: 29px">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
order/<?php echo $_smarty_tpl->tpl_vars['order']->value->url;?>
" style="font-family: 'Trebuchet MS'; font-size: 14px; color: rgb(29, 103, 164); text-decoration: underline; border-style: solid; border-width: 8px 25px 8px 25px; display: inline-block; border-radius: 28px; border-color: rgb(242, 189, 11); background: rgb(242, 189, 11); font-size: 16px; font-family: 'Lucida Sans Unicode', 'Lucida Grande'; font-weight: bold; color: rgb(255, 255, 255); text-decoration: none">
                                                            <span style="font-family:trebuchet ms,helvetica,sans-serif;"> <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_order_info;?>
 &gt;</span>
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- CONTENT END  -->
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
<?php }} ?>
