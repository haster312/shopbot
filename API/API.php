<?php

require __DIR__ . '/../vendor/autoload.php';
include  "Connect.php";
class API {

    public static function checkUser($facebookId){

    }

    public static function getCategory() {

        $query = "SELECT * FROM salesforce.category__c";
        $result = $db->query($query);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $category = $row;
        }

        return $category;
    }
}