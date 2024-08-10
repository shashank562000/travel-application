@extends('layouts.admin.default')
@section('content')
<?php
if(isset($answers)){
    $answers = json_decode($answers)->data;
}
?>
<head>
    <link href="{{asset('/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('/assets/js/layout.js')}}"></script>
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css">
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
                    <form action="{{ route('admin.setting.uploadText') }}" id="textForm" method="POST">
                    @csrf
                    <div class="col-5 " >
                        <input type="hidden" name="page_id" value="{{$page_id}}">
                        @foreach ($keys as $row)
                            <div class="form-group mt-3">
                                @php
                                $label = str_replace('_',' ',$row->option);
                                $isTextArea = stripos($label, 'text') !== false;
                                @endphp
                                <b>{{ ucwords($label) }}</b>
                                @if ($isTextArea)
                                    <textarea name="{{ $row->option }}" class="form-control ckeditor">{{ ($answers?->{$row->option}) ?? '' }}</textarea>
                                @else
                                    <input type="text" name="{{ $row->option }}" value="{{ ($answers?->{$row->option}) ?? '' }}" class="form-control">
                                @endif
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
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        $('textarea.ckeditor').each(function() {
            CKEDITOR.replace(this, {
                width: '600px'
            });
        });
    });
</script>
