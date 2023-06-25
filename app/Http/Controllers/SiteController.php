<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContent;
use App\Models\Service;
use App\Models\ContactInformation;
use App\Models\Snapshot;
use App\Models\Team;
use App\Models\FAQ;

class SiteController extends Controller
{

    public function welcome(Request $request)
    {
        $site_content = SiteContent::orderBy('id','desc')->first();
        // dd($site_content['about_home_paragraph']);
        $services = Service::get();
        $snapshots = Snapshot::get();
        $team_members = Team::get();
        $faqs = FAQ::where('question' ,'=!', '')->get();
        $suggestion_complain_question = FAQ::where('suggestion_complain_question' ,'=!', '')->get();
        return view('sites_files.welcome',compact('suggestion_complain_question','faqs','team_members','site_content','services','snapshots'));
    }
    public function about_us(Request $request)
    {
        $site_content = SiteContent::get();
        return view('sites_files.about_us');
    }

    public function contact_us(Request $request)
    {
        $contact_information = ContactInformation::get();
        return view('sites_files.contact_us',compact('contact_information'));
    }
    
    public function our_services(Request $request)
    {
        $services = Service::get();
        return view('sites_files.our_services');
    }

    public function single_service(Request $request)
    {
        $single_sevice = Service::where('uniqid', '=', $request->uniqid)->get();
        dd($single_sevice);
        return view('sites_files.services_single',compact('single_service'));
        
    }

    public function post_suggestion_complain_question(Request $request)
    {
        $suggestion_complain_question = $request->suggestion_complain_question;
    }
}
