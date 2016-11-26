<?php
$bot = require_once __DIR__ . '/../bootstrap/bot.php';
use Api\Business\CategoryBusiness;
use Api\Business\ProductOrderBusiness;
$productOrders = ProductOrderBusiness::productOrder(15);

var_dump($productOrders);
