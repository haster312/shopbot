<?php

require __DIR__ . '/../vendor/autoload.php';
require  "Connect.php";
class API {

    public static function checkUser($facebookId){

    }

    public static function getAllCategory() {
        $db = Connect::ConnectDB();
        $query = "SELECT * FROM salesforce.category__c";
        $result = $db->query($query);
        $categories = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $categories[] = $row;
        }
        return $categories;
    }

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