<?php
$bot = require_once __DIR__ . '/../bootstrap/bot.php';
use GigaAI\Http\ThreadSettings;
//commands to reload bot when a new source version is deployed to heroku

//Update threadSettings
ThreadSettings::updateGetStartedButton();
ThreadSettings::updateGreetingText();
ThreadSettings::updatePersistentMenu();

//Update seeder
require_once 'seeder.php';
dd('done');