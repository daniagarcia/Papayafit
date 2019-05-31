<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $user = User::create([
             'email'    => $request->email,
             'password' => $request->password,
         ]);

        $token = auth()->login($user);

        return $this->respondWithToken($token);
    }


    public function authenticate(Request $request)
	{
        $credentials = $request->only('username', 'password');
       return view('templates.admin');
        // $credentials;
        $user = User::where('email', $credentials['username'])->where('status', 1)->first();
       
		if ($user) {
			try {
				if (! $token = JWTAuth::attempt($credentials)) {
					return response()->json([
						'statusCode' => 400,
						'data'       => 'invalid_credentials'
					], 400);
				}
			} catch (JWTException $e) {
				return response()->json([
					'statusCode' => 500,
					'data'       => 'could_not_create_token'
				], 500);
			}
	
			return response()->json(compact('token', 'user'));
		} else {
			return response()->json([
				'statusCode' => 400,
				'data'       => 'invalid_credentials'
			], 400);
        }

	}
    public function login(Request $request)
    {
        // $request->input('email');
        $credentials = request(['email', 'password']);
    

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // return redirect()->route('templates.admin');

        // return $this->respondWithToken($token);
      
         return view('templates.admin');
        // return response()->json(['message' => 'Successfully']);
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60
        ]);
    }
}
