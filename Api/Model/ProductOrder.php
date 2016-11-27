<?php

namespace Api\Model;
use \Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model {
    protected $connection = 'heroku';
    public $table = "salesforce.productorder__c";
    public $timestamps = false;
}