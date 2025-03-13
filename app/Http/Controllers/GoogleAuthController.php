<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();

            $existingUser = User::where('email', $user->email)->first();

            if (! $existingUser) {
                return redirect()->route('login')->with('error', 'Your Bicol University email is not registered');
            }

            if (empty($existingUser->google_id)) {
                $existingUser->update(['google_id' => $user->id]);
            }

            Auth::login($existingUser);

            session()->regenerate();

            return redirect()->route('/dashboard');
            } catch (Exception) {
                return redirect()->route('login')->with('error', 'Your Bicol University email is not registered');

            }
    }

}
