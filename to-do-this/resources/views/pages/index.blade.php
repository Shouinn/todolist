@extends('layouts.master')
@section('content')
    <table class = "table">
        <thead>
        <tr>
            <td>標題</td>
            <td>內容</td>
            <td>備註</td>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $row)
            <tr>
                <td>{{$row->title}}</td>
                <td>{{$row->content}}</td>
                <td>{{$row->remake}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
