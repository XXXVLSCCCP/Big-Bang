<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => ['required', 'confirmed', Rules\Password::min(8)],
        // ]);

        $json = json_decode('[' . $request . ']');
        foreach($json as $request) {

            $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::min(2)],
        ]);


          $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'api_token' => Str::random(80),
        ]);
        }

    

        // event(new Registered($user));

        // Auth::login($user);

        
        $token = $user['api_token'];

        return $token->toJson();

        // return redirect(RouteServiceProvider::HOME);
    

    // public function token()
    // {
    //     $response = $client->request('POST', '/api/user', [
    //         'headers' => [
    //             'Accept' => 'application/json',
    //         ],
    //         'form_params' => [
    //             'api_token' => $token,
    //         ],
    //     ]);
    // }

    // public function update(Request $request)
    // {
    //     $token = Str::random(80);

    //     $request->user()->forceFill([
    //         'api_token' => hash('sha256', $token),
    //     ])->save();

    //     return ['token' => $token];
    // }

}
}