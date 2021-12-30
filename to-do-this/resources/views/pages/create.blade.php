@extends('layouts.master')
@section('content')
    <div class="container">
        <form class="form-group m-5" action="{{route('store_create_data')}}" method="post">
            @csrf
            <div class="row form-group">
                <label class="col-sm-3 text-right">分類</label>
                <select name="new">
                    <option>選擇支出分類</option>
                    <option>飲料</option>
                    <option>餐費</option>
                    <option>購物</option>
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
                <input class="form-control col-sm-6" name="content">
            </div>
            <div class="row form-group">
                <label class="col-sm-3 text-right">備註</label>
                <input class="form-control col-sm-6" name="remark">
            </div>

            <div class="row form-group justify-content-center">
                <button class="btn btn-outline-info col-sm-3" type="submit">支出輸入</button>
            </div>

        </form>
    </div>




@endsection
