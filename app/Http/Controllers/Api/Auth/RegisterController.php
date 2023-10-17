<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(RegisterRequest $registerRequest)
    {
        User::create($registerRequest->validated());

        return response()->json([
            'status' => 200,
            'message' => 'User successfully registered.'
        ]);
    }
}
