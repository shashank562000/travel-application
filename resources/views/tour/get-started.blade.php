@extends('layouts.default')
<link rel="stylesheet" src="{{asset('css/header.css')}}">
<link rel="stylesheet" src="{{asset('css/tour.css')}}">
<link rel="stylesheet" src="{{asset('css/tour-media.css')}}">
@include('partials.header')
@include('partials.hero')
<style>
    .booking-form label{
        display: block!important;
    }
    .booking-form {
        z-index: 1000;
        left: 70%;
        top: -87%!important;
    }
    form .form-container{
        background-color: white;
    }
    form .form-head{
        padding: 30px;
    }
    form .form-body{
        padding: 30px 0 30px 0;
    }
    .row div.container {
        display: grid;
        place-content: center!important;
        place-items: center;
    }
    .form-group p{
        padding: 0 50px 0 50px;
    }
    .submitBtn {
        width: 65%;
        padding: 10px;
        background-color: #265c81;
        color: white;
        border: 0px;
    }
    .tour-details span{
        margin-top: -5px;
    }
    .tour-details {
        background-color: #e0e5e7;
    }
    .collapse ul{
        margin-left: 10px;
    }
    .nav-link {
        width: 170px;
    }
    .tour-details form{
        border: 0px;
        background-color: transparent;
    }
    div.adventure .card, section.more-tours .card {
        border: 0px
    }
    .image-bars h4.position-absolute{
        bottom:10px;
        left:20px
    }

