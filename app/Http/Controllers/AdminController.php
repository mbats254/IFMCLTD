<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Admin;
use App\Models\Blog;
use App\Models\ContactInformation;
use App\Models\Innovation;
use App\Models\Product;
use App\Models\Service;
use App\Models\SiteContent;
use App\Models\Team;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\FAQ;
use App\Models\Newsletter;
use App\Models\Snapshot;
use App\Models\Subscriber;

use Illuminate\Support\Facades\Schema;
use App\Notifications\NewsletterNotification;


class AdminController extends Controller
{
    // 

    public function delete_blog_post(Request $request)
    {
        $blog_post = Blog::where('uniqid','=',$request->uniqid)->first();
        $blog_post->delete();
        Log::info($blog_post->title." deleted Successfully.");
        $request->session()->flash("error", $blog_post->title." deleted Successfully.");
        return redirect()->back();

    }
    public function all_blog_posts(Request $request)
    {
        $blog_posts = Blog::get();
        // dd($blog_posts);
        return view('admin.all_blog_posts',compact('blog_posts'));
    }
    public function post_blog_post(Request $request)
    {
        $photo = $request->file('photo');
        $uniqid = uniqid();
        $request->file('photo')->move(base_path() . '/public/images/', $file_name = str_replace(" ", "_", '/images/'.$request->name . $uniqid) . "." . $photo->getClientOriginalExtension());
        $blog_post  = Blog::create([
            'title' => $request->title,
             'paragraph'  => $request->paragraph, 
             'photo' => $file_name, 
             'uniqid' => $uniqid
        ]);

        Log::info($blog_post->title." Posted Successfully.");
        $request->session()->flash("success", $blog_post->title." Posted Successfully.");
        return redirect()->back();
    }

    public function add_blog_post(Request $request)
    {
        return view('admin.add_blog_post');
    }
    public function edit_contact_information(Request $request)
    {
        $contact_information = ContactInformation::first();
        // dd($contact_information);
        

        return view('admin.edit_contact_information',compact('contact_information'));
    }
    public function add_product()
    {
        $services = Service::get();
        return view('admin.add_product',compact('services'));
    }

    public function add_snap_shot()
    {        
        return view('admin.add_snapshot');
    }

    
    public function add_site_content(Request $request)
    {
        $site_content = SiteContent::orderBy('id','desc')->get()->first();
        // dd($site_content->vision);
        return view('admin.add_site_content',compact('site_content'));
    }
    public function add_service (Request $request)
    {
        return view('admin.add_service');
    }

    public function post_site_content(Request $request)
    {
        // dd($request->all());
        $request['uniqid'] = uniqid();
        $site_content = SiteContent::create($request->all());
        dd($site_content);
        // $site_content = SiteContent::create([
           
        //     'uniqid' => uniqid(),
        //     'vision' => $request->vision,
        //     'mission' => $request->mission,
        //     'innovationn_summary' => $request->innovationn_summary,
        //     'training_program_summary' => $request->training_program_summary

        // ]);
         Log::info("Site Content Posted Sucessfully.");
            $request->session()->flash("success", "Site Content Posted Sucessfully!");
            return redirect()->back();
    }
    public function post_service(Request $request)
    {
        // dd($request->name);
        $service = Service::create([
            'name' => $request->name,
            'service_description' => $request->service_description ,
            'uniqid' => uniqid()
     
            ]);
            Log::info("Service Posted Sucessfully.");
            $request->session()->flash("success", "Service Posted Sucessfully!");
            return redirect()->back();
    }

