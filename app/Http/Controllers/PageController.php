<?php

namespace App\Http\Controllers;
// call model
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $users = User::all();
        return view('welcome', ['users' => $users]);
    }

    public function signIn() {
        return view('signIn');
    }

    public function signUp() {
        return view('signUp');
    }
}
