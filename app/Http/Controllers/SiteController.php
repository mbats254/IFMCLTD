<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContent;
use App\Models\Service;
use App\Models\User;
use App\Models\ContactInformation;
use App\Models\ContactUs;
use App\Models\Snapshot;
use App\Models\Admin;
use App\Models\Team;
use App\Models\FAQ;
use App\Models\Testimonial;
use App\Models\Subscriber;
use App\Notifications\ContactUsIFMCLTD;
use Illuminate\Support\Facades\Hash;
use App\Notifications\WelcomeSubscriber;

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
        $site_content = SiteContent::orderBy('id','desc')->first();
        $team_members = Team::get();
        return view('sites_files.about_us',compact('site_content','team_members'));
    }

    public function contact_us(Request $request)
    {
        $contact_information = ContactInformation::orderBy('id','desc')->first();
        $team_members = Team::get();
        return view('sites_files.contact_us',compact('contact_information','team_members'));
    }
    
    public function our_services(Request $request)
    {
        $services = Service::get();
        return view('sites_files.our_services',compact('services'));
    }

    public function single_service(Request $request)
    {
        $single_service = Service::where('uniqid', '=', $request->uniqid)->get();
        // dd($single_service);
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
        // dd($request->name);
     
      
        $contact_us = ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'uniqid' => uniqid(),
            'message' => $request->message,
            'subject' => $request->subject
        ]);
        $alladmins = Admin::get();
        // dd($contact_us);
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

    public function newsletter_subscribe(Request $request)
    {
        $subscriber = Subscriber::create([
            'email' => $request->email,
            'uniqid' => uniqid()
        ]);

       
            $subscriber->notify(new WelcomeSubscriber($subscriber));
        
        Log::info( $subscriber->email."'s Added Sucessfully!");
        $request->session()->flash("success", $subscriber->email."'s Added Sucessfully!");
        return redirect()->back();
        
    }

    public function password_update(Request $request)
    {
        $user = User::where('uniqid','=',$request->uniqid)->first();
        return view('auth.reset',compact('user'));
    }

    public function password_update_post(Request $request)
    {
        $user = User::where('email','=',$request->email)->first();
        // dd($request->all());
        $user->update([
            'password' =>  Hash::make($request->password)
        ]);

        Log::info( "Password Chanegd Successfully!");
        $request->session()->flash("success", "Password Chanegd Successfully!");
        return redirect()->back();
    }

   

    
}
