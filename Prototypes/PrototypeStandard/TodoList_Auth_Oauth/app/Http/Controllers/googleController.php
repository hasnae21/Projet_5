<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class googleController extends Controller
{
    function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    function callbackGoogle()
    {
        try {

            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();

            if (!$user) {

                $add_user = User::create([
                    "name" => $google_user->getName(),
                    "email" => $google_user->getEmail(),
                    "google_id" => $google_user->getId(),
                ]);

                Auth::login($add_user);
                return redirect('dashboard');
            } 
            else {
                Auth::login($user);
                return redirect('dashboard');
            }

        } 
        catch (Exception $th) {
            //throw $th;
            dd('erreur' . $th->getMessage());
        }
    }
}
