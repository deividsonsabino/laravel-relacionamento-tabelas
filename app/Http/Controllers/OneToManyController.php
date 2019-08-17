<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;


class OneToManyController extends Controller
{
    public function oneToMany()
    {
        //$country = Country::where('name','Brasil')->get()->first();
        $countries =  Country::where('name','LIKE', "%a%")->with('states')->get();


        foreach($countries as $country){
            echo "<b>{$country->name}</b>";

            $states = $country->states;

            foreach($states as $state) {
            echo "<br>{$state->initials} - {$state->name}";
            } 

            echo '<hr>';
        } 
    }
    public function manyToOne()
    {
        $stateName = 'xangai';
        $state = State::where('name', $stateName)->get()->first();
        echo "<b>Cidade {$state->name}</b>";

        $country = $state->country;
        echo "<br>País: {$country->name}";
    }
    public function oneToManyTwo()
    {
        //$country = Country::where('name','Brasil')->get()->first();
        $countries =  Country::where('name','LIKE', "%a%")->with('states')->get();


        foreach($countries as $country){
            echo "<b>{$country->name}</b>";

            $states = $country->states;

            foreach($states as $state) {
                echo "<br>{$state->initials} - {$state->name}";
                foreach($state->cities as $city){
                    echo "<br>Cidades: {$city->name},";
                }

            } 

            echo '<hr>';
        } 
    }

    public function oneToManyInsert()
    {
        $dataForm = [
            'name' => 'Bahia',
            'initials' => 'BA'
        ];
        $country = Country::find(1);

        $insertState = $country->states()->create($dataForm);
        
    }

    public function oneToManyInsertTwo()
    {
        $dataForm = [
            'name' => 'Espirito Santo',
            'initials' => 'ES',
            'country_id' => '1'
        ];

        $insertState = State::create($dataForm);
        
    }
    public function hasManyThrough()
    {
        $country = Country::find(1);
        echo "<b>{$country->name}</br><br>";

        $cities = $country->cities;

        foreach ($cities  as $city){
            echo "{$city->name},";
        }
        echo "<br>Total ciades:{$cities->count()}";

    }
}
