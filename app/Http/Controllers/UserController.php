<?php

namespace App\Http\Controllers;

use App\User;
use App\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{
	/**
	 * Log in Autenticate
	 * @param String email
	 * @param String password
	 * @return JSON
	 */
	public function authenticate(Request $request)
	{
		$credentials = $request->only('email', 'password');
		$user = User::where('email', $credentials['email'])->where('status', 1)->first();
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

	/**
	 * Get the info of the autenticated user
	 */

	public function getAuthenticatedUser()
	{
		try {

			if (! $user = JWTAuth::parseToken()->authenticate()) {
				return response()->json([
					'statusCode' => 404,
					'data'       => 'user_not_found'
				], 404);
			}

		} catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

			return response()->json(['token_expired'], $e->getStatusCode());

		} catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

			return response()->json(['token_invalid'], $e->getStatusCode());

		} catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

			return response()->json(['token_absent'], $e->getStatusCode());

		}

		$user = User::where('id', $user->id)->with('people')->first();
		return response()->json(compact('user'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$users = User::where('status', '=', 1)->get();
		return response()->json([
			'statusCode' => 200,
			'data'       => $users
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	// public function store(Request $request) {
   
			
	// 	// $data = $request->all();
	// 	// return Hash::make($data['password']);
	// 	// $user = User::where('email', '=', $data['email'])->where('active', '=', 1)->first();
	// 	// if ($data) {
	// 		$user           = new User();
	// 		$user->email    = $request->input('email');
	// 		$user->password = Hash::make( $request->input('password'));
	// 		$user->status   = 1;
	// 		$user->image    = null;
	// 		$user->token    = md5($request->input('email'));
	// 		$user->rol_id = 1;
	// 		$user->save();
	// 		return response()->json([
	// 			'status'  => 200,
	// 			'title'   => "Perfecto",
	// 			'message' => 'El recurso ha sido creado correctamente',
	// 			'type'    => 'success',
	// 			'data'    => $user,
	// 			'pass'	  => $request->password  
	// 		]);
	// 	// }
	// }
	public function store(Request $request) {
		$data = $request->all();
		$validator = Validator::make($request->all(), [ 
			'email' => 'required|string|email|max:255',
			'password' => 'required|string|min:6',
			
		]);

		if($validator->fails()){
			return response()->json($validator->errors(), 400);
		}

		$user = User::where('email', $data['email'])->where('status', 1)->first();

		if (!$user) {
			$user           = new User();
			$user->email    = $request->input('email');
			$user->password = Hash::make($request->input('password'));
			$user->status   = 1;
			$user->username = $request->input('username');
			$user->token    = md5( $request->input('email'));
			$user->rol_id   = 1; // Cambiar ajuste a real
			$user->save();

		
			$people->save();

			$token = JWTAuth::fromUser($user);

            return response()->json(compact('user', 'token', 'people'), 201);
		}
	}

	// public function store(Request $request) {

		//original
	// 	$data = $request->all();
	// 	$validator = Validator::make($request->all(), [ 
	// 		'email' => 'required|string|email|max:255',
	// 		'password' => 'required|string|min:6',
	// 		'fullname' => 'required|string|max:255',
			
	// 	]);

	// 	if($validator->fails()){
	// 		return response()->json($validator->errors(), 400);
	// 	}

	// 	$user = User::where('email', $data['email'])->where('status', 1)->first();

	// 	if (!$user) {
	// 		$user           = new User();
	// 		$user->email    = $data['email'];
	// 		$user->password = Hash::make($data['password']);
	// 		$user->status   = 1;
	// 		$user->image    = null;
	// 		$user->token    = md5($data['email']);
	// 		$user->rol_id   = 1; // Cambiar ajuste a real
	// 		$user->save();

	// 		$people = new People();
	// 		$people->fullname = $data['fullname'];
	// 		// $people->gender = $data['gender'];
	// 		// $people->birthday = $data['birthday'];
	// 		// $people->phone = $data['phone'];
	// 		$people->user_id = $user->id;
	// 		$people->save();

	// 		$token = JWTAuth::fromUser($user);

    //         return response()->json(compact('user', 'token', 'people'), 201);
	// 	}
	// }
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function show(User $user) {
		if ($user->status == 1) {
			return response()->json([
				'statusCode' => 200,
				'data'       => $user
			]);
		}
		else {
			return response()->json([
				'statusCode' => 404,
				'data'       => null
			]);
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, User $user)
	{
		return $user;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\User  $user
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(User $user) 
	{
		//
	}

	public function logout() 
	{
		
	}

	public function verify() {
		
		$verify = User::where('id', '=', Auth::user()->id)
		->where('users.status', '=', 1)
		->first();

		print_r($verify);

		return response()->json([
			'status'  => ($verify) ? 200 : 404,
			'data'    => $verify
		]);
	}




	public function render(){
		 return view('templates.log');
    }

}
