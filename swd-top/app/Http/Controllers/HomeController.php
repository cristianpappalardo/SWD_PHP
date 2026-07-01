<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($name) {

        if ($name == "exit") {
            return redirect('/');
        }

        return view('app', ['name' => $name]);
    }
}
