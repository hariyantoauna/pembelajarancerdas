<?php


namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $sociaUser = Socialite::driver('google')->user();
        // $user = Socialite::driver('google')->user();
        $registerUser = User::where('email', $sociaUser->email)->first();
        // dd($user_model);

        if ($registerUser) {
            Auth::login($registerUser);
            return redirect('/biodata');
        } else {
            $user = User::updateOrCreate([
                'email' => $sociaUser->email,
                'name' => $sociaUser->name,
                'password' => Hash::make(time()),
                'email_verified_at' => date('Y-m-d h:s')

            ]);
            Auth::login($user);
            return redirect('/beranda');
        }
    }
}
