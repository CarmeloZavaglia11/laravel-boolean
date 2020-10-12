<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Students extends Controller
{
    
    public function studenti() {

        $data = config('students');

        return view('studenti', compact('data'));
    }

}
