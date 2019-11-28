<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $req = Request::create(route('passport.token'), 'POST', [

                'grant_type' => 'password',
                'client_id' => 2,
                'client_secret' => 'I3bJnj478S87dlCbtHtbTRlGfZsH0bFVHZWQGPKv',
                'username' => $user->email,
                'password' => $request->password,
                'scope' => ''
            ]);

            
    
            $response = app()->handle($req);
            return $response->getBody();
        } catch (\GuzzleHttp\Exception\BadResponseException $e) {
            if ($e->getCode() === 400) {
                return response()->json('Invalid Request. Please enter a username or a password.', $e->getCode());
            } else if ($e->getCode() === 401) {
                return response()->json('Your credentials are incorrect. Please try again', $e->getCode());
            }
            return response()->json('Something went wrong on the server.', $e->getCode());
        }
    }
}
 