<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MypageController extends Controller
{
    public function post(Request $request)
    {
        $param = [
            "name" => $request->name,
            "mylike" => $request->mylike,
            "myreservation" => $request->myreservation,
        ];
        DB::table('mypages')->insert($param);
        return response()->json([
            'message' => 'Mypage created successfully',
            'data' => $param
        ], 200);
    }
}
