<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Admin;
use App\Models\Blog;
use App\Models\Innovation;
use App\Models\Product;
use App\Models\Service;
use App\Models\SiteContent;
use App\Models\Team;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\FAQ;
use App\Models\Snapshot;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    // 
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
        // dd($request->bio);
        $team_member = Team::create([
            'name' => $request->name,
            'position' => $request->position,
            'photo' => $file_name,
            'bio'=> $request->bio,
            'uniqid'=> $uniqid
     
            ]);
            //  $user->notify(new WelcomeJudge($user,$product,$product));
            Log::info( $team_member->name." Posted Sucessfully!");
            $request->session()->flash("success", $team_member->name." Posted Sucessfully!");
            return redirect()->back();
    }

    public function post_testimonial(Request $request)
    {
        $photo = $request->file('photo');
        $uniqid = uniqid();
        $request->file('photo')->move(base_path() . '/public/images/', $file_name = str_replace(" ", "_", '/images/'.$request->name . $uniqid) . "." . $photo->getClientOriginalExtension());
        $testimonial = Testimonial::create([
                'name' => $request->name,        
                'photo' => $file_name,
                'comment'=> $request->comment,
                'uniqid'=> $uniqid
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
        // dd($fields[0]);

        for ($i=0;$i<sizeof($fields);$i++) {
            $this_field = $fields[$i];
            if ($service->$this_field !== null && $request->$this_field !== null)
             {
                Service::where('uniqid','=',$request->uniqid)->update([
                    $this_field => $request->$this_field
                ]);

               }
        }
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
    

}
