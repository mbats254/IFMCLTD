<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContent;
use App\Models\Service;

class SiteController extends Controller
{

    public function welcome(Request $request)
    {
        $site_content = SiteContent::get();
        // dd($site_content);
        $services = Service::get();
        return view('sites_files.welcome',compact('site_content','services'));
    }
    public function about_us(Request $request)
    {
        return view('sites_files.about_us');
    }

    public function contact_us(Request $request)
    {
        return view('sites_files.contact_us');
    }
    
    public function our_services(Request $request)
    {
        return view('sites_files.our_services');
    }
}
