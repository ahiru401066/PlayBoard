<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matching;
use App\Models\Opinion;

class OpinionController extends Controller
{
    public function store(Matching $matching, Opinion $opinion, Request $request)
    {
        $opinion_input = $request['opinion'];
        $opinion_input += ['user_id' => $request->user()->id];
        $opinion_input += ['matching_id' => $matching->id];
        $opinion->fill($opinion_input)->save();
        return redirect('/matchings/' . $matching->id);
    }
}
