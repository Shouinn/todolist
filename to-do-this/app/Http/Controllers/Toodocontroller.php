<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Toodocontroller extends Controller
{
    public function index(Request $request)
    {
        $search_content = $request->get('search_content');
        $data = DB::table('todos');
        if ($search_content) {
            $data->orwhere('title', 'like', '%' . $search_content . '%');
            $data->orwhere('content', 'like', '%' . $search_content . '%');
            $data->orwhere('remark', 'like', '%' . $search_content . '%');
        }
        $data = $data->get();
        return view('pages.index',compact('data',$data));
    }
    public function get_create_page()
    {
        $data = DB::table('todos')->get();
        return view ('pages.create',compact('data',$data));
    }
    public function store_create_data(Request $request)
    {

        $title = $_POST['new'];
        $date = $request->get('date');
        $content = $request->get('content');
        $remark = $request->get('remark');

        DB::table('todos')->insert([
            'date' => $date,
            'title' => $title,
            'content' => $content,
            'remark' => $remark,
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



    public function get_edit_page(Request $request)
    {

        $id = $request->get('id');
        $data = DB::table('todos')
            ->where('id',$id)
            ->first();

        return view('pages.edit',compact('data',$data));
    }
    public function store_edit_data(Request $request)
    {
        $id = $request ->get('id');
        $date = $request->get('date');
        $title = $request -> get('title');
        $content = $request -> get('content');
        $remark = $request->get('remark');

        DB:: table("todos")
            ->where('id',$id)
        ->update([
            'date' => $date,
            "title" => $title,
            "content" => $content,
            "remark" => $remark,
        ]);
        return redirect()->route('index');

    }
}
