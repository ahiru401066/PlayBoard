<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Matching;
use App\Models\MatchingUser;

class MatchingController extends Controller
{
    public function index(Category $category, Matching $matching)
    {
        return view('matchings/index')->with(['categories' => $category->get(), 'matchings' => $matching->GetByMatching()]);
    }
    
    public function store(Matching $matching, Request $request)
    {
        $matching_input = $request['matching'];
        $matching_input += ['user_id' => $request->user()->id];
        $matching->fill($matching_input)->save();
        return redirect('/matchings/index');
    }
    
    public function show(Matching $matching)
    {   
        return view('matchings/show')->with(['matching' => $matching]);
    }
    
    public function join(Matching $matching, MatchingUser $matchinguser, Request $request)
    {
        $user_input = $request['matchinguser'];
        $user_input += ['user_id' => $request->user()->id];
        $user_input += ['matcing_id' => $matching->id ];
        $matchinguser->fill($user_input)->save();
        return redirect('/');
    }
}
