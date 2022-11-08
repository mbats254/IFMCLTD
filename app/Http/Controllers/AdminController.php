<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Admin;
use App\Blog;
use App\Innovation;
use App\Product;
use App\Service;
use App\SiteContent;
use App\Team;
use App\User;

class AdminController extends Controller
{
    // 
    public function add_product()
    {
        $services = Service::get();
        return view('admin.add_product',compact('services'));
    }

    
    public function add_site_content(Request $request)
    {
        return view('admin.add_site_content');
    }
    public function add_service (Request $request)
    {
        return view('admin.add_service');
    }

    public function post_site_content(Request $request)
    {

     
        $site_content = SiteContent::create([
            'company_summary' => $request->company_summary,
            'snapshot_array' => $request->snapshot_array,
            'uniqid' => uniqid(),
            'vision' => $request->vision,
            'mission' => $request->mission,
            'innovationn_summary' => $request->innovationn_summary,
            'training_program_summary' => $request->training_program_summary

        ]);
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

    

}
