<?php

require __DIR__ . '/../vendor/autoload.php';
require  "Connect.php";
class API {
    public static function checkUser($facebookId){

    }

    public static function getCategory() {
        $db = Connect::ConnectDB();
        var_dump($db);exit;
        $query = "SELECT * FROM salesforce.category__c";
        $result = $db->query($query);
        $category = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $category[] = $row;
        }

        return $category;
    }
}