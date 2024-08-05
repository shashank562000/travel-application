@extends('layouts.admin.default')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h2> ADMIN - Adventure Planners Pakistan </h2>
    </div>
    <div class="row justify-content-center">
        <h6> Set Site Meta-Data </h6>
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
                        <div>
                            <table class="col-8 table table-hover table-bordered">
                                <thead>
                                    <th> Setting-Name </th>
                                    <th> Action </th>
                                </thead>
                                <tbody class="formHere">
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-success position-absolute" > SAVE </button>\
                        </div>
                    </form>
                    </div>
        </div>
    </div>
</div>
<script>
    const init = ele => {
        let url = location.href.replace('meta','info')
        if(url.includes('info/'))
        {
            console.log(url)
            url = url.replace('info/','info')
            console.log(url)
        }
        url += `/${ele.value}`
        $.ajax({
            url,
            success:res=>{
                console.log(res)
                if(res.length)
                {
                    $('.form-container').removeClass('d-none')
                    $('.Selected').text(ele.value.toUpperCase())
                    let html = ``;
                    res.forEach( row => {
                        if(!row.option.includes('{'))
                        {
                        html+=`<tr>
                            <td><input type="text" name="name[]" value="${row.option}"></td>
                            <td><i class="fa fa-trash text-danger"></i></td>
                        </tr>`
                        }
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
            url:location.href+'/'+$('.Selected').text().toLowerCase(),
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
