<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // $matching_input += ['user_id' => $request->user()->id];
        $matching->fill($matching_input)->save();
        return redirect('/matchings/index');
    }
    
    public function show(Matching $matching)
    {   
        $is_join = $matching->users()->find(Auth::id());
        $is_join = !is_null($is_join);
        return view('matchings/show')->with(['matching' => $matching, 'is_join' => $is_join]);
    }
    
    public function join(Matching $matching, MatchingUser $matchinguser, Request $request)
    {   
        $matching->users()->attach($request->user()->id);
        return redirect('/matchings/'. $matching->id );
    }
    
    public function cancel(Matching $matching, MatchingUser $matchinguser, Request $request)
    {   
        $matching->users()->detach($request->user()->id);
        return redirect('/matchings/'. $matching->id );
    }
    
}
