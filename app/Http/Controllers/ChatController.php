<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class ChatController extends Controller
{
    /**
     * [GET]全データ取得
     * 
     * 全データを取得する
     * 
     * @access public
     * @return Response 一覧表示
     */
    public function get(Request $request)
    {
        $data = Chat::where("user_id",$request->user_id)->get();

        return response()->json([
            "data" => $data
        ],200);
    }

    /**
     * [GET]個別データ取得
     * 
     * 個別チャットデータを取得する
     * 
     * @access public
     * @return Response 個別メッセージ表示
     */
    public function getMessage(Request $request)
    {
        $data = Chat::where("user_id", $request->user_id)->where("nursery_id",$request->nursery_id)->get();

        return response()->json([
            "data" => $data
        ], 200);
    }

    /**
     * [POST]メッセージ送信
     * 
     * メッセージを送る
     * 
     * @access public
     * @return Response メッセージ送信
     */
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
