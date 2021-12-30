@extends('layouts.master')
@section('content')
    <div class="container">
        <form class="form-group m-5" action="{{route('store_edit_data')}}" method="post">
            @csrf
            <div class="row form-group">
                <label class="col-sm-3 text-right">分類</label>
                <select name="title" id="food_type">
                    <option>選擇支出分類</option>
                    <option value="飲料">飲料</option>
                    <option value="餐費">餐費</option>
                    <option value="購物">購物</option>
                </select>
            </div>
            <div class ="row form-group">
                <label class="col-sm-3 text-right">日期</label>

                <input class="form-control col-sm-6"  id="datepicker" name="date" autocomplete="off">
                <script>
                    $(document).ready(function() {
                        $("#datepicker").datepicker();
                    });
                </script>
            </div>
            <div class="row form-group">
                <label class="col-sm-3 text-right">支出</label>
                <input class="form-control col-sm-6" name="content" value="{{$data->content}}">
            </div>
            <div class="row form-group">
                <label class="col-sm-3 text-right">備註</label>
                <input class="form-control col-sm-6" name="remark" value="{{$data->remark}}">
            </div>
            <div class="row form-group justify-content-center">
                <button class="btn btn-outline-info col-sm-3" type="submit">覆蓋當前支出</button>
            </div>
            <input type="hidden" name="id" value="{{$data->id}}"/>
        </form>
    </div>
    <script>
        let title="{{$data->title}}";
        $('#food_type').val(title);
    </script>

@endsection
