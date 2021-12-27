@extends('layouts.master')
@section('content')
    <form action="{{route('store_edit_data')}}" method="post">
        @csrf
    <label>標題</label>
    <input name = "title" value="{{$data -> title}}">
    <label>內容</label>
    <input name = "content" value="{{$data -> content}}">
    <label>備註</label>
    <input name = "remake" value="{{$data -> remake}}">
     <button type="submit">送出修改</button>
        <input type="hidden" value="{{$data -> id}}" name = 'id'/>
    </form>
@endsection
