<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccessTokensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Auth::guard('sanctum')->user()->tokens;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'device_name' => ['sometimes', 'required'],
        ]);
        $user = User::whereEmail($request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $name = $request->post('device_name', $request->userAgent());
            $token = $user->createToken($name, ['*'], now()->addDays(90));
            return response()->json([
                'token' => $token->plainTextToken,
                'user' => $user,
            ], 201);
        }
        return response()->json([
            'message' => 'Invalid credentials',
        ], 401);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id = null)
    {
        if ($id) {
            //
            $user = Auth::guard('sanctum')->user();
            if ($id == 'current') {
                $user->currentAccessToken()->delete();
                return response()->json([
                    'Revoke the current token was success'
                ]);
            } else {
                $user->tokens()->findOrFail($id)->delete();
                return response()->json([
                    'Revoke id=' . $id . ' token was success'
                ]);
            }
        } else {
            $user->tokens()->delete($id);
            return response()->json([
                'Revoke all tokens was success'
            ]);
        }
    }
}
