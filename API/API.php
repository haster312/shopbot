<?php

require __DIR__ . '/../vendor/autoload.php';
require  "Connect.php";
class API {

    private static $db;
    public function __construct(Connect $connect) {
        API::$db = $connect->ConnectDB();
    }

    public static function checkUser($facebookId){

    }

    public static function getCategory() {
        var_dump('abc');exit;
        $query = "SELECT * FROM salesforce.category__c";
        $result = API::$db->query($query);
        $category = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $category[] = $row;
        }

        return $category;
    }
}