    public function post_product(Request $request)
    {
        // 'name ', 'description', 'type','uniqid'
   
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description ,
            'type'=> $request->type ,
            'uniqid'=> uniqid()
     
            ]);
            //  $user->notify(new WelcomeJudge($user,$product,$product));
            Log::info("Product Posted Sucessfully.");
            $request->session()->flash("success", "Product Posted Sucessfully!");
            return redirect()->back();
    }


    public function add_team_member(Request $request)
    {
        return view('admin.add_team');
    }

    public function post_team_member(Request $request)
    {
        $photo = $request->file('photo');
        $uniqid = uniqid();
        $request->file('photo')->move(base_path() . '/public/images/', $file_name = str_replace(" ", "_", '/images/'.$request->name . $uniqid) . "." . $photo->getClientOriginalExtension());
        // dd($request->bio);','', '', 'photo', '', 'phone_number'
        $team_member = Team::create([
            'name' => $request->name,
            'position' => $request->position,
            'photo' => $file_name,
            'bio'=> $request->bio,
            'facebook'=> $request->facebook,
            'instagram'=> $request->instagram,
            'twitter'=> $request->twitter,
            'email'=> $request->email,
            'phone_number'=> $request->phone_number,
            'uniqid' => $uniqid 
            
     
            ]);
            //  $user->notify(new WelcomeJudge($user,$product,$product));
            Log::info( $team_member->name." Posted Sucessfully!");
            $request->session()->flash("success", $team_member->name." Posted Sucessfully!");
            return redirect()->back();
    }

     public function post_edit_contact_information(Request $request)
     {
        // $contact_information = ContactInformation::where('uniqid','=', $request->uniqid)->first();
        // dd($request->all());
   
        $contact_information = ContactInformation::where('uniqid','=', $request->uniqid)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'P_O_address' => $request->P_O_address,
            'physical_location' => $request->physical_location,
            'map_link' => $request->map_link,
            
        ]);
        Log::info( $request->name." Updated Sucessfully!");
        $request->session()->flash("success",$request->name." Updated Successfully!");
        return redirect()->back();

     }

    public function post_testimonial(Request $request)
    {
        $photo = $request->file('photo');
        $uniqid = uniqid();
        $request->file('photo')->move(base_path() . '/public/images/', $file_name = str_replace(" ", "_", '/images/'.$request->name . $uniqid) . "." . $photo->getClientOriginalExtension());
        $request['uniqid'] = uniqid();
        $request['file_name'] = $file_name;
        // dd($request->all());
        $testimonial = Testimonial::create([
            "name" => $request->name,
            "comment" => $request->comment,
            "uniqid" =>uniqid(),
            "photo" => $file_name
        ]);

        Log::info( $testimonial->name."'s Posted Sucessfully!");
        $request->session()->flash("success", $testimonial->name."'s Posted Sucessfully!");
        return redirect()->back();
    }

    public function add_testimonial(Request $request)
    {
        return view('admin.add_new_testimonal');
    }

    public function all_product(Request $request)
    {
        $products = Product::all();
        return view('admin.all_products',compact('products'));
        // dd($products);
    }
   
    public function all_testimonials(Request $request)
    {
        $testimonials = Testimonial::all();
        return view('admin.all_testimonials',compact('testimonials'));
        // dd($products);
    }

    public function all_descriptional_listing(Request $request)
    {
        $service = Service::where('uniqid','=' ,$request->uniqid)->get()->first();
        $descriptional_listings = $service->descriptional_listing;
        dd($descriptional_listings);
        return view('admin.all_products',compact('products'));
        // dd($products);
    }

    public function edit_product(Request $request)
    {
        $product = Product::where('uniqid','=',$request->uniqid)->get()->first();
        return view('admin.edit_product',compact('product'));
        dd($product);
    }

    public function post_edit_product(Request $request)
    {
        $product = Product::where('uniqid','=',$request->uniqid)->get()->first();
        $fields =  Schema::getColumnListing($product->getTable());
        // dd($fields[0]);

        for ($i=0;$i<sizeof($fields);$i++) {
            $this_field = $fields[$i];
            if ($product->$this_field !== null && $request->$this_field !== null) {
                Product::where('uniqid','=',$request->uniqid)->update([
                    $this_field => $request->$this_field
                ]);

               }
        }
        Log::info( $product->name."'s Updated Sucessfully!");
        $request->session()->flash("success", $product->name."'s Updated Sucessfully!");
        return redirect()->back();
    }

    public function delete_product(Request $request)
    {
        $product = Product::where('uniqid','=',$request->uniqid)->get()->first();
        $product->delete();
        Log::info( $product->name."'s Deleted Sucessfully!");
        $request->session()->flash("success", $product->name."'s Deleted Sucessfully!");
        return redirect()->back();
    }

    public function all_services (Request $request)
    {

        $services = Service::get();
        return view('admin.all_services', compact('services'));
        // dd($services);
    }


    public function edit_service(Request $request)
    {

        $service = Service::where('uniqid','=',$request->uniqid)->get()->first();
        return view('admin.edit_service',compact('service'));
        dd($service);
    }

    public function post_edit_service(Request $request)
    {
        $service = Service::where('uniqid','=',$request->uniqid)->get()->first();
        $fields =  Schema::getColumnListing($service->getTable());
        // dd($request->all());
        $full_listing = [$request['descriptional_listing'] .':'.$request['list_item_description']];
        // dd($full_listing);
        $descriptional_listings = explode(",",$service->descriptional_listing);
       
        if(!in_array($full_listing, $descriptional_listings))
        {
            array_push($descriptional_listings,implode(',',$full_listing));
        }
           
        //    dd($request->descriptional_listing);
        //    dd(($descriptional_listings));
           $request['descriptional_listing'] = implode(",",$descriptional_listings);
        if(($request->file('photo')))
        {
            $photo = $request->file('photo');
            $uniqid = uniqid();
            $request->file('photo')->move(base_path() . '/public/images/', $file_name = str_replace(" ", "_", '/images/'.$request->name.'#' . $uniqid) . "." . $photo->getClientOriginalExtension());
            // array_diff($request->all(), $request['page_photo']);
            $request['page_photo'] = $file_name;
            // dd($request->all());
        }  
        
            
         
            // dd(implode(",",$list_item_description));
        
        // dd(($request['descriptional_listings'] ));
        // dd($request->all());
        
        $notaffected = [];
        $affected = [];
        for ($i=1;$i<sizeof($fields);$i++) {
            $this_field = $fields[$i];
            // dd($service->$this_field !== $request->$this_field);
            if ($service->$this_field !== $request->$this_field)
             {
            //  array_push($affected,$this_field);
                Service::where('uniqid','=',$request->uniqid)->update([
                    $this_field => $request->$this_field
                ]);

               }
               else{
                array_push($notaffected, $this_field);
               }
        }
        // dd(implode(',',$affected).'/// '.implode(",",$notaffected));
        Log::info( $service->name."'s Updated Sucessfully!");
        $request->session()->flash("success", $service->name."'s Updated Sucessfully!");
        return redirect()->back();
    }

    public function delete_service(Request $request)
    {

        $product = Service::where('uniqid','=',$request->uniqid)->get()->first();
        $product->delete();
        Log::info( $product->name."'s Deleted Sucessfully!");
        $request->session()->flash("success", $product->name."'s Deleted Sucessfully!");
        return redirect()->back();
    }

    public function add_faq(Request $request)
    {
        return view('admin.add_faq');
    }

    public function post_faq(Request $request)
    {
        dd(gettype($request->question));
        $faq = FAQ::create([
            'question' => $request->question,        
            // 'answer' =>$request->answer,             
            'uniqid'=> uniqid()
    ]);

    Log::info( $faq->question."'s Posted Sucessfully!");
    $request->session()->flash("success", $faq->question."'s Posted Sucessfully!");
    return redirect()->back();
    }

    public function post_snapshot(request $request)
    {
        $photo = $request->file('backdropImage');
        $uniqid = uniqid();
        $request->file('backdropImage')->move(base_path() . '/public/images/', $file_name = str_replace(" ", "_", '/images/'.$request->title . $uniqid) . "." . $photo->getClientOriginalExtension());
        $snapshot = Snapshot::create([
                'title' => $request->title,        
                'backdropImage' => $file_name,
                'accompanying_text'=> $request->accompanying_text,
                'uniqid'=> $uniqid
        ]);

        Log::info( $snapshot->name."'s Posted Sucessfully!");
        $request->session()->flash("success", $snapshot->title."'s Posted Sucessfully!");
        return redirect()->back();
        
    }

    public function all_descriptive_listing(Request $request)
    {
        $service = Service::where('uniqid','=',$request->uniqid)->first();
        // dd();
        $descriptive_listing = explode(',',$service->descriptional_listing);
        if($service->name !== 'Finance Literacy & Institution Linkages')
        {
            Log::info( "Only applicable for Finance Literacy & Institution Linkages not".$service->name);
        $request->session()->flash("error","Only Applicable for Finance Literacy & Institution Linkages Not ".$service->name);
        return redirect()->back();
        }
        else
        {
            
            return view('admin.all_descriptive_listing',compact('service','descriptive_listing'));
        }
    }

    public function descriptive_listing(Request $request)
    {
       $service = Service::where('uniqid','=',$request->uniqid)->first();
    //    dd();
       $saved_array =  explode(",",$service->descriptional_listing);
       unset($saved_array[$request->index]);
       $service->update([
        'descriptional_listing' => implode(',',$saved_array)
       ]);
       Log::info( $service->name."'s Updated Sucessfully!");
       $request->session()->flash("success", $service->name."'s Updated Sucessfully!");
       return redirect()->back();




    }
    
    public function send_newsletter(Request $request)
    {
        return view('admin.send_newsletter');
    }

    public function post_newsletter(Request $request)
    {
        $newsletter = Newsletter::create([
            'title' => $request->title,
            'message' => $request->message,
            'uniqid' => uniqid()
        ]);
        // dd($newsletter);
        $subscribers = Subscriber::get();
        foreach($subscribers as $subscriber)
        {
            $subscriber->notify(new NewsletterNotification($subscriber, $newsletter));
        }
      Log::info( $newsletter->title."'s Sent Sucessfully!");
       $request->session()->flash("success",$newsletter->title."'s Sent Sucessfully!");
       return redirect()->back();
    
    }

    public function add_innovation(Request $request)
    {
        return view('admin.add_innovation');
    }

    public function post_innovation(Request $request)
    {
        // dd($request->name);
        $post_innovation = Innovation::create([
            'name' => $request->name,
            'description' => $request->description,
            'link' => $request->link,
            'uniqid' => uniqid()
        ]);
       Log::info( $post_innovation->name."'s Added Sucessfully!");
       $request->session()->flash("success",$post_innovation->name."'s post_innovation Sucessfully!");
       return redirect()->back();
    }
}
