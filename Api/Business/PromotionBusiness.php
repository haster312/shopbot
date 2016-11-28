<?php
namespace Api\Business;

use Api\Model\Product;
use Api\Model\Promotion;
class PromotionBusiness extends Business {

    /**
     * Get all current promotions
     * @return array
     */
    public static function getCurrentPromotions(){
        new static;

        $currentDate = date('M d Y h:i:s');
        $promotions = Promotion::where('enddate__c','>=',$currentDate)->get();
        if ($promotions)
            return $promotions->toArray();
        else
            return null;
    }

    /**
     * @param $promotionId
     * @param null $length
     * @param null $page
     * @return array
     */
    public static function getProducts($promotionId, $length = null, $page = null){
        new static;

        $promotion = Promotion::find($promotionId);
        if ($promotion) {

            $productSF = $promotion->promotionproduct__c;
            $product   = ProductBusiness::getProductBySF($productSF);

            if ($product)
                return $product->toArray();
            else
                return null;
        } else {
            return null;
        }

    }

    public static function getPromotionByProductId($productId) {
        new static;

        $product   = Product::find($productId);

        if ($product) {
            $currentDate = date('M d Y h:i:s');
            $promotion = Promotion::where('promotionproduct__c', $product->sfid)->first();
            if ($promotion)
                if ($currentDate < date('M d Y h:i:s',strtotime($promotion->enddate__c)))
                    return $promotion->toArray();
                else
                    return null;
            else
                return null;
        } else {
            return null;
        }
    }

    /**
     * get promotion by sfid
     * @param $promotionCode
     * @return mixed
     */
    public static function getPromotionByPromotionCode($promotionCode) {
        new static;

        $promotion = Promotion::where('sfid',$promotionCode)->first();

        if ($promotion) {
            $currentDate = date('M d Y h:i:s');
            if ($currentDate <= date('M d Y h:i:s',strtotime($promotion->enddate__c)))
                return $promotion->toArray();
            else
                return null;
        } else {
            return null;
        }
    }


}