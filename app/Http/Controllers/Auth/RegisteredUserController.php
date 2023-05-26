<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Laravel\Sanctum\PersonalAccessTokenResult;

/**
 * Coded revised by 'aboutaleb-dev'.
 * Made the password validation more clear.
 */

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
            'password_confirmation' => ['same:password']
        ], [
            'password_confirmation' => 'The password field confirmation does not match.'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        // Generate API token for the registered user
        $tokenResult = $user->createToken('API Token');
        $token = $tokenResult->plainTextToken;

        // Store the API token in the user's record
        $user->api_token = $token;
        $user->save();

        Auth::login($user);

        // Store the API token in the session
        $request->session()->put('api_token', $token);

        return redirect(RouteServiceProvider::HOME);
    }
}
