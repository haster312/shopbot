<?php
$bot = require_once __DIR__ . '/../bootstrap/bot.php';
use Api\Business\CategoryBusiness;

$categories = CategoryBusiness::getAllCategories();
var_dump($categories);