<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Comment; 

class PolymorphicController extends Controller
{
    public function polymorphic()
    {
        /* 
                $city = City::where('name', 'CAMPINAS')->get()->first();
        echo $city->name;

        $comments = $city->comments()->get();

        foreach ($comments as $comment){
            echo "<br>{$comment->description}";
        }
         */

        /* 
                $state = State::where('name', 'BAHIA')->get()->first();
        echo $state->name;

        $comments = $state->comments()->get();

        foreach ($comments as $comment){
            echo "<br>{$comment->description}";
        }
         */
        $country = Country::find(1);
        echo $country->name;

        $comments = $country->comments()->get();

        foreach ($comments as $comment){
            echo "<br>{$comment->description}";
        }


    }

    public function polymorphicInsert()
    {
        /* 
        $city = City::where('name', 'CAMPINAS')->get()->first();
        echo $city->name;

        $comment = $city->comments()->create([
            'description' => "New Comment {$city->name} ".date('YmdHis'),
        ]);
        var_dump($comment);
        */

        /* 
        $state = State::where('name', 'BAHIA')->get()->first();
        echo $state->name;

        $comment = $state->comments()->create([
            'description' => "New Comment State {$state->name} ".date('YmdHis'),
        ]);
        var_dump($comment);
         */

        $country = Country::find(1);
        echo $country->name;

        $comment = $country->comments()->create([
            'description' => "New Comment State {$country->name} ".date('YmdHis'),
        ]);
        var_dump($comment);
    }
}
