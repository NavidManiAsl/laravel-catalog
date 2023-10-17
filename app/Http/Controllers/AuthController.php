<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    /**
     * Display the login form.
     */
    public function index () {
        try {
           
            return view('auth.index');
            
        } catch (\Throwable $th) {
           
            Log::error('unexpected error: '. $th->getMessage(),[$th->getTrace()]);
        }
    }
}
