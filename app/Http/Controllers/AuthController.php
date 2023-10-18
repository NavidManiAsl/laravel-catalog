<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{

    private $auth;
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Display the login form.
     */
    public function index()
    {
        try {

            return view('auth.index');

        } catch (\Throwable $th) {

            Log::error('unexpected error: ' . $th->getMessage(), [$th->getTrace()]);
            return redirect()->back()->with('error', 'Unexpected error. Try again later!');
        }
    }

    /**
     * login a user based on entered credentials.
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('username', 'password');
        try {
            if ($this->auth->attempt($credentials)) {

                return redirect('/products');

            } else {

                return back()->with('error', 'We cant verify your credentials!');
            }
        } catch (\Throwable $th) {

            Log::error('Login error: ' . $th->getMessage(), [$th->getTrace()]);
            return redirect()->back()->with('error', 'Unexpected error. Try again later!');
        }

    }

    public function logout(Guard $auth)
    {
        try {
            $this->auth->logout();

            return redirect('/products');
        } catch (\Throwable $th) {
            Log::error('Logout error: ' . $th->getMessage(), [$th->getTrace()]);
            return redirect()->back()->with('error', 'Unexpected error. Try again later!');
        }

    }
}