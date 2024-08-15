@extends('layouts.default')
@php
    if(!blank($answers)){
        $settingValues = $answers;
    }
@endphp
<link rel="stylesheet" src="{{asset('css/header.css')}}">
<link rel="stylesheet" src="{{asset('css/tour.css')}}">
<link rel="stylesheet" src="{{asset('css/tour-media.css')}}">
@include('partials.head.booking-condition')
@include('partials.head.header')
@include('partials.head.header-transparent')
@include('partials.tour-page-hero')
<style>
    .sticky {
        position: fixed;
        width: 100%;
        z-index: 110;
        top: 0px;
    }

    .fa-tag {
        rotate: 430deg;
        margin-right: 18px;
    }

    .journey-card .badge:before {
        content: "";
        position: absolute;
        left: 0px;
        top: 46%;
        transform: translateY(40%);
        width: 0;
        height: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-right: 10px solid rgb(16, 207, 73);
    }

    .nav-link:hover {
        transition: transform .5s;
        transform: scale(1.1);
    }

    body,
    html {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        /* overflow-x: hidden; */
    }

    .image-bars img:not(.col-4 img) {
        transition: transform .2s;
        /* Animation */
        margin: 0 auto;
    }

    .col-5 img {
        transition: transform .2s;
        /* Animation */
        margin: 0 auto;
    }

    .col-5 img:hover {
        transform: scale(1.05)
    }

    .image-bars img:hover {
        transform: scale(1.05)
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .booking-form label {
        display: block;
    }

    .booking-form {
        position: absolute;
        z-index: 1000;
        right: 5%;
        top: 10%;
        width: 25%;
    }
    .border-1{
        border: 3px dotted #090909;
    }
    form .form-container {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form .form-head {
        padding: 20px;
        background-color: #343a40;
        color: white;
        text-align: center;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    form .form-body {
        padding: 20px 0;
    }

    .row div.container {
        display: grid;
        place-content: center;
        place-items: center;
    }

    .form-group p {
        padding: 0 50px;
    }

    .submitBtn {
        width: 100%;
        padding: 10px;
        background-color: #265c81;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .submitBtn:hover {
        background-color: #1a4865;
    }

    .tour-details span {
        margin-top: -5px;
    }

    .tour-details {
        background-color: #e0e5e7;
    }

    .collapse ul {
        margin-left: 10px;
    }

    .nav-link {
        width: 170px;
    }

    .tour-details form {
        border: 0;
        background-color: transparent;
    }

    div.adventure .card,
    section.more-tours .card {
        border: 0;
    }

    .image-bars h4.position-absolute {
        bottom: 10px;
        left: 20px;
    }

    /* Media Queries */
    @media (max-width: 767.98px) {
        .tour-details form {
            border: 0;
            background-color: transparent;
            display: none;
        }

        .navbar {
            position: relative;
        }

        .navbar-toggler {
            position: absolute;
            right: 10px;
            top: 10px;
        }

        .navbar-collapse {
            background-color: #343a40;
            position: absolute;
            width: 100%;
            height: 100vh;
            top: 0;
            left: 0;
            z-index: 999;
            overflow-y: auto;
            transition: transform 0.3s ease-in-out;
            transform: translateX(-100%);
        }

        .navbar-collapse.show {
            transform: translateX(0);
        }

        .navbar-nav {
            flex-direction: column;
            align-items: center;
        }

        .nav-item {
            margin: 10px 0;
        }

        .logo-item {
            order: -1;
            margin-bottom: 20px;
        }

        .booking-form {
            position: relative;
            width: 90%;
            left: 5%;
            top: 10%;
        }

        .form-container {
            padding: 15px;
        }

        .form-head {
            padding: 15px;
        }

        .form-body {
            padding: 15px 0;
        }

        .tour-details .col-4,
        .tour-details .col-8 {
            padding-left: 5%;
            padding-right: 5%;
        }

        .about-row {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 15px;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .tour-details form {
            border: 0;
            background-color: transparent;
            display: none;
        }

        .booking-form {
            position: absolute;
            width: 50%;
            left: 25%;
            top: 10%;
        }

        .form-container {
            padding: 20px;
        }

        .form-head {
            padding: 20px;
        }

        .form-body {
            padding: 20px 0;
        }

        .tour-details .col-4,
        .tour-details .col-8 {
            padding-left: 2%;
            padding-right: 2%;
        }

        .about-row {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 20px;
        }
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {
        .tour-details form {
            border: 0;
            background-color: transparent;
            display: none;
        }

        .booking-form {
            width: 30%;
            left: 35%;
            top: 10%;
        }

        .form-container {
            padding: 20px;
        }

        .form-head {
            padding: 20px;
        }

        .form-body {
            padding: 20px 0;
        }

        .tour-details .col-4,
        .tour-details .col-8 {
            padding-left: 5%;
            padding-right: 5%;
        }

        .about-row {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0 20px;
        }
    }

    @media (min-width: 1200px) {

        .booking-form {
            width: 25%;
            right: 5%;
            top: 10%;
        }

        .form-container {
            padding: 20px;
        }

        .form-head {
            padding: 20px;
        }

        .form-body {
            padding: 20px 0;
        }

        .tour-details .col-4,
        .tour-details .col-8 {
            padding-left: 10%;
            padding-right: 10%;
        }

        .about-row {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0 20px;
        }
    }

    /* Specific Section Styles */
    section.tour-details {
        background-color: #e0e5e7;
    }

    section.overview {
        margin-top: 5rem;
        margin-bottom: 5rem;
        text-align: center;
    }

    section.overview h4 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }

    section.overview h1 {
        font-size: 2.5rem;
        margin-bottom: 2rem;
    }

    section.overview p {
        font-size: 1rem;
        margin-bottom: 2rem;
    }

    section.overview img {
        width: 100%;
        border: 1px solid black;
    }

    section.image-bars .col-4 {
        height: 400px;
        background-position: center;
        background-size: cover;
        position: relative;
    }

    section.image-bars h4 {
        position: absolute;
        bottom: 10px;
        left: 20px;
        color: white;
    }

    section.itinerary {
        margin-top: 5rem;
    }

    section.itinerary h4,
    section.itinerary h1 {
        text-align: center;
    }

    section.itinerary .col-6 {
        margin-bottom: 2rem;
    }

    section.itinerary h3 {
        font-size: 1.75rem;
        margin-bottom: 1rem;
    }

    section.itinerary p {
        font-size: 1rem;
    }

    /* Form Specific Styles */
    .booking-form {
        position: absolute;
        z-index: 1000;
        right: 5%;
        top: 10%;
        width: 25%;
    }

    .booking-form .form-container {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .booking-form .form-head {
        padding: 20px;
        background-color: #343a40;
        color: white;
        text-align: center;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    .booking-form .form-body {
        padding: 20px 0;
    }

    .booking-form .form-group {
        margin-bottom: 1rem;
    }

    .booking-form .form-group label {
        display: block;
        margin-bottom: .5rem;
    }

    .booking-form .form-group input:nth-of-type(type=[checkbox]) {
        width: calc(100% - 2rem);
        padding: .5rem;
        border: 1px solid #ccc;
        border-radius: .25rem;
    }

    .booking-form .form-group p {
        padding: 0 50px;
    }

    .booking-form .submitBtn {
        width: 100%;
        padding: 10px;
        background-color: #265c81;
        color: white;
        border: none;
        border-radius: .25rem;
        cursor: pointer;
    }

    .booking-form .submitBtn:hover {
        background-color: #1a4865;
    }

    .booking-form .form-group .terms {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .booking-form .form-group .terms input {
        margin-right: .5rem;
    }

    i.fa-check,
    i.fa-close {
        color: darkgray
    }
</style>
<style>
    summary {
        cursor: pointer;
        list-style: none;
        font-family: Georgia, serif;
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
</style>
@section('content')

<section class="tour-details">
    <div class="container-fluid">
        <div class="tour-details col-12 position-relative row">
            <div class="col-4" style="padding-left:10%">
                <div class="row mt-5 mb-1">
                    <i class="fa-solid fa-clock"></i>
                    <span class="px-3">{{ $settingValues->tour_highlights->tour_duration ?? '8 Days' }}</span>
                </div>
                <div class="row mt-4">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span class="px-3">{{ $settingValues->tour_highlights->tour_location ?? 'Karachi' }}</span>
                </div>
                <div class="row mt-4 mb-5">
                    <i class="fa-solid fa-plane-departure"></i>
                    <span class="px-3">{{ $settingValues->tour_highlights->maxPeople ?? 'Max people: 14' }}</span>
                </div>
            </div>
            <div class="col-8" style="padding-left:2%">
                <div class="row mt-5 mb-3">
                    <div class="d-flex">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span class="px-3">{{ $settingValues->tour_highlights->tour_dates ?? 'November 10 - 17, 2024' }}</span>
                    </div>
                </div>
                <div class="row mt-4 mb-3">
                    <div class="d-flex">
                        <i class="fa-solid fa-plane-departure"></i>
                        <span class="px-3">{{ $settingValues->tour_highlights->departure_locations ?? 'Karachi or Lahore' }}</span>
                    </div>
                </div>
            </div>
            <form action="#" class="booking-form form-control position-absolute">
                <div class="row justify-content-center" style="background-color:#7291b1;padding:10px">
                    <h5 class="text-white ">{{ $settingValues->form->tour_type ?? 'Small Group Tour' }}</h5>
                </div>
                <div class="row form-container">
                    <div class="d-flex form-head justify-content-center bg-dark w-100">
                        <i class="fa-solid text-white fa-tag"></i>
                        <h2 class="text-white"> &dollar;{{ $settingValues->form->tour_price ?? '2,597' }}</h2>
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
                                <label for="idealDeptDate"> Tell us which trip <br> you're interested </label>
                                <input type="textarea" id="idealDeptDate">
                            </div>
                            <div class="form-group">
                                <label for="idealDeptDate"> How did you find us* </label>
                                <input type="textarea" id="idealDeptDate">
                            </div>
                            <div class="form-group">
                                <p> Please confirm you agree to our
                                    <a href="#" class="text-decoration-none">
                                        terms and conditions
                                    </a>
                                </p>
                                <div class="form-group d-flex col-12">
                                    <input type="checkbox">
                                    <small class="mx-4"> Yes, I've read the Terms <br> & conditions </small><br>
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
        <div class="row" style="background-color:#aab4b8" id="sticked">
            <nav class="navbar navbar-expand-lg" style="width:100%;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-5">
                        <li class="nav-item mx-3">
                            <a class="nav-link text-dark" href="#about"> {{ $settingValues->body_Navbar->menu1 ?? 'About' }} </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#Itinerary"> {{ $settingValues->body_Navbar->menu2 ?? 'Itinerary' }} </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#Videos-Pics">{{ $settingValues->body_Navbar->menu3 ?? 'Videos & Pics' }} </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#Details"> {{ $settingValues->body_Navbar->menu4 ?? 'Details' }} </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

</section>

<div class="container adventure mt-2" id="about">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$settingValues->about->adventure_heading??'Balochistan Adventure'}}</h4>
            <p class="card-text">
                {{$settingValues->about->adventureText?? 'Balochistan is the most unexplored area of Pakistan and the province with the most breathtakingly diverse ecosystems in the country.
                Join Pakistan\’s first-ever luxury small group tour across the entire length of Balochistan\’s south coast.'}}
            </p>
            <p class="">
                **Please note: {{$settingValues->about->note??'trip is for adults and children 16 years or older only'}}
            </p>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">{{ $settingValues->about->about_title ?? 'About This Adventure' }}</h5>
            <h6 class="card-subtitle mb-2 mt-3 text-muted">{{ $settingValues->about->highlights_title ?? 'Highlights of your trip' }}</h6>
            <div class="p-5">
                <ul class="list-unstyled">
                    @php
                    $oldHighlights = [
                        'Go dolphin watching',
                        'Visit vibrant cities & remote villages',
                        'Climb a volcano',
                        'Stay in 5-star luxury & boutique hotels',
                        'Be the 1st to travel in Pakistan\'s #1 luxury private cabin/sleeper bus (absolute comfort for our days on the road)',
                        'Relax with a decadent beach picnic on the Arabian Sea',
                    ];
                    @endphp
                    @if(isset($settingValues->highlights) && $settingValues->highlights->highlight1)
                        @foreach ($settingValues->highlights as $key => $highlight)
                            <li><span class="fa fa-dot-circle-o mr-2"></span>{{ $highlight }} </li>
                        @endforeach
                    @else
                        @foreach ($oldHighlights as $key => $highlight)
                            <li><span class="fa fa-dot-circle-o mr-2"></span>{{ $highlight }}</li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Trip Host: {{ $settingValues->triphost->name ?? 'Angela Carson' }}</h5>
            <div class="p-5">
                <ul class="list-unstyled">
                    @php
                    $oldTripHostDetails = [
                        'Traveller to spend the longest in Balochistan since 9\/11:53 days',
                        'Travel writer and content writer',
                        'Explored Pakistan extensively, shooting 90+ videos',
                        '1st person to review all 5-star hotels in Pakistan outside of the North',
                        'Has lived in 9 countries & travelled 37',
                        'From Los Angeles, resides in Islamabad, Pakistan',
                        'Instagram | Youtube'
                    ];
                    @endphp
                    @if($settingValues->triphost_details && $settingValues->triphost_details->triphost_detail_1)
                    @foreach ($settingValues->triphost_details as $key => $detail)
                        <li><span class="fa fa-circle mr-2"></span>{{ $detail }}</li>
                    @endforeach
                    @else
                        @foreach ($oldTripHostDetails as $detail)
                            <li><span class="fa fa-circle mr-2"></span>{{ $detail }}</li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <div class="card">
        <h5 class="card-title">Where you're going</h5>
        <div class="card-body">
            <div class="p-5">
                <img src="{{ $settingValues->mapImage->image ?? asset('images/tour/choose-in-map.png') }}" alt="Map Image">
            </div>
        </div>
    </div>
    <div class="card">
        <h5 class="card-title" id="Itinerary"> Itinerary</h5>
    </div>
    @if(isset($settingValues->itinerary))
    @foreach ($settingValues->itinerary as $dayDetails)
        <div class="card p-4">
            <details open>
                <summary class="row p-4" style="background-color:#aab4b8">
                    <div>
                        Day 2- 4 - {{ $dayDetails->location ?? 'Location Name' }}
                    </div>
                </summary>
                <div class="card-body">
                    <p class="card-text py-3">
                        {{ $dayDetails->description ?? 'Default description for the day' }}
                    </p>
                    <p class="card-text py-3">
                        {{ $dayDetails->additional_info ?? 'Additional info about the day' }}
                    </p>
                    <div class="card">
                        <h5 class="card-title">Your Accommodation</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <img src="{{ $dayDetails->accommodation_image ?? asset('images/tour/default-hotel.png') }}" alt="Accommodation">
                                </div>
                                <div class="col-7" style="display: grid; align-items: center;">
                                    <div>
                                        <h5 class="card-title">{{ $dayDetails->accommodation_name ?? 'Accommodation Name' }}</h5>
                            {{ $dayDetails->mmodation_rating ?? 'Star Rating' }}</p>
                                        <hr>
                                        <p>{{ $dayDetails->accommodation_description ?? 'Description of the accommodation' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </details>
        </div>
    @endforeach
    @else
    <div class="card p-4">
        <details open>
            <summary class="row p-4" style="background-color:#aab4b8">
                <div>
                    Day 1 - 2 {{$settingValues->day1_2??'Karachi'}}
                </div>
            </summary>
            <div class="card-body">
                <p class="card-text py-3">
                    {{$settingValues->day2_text??'Arrive in time to Karachi\'s Jinnah unexplored area of Pakistan and the province with the most breathtakingly diverse ecosystems in the country.
                    Join Pakistan\’s first-ever luxury small group tour across the entire length of Balochistan\’s south coast.'}}
                </p>
                <p class="card-text py-3">
                    Enjoy a relaxing unexplored area of Pakistan and the province with the most breathtakingly diverse ecosystems in the country.
                    Join Pakistan’s first-ever luxury small group tour across the entire length of Balochistan’s south coast.
                </p>
                <div class="card">
                    <h5 class="card-title"> Your Accommodation </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <img src="{{ asset('images/tour/pearl-hotel.png') }}" alt="Pearl Continental Hotel Karachi">
                            </div>
                            <div class="col-7" style="display: grid; align-items: center;">
                                <div>
                                    <h5 class="card-title">
                                        Pearl Continental Hotel Karachi
                                    </h5>
                                    <p>5-star</p>
                                    <hr>
                                    <p>
                                        Overlooking the sprawling city in the heart of downtown Karachi,
                                        Pearl-Continental Hotel Karachi is the perfect escape from Pakistan's most
                                        bustling city.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </details>
    </div>
    <!-- start -->
    <div class="card p-4">
        <details open>
            <summary class="row p-4" style="background-color:#aab4b8">
                <div>
                    Day 3 - 4 {{$settingValues->day3_4??'Damb & Hingol National Park'}}
                </div>
            </summary>
            <div class="card-body">
                <p class="card-text py-3">
                    {{$settingValues->day4_text??'Check out of Pearl-Continental Hotel Karachi. Be one of the first foreigners in the world to go dolphin watching and explore the mangroves by
                    boat in Damb. Lunch will be an assortment of fresh fish and rice. In the afternoon we\’ll drive to Kund Malir and check in to Gold Coast Resort on
                    the beach. Dinner at the resort by the best chef in the region!'}}
                </p>
                <p class="card-text py-3">
                    Next morning, we’ll head out early to beat the heat on our climb to the top of the Chandragup Mud Volcano. Then kick off your shoes for a walk
                    in the Arabian Sea at Sapat Beach / Tanak Koh Beach. Group dinner at the resort.
                </p>
                <div class="card">
                    <h5 class="card-title"> Your Accommodation </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <img src="{{ asset('images/tour/Gold Coast Beach Resort.jpg') }}" alt="Gold Coast Beach Resort.jpg">
                            </div>
                            <div class="col-7" style="display:grid;align-items:center">
                                <div>
                                    <h5 class="card-title">
                                        Gold Coast Beach Resort
                                    </h5>
                                    <p>3-Star</p>
                                    <hr>
                                    <p>
                                        3-Star that we upgrade with luxury amenities & delightful extras
                                        Located within Hingol National Park and sits on what is considered
                                        one of Balochistan’s most beautiful beaches
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </details>
    </div>
    <div class="card p-4">
        <details>
            <summary class=" row p-4" style="background-color:#aab4b8">
                <div>
                    Day 5 - 7 {{$settingValues->day5_7?? 'Gwadar & Jiwani'}}
                </div>
            </summary>
            <div class="card-body">
                <p class="card-text py-3">
                    {{$settingValues->day5_7_text??'Check out of Pearl-Continental Hotel Karachi. Be one of the first foreigners in the world to go dolphin watching and explore the mangroves by
                    boat in Damb. Lunch will be an assortment of fresh fish and rice. In the afternoon we\’ll drive to Kund Malir and check in to Gold Coast Resort on
                    the beach. Dinner at the resort by the best chef in the region!'}}
                </p>
                <p class="card-text py-3">
                    Next morning, we’ll head out early to beat the heat on our climb to the top of the Chandragup Mud Volcano. Then kick off your shoes for a walk
                    in the Arabian Sea at Sapat Beach / Tanak Koh Beach. Group dinner at the resort.
                </p>
                <div class="card">
                    <h5 class="card-title"> Your Accommodation </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <img src="{{ asset('images/tour/Gold Coast Beach Resort.jpg') }}" alt="Gold Coast Beach Resort.jpg">
                            </div>
                            <div class="col-7" style="display:grid;align-items:center">
                                <div>
                                    <h5 class="card-title">
                                        Gold Coast Beach Resort
                                    </h5>
                                    <p>3-Star</p>
                                    <hr>
                                    <p>
                                        3-Star that we upgrade with luxury amenities & delightful extras
                                        Located within Hingol National Park and sits on what is considered
                                        one of Balochistan’s most beautiful beaches
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </details>
    </div>
    <div class="card p-4">
        <details>
            <summary class=" row p-4" style="background-color:#aab4b8">
                <div>
                    Day 8 {{ $settingValues->day8??'Karachi'}}
                </div>
            </summary>
            <div class="card-body">
                <p class="card-text py-3">
                    {{$settingValues->day8_text?? 'Check out of Pearl-Continental Hotel Karachi. Be one of the first foreigners in the world to go dolphin watching and explore the mangroves by
                    boat in Damb. Lunch will be an assortment of fresh fish and rice. In the afternoon we’ll drive to Kund Malir and check in to Gold Coast Resort on
                    the beach. Dinner at the resort by the best chef in the region!'}}
                </p>
                <p class="card-text py-3">
                    Next morning, we’ll head out early to beat the heat on our climb to the top of the Chandragup Mud Volcano. Then kick off your shoes for a walk
                    in the Arabian Sea at Sapat Beach / Tanak Koh Beach. Group dinner at the resort.
                </p>
                <div class="card">
                    <h5 class="card-title"> Your Accommodation </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <img src="{{ asset('images/tour/Gold Coast Beach Resort.jpg') }}" alt="Gold Coast Beach Resort.jpg">
                            </div>
                            <div class="col-7" style="display:grid;align-items:center">
                                <div>
                                    <h5 class="card-title">
                                        Gold Coast Beach Resort
                                    </h5>
                                    <p>3-Star</p>
                                    <hr>
                                    <p>
                                        3-Star that we upgrade with luxury amenities & delightful extras
                                        Located within Hingol National Park and sits on what is considered
                                        one of Balochistan’s most beautiful beaches
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </details>
    </div>
</div>

    @endif
</div>


<div class="container-fluid image-bars mt-4">
    <div class="p-4">
        <h4 class="card-title ml-5 pl-2" id="Videos-Pics"> Photos & Videos</h4>
    </div>
    <div class="d-flex justify-content-center">
        <img src="{{ $settingValues->images->main_image ?? asset('images/tour/boats.png') }}" class="img-fluid img-auto" alt="Main Image">
    </div>
    <div class="row mx-4 p-5 justify-content-center text-center" style="border: 0px;">
        <div class="col-12">
            <h5 style="font-family:math;font-weight:600"> {{ $settingValues->images->caption ?? 'Envision the dream' }} </h5>
            <br>
            <button class="btn-outline-light text-dark tourBtn border-1" style="border: 1px dotted #090909;">
                VIEW TRIP
            </button>
        </div>
    </div>
    <div class="row justify-content-center" id="Details">
        <div class="col-10" style="border-top:2px solid darkgray">
            <div class="hstack mx-3 mt-5 mb-5">
                <h5 style="font-family:fangsong;font-weight:600" class="text-secondary"> Details </h5>
            </div>
            <div class="d-flex mb-5">
                <div class="col-4">
                    What's included
                </div>
                <div class="col-8">
                    @foreach ($settingValues->included_details as $included)
                        <div class="hstack">
                            <i class="fa fa-check mr-2"></i> {{ $included }}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex mt-5 mb-4">
                <div class="col-4">
                    What's excluded
                </div>
                <div class="col-8">
                    @foreach ($settingValues->excluded_details as $excluded)
                        <div class="hstack">
                            <i class="fa fa-close mr-2"></i> {{ $excluded }}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex mt-5 mb-4" style="border-top:2px solid darkgray;border-bottom:2px solid darkgray;">
                <div class="col-4 mt-5 mb-5">
                    Trip Costs
                </div>
                <div class="col-8 mt-5 mb-5">
                    <div class="hstack">
                        {{ $settingValues->trip_costs->cost_per_person ?? '$6417' }} per person (double occupancy)
                        <br>
                        Single Supplement {{ $settingValues->trip_costs->single_supplement ?? '$1949' }}
                        <br><br>
                        (VAT is already included in the prices above)
                    </div>
                </div>
            </div>

        </div>
        @if(isset($settingValues->destinations))
        <div class="row mt-3">
            @foreach ($settingValues->destinations as $destination)
                <div class="col-4 position-relative">
                    <img src="{{ $destination->image ?? asset('images/tour/default-image.png') }}" class="w-100" alt="{{ $destination->name }}">
                    <h4 class="position-absolute text-white">{{ $destination->name ?? 'Name of Destination' }}</h4>
                </div>
            @endforeach
        </div>
        @else
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
        @endif
    </div>
</div>


<section class="custom-section bg-light">
    <div class="container mt-5">
        <h1 class="mb-5">More Tours</h1>
        @if(isset($settingValues->tours))
        <div class="row">
            @foreach($settingValues->tours as $tour)
                <div class="col-md-3">
                    <div class="journey-card">
                        <div class="position-relative">
                            <img src="{{ asset($tour->image) }}" alt="{{ $tour->altText }}">
                            @if($tour->badge)
                                <div class="badge">{{ $tour->badge }}</div>
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $tour->title }}</h5>
                            <p class="card-text">{{ $tour->description }}</p>
                        </div>
                        <div class="card-footer">
                            <b>{{ $tour->price }}</b>
                            <b>{{ $tour->dates }}</b>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @else
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
                            <div class="badge"> Editor's Choice</div>
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
        @endif
    </div>
</section>

<section class="more-tours">
    <div class="container">
        <div class="card text-center">
            <div class="card-body p-5">
                <h4 class="card-title">{{ $settingValues->footer_title ?? 'What is lorem ipsum?' }}</h4>
                <hr>
                <p class="card-text">
                    {{ $settingValues->footer_content ?? 'Balochistan is the most unexplored area of Pakistan and the province with the most breathtakingly diverse ecosystems in the country. Join Pakistan’s first-ever luxury small group tour across the entire length of Balochistan’s south coast.' }}
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
<script>
    jQuery(document).ready(function() {
        window.addEventListener('scroll', function() {
            let navRow = document.getElementById('sticked')
            console.log(window.pageYOffset)
            if (window.pageYOffset > 900) {
                navRow.classList.add('sticky')
            } else {
                navRow.classList.remove('sticky')
            }
        })
    })
</script>
