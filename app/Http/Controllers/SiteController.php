<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContent;
use App\Models\Service;
use App\Models\ContactInformation;
use App\Models\ContactUs;
use App\Models\Snapshot;
use App\Models\Admin;
use App\Models\Team;
use App\Models\FAQ;
use App\Models\Testimonial;
use App\Notifications\ContactUsIFMCLTD;
use Illuminate\Support\Facades\Schema;
use App\Models\Blog;
use Illuminate\Support\Facades\Log;
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
        $testimonials = Testimonial::get();
        $contact_information = ContactInformation::first();
        // dd($contact_information);
        $suggestion_complain_question = FAQ::where('suggestion_complain_question' ,'=!', '')->get();
        return view('sites_files.welcome',compact('contact_information','testimonials','suggestion_complain_question','faqs','team_members','site_content','services','snapshots'));
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

    public function contact_us_post(Request $request)
    {
   
        unset($request['_token']);
        $request['uniqid'] = uniqid();
        // dd($request->all());
     
      
        $contact_us = ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'uniqid' => uniqid(),
            'message' => $request->message,
            'subject' => $request->subject
        ]);
        $alladmins = Admin::get();
        for($i=0;$i<sizeof($alladmins);$i++)
        {
            $alladmins[$i]->notify(new ContactUsIFMCLTD($alladmins[$i],$contact_us));
        }
        // $contact_us
        Log::info( $contact_us->name."'s Added Sucessfully!");
        $request->session()->flash("success", $contact_us->name."'s Added Sucessfully!");
        return redirect()->back();
        // dd($contact_us);
    }
}
