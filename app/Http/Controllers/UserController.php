<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        try {
            return view('users.create');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Store a newly signed up user in storage.
     */
    public function store (StoreUserRequest $request)
    {
        try {
           
            User::create([
                'name'=> $request->input('username'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]);
            return redirect('/login')->with('success','you are successfully signed in!');
        } catch (\Throwable $th) {
           Log::error('Signin error: '.$th->getMessage(), [$th->getCode(),$th->getTrace()]);
           return redirect()->back()->with('error', 'failed to sign you in, try agagin later');
        }
    }


}