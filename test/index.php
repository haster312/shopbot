<?php
$bot = require_once __DIR__ . '/../bootstrap/bot.php';
use Api\Business\CategoryBusiness;

$categories = CategoryBusiness::getAllCategories(1,0);
var_dump($categories);