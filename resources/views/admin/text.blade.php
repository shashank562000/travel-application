@extends('layouts.admin.default')
@section('content')
<head>
    <link href="{{asset('/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('/assets/js/layout.js')}}"></script>
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<div id="layout-wrapper">
@include('layouts.admin.header')
@include('layouts.admin.sidebar')
<div class="vertical-overlay"></div>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="container ">
                    <div class="col-5 position-absolute" style="left:">
                        @foreach ($keys as $row)
                            <div class="form-group">
                                <label for="">{{ucwords($row->option)}}</label>
                                <input type="text" name="text" class="form-control">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
