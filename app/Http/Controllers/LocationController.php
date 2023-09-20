<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index(Location $locate)
    {
        return view('/locations/map')->with(["locates" => $locate->get()]);
    }
    
    public function store(Location $location, Request $request)
    {
        $location_input = $request['location'];
        $location_input += ['user_id' => $request->user()->id];
        $location->fill($location_input)->save();
        return redirect('/location/map');
    }
}
