<?php

namespace Api\Model;
use \Illuminate\Database\Eloquent\Model;

class City extends Model
{

    public $table = 'cities';

    protected $fillable = ['name','location'];

    public function getName(){
        return $this->name;
    }
}