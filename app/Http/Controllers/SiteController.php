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
use App\Models\ComplainQuestionSuggestion;
use App\Notifications\ContactUsIFMCLTD;
use Illuminate\Support\Facades\Hash;
use App\Notifications\WelcomeSubscriber;
use App\Notifications\ComplainQuestionSuggestionNotification;

use Illuminate\Support\Facades\Schema;
use App\Models\Blog;
use App\Models\Innovation;
use Illuminate\Support\Facades\Log;
class SiteController extends Controller
{

    public function single_news_post(Request $request)
    {
        $news_post  = Blog::where('uniqid','=',$request->uniqid)->first();
        return view('newsPage.news_single',compact('news_post'));
        // dd($request->uniqid);
    }

    public function our_videos(Request $request)
    {
        $innovation_posts = Innovation::get();
        return view('sites_files.our_videos',compact('innovation_posts'));
    }

    public function admin(Request $request)
    {
        return redirect()->route('login');
    }
        
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
        // $suggestion_complain_question = FAQ::where('suggestion_complain_question' ,'=!', '')->get();
        return view('sites_files.welcome',compact('contact_information','testimonials','faqs','team_members','site_content','services','snapshots'));
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
        $single_service = Service::where('uniqid', '=', $request->uniqid)->first();
        // dd($single_service);
        return view('sites_files.services_single',compact('single_service'));
        
    }

    public function post_suggestion_complain_question(Request $request)
    {
        // $suggestion_complain_question = $request->complaint;
        // dd(array_keys($request->all()));
        unset($request['_token']);
       
        $suggestion_complain_question = ComplainQuestionSuggestion::create([
            "question" => $request->question,
            "suggestion" => $request->suggestion,
            "complaint" => $request->complaint,
            "uniqid" => uniqid()
        ]);
        $alladmins = Admin::all();
        foreach(array_keys($request->all()) as $array_key)
        {
            // dd($array_key);
            if($request->$array_key !== null )
            {
                $field = $array_key;
            }
        
        // dd($request[$field]);
        for($i=0;$i<sizeof($alladmins);$i++)
        {
            $alladmins[$i]->notify(new ComplainQuestionSuggestionNotification($alladmins[$i],$request[$field],$field));
            
        }

    }
        Log::info("Message Sent Sucessfully!");
        $request->session()->flash("success","Message Sent Sucessfully!");
        return redirect()->back();
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

    public function blog_news(Request $request)
    {
        $blog_posts = Blog::get();
        // dd($blog_posts);
        return view('sites_files.blog_posts',compact('blog_posts'));
        // return view('news',compact('blog_posts'));
    }

   

    
}
