<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wellComeController extends Controller
{
    public function index()
    {
        return view('wellcome');
    }
}
