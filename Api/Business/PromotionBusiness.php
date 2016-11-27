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

        $promotions = Promotion::all();
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

    /**
     * @param $productId
     * @return null
     */
    public static function getPromotionByProductId($productId) {
        new static;

        $product   = Product::find($productId);

        if ($product) {
            $promotion = Promotion::where('promotionproduct__c', $product->sfid)->first();
            if ($promotion)
                return $promotion->toArray();
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
            return $promotion->toArray();
        } else {
            return null;
        }
    }
}