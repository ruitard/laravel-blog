<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    //
    public function index(Request $request)
    {
        if (Auth::guest())
        {
            return redirect('/login');
        }
        return $request->input("q");
    }
}
