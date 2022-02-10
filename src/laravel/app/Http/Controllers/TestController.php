<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    /**
     * ホーム画面表示
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()
            ->json(['name' => '山田太郎', 'gender' => '男']);
    }
}
