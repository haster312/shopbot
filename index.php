<?php
include "public/routes.php";
$dbopts = parse_url(getenv('DATABASE_URL'));
var_dump($dbopts);exit;