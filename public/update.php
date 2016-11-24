<?php

//commands to reload bot when a new source version is deployed to heroku

//Update threadSettings
GigaAI\Http\ThreadSettings::updateGetStartedButton();
GigaAI\Http\ThreadSettings::updateGreetingText();
GigaAI\Http\ThreadSettings::updatePersistentMenu();

//Update seeder
require_once 'seeder.php';
dd('done');