<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Toodocontroller extends Controller
{
    public function index()
    {
        $data = DB::table('todos')->get();
//        dd($data,'123');
        return view ('pages.index',compact('data',$data));
    }
    public function create()
    {
        $data = DB::table('todos')->get();
        return view ('pages.create',compact('data',$data));
    }
    public function store(Request $request)
    {
       dd($request);
    }
}
