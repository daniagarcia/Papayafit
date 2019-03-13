<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home() {
        return view('home');
    }

    public function access() {
        return view('access');
    }

    public function accessRedirect() {
        return redirect('/entrar');
    }

    public function passwordRecovery() {
        return view('password_recovery');
    }
}
