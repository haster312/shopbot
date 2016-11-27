<?php
/**
 * Created by PhpStorm.
 * User: vu
 * Date: 11/27/16
 * Time: 8:50 PM
 */

$bot = require_once __DIR__ . '/../bootstrap/bot.php';
use Api\Business\PromotionBusiness;
$lead = PromotionBusiness::getPromotionByPromotionCode('a0N2800000FJpkqEAD');
var_dump($lead);