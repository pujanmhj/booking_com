<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $token = Str::random(64);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = carbon::today();
        $user->password = bcrypt($request->password);
        $user->remember_token = $token;
        $user->save();

        return response()->json([
            'status' => 1,
            'message' => 'Successfully Registered'
        ]);

    }
}
