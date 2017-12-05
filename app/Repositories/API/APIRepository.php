<?php

namespace App\Repositories\API;

use App\Models\Forms\City;
use App\Models\Forms\Province;

class APIRepository
{

    public function __construct(City $city, Province $province){
        $this->city = $city;
        $this->province = $province;
    }

    public function loadCities($province){

        return $this->city->select('id','city')->where("state","=",$province)->get();
    }

    public function loadProvinces(){
        return $this->province->all();

    }


}