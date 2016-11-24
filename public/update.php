<?php
$bot = require_once __DIR__ . '/../bootstrap/bot.php';
//commands to reload bot when a new source version is deployed to heroku

//Update threadSettings
$_REQUEST['giga_action'] = 'updateGetStartedButton';
GigaAI\Http\ThreadSettings::init();
$_REQUEST['giga_action'] = 'updateGreetingText';
GigaAI\Http\ThreadSettings::init();
$_REQUEST['giga_action'] = 'updatePersistentMenu';
GigaAI\Http\ThreadSettings::init();

//Update seeder
require_once 'seeder.php';
dd('done');