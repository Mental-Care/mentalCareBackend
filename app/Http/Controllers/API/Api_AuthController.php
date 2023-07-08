<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class Api_AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'address' => 'required',
            'date' => 'required',
            'role' => 'required',
            'gender' => 'required',
            // 'image' => 'image',
            // 'number' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'status' => false,
                'message' => $validator->errors(),
            ];
            return response()->json($response, 400);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => $input['password'],
            'address' => $input['address'],
            'role' => $input['role'],
            'gender' => $input['gender'],
            'date' => $input['date'],
            'image' => $input['image'] ?? null,
            'number' => $input['number'] ?? null,
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $user->id . '-' . rand() . time() . '_image_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/users'), $filename);
            $user->update([
                'image' => $filename,
            ]);
        }

        //$success['token'] = $user->createToken('MyApp')->plainTextToken;
        $token = $user->createToken($user->name);
        $success['token'] = $token->plainTextToken;
        $success['name'] = $user->name;
        $success['email'] = $user->email;

        $user->api_token = $token->plainTextToken;
        $user->save();

        $response = [
            'status' => true,
            'data' => $success,
            'message' => 'User register successfully'
        ];

        return response()->json($response);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            $response = [
                'status' => false,
                'message' => $validator->errors(),
            ];
            return response()->json($response, 400);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = User::where('email', $request->email)->first();
            $token = $user->createToken($user->name);
            $success['token'] = $token->plainTextToken;
            $success['name'] = $user->name;
            $success['email'] = $user->email;
            $success['password'] = $user->password;
            $success['role'] = $user->role;
            $success['gender'] = $user->gender;
            $success['date'] = $user->date;
            $success['image'] = $user->image;
            $success['number'] = $user->number;
            
            $user->api_token = $token->plainTextToken;
            $user->save();

            $response = [
                'status' => true,
                'data' => $success,
                'message' => 'User login successfully'
            ];

            return response()->json($response, 200);
        } else {
            $response = [
                'status' => false,
                'message' => 'Unauthhorised'
            ];
            return response()->json($response, 400);
        }
    }
    public function logout(Request $request)
    {
        if (auth()->user()) {
            $user = auth()->user();
        }
        $request->user()->currentAccessToken()->delete();
        $token_user = User::where('id', $user->id)->first();
        $token_user->update([
            'api_token' => null,
        ]);

        $response = [
            'status' => true,
            'message' => 'user logout successfully'
        ];
        //$user = auth()->user();
        return response()->json($response, 400);
    }
}
