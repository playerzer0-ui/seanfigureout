<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Island;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function getIslandBuildings(Request $request)
    {
        $islandID = $request->input('islandID');

        $buildings = DB::table('buildings')
            ->whereIn('buildingID', function ($query) use ($islandID) {
                $query->select('buildingID')
                    ->from('islandBuildings')
                    ->where('islandID', $islandID);
            })
            ->get(['buildingName']); // Adjust column names if needed

        return response()->json($buildings);
    }

}
