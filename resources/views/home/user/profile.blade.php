@extends('home.layout.master')

@section('content')


    <div class="w-100 d-flex align-items-center" style="height: 100vh; background-color: #3CB371">
            <div class="row d-flex justify-content-between col-md-10 mx-auto">
                <div class="col-md-6 p-2">
                    <label style="color: white" for="">نام</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6 p-2">
                    <label style="color: white" for="">نام خانوادگی</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6 p-2">
                    <label style="color: white" for="">تلفن</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6 p-2">
                    <label style="color: white" for="">ایمیل</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn btn-primary col-md-5 mt-3">ذخیره</button>
                </div>
            </div>
    </div>

@endsection
