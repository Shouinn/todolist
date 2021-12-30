@extends('layouts.master')
@section('content')
    <div class="container p-3">
    <table class = "table">
        <thead>
        <tr>
            <td>日期</td>
            <td>分類</td>
            <td>支出</td>
            <td>備註</td>
            <td>功能</td>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $row)
            <tr>
                <td>{{$row->date}}</td>
                <td>{{$row->title}}</td>
                <td>{{$row->content}}</td>
                <td>{{$row->remark}}</td>
                <td>
                <button class="btn btn-outline-success"
                    onclick="edit_data({{$row->id}})">修改內容</button>
                <button class="btn btn-outline-danger"onclick="delete_data({{$row->id}})">刪除</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>>
    <script>
        function delete_data(id){
            window.location.href = `{{route('delete_data')}}`+'?id='+id;
        }
        function edit_data(id){
            window.location.href = `{{route('get_edit_page')}}`+'?id='+id;
        }
    </script>
@endsection
