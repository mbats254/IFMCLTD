<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Notifications\PasswordResetNotification;
use Illuminate\Support\Facades\Log;
use App\Models\User;
class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
    public function password_email_reset(Request $request)
    {
        
        $user = User::where('email','=',$request->email)->first();

        if($user !== null)
        {
            $user->notify(new PasswordResetNotification($user));
            Log::info( "An email to reset your password has been sent to you!");
            $request->session()->flash("success", "An email to reset your password has been sent to you");
            return redirect()->back();
        }
        else
        {
            Log::info( "User not Registered with us");
            $request->session()->flash("error", "User not Registered with us");
            return redirect()->back();
        }
    }
}
