<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourtierController extends Controller
{
    public function Index()
    {
        return view('HomeCourtier');
    }
}
