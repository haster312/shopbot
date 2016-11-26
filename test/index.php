<?php
$bot = require_once __DIR__ . '/../bootstrap/bot.php';
use Api\Business\CategoryBusiness;

$categories = CategoryBusiness::getAllCategories(1,0);
$product = CategoryBusiness::getProducts(1);
var_dump($categories, $product);
