<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Visit;
use Jenssegers\Agent\Agent;

class VisitController extends Controller
{
    //
    public function store(Request $request, Link $link){
        $agent = new Agent();
        return $link->visits()->create(['user_agent'=>$agent->platform()]);

    }
}
