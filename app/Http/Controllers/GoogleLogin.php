<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;





class GoogleLogin extends Controller
{
    use AuthenticatesUsers;

    public function __construct()

    {

        $this->middleware('guest')->except('logout');

    }

    public function redirectToGoogle()

    {

        return Socialite::driver('google')->redirect();

    }

    public function googleCallback()

    {

           try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $existUser = User::where('email', $googleUser->email)->first();

            if ($existUser) {
                Auth::loginUsingId($existUser->id);
            } else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->google_id = $googleUser->id;
                $user->password = md5(rand(1, 10000));  
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/');
        } catch (Exception $e) {
            return 'error';
        }
    }

}