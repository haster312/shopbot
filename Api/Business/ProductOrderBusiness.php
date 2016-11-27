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
                $disountPrice = ($product->price__c * $discount)/100;
                $body  = "<h4> Dear ". $lead['firstname']. "</h4>";
                $body .= "<p>Here are your order informations:</p>";
                $body .= "<p>Order Number: $ordernumber</p>";
                $body .= "<p>Product: ". $product['name'] ."</p>";
                $body .= "<p>Price: ".  $product['price__c'] ."</p>";
                $body .= "<p>Discount: $discount%</p>";
                $body .= "<p>Total: ". ($product->price__c - $disountPrice) ."</p>";
                $body .= "<p>Thank you for using our service!</p>";
                $status = Mail::sendMail($fromEmail, $subject, $toEmail, $body);
                return $status;
            }
        } else {
            return false;
        }
    }
}