<?php

namespace Api\Business;
use Api\Model\City;

class CityBusiness extends Business
{
    public static function getAllCities(){
        new static;
        return City::all();
    }
}