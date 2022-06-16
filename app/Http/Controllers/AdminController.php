<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // 
    public function add_product()
    {
        return view('admin.add_product');
    }


    public function judge_project_post(Request $request)
    {
        // $grant_application = GrantApplication::where('uniqid','=',$request->uniqid)->get()->first();
        // // dd($grant_application->id);
        // for($i=0;$i<sizeof($request->judge);$i++)
        // $user = User::find($request->judge[$i]);
        // $project_judge = ProjectJudge::create([
        //         'email' => $user->email,
        //         'applicant_id' => $grant_application->id,
        //         'name' => $user->name,
        //         'uniqid' => uniqid()
        //     ]);
        //     $user->notify(new WelcomeJudge($user,$project_judge,$grant_application));
        //     Log::info("Judges Posted Sucessfully.");
        //     $request->session()->flash("success", "Judges Posted Sucessfully!");
        //     return redirect()->back();
    }

}
