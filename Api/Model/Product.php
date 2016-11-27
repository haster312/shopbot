<?php

namespace Api\Model;
use \Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $connection = 'heroku';
    public $table = "salesforce.product2";
    public $timestamps = false;
}