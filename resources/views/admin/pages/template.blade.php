@extends('layouts.admin.default')
@section('content')
<?php
if(isset($answers)){
    // dd($answers);
}
?>
<head>
    <link href="{{asset('/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('/assets/js/layout.js')}}"></script>
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css">
    <style>
    summary {
        cursor: pointer;
        list-style: none;
        font-family: Georgia, serif;
        border-radius:20px
    }
    .card {
        border-radius:20px;
    }

    summary::before {
        content: "+";
        display: inline-block;
        width: 1em;
    }

    details[open] summary::before {
        content: "-";
    }

    summary::-webkit-details-marker {
        display: none;
    }
    input.form-control{

    }
    </style>
</head>
<div id="layout-wrapper">
@include('layouts.admin.header')
@include('layouts.admin.sidebar')
<div class="vertical-overlay"></div>
<div class="main-content">
    <div class="page-content">
        <div class="row justify-content-center fs-4 mb-3">
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
                    <form action="{{ route('admin.setting.updateTemplate') }}" id="textForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12" >
                        <input type="hidden" name="page_id" value="{{$page_id}}">
                        @php
                        @endphp
                        @foreach ($keys as $title => $section)
                        <div class="card p-4">
                            <details open>
                            <summary class="row p-4" style="background-color:#dfe8eb">
                                {{ ucwords(str_replace('_',' ',$title)) }}
                            </summary>
                            <div class="card-body">
                            @foreach ($section as $option)
                            <div class="form-group mt-3">
                                @php
                                $label = str_replace('_',' ',$option);
                                $isTextArea = stripos($label, 'text') !== false;
                                $value = '';
                                if(isset($answers->{$title}))
                                {
                                    $obj = $answers->{$title};
                                    if($obj->{$option}??'')
                                    {
                                        $value = $obj->{$option};
                                    }
                                }
                                @endphp
                                <b>{{ ucwords($label) }}</b>
                                @if ($isTextArea)
                                    <textarea name="{{ $title."**".$option }}" class="form-control ckeditor">{{ $value }}</textarea>
                                @else
                                    @if(str_contains(strtolower($option), 'image'))
                                        <input type="file" name="{{ $title."**".$option }}" class="form-control">
                                        <p class="size text-secondary"></p>
                                    @else
                                    <input type="text" name="{{ $title."**".$option }}" value="{{ $value }}" class="form-control">
                                    @endif
                                @endif
                            </div>
                            @endforeach
                        </div>

                            </details>
                        </div>
                    @endforeach

                    </div>
                    <div class="col-12 mt-3" >
                        <button class="btn btn-success position-fixed" style="border-radius:30px;left:88%;bottom:40px;width:100px"> SAVE </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
<script src="{{asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('/assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('/assets/js/plugins.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        $('textarea.ckeditor').each(function() {
            CKEDITOR.replace(this, {
                width: '600px'
            });
        });
        $('input[type=file]').on('change', function(e){
            let filesize = e.target.files[0].size
            if(filesize > 1048576)
            {
                alert('File exceeds the limit of 1MB, please select another one!')
                e.target.value = ''
            } else {
                if(filesize < 716800)
                {
                    alert('File should be at least of 700KB')
                    e.target.value='';
                } else {
                    filesize= (filesize/1024).toFixed(2)
                    $(this).next('.size').text('Size : '+filesize+'K')
                }
            }
        })
    });
</script>
