<?php
$bot = require_once __DIR__ . '/../bootstrap/bot.php';
//commands to reload bot when a new source version is deployed to heroku

//Update threadSettings
$request = GigaAI\Http\Request::getInstance();
GigaAI\Http\ThreadSettings::updateGetStartedButton();
GigaAI\Http\ThreadSettings::updateGreetingText();
GigaAI\Http\ThreadSettings::updatePersistentMenu();

dd('done');