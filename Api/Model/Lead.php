<?php

namespace Api\Model;
use \Illuminate\Database\Eloquent\Model;

class Lead extends Model {

    public $table = "salesforce.lead";
    protected $fillable = [
        'name', 'firstname' , 'lastname', 'facebookid__c',
    ];
}