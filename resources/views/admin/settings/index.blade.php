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
        let url = location.href + `/info/${ele.value}`
        if(url.includes('settings/'))
        {
            console.log(url)
            // url = url.replace('settings/','settings')
            console.log(url)
        }
        $.ajax({
            url,
            success:res=>{
                console.log(res)
                $('.Selected').text(ele.value.toUpperCase())
                if(res.length)
                {
                    $('.form-container').removeClass('d-none')
                    let html = `<input type="hidden" name="name" value="${ele.value}">`;
                    res.forEach( row => {
                        if(row.option.includes('{'))
                        {
                            dec = JSON.parse(row.option)
                            key = Object.keys(dec)[0];
                            html+=`<tr>
                            <td>
                            <div class="container">
                                <div class="row fs-3 mb-4">${key.toUpperCase()}</div>`
                                for(let i=0;i<Object.values(dec)[0]; i++)
                                {
                                    if(key=='images')
                                    {
                                        html+=`<div class="row">
                                            <b > Image ${i+1} </b> <br>
                                            <input type="file" name="images[${i+1}]" class="mt-2 form-control">
                                        </div>`
                                    }
                                    if(key=='cards')
                                    {
                                        html+=`<b>CardHeading${i+1}</b>
                                        <br>
                                        <input type="text" name="cardText[${i+1}]"  required class="mt-2 form-control">
                                        <br>
                                        <label >CardImage${i+1}</label> <br>
                                        <input type="file" name="cardImage[${i+1}]" required class="mt-2 form-control"> <br>
                                        `
                                    }
                                }
                           html+= `</div>
                            </td>
                            <td></td>
                            </tr>`

                        }else
                        {
                            html+=`<div class="form-group">
                                <label for="${row.option}">${row.option}</label>
                                <input type="text" class="form-control" name="${row.option}">
                            </div>`
                        }
                    })
                    $('.btn-success').removeClass('d-none')
                    $('.formHere').html(html)
                } else {
                    $('.btn-success').addClass('d-none')
                    $('.formHere').html('<tr><td colspan="2"><div class="text-center"><h3> No Keys were set, go to meta settings to set the keys </h3></div></td></tr>')
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
                    alert('Page Content set successfully!')
                }
            }
        })
    })
</script>
@endsection
