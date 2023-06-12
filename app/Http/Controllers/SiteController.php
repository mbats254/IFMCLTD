<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function about_us(Request $request)
    {
        return view('site_files.about_us');
    }

    public function contact_us(Request $request)
    {
        return view('site_files.contact_us');
    }
    
    public function our_services(Request $request)
    {
        return view('site_files.our_services');
    }
}
