<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function list()
    {
        return view('list');
    }

}
