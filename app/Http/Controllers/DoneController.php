<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoneController extends Controller
{
    public function post(Request $request)
    {
        return response()->json(['auth' => false], 200);
    }
}
