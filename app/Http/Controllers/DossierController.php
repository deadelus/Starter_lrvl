<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Model\Dossier;

class DossierController extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function form()
    {
        return view('dossiers.form');
    }
    public function upload(Request $request)
    {

        $request->file('depots','')
    }
}
