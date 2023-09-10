<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matching;

class MatchingController extends Controller
{
    public function index(Matching $matching)
    {
        return view('matchings/index')->with(['matchings' => $matching->get()]);
    }
}
