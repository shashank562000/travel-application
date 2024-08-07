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
        <div class="row justify-content-center fs-4">
            Page: {{ucwords($pageName)}}
        </div>
        @if(session()->has('msg'))
            <div class="alert alert-success alert-dismissible  fade show" role="alert">
                {{ session()->get('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @php session()->forget('msg'); @endphp
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="container ">
                <form action="{{ route('admin.setting.uploadImage') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="col-5">
                        <input type="hidden" name="page_id" value="{{$page_id}}">
                        @foreach ($keys as $row)
                            @php
                                $label = str_replace('_',' ',$row->option);
                            @endphp
                            <div class="form-group">
                                <label for="">{{ucwords($label)}}</label>
                                <input type="file" name="image[{{$row->option}}]" class="form-control">
                            </div>
                        @endforeach
                    </div>
                    <div class="col-5 mt-3">
                        <button class="btn btn-success"> SAVE </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
