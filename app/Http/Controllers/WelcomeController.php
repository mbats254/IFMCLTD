<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContent;
use App\Service;
use App\Team;

class WelcomeController extends Controller
{
    public function welcome(Request $request)
    {
        // 'name ', 'description', 'type','uniqid'
        $site_content = SiteContent::get()->first();
        $services = Service::all();
        $teams = Team::get();
        // dd($teams->count());
   return view('welcome', compact('site_content','services', 'teams'));
   
    }
}
