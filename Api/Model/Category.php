<?php

namespace Api\Model;
use \Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $connection = 'heroku';
    public $table = "salesforce.category__c";
    public $timestamps = false;
}