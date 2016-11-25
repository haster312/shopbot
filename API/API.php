<?php

require __DIR__ . '/../vendor/autoload.php';
require  "Connect.php";
class API {

    /**
     * Get all Salesforce category with limit
     * @param null $limit
     * @return array
     */
    public static function getAllCategory($limit = null) {
        $db = Connect::ConnectDB();
        if($limit > 0) {
            $query = "SELECT * FROM salesforce.category__c limit $limit";
        }  else {
            $query = "SELECT * FROM salesforce.category__c";
        }

        $result = $db->query($query);
        $categories = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $categories[] = $row;
        }
        return $categories;
    }

    // Product Sectionx
    /**
     * Get all Salesforce product
     * @return array
     */
    public static function getAllProduct() {
        $db = Connect::ConnectDB();
        $query = "SELECT * FROM salesforce.product2";
        $result = $db->query($query);
        $products = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $products[] = $row;
        }
        return $products;
    }

    /**
     * Get Salesforce product by category
     * @param $categoryId
     * @return array
     */
    public static function getProductByCategory($categoryId) {

        $db = Connect::ConnectDB();
        $query = "SELECT * FROM salesforce.product2 where salesforce.product2.category__c = $categoryId";
        $result = $db->query($query);
        $products = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $products[] = $row;
        }
        return $products;
    }

    /**
     * Get all Salesforce order
     * Custom Object
     * @return array
     */
    public static function getAllOrder() {

        $db = Connect::ConnectDB();
        $query = "SELECT * FROM salesforce.productorder__c";
        $result = $db->query($query);
        $orders = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $orders[] = $row;
        }
        return $orders;
    }

    //Lead Section
    /**
     * Get all salesforce Lead
     * @return array
     */
    public static function getAllLead() {
        $db = Connect::ConnectDB();
        $query = "SELECT * FROM salesforce.lead";
        $result = $db->query($query);
        $leads = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $leads[] = $row;
        }
        return $leads;
    }

    /**
     * Check exist lead with facebookId
     * @param $facebookId
     * @return array|null
     */
    public static function checkLeadByFacebookId($facebookId) {
        $db = Connect::ConnectDB();
        $query = "SELECT * FROM salesforce.lead where facebookId__c = $facebookId";
        $result = $db->query($query);
        $leads = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $leads[] = $row;
        }
        if (!$leads) {
            return null;
        } else {
            return $leads;
        }
    }

    //Promotion Section
    /**
     * Get all Salesforce promotion
     * Custom Object
     * @return array
     */
    public static function getAllPromotion() {

        $db = Connect::ConnectDB();
        $query = "SELECT * FROM salesforce.promotion__c";
        $result = $db->query($query);
        $promotions = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $promotions[] = $row;
        }
        return $promotions;
    }
}