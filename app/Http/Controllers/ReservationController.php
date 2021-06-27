<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function post(Request $request)
    {
        $now = Carbon::now();
        $param = [
            "user_id" => $request->user_id,
            "shop_id" => $request->shop_id,
            "shop_deteil" => $request->shop_deteil,
            "created_at" => $now,
            "updated_at" => $now
        ];
        DB::table('reservations')->insert($param);
        return response()->json([
            'message' => 'Reservation completed successfully',
            'data' => $param
        ], 200);
    }
    public function delete(Request $request)
    {
        DB::table('reservations')->where('shop_id', $request->shop_id)->where('user_id', $request->user_id)->where('shop_deteil', $request->shop_deteil)->delete();
        return response()->json([
            'message' => 'Reservation deleted successfully',
        ], 200);
    }
}
