<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->code)) {
            $param = ['syh_cd' => $request->code];
            $items = DB::select('select * from m_syohin where syh_cd = :syh_cd',$param);
            // http://127.0.0.1:8000/hello?code=102600601
        } else {
            $items = DB::select('select * from m_syohin');
        }
        
        return view('hello.index',['items'=>$items]);
    }
    public function post(Request $request)
    {
        return view('hello.index',['msg'=>$request->msg]);
    }
    public function addSyohin(Request $request)
    {
       return view('hello.addSyohin');
    }

}
