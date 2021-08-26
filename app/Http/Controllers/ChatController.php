<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class ChatController extends Controller
{
    /**
     * [GET]
     * 
     * 店舗全データを取得する
     * 
     * @access public
     * @return Response 店舗一覧表示
     * @var array $stores  店舗全データ
     * @var array $area  エリア一覧
     * @var array $geenre  ジャンル一覧
     * @var array $item  $storesと$areaと$genreを配列に入れる
     */
    public function get(Request $request)
    {
        $data = Chat::where("user_id",$request->user_id)->get();

        return response()->json([
            "data" => $data
        ],200);
    }

    public function getMessage(Request $request)
    {
        $data = Chat::where("user_id", $request->user_id)->where("nursery_id",$request->nursery_id)->get("message");

        return response()->json([
            "data" => $data
        ], 200);
    }

    public function post(Request $request)
    {
        $chat = new Chat;
        $chat->fill([
            "user_id" => $request->user_id,
            "nursery_id" => $request->nursery_id,
            "message" => $request->message,
        ])->save();

        return response()->json([
            "message" => "Chat posted successfully"
        ], 200);
    }

    public function delete(Request $request)
    {
    } 
}
