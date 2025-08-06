<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Island;
use App\Models\Region;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function game()
    {
        $regions = Region::all()->toArray();
        $islands = Island::all()->toArray();
        return view("game", [
            "regions" => $regions,
            "islands" => $islands,
        ]);
    }
}
