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
    public function get_create_page()
    {
        $data = DB::table('todos')->get();
        return view ('pages.create',compact('data',$data));
    }
    public function store_create_data(Request $request)
    {

       $title = $request -> title;
       $content = $request -> content;
       $remake = $request->remake;

            DB:: table("todos")->insert([
           "title" => $title,
           "content" => $content,
           "remake" => $remake,
       ]);
       return redirect()->route('index');

    }
    public function delete_data (Request $request)
   {
        $id = $request->get('id');
        DB::table('todos')
            ->where('id',$id)
            ->delete();
        return redirect()->route('index');
    }



    public function get_edit_page()
    {

        dd('yes');
        return view ('pages.create');
    }
    public function store_edit_data(Request $request)
    {

        $title = $request -> title;
        $content = $request -> content;
        $remake = $request->remake;

        DB:: table("todos")->insert([
            "title" => $title,
            "content" => $content,
            "remake" => $remake,
        ]);
        return redirect()->route('index');

    }
}
