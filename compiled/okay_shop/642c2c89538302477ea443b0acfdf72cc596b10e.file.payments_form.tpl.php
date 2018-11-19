<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-11-19 14:43:08
         compiled from "design\okay_shop\html\payments_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54345beafb9be95520-70049369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '642c2c89538302477ea443b0acfdf72cc596b10e' => 
    array (
      0 => 'design\\okay_shop\\html\\payments_form.tpl',
      1 => 1542627762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54345beafb9be95520-70049369',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5beafb9c0703f9_55648579',
  'variables' => 
  array (
    'payment_module' => 0,
    'settings_pay' => 0,
    'order' => 0,
    'payment_currency' => 0,
    'price' => 0,
    'desc' => 0,
    'success_url' => 0,
    'callback_url' => 0,
    'lang' => 0,
    'public_key' => 0,
    'liqpay_order_id' => 0,
    'result_url' => 0,
    'server_url' => 0,
    'sign' => 0,
    'currency' => 0,
    'return_url' => 0,
    'xml_encoded' => 0,
    'sign_encoded' => 0,
    'url' => 0,
    'payment_system' => 0,
    'payment_settings' => 0,
    'currency_code' => 0,
    'signature' => 0,
    'fail_url' => 0,
    'ipn_url' => 0,
    'fail_ur' => 0,
    'data' => 0,
    'login' => 0,
    'inv_id' => 0,
    'inv_desc' => 0,
    'phone' => 0,
    'message' => 0,
    'amount' => 0,
    'mrh_login' => 0,
    'receipt' => 0,
    'crc' => 0,
    'in_curr' => 0,
    'culture' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5beafb9c0703f9_55648579')) {function content_5beafb9c0703f9_55648579($_smarty_tpl) {?>


<?php if ($_smarty_tpl->tpl_vars['payment_module']->value=="Interkassa") {?>
    
    <div class="row">
        <form class="col-lg-7" name="payment" method="post" action="https://sci.interkassa.com/" accept-charset="UTF-8">
            <input type="hidden" name="ik_co_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings_pay']->value['ik_co_id'], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="ik_pm_no" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="ik_cur"   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="ik_am"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="ik_desc"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="ik_suc_u" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['success_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="ik_ia_u"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callback_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="submit" name="process"  value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
" class="button">
        </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Liqpay") {?>
    
    <div class="row">
        <form class="col-lg-7" method="post" action="https://www.liqpay.ua/api/pay">
            <input type="hidden" name="public_key"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['public_key']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="hidden" name="amount"      value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="hidden" name="currency"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="hidden" name="description" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="hidden" name="order_id"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['liqpay_order_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="hidden" name="result_url"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="hidden" name="server_url"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="hidden" name="type"        value="buy"/>
            <input type="hidden" name="signature"   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sign']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="submit" class="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
">
        </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="OKPay") {?>
    
    <div class="row">
        <form class="col-lg-7" action="https://www.okpay.com/process.html" method="post">
            <input type="hidden" name="ok_receiver"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings_pay']->value['okpay_reciever'], ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="hidden" name="ok_invoice"        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="hidden" name="ok_item_1_name"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="hidden" name="ok_item_1_price"   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="hidden" name="ok_currency"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="hidden" name="ok_return_success" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="hidden" name="ok_return_fail"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="submit" class="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
">
        </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Pay2Pay") {?>
    
    <div class="row">
        <form class="col-lg-7" action="https://merchant.pay2pay.com/?page=init" method="post">
            <input type="hidden" name="xml"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xml_encoded']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="hidden" name="sign" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sign_encoded']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="submit" class="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
">
        </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Payanyway") {?>
    
    <div class="row">
        <form class="col-lg-7" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post">
            <input type="hidden" name="payment_system"     value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_system']->value[0], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="MNT_ID"             value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['MNT_ID'], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="MNT_TRANSACTION_ID" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="MNT_AMOUNT"         value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="MNT_CURRENCY_CODE"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_code']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="MNT_SIGNATURE"      value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['signature']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="MNT_SUCCESS_URL"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['success_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="MNT_FAIL_URL"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fail_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="submit" class="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
">
        </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Cloudpayment") {?>

    <button id="payButton">Открыть форму оплаты</button>
    <script src="https://widget.cloudpayments.kz/bundles/cloudpayments"></script>
    <script type="text/javascript">
        var payHandler = function () {
            var widget = new cp.CloudPayments();
            widget.charge({
                    publicId: '<?php echo $_smarty_tpl->tpl_vars['payment_settings']->value['public_id'];?>
',
                    description: 'Оплата в okaycms',
                    amount: <?php echo $_smarty_tpl->tpl_vars['order']->value->total_price;?>
,
                    currency: 'KZT',
                    invoiceId: '<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
',
                    accountId: '<?php echo $_smarty_tpl->tpl_vars['order']->value->email;?>
',
                },
                function (options) { // success

                    $.post('<?php echo $_smarty_tpl->tpl_vars['ipn_url']->value;?>
', {
                        'invoice': options['invoiceId'],
                    }, function (data) {
                        console.log(data);
                    });
					//window.location.href = '<?php echo $_smarty_tpl->tpl_vars['success_url']->value;?>
';
                },
                function (reason, options) { // fail
                    console.log(reason);
                    //window.location.href = '<?php echo $_smarty_tpl->tpl_vars['fail_ur']->value;?>
';
                });
        };
        $("#payButton").on("click", payHandler); //кнопка "Оплатить"

    </script>

<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Platon") {?>
    
    <div class="row">
        <form class="col-lg-7" action="https://secure.platononline.com/webpaygw/pcc.php?a=auth" method="post">
            <input type="hidden" name="key"   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings_pay']->value['platon_key'], ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="hidden" name="order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="hidden" name="data"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="hidden" name="url"   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="hidden" name="sign"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sign']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="submit" class="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
">
        </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Qiwi") {?>
    
    <div class="row">
        <form class="clearfix" action='https://w.qiwi.com/order/external/create.action'>
            <input type="hidden" name="from"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['login']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="summ"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="txn_id"     value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inv_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="currency"   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="comm"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inv_desc']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="successUrl" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['success_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="failUrl"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fail_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <div class="form_group col-xs-12">
                <input class="form_input" type="text" name="to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
"/>
            </div>
            <div class="form_group col-lg-7">
                <input type="submit" class="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
">
            </div>
        </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Receipt") {?>
    
    <div class="row">
        <form class="col-lg-7" action="payment/Receipt/callback.php" method="post">
            <input type="hidden" name="recipient"             value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['recipient'], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="inn"                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['inn'], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="account"               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['account'], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="bank"                  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['bank'], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="bik"                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['bik'], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="correspondent_account" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['correspondent_account'], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="banknote"              value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['banknote'], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="pence"                 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['pense'], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="order_id"              value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="amount"                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <div class="form_group">
                <input class="form_input" type="text" name="name" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->receipt_name;?>
*" required="">
            </div>
            <div class="form_group">
                <input class="form_input" type="text" name="address" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->receipt_address;?>
*" required="">
            </div>
            <input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
">
        </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Robokassa") {?>
    
    <div class="row">
        <form class="col-lg-7" accept-charset="cp1251" action="https://merchant.roboxchange.com/Index.aspx" method="post">
            <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mrh_login']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="MrchLogin">
            <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
"     name="OutSum">
            <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inv_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"    name="InvId">
            <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receipt']->value, ENT_QUOTES, 'UTF-8', true);?>
"   name="Receipt">
            <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inv_desc']->value, ENT_QUOTES, 'UTF-8', true);?>
"  name="Desc">
            <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['crc']->value, ENT_QUOTES, 'UTF-8', true);?>
