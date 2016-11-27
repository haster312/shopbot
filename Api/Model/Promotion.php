<?php

namespace Api\Model;
use \Illuminate\Database\Eloquent\Model;

class Promotion extends Model {
    protected $connection = 'heroku';
    public $table = "salesforce.promotion__c";
    public $timestamps = false;
}