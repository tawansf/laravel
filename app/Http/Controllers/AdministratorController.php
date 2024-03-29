<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function __construct () {
        $this->middleware('auth:administrator');
    }

    public function index () {
        return view('administrator');
    }

}
