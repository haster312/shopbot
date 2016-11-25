<?php

require __DIR__ . '/../vendor/autoload.php';
require  "Connect.php";
class API {
    public static function checkUser($facebookId){

    }

    public static function getCategory() {
        $db = Connect::ConnectDB();
        $query = "SELECT * FROM salesforce.category__c";
        $result = $db->query($query);
        var_dump($result);exit;
        $category = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $category[] = $row;
        }

        return $category;
    }
}