<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }


    public function register(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        try {
            $data = new User;
            $data->name = $request->get('name');
            $data->email = $request->get('email');
            $data->password = app('hash')->make($request->get('password'));
            $data->save();

            return response()->json(['user' => $data, 'message' => 'Successfully created!'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed!'], 422);
        }
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = $request->only(['email', 'password']);
        if (!$token = Auth::setTTL(7200)->attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        return response()->json([
            'userid' => Auth::user()->id,
            'username' => Auth::user()->name,
            'email' => Auth::user()->email,
            'bearer_token' => $token,
            'expires_in' => Auth::factory()->getTTL()
        ], 200);
    }
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }
    public function logout()
    {
        $token = auth()->tokenById(Auth::user()->userid);
        try {
            auth()->logout(true);
            return response()->json([
                'status' => 'success',
                'message' => 'User logged out successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Sorry, the user cannot be logged out'
            ]);
        }
    }
    
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 120
        ]);
    }

}
