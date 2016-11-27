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
                $body    = Mail::renderOrder($lead, $product, $discount, $ordernumber);
                $discountPrice = ($product['price__c'] * $discount)/100;
                $orderDate = date('M d Y');
                $content['orderNumber'] = $ordernumber;
                $content['name']     = $lead['firstname']. " " .$lead['lastname'];
                $content['address']  = $lead['street'];
                $content['date']     = date('M d Y');
                $content['product']  = $product['name'];
                $content['price']    = $product['price__c'];
                $content['discount'] = $discount;
                $content['total']    = $product['price__c'] - $discountPrice;
                $body = Mail::renderOrder($content);

                try {
                    Mail::sendMail($fromEmail, $subject, $toEmail, $body);
                    return $ordernumber;
                } catch (\Exception $e) {
                    return "Your order hasn't been sent";
                }
            }
        } else {
            return false;
        }
    }
}