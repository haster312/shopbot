<?php
$bot = require_once __DIR__ . '/../bootstrap/bot.php';
//commands to reload bot when a new source version is deployed to heroku

//Update threadSettings
GigaAI\Http\ThreadSettings::updateGetStartedButtonsdsd();
GigaAI\Http\ThreadSettings::updateGreetingText();
GigaAI\Http\ThreadSettings::updatePersistentMenu();

//Update seeder
require_once 'seeder.php';
dd('done');