<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function post(Request $request)
    {
        return response()->json(['auth' => false], 200);
    }
}
