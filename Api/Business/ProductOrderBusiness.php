<?php

namespace Api\Business;
use Api\Helper\Mail;
use Api\Model\ProductOrder;

class ProductOrderBusiness extends Business {


    /**
     * get product order
     * @param $productId
     * @return mixed
     */
    public static function productOrder($productId) {
        new static;

        $productOrders = ProductOrder::where('productid__c',$productId)->get();
        return $productOrders->toArray();
    }

    /**
     * get product order
     * @param $productOrderId
     * @return mixed
     */
    public static function getProductOrderById($productOrderId) {
        new static;

        $productOrder = ProductOrder::find($productOrderId);

        if($productOrder)
            return $productOrder->toArray();
        else
            return null;
    }

    /**
     * create new order from lead, product
     * @param $facebookId
     * @param $productId
     * @return bool
     */
    public static function createOrder($facebookId, $productId) {
        new static;

        if ($facebookId == null || $productId == null) {
            return false;
        }

        $lead      = LeadBusiness::getLeadByFacebookId($facebookId);
        $product   = ProductBusiness::getProductById($productId);
        $promotion = PromotionBusiness::getPromotionByProductId($productId);

        if ($lead && $product) {
            $productOrder = New ProductOrder();
            $productOrder->name = "Order". $product['name'];
            $productOrder->productid__c   = $product['id'];
            $productOrder->leadid__c      = $lead['id'];
            $productOrder->totalamount__c = $product['price__c'];
            $ordernumber = date('Y') . date('m') . random_int(100, 1000);
            $productOrder->ordernumber__c = $ordernumber;
            if ($promotion) {
                $productOrder->promotion__c = $promotion['sfid'];
                $discount = $promotion['discount__c'];
            } else {
                $discount = 0;
            }

            $productOrder->save();

            if ($productOrder) {
                $fromEmail = "contact@ebiz.solutions";
                $subject = "Order Confirmation from Ebiz Solutions - Order No $ordernumber";
                $toEmail = $lead['email'];
                $discountPrice = ($product['price__c'] * $discount)/100;
                $orderDate = date('M d Y');
                $body  = "<link href='/Api/Helper/styles.css' media='all' rel='stylesheet' type='text/css' />";
                $body .= "<table class='body-wrap'><tr><td></td>";
                $body .= "<td class='container' width='600'><div class='content'>
				            <table class='main' width='100%' cellpadding='0' cellspacing='0'>
					            <tr>
					                <td class='content-wrap aligncenter'>
					                    <table width='100%' cellpadding='0' cellspacing='0'>";
                $body .= "  <tr>
                                <td class='content-block'>
                                    <h1 class='aligncenter'>Order Number: $ordernumber</h1>
                                </td>
                            </tr>";
                $body .= "<tr>
                            <td class='content-block'>
                                <h2 class='aligncenter'>Thank you for using our services.</h2>
                            </td>
                        </tr>";
                $body .= "<tr>
                            <td class='content-block aligncenter'>
                                <table class='invoice'>";
                $body .= "<tr>
                              <td><p>".$lead['firstname'] ." ".$lead['lastname']."</p><p>". $lead['street'] ."</p><p>".$orderDate."</p></td>
                          </tr>";
                $body .= "<tr>
                            <td>
                                <table class='invoice-items' cellpadding='0' cellspacing='0'>
                                    <tr>
                                        <td>".$product['name']."</td>
                						<td class='alignright'>$ ". $product['price__c'] ."</td>
                                    </tr>
                                    <tr>
                                        <td class='alignright'><b>Discount</b></td>
                						<td class='alignright'><b>". $discount ."%</b></td>
                                    </tr>";
                $body .= "<tr class='total'>
                                <td class='alignright' width='80%'>Total</td>
                                <td class='alignright'>$ ". ($product['price__c'] - $discountPrice) ."</td>
                            </tr>";
                $body .= "</table></td></tr></table></td></tr>";
                $body .= "</table></div></td><td></td></tr></table>";

                $status = Mail::sendMail($fromEmail, $subject, $toEmail, $body);

                return $ordernumber;
            }
        } else {
            return false;
        }
    }
}