<?php

require_once('../../api/Okay.php');

class Webmoney extends Okay
{
    public function checkout_form($order_id, $button_text = null)
    {
        if(empty($button_text))
            $button_text = 'Перейти к оплате';

        $order = $this->orders->get_order((int)$order_id);
        $payment_method = $this->payment->get_payment_method($order->payment_method_id);
        $payment_currency = $this->money->get_currency(intval($payment_method->currency_id));
        $settings = $this->payment->get_payment_settings($payment_method->id);

        $price = round($this->money->convert($order->total_price, $payment_method->currency_id, false), 2);


        // описание заказа
        $desc = 'Оплата заказа №'.$order->id;

        $success_url = $this->config->root_url.'/order/'.$order->url;
        $callback_url = $this->config->root_url.'/payment/Ecloudpayment/callback.php';


        $res['settings_pay'] = $settings;
        $res['order'] = $order;
        $res['settings_pay'] = $settings;
        $res['payment_currency'] = $payment_currency;
        $res['price'] = $price;
        $res['desc'] = $desc;
        $res['success_url'] = $success_url;
        $res['callback_url'] = $callback_url;

        $button = "<form id=\"paymentFormSample\" autocomplete=\"off\">
                        <input type=\"text\" data-cp=\"cardNumber\">
                        <input type=\"text\" data-cp=\"expDateMonth\">
                        <input type=\"text\" data-cp=\"expDateYear\">
                        <input type=\"text\" data-cp=\"cvv\">
                        <button type=\"submit\">Оплатить {$price}</button>
                    </form>
                            ";
        return $res;
    }

}