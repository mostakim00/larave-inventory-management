<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;
use Exception;
use App\Models\User;

class GoogleSocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback()
    {
        
        try {
     
            $user = Socialite::driver('google')->user();
            $finduser = User::where('social_id', $user->id)->first();
      
            if($finduser){
      
                Auth::login($finduser);
                return redirect('/admin');
      
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'social_type'=> 'google',
                    'password' => encrypt('password')
                ]);
     
                Auth::login($newUser);
      
                return redirect('/admin');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