"       name="SignatureValue">
            <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['in_curr']->value, ENT_QUOTES, 'UTF-8', true);?>
"   name="IncCurrLabel">
            <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['culture']->value, ENT_QUOTES, 'UTF-8', true);?>
"   name="Culture">
            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
" class="button">
        </form>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Webmoney") {?>
    
    <div class="row">
        <form id="paymentFormSample" autocomplete="off">
            <input type="text" data-cp="cardNumber">
            <input type="text" data-cp="expDateMonth">
            <input type="text" data-cp="expDateYear">
            <input type="text" data-cp="cvv">
            <button type="submit">Оплатить</button>
        </form>

    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_module']->value=="Yandex") {?>
    
    <div class="row">
        <form class="col-lg-7" method="post" action="https://money.yandex.ru/quickpay/confirm.xml">
            <input name="receiver" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['settings_pay']->value['yandex_id'];?>
">
            <input name="formcomment" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="short-dest"    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input name="targets" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="comment"       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <input type="hidden" name="quickpay-form" value="shop">
            <input type="hidden" name="sum"           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-type="number">
            <input type="hidden" name="label"         value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
">
            <input name="paymentType" type="hidden" value="PC">
            <input type="submit" name="submit-button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
" class="button">
        </form>
    </div>
<?php }?>
<?php }} ?>
