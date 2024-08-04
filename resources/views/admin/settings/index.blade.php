@extends('layouts.admin.default')
@section('content')
 
<div class="container">
    <div class="row justify-content-center">
        <h2> ADMIN - Adventure Planners Pakistan </h2>
    </div>
    <div class="row justify-content-center">
        <h6> Set Site Contents </h6>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 mt-5">
            <form class="w-100">
                <div class="form-group">
                    <label for="page"> Select Page </label>
                    <select class="form-control" id="page" onchange="init(this)">
                        <option> Choose </option>
                        @foreach($pages as $page)
                          <option value="{{$page->name}}"> {{ucwords($page->name)}} </option>
                        @endforeach
                    </select>
                </div> 
                 
            </form>
        </div>
    </div>
    <div class="row">
        <div class="container form-container d-none">
        <div class="row mb-1 text-center"> Page : <b class="mx-1 Selected"> </b></div>
            <form class="meta" enctype="multipart/form-data">
                @csrf
                <div class="formHere">
                </div>
                <button type="submit" class="btn btn-success position-absolute" > SAVE </button>\
            </form>
        </div>
        </div>
    </div>
</div>
<script>
    const init = ele => {
        $.ajax({
            url: location.href + `/info/${ele.value}`,
            success:res=>{
                console.log(res)
                if(res.length)
                {
                    $('.form-container').removeClass('d-none')
                    $('.Selected').text(ele.value.toUpperCase())
                    let html = `<input type="hidden" name="name" value="${ele.value}">`;
                    res.forEach( row => {
                        html+=`<div class="form-group">
                            <label for="${row.option}">${row.option}</label>
                            <input type="text" class="form-control" name="${row.option}">
                        </div>`
                    })
                    $('.formHere').html(html)
                }
            },
            error:err=>console.log(err.message)
        })
    }

    $('form.meta').on('submit',function(e){
        e.preventDefault()
        form = document.querySelector('form.meta')
        let formData = new FormData(form)
        
        $.ajax({
            url:"{{ url('admin/settings/create') }}",
            type:'POST',
            processData:false,
            contentType:false,
            data:formData,
            success:res=>{
                if(res.status)
                {
                    alert(res.message)
                }
            }
        })
    })
</script>
@endsection