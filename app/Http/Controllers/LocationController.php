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
}
