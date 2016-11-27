<?php
$bot = require_once __DIR__ . '/../bootstrap/bot.php';
use Api\Business\ProductOrderBusiness;

$order = ProductOrderBusiness::createOrder("10206973580408350", 8);

var_dump($order);


