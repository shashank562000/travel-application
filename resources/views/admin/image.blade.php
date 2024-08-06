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

</div>
@endsection