</style>
@section('content')

  <section class="tour-details">
    <div class="container-fluid">
      <div class="tour-details col-12 position-relative row">
        <div class="col-4" style="padding-left:10%">
            <div class="row mt-5 mb-1">
                <i class="fa-solid fa-clock"></i>
                <span class="px-3 "> 8 Days </span>
            </div>
            <div class="row mt-4">
                <i class="fa-solid fa-calendar-days"></i>
                <span class="px-3 "> Karachi </span>
            </div>
            <div class="row mt-4 mb-5">
                <i class="fa-solid fa-plane-departure"></i>
                <span class="px-3 "> Max people: 14</span>
            </div>
        </div>
        <div class="col-8" style="padding-left:2%">
            <div class="row mt-5 mb-3">
                <div class="d-flex">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span class="px-3"> November 10 - 17, 2024</span>
                </div>
            </div>
            <div class="row mt-4 mb-3">
                <div class="d-flex">
                    <i class="fa-solid fa-plane-departure"></i>
                    <span class="px-3"> Karachi or Lahore </span>
                </div>
            </div>
        </div>
        <form action="#" class="booking-form form-control position-absolute" style="width:25%">
            <div class="row justify-content-center" style="background-color:#7291b1;padding:10px">
                <h5 class="text-white ">Small Group Tour</h5>
            </div>
            <div class="row form-container">
                <div class="d-flex form-head justify-content-center bg-dark w-100">
                    <i class="fa-solid text-white fa-tag" ></i>
                    <h2 class="text-white"> &dollar; 2,597</h2>
                </div>
                <div class="row form-body">
                    <div class="container justify-content-center">
                        <div class="form-group">
                            <label for="firstName"> First Name* </label>
                            <input type="text" id="firstName">
                        </div>
                        <div class="form-group">
                            <label for="surname"> Surname* </label>
                            <input type="text" id="surname">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email* </label>
                            <input type="text" id="email">
                        </div>
                        <div class="form-group">
                            <label for="country"> Country* </label>
                            <input type="text" id="country">
                        </div>
                        <div class="form-group">
                            <label for="num_travelers"> Number of Travellers </label>
                            <input type="text" id="num_travelers">
                        </div>
                        <div class="form-group">
                            <label for="tripLength"> Ideal Trip Length (# of days) </label>
                            <input type="text" id="tripLength">
                        </div>
                        <div class="form-group">
                            <label for="idealDeptDate"> Ideal Departure Date <br> MM/DD/YYYY </label>
                            <input type="text" id="idealDeptDate">
                        </div>
                        <div class="form-group">
                            <label for="idealDeptDate"> Tell us which trip <br>  you're interested </label>
                            <input type="textarea" id="idealDeptDate">
                        </div>
                        <div class="form-group">
                            <label for="idealDeptDate"> How did you find us* </label>
                            <input type="textarea" id="idealDeptDate">
                        </div>
                        <div class="form-group">
                            <p> Please confirm you agree to our
                                <a href="#" class="text-decoration-none">terms and conditions</a>
                            </p>
                            <div class="form-group d-flex col-10 mx-5">
                                <input type="checkbox">
                                <small class="mx-1"> Yes, I've read the Terms <br>  & conditions  </small><br>
                            </div>
                        </div>
                        <button class="submitBtn"> Submit </button>
                        <div class="form-group">
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="row" style="background-color:#aab4b8">
        <nav class="navbar navbar-expand-lg" style="width:100%;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-5" >
                    <li class="nav-item mx-3">
                        <a class="nav-link text-dark" href="#"> About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#"> Itinerary </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#"> Videos & Pics </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#"> Details </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    </div>

  </section>

  <div class="container adventure mt-2">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Balochistan Adventure</h4>
        <p class="card-text">
          Balochistan is the most unexplored area of Pakistan and the province with the most breathtakingly diverse ecosystems in the country.
          Join Pakistan’s first-ever luxury small group tour across the entire length of Balochistan’s south coast.
        </p>
        <p class="">
          **Please note: trip is for adults and children 16 years or older only
        </p>
      </div>
    </div>

    <div class="card mt-4">
      <div class="card-body">
        <h5 class="card-title">About This Adventure</h5>
        <h6 class="card-subtitle mb-2 mt-3 text-muted">Highlights of your trip</h6>
        <div class="p-5">
            <ul class="list-unstyled">
            <li><span class="fa fa-circle mr-2"></span>Go dolphin watching</li>
            <li><span class="fa fa-circle mr-2"></span>Visit vibrant cities & remote villages</li>
            <li><span class="fa fa-circle mr-2"></span>Climb a volcano</li>
            <li><span class="fa fa-circle mr-2"></span>Stay in 5-star luxury & boutique hotels</li>
            <li><span class="fa fa-circle mr-2"></span>Be the 1st to travel in Pakistan's #1 luxury private cabin/sleeper bus (absolute comfort for our days on the road)</li>
            <li><span class="fa fa-circle mr-2"></span>Relax with a decadent beach picnic on the Arabian Sea</li>
            </ul>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title"> Trip Host:Angela Carson </h5>
        <div class="p-5">
            <ul class="list-unstyled">
            <li><span class="fa fa-circle mr-2"></span>Traveller to spend the longest in Balochistan since 9/11:53 days </li>
            <li><span class="fa fa-circle mr-2"></span>Travel writer and content writer</li>
            <li><span class="fa fa-circle mr-2"></span>Explored Pakistan extensively, shooting 90+ videos</li>
            <li><span class="fa fa-circle mr-2"></span>1st person to review all 5-star hotels in Pakistan outside of the North </li>
            <li><span class="fa fa-circle mr-2"></span>Has lived in 9 countries & travelled 37</li>
            <li><span class="fa fa-circle mr-2"></span>From Los Angeles, resides in Islamabad, Pakistan</li>
            <li><span class="fa fa-circle mr-2"></span>Instagram | Youtube </li>
            </ul>
        </div>
      </div>
    </div>

    <div class="card">
        <h5 class="card-title"> Where you're going </h5>
        <div class="card-body">
            <div class="p-5">
            <img src="{{asset('images/tour/choose-in-map.png')}}">
            </div>
        </div>
    </div>

    <div class="card">
        <h5 class="card-title"> Itinerary</h5>
        <div class="card-body" style="">
            <div class="row p-4" style="background-color:#aab4b8">
                - Day 1-2 Karachi
            </div>
            <p class="card-text py-3">
                Arrive in time to Karachi's Jinnah unexplored area of Pakistan and the province with the most breathtakingly diverse ecosystems in the country.
                Join Pakistan’s first-ever luxury small group tour across the entire length of Balochistan’s south coast.
            </p>
            <p class="card-text py-3">
                Enjoy a relaxing unexplored area of Pakistan and the province with the most breathtakingly diverse ecosystems in the country.
                Join Pakistan’s first-ever luxury small group tour across the entire length of Balochistan’s south coast.
            </p>
        </div>
    </div>

    <div class="card">
        <h5 class="card-title"> Your Accodomation </h5>
        <div class="card-body" style="">
            <div class="row">
                <div class="col-5">
                    <img src="{{ asset('images/tour/pearl-hotel.png') }}" alt="">
                </div>
                <div class="col-7" style="display:grid;align-items:center">
                    <div>
                        <h5 class="card-title">
                            Pearl Continental Hotel Karachi
                        </h5>
                        <p>5-star</p>
                        <hr>
                        <p>
                            Overlooking the sprawling city in the heart of downtown Karachi,
                            Pearl-Continental Hotel Karachiis the perfect escape from Pakistan's most
                            busting city
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="container-fluid image-bars">
    <div class="d-flex">
        <div class="col-8">
            <img src="{{ asset('images/tour/boats.png') }}" class="img-fluid" alt="" >
        </div>
        <div class="col-4">
            <div class="card">
                What is Lorem Ipsum
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-4 position-relative">
            <img src="{{ asset('images/tour/desert-walk.png') }}" class="w-100" alt="">
            <h4 class="position-absolute text-white">Name of Destination</h4>
        </div>
        <div class="col-4 position-relative">
            <img src="{{ asset('images/tour/monument.png') }}" alt="" class="w-100">
            <h4 class="position-absolute text-white">Name of Destination</h4>
        </div>
        <div class="col-4 position-relative">
            <img src="{{ asset('images/tour/beaches.png') }}" alt="" class="w-100">
            <h4 class="position-absolute text-white">Name of Destination</h4>
        </div>
    </div>
</div>

<section class="custom-section bg-light " >
    <div class="container mt-5">
        <h1 class=" mb-5">More Tours</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="journey-card">
                    <div class="position-relative">
                        <img src="{{asset('images/tour/mountains.png')}}" alt="Island Flavors: A Culinary Journey Through Taiwan">
                        <div class="badge">Featured Experience</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aperiam sit iure ex, dicta nemo sunt recusandae voluptates, reprehenderit inventore amet et a incidunt? Vel aperiam modi nobis mollitia voluptates.</p>
                    </div>
                    <div class="card-footer">
                        <b>Starting at $389</b>
                        <b>15-25 October 2024</b>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="journey-card">
                    <div class="position-relative">
                        <img src="{{asset('images/tour/hills.png')}}" alt="Origins Of The Yangtze: Trekking The Jinsha River Valley">
                        <div class="badge">Featured Experience</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aperiam sit iure ex, dicta nemo sunt recusandae voluptates, reprehenderit inventore amet et a incidunt? Vel aperiam modi nobis mollitia voluptates.</p>
                    </div>
                    <div class="card-footer">
                        <b>Starting at $389</b>
                        <b>15-25 October 2024</b>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="journey-card">
                    <div class="position-relative">
                        <img src="{{asset('images/tour/bike.png')}}" alt="Dunhuang Discovery: Desertscapes And Grottoes">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aperiam sit iure ex, dicta nemo sunt recusandae voluptates, reprehenderit inventore amet et a incidunt? Vel aperiam modi nobis mollitia voluptates.</p>
                    </div>
                    <div class="card-footer">
                        <b>Starting at $389</b>
                        <b>15-25 October 2024</b>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="journey-card">
                    <div class="position-relative">
                        <img src="{{asset('images/tour/lake.png')}}" alt="Inside Guizhou: A Discovery Of Miao, Buyi, And Dong Traditions">
                        <div class="badge" style="background-color: #17a2b8;">Editor's Choice</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aperiam sit iure ex, dicta nemo sunt recusandae voluptates, reprehenderit inventore amet et a incidunt? Vel aperiam modi nobis mollitia voluptates.</p>
                    </div>
                    <div class="card-footer">
                        <b>Starting at $389</b>
                        <b>15-25 October 2024</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="more-tours">
    <div class="container">
        <div class="card text-center">
          <div class="card-body p-5">
            <h4 class="card-title" style="">What is lorem ipsum ?</h4>
            <hr>
            <p class="card-text">
              Balochistan is the most unexplored area of Pakistan and the province with the most breathtakingly diverse ecosystems in the country.
              Join Pakistan’s first-ever luxury small group tour across the entire length of Balochistan’s south coast.
            </p>
            <p class="">
              **Please note: trip is for adults and children 16 years or older only
            </p>
          </div>
        </div>
    </div>
  </section>

  @include('partials.footer')
  @endsection
