<?php

namespace Api\Business;
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
}