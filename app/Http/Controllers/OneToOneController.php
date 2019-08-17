<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller
{
    public function oneToOne()
    {
        $country = Country::where('name', 'China')->get()->first();

        echo $country->name;

        $location = $country->location;

        echo "<hr>Latitude: {$location->latitude}<br>";
        echo "<hr>Latitude: {$location->longitude}<br>";

    }
    public function oneToOneInverse()
    {
        $latitude = 456;
        $longitude = 654;

        $location = Location::where('latitude',$latitude)
                            ->where('longitude',$longitude)
                            ->get()
                            ->first();

        $country = $location->country;

        echo $country->name;
    }
    public function oneToOneInsert()
    {
        $dataForm = [
            'name' => 'Canada',
            'latitude' => '142',
            'longitude' => '412'
        ];

        $country =  Country::create($dataForm);

        /*
        $location = new Location;
        $location->latitude = $dataForm['latitude'];
        $location->longitude = $dataForm['longitude'];
        $location->country_id = $country->id;
        $saveLocation = $location->save();
        */

        $location = $country->location()->create($dataForm);
        
    }
}
