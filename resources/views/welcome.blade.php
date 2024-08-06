<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Planners Pakistan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/header.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/header-media.css')}}" rel="stylesheet">
    <link href="{{asset('css/footer-media.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Georgia, serif;
            font-weight: bold;
        }

        .journey-card-block .card-body {
            text-align: left;
        }

        .journey-card-block .card-footers-2 {
            padding-top: 20px;
            font-size: 10px;
            font-weight: bold;
            border-radius: 0;
        }


        @media (max-width: 767.98px) {
            .search-box {
                flex-direction: column;
            }

            .search-box input,
            .search-box select,
            .search-box button {
                width: 100%;
                margin-bottom: 10px;
                background-color: lightgray;
            }

            .journey-card {
                margin-bottom: 20px;
            }

            .journey-card img {
                width: 100%;
            }

            .support-section img {
                width: 100%;
            }

            .month-card {
                width: 100%;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .search-box {
                flex-direction: row;
                justify-content: space-between;
            }

            .search-box input,
            .search-box select,
            .search-box button {
                width: 30%;
            }

            .journey-card img {
                width: 100%;
            }

            .support-section img {
                width: 100%;
            }

            .month-card {
                width: 48%;
                margin-bottom: 20px;
            }
        }

        @media (min-width: 992px) and (max-width: 1199.98px) {
            .search-box {
                flex-direction: row;
                justify-content: space-between;
            }

            .search-box input,
            .search-box select,
            .search-box button {
                width: 24%;
            }

            .journey-card img {
                width: 100%;
            }

            .support-section img {
                width: 100%;
            }

            .month-card {
                width: 30%;
                margin-bottom: 20px;
            }
        }

        .search-container {
            background-color: #002e44;
        }

        @media (min-width: 1200px) {
            .search-box {
                flex-direction: row;
                justify-content: space-between;
            }

            .search-box input,
            .search-box select,
            .search-box button {
                width: 20%;
            }

            .journey-card img {
                width: 100%;
            }

            .support-section img {
                width: 100%;
                height: 100%;
            }

            .month-card {
                width: 23%;
                margin-bottom: 20px;
            }
        }

        .position-relative {
            position: relative;
        }

        .custom-badge {
            position: absolute;
            width: 120px;
            /* bottom: 10px; */
            top: 10px;
            left: -10px;
            background-color: rgb(16, 207, 73);
            color: white;
            padding: 5px 10px;
            border-radius: 0px;
            font-size: 0.9em;


            &:before {
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


        }

        .image-container {
            position: relative;
            overflow: hidden;
            cursor: pointer;
            width: 100%;
            padding-top: 100%;
            /* 1:1 Aspect Ratio */
        }

        .box-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 300px;
            height: 300px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .image-container:hover .box-image {
            transform: scale(1.1);
        }

        .month-card {
            overflow: hidden;
            position: relative;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    @php
    if(!blank($answers)){
    $settingValues = json_decode($answers)->data;
    dd($settingValues);
    }
    @endphp
    @include('partials.head.booking-condition')
    @include('partials.head.header')
    @include('partials.head.header-transparent')
    @include('partials.hero')
    <section class="custom-section text-center " style="padding:0;">
        <div class="search-container">
            <h1 class="pt-4 text-white">Your Adventure Begins Here </h1>
            <div class="search-box">
                <input type="text" class="form-control" placeholder="Keywords">
                <select class="form-control">
                    <option value="" disabled selected>Category</option>
                    <!-- Add category options here -->
                </select>
                <select class="form-control">
                    <option value="" disabled selected>Activity</option>
                    <!-- Add activity options here -->
                </select>
                <select class="form-control">
                    <option value="" disabled selected>Destination</option>
                    <!-- Add destination options here -->
                </select>
                <button type="button" class="form-control">Search</button>
            </div>
        </div>
        <div class="container">
            <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 30px 0px;" data-skin="WildChina Section">
                <div class="gdlr-core-pbf-background-wrap"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h1 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 38px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">
                                        {{$settingValues->journeyHeading??'Journey Through History & Natural Wonders'}}
                                        <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <hr style="font-size:large;font-weight:bold;color:black">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-top: 20px ;margin-bottom: 20px ;">
                                <div class="gdlr-core-divider-container">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #999999 ;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                    <p style="text-align: center;margin-bottom: 0px;">
                                        {{$settingValues->journeyText??'Pakistan is a country rich in heritage, rugged landscapes, and the most hospitable . people you can imagine. It’s a place where an adventurous soul will ﬁt right in and  where a wanderlust spirit will ﬁnally feel at peace.&nbsp;'}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h2 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 22px ;font-weight: 400 ;font-style: italic ;text-transform: none ;color: #898989 ;">
                                        {{ $settingValues->journeySummary ?? 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' }}
                                        <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="custom-section bg-light text-center" style="background:url('images/landing-page.pdf-image-002.jpg') no-repeat center center;background-size:cover">
        <div class="container mt-5">
            <h1 class="text-center text-white mb-5">Our Favourite Expert-Led Tours</h1>
            <div class="row journey-card-block">
                <div class="col-md-3">
                    <div class="journey-card">
                        <div class="position-relative">
                            <img src="{{asset('images/landing page.pdf-image-022.jpg')}}" alt="Island Flavors: A Culinary Journey Through Taiwan">
                            <div class="custom-badge">Trekking</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$settingValues->OurFavouriteExpertLedToursImg1headding ?? 'Lorem Ipsum is simply dummy text of the'}}</h5>
                            <p class="card-text">{{$settingValues->OurFavouriteExpertLedToursImg1Content ?? "Lorem Ipsum is simply dummy text
                                of the printing and typeseing
                                industry. Lorem Ipsum has been
                                the industry's standard."}}
                            </p>
                            <p class="card-footers-2">Starting at $389 <br> 15-24 October 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="journey-card">
                        <div class="position-relative">
                            <img src="{{asset('images/landing page.pdf-image-022.jpg')}}" alt="Island Flavors: A Culinary Journey Through Taiwan">
                            <div class="custom-badge">Balochistan</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$settingValues->OurFavouriteExpertLedToursImg2headding ?? 'Lorem Ipsum is simply dummy text of the'}}</h5>
                            <p class="card-text">{{$settingValues->OurFavouriteExpertLedToursImg2Content ?? "Lorem Ipsum is simply dummy text
                                of the printing and typeseing
                                industry. Lorem Ipsum has been
                                the industry's standard."}}
                            </p>
                            <p class="card-footers-2">Starting at $389 <br> 15-24 October 2024</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="journey-card">
                        <div class="position-relative">
                            <img src="{{asset('images/landing page.pdf-image-022.jpg')}}" alt="Island Flavors: A Culinary Journey Through Taiwan">
                            <div class="custom-badge">North</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$settingValues->OurFavouriteExpertLedToursImg3headding ?? 'Lorem Ipsum is simply dummy text of the'}}</h5>
                            <p class="card-text">{{$settingValues->OurFavouriteExpertLedToursImg3Content ?? "Lorem Ipsum is simply dummy text
                                of the printing and typeseing
                                industry. Lorem Ipsum has been
                                the industry's standard."}}
                            </p>
                            <p class="card-footers-2">Starting at $389 <br> 15-24 October 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="journey-card">
                        <div class="position-relative">
                            <img src="{{asset('images/landing page.pdf-image-022.jpg')}}" alt="Island Flavors: A Culinary Journey Through Taiwan">
                            <div class="custom-badge">Motorbike</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$settingValues->OurFavouriteExpertLedToursImg4headding ?? 'Lorem Ipsum is simply dummy text of the'}}</h5>
                            <p class="card-text">{{$settingValues->OurFavouriteExpertLedToursImg4Content ?? "Lorem Ipsum is simply dummy text
                                of the printing and typeseing
                                industry. Lorem Ipsum has been
                                the industry's standard."}}
                            </p>
                            <p class="card-footers-2">Starting at $389 <br> 15-24 October 2024</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="custom-section bg-light text-center">
        <div class="container" style="width: 50%;">
            <h2>Create Memories To Last A Lifetime</h2>
            <hr>
            <p>Our team is just like you. We love to reconnect with nature, feel like intrepid explorers and not just tourists, and set off on journeys that ignite personal growth. We poured this passion for travel into our services.</p>
        </div>
    </section>

    <section class="">
        <div class="container mt-5 support-section">
            <div class="row">
                <div class="col-md-6 p-0">
                    <img src="{{asset('images/landing page.pdf-image-000.jpg')}}" alt="Hikers Image" class="img-fluid">
                </div>
                <div class="col-md-6 support-content ">
                    <div>
                        <h2>Visa & LOI Support</h2>
                        <hr>
                        <p>We offer trusted visa support and letter of invitation services 7 days a week and free of charge if you book a tour with us. If you'd simply like to engage our visa services, the price is US$75.</p>
                        <a href="#" class="btn btn-outline-dark">APPLY HERE</a>
                    </div>
                </div>

                <div class="col-md-6 support-content">
                    <div class="p-3" style="text-align: end;">
                        <h2>Affordable Tours From 2 - 15 Days</h2>
                        <hr>
                        <p>Pakistan’s lakes and mountains are the jewel in
                            Still working on it, use lorem ipsum: Lorem
                            ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim.</p>
                        <a href="#" class="btn btn-outline-dark">DETAILS</a>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <img src="{{asset('images/landing page.pdf-image-001.jpg')}}" alt="Hikers Image" class="img-fluid">
                </div>
                <div class="col-md-6 p-0">
                    <img src="{{asset('images/landing page.pdf-image-020.jpg')}}" alt="Hikers Image" class="img-fluid">
                </div>
                <div class="col-md-6 support-content">
                    <div>
                        <h2>Custom-Made Luxury Journeys</h2>
                        <hr>
                        <p>Let our luxury expert craft the perfect bespoke
                            itinerary for your independent nature. We’ll
                            include everything from moments with top
                            chefs, 5-star hotels, and wonderful local guides
                            who will make each stop in your journey
                            something special</p>
                        <a href="#" class="btn btn-outline-dark">DETAILS</a>
                    </div>
                </div>
                <div class="col-md-6 support-content">
                    <div class="p-3" style="text-align: end;">
                        <h2>Explore Balochistan In Style</h2>
                        <hr>
                        <p>Still working on it, use lorem ipsum:Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat..</p>
                        <a href="#" class="btn btn-outline-dark">EXPLORE</a>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <img src="{{asset('images/landing 20page.pdf-image-026.jpg')}}" alt="Hikers Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light text-center">
        <div class="container mt-5">
            <div class="text-center section-title ">
                <h2>Explore by Month</h2>
                <hr>
                <p><em>There is always somewhere wonderful to explore in Pakistan!</em></p>
                <p>
                    <center>
                        Here you'll find the best month to adventure around our diverse eco-systems: from
                        </br> beaches, dunes & deserts to the top of K2.</center>
                </p>
            </div>
            <div class="row justify-content-center pl-5 p-5">
                <div class="col-md-4 month-card">
                    <div class="image-container">
                        <img src="{{asset('images/landing page.pdf-image-015.jpg')}}" class="box-image" alt="January">
                    </div>
                    <div class="month-label">January</div>
                </div>
                <div class="col-md-4 month-card">
                    <div class="image-container">
                        <img src="{{asset('images/landing page.pdf-image-017.jpg')}}" class="box-image" alt="February">
                    </div>
                    <div class="month-label">February</div>
                </div>
                <div class="col-md-4 month-card">
                    <div class="image-container">
                        <img src="{{asset('images/landing page.pdf-image-017.jpg')}}" class="box-image" alt="March">
                    </div>
                    <div class="month-label">March</div>
                </div>
                <div class="col-md-4 month-card">
                    <div class="image-container">
                        <img src="{{asset('images/landing page.pdf-image-019.jpg')}}" class="box-image" alt="April">
                    </div>
                    <div class="month-label">April</div>
                </div>
                <div class="col-md-4 month-card">
                    <div class="image-container">
                        <img src="{{asset('images/landing page.pdf-image-004.jpg')}}" class="box-image" alt="May">
                    </div>
                    <div class="month-label">May</div>
                </div>
                <div class="col-md-4 month-card">
                    <div class="image-container">
                        <img src="{{asset('images/landing page.pdf-image-005.jpg')}}" class="box-image" alt="June">
                    </div>
                    <div class="month-label">June</div>
                </div>
                <div class="col-md-4 month-card">
                    <div class="image-container">
                        <img src="{{asset('images/landing page.pdf-image-003.jpg')}}" class="box-image" alt="July">
                    </div>
                    <div class="month-label">July</div>
                </div>
                <div class="col-md-4 month-card">
                    <div class="image-container">
                        <img src="{{asset('images/landing page.pdf-image-006.jpg')}}" class="box-image" alt="August">
                    </div>
                    <div class="month-label">August</div>
                </div>
                <div class="col-md-4 month-card">
                    <div class="image-container">
                        <img src="{{asset('images/landing page.pdf-image-007.jpg')}}" class="box-image" alt="September">
                    </div>
                    <div class="month-label">September</div>
                </div>
                <div class="col-md-4 month-card">
                    <div class="image-container">
                        <img src="{{asset('images/landing page.pdf-image-008.jpg')}}" class="box-image" alt="October">
                    </div>
                    <div class="month-label">October</div>
                </div>
                <div class="col-md-4 month-card">
                    <div class="image-container">
                        <img src="{{asset('images/2.jpg')}}" class="box-image" alt="November">
                    </div>
                    <div class="month-label">November</div>
                </div>
                <div class="col-md-4 month-card">
                    <div class="image-container">
                        <img src="{{asset('images/landing page.pdf-image-013.jpg')}}" class="box-image" alt="December">
                    </div>
                    <div class="month-label">December</div>
                </div>
            </div>
        </div>

    </section>

    <section class="custom-section text-center">
        <div class="container" style="width: 50%;">
            <h2>{{ $settingValues->prefooterheadding?? 'What is Lorem Ipsum?'}}</h2>
            <hr>
            <p>{{ $settingValues->prefooterText ?? 'Lorem Ipsum is simply dummy text of the printing and typeseing
                industry. Lorem Ipsum has been the industry\'s standard dummy text ever
                since the 1500s, when an unknown .'}}</p>
        </div>
    </section>

    @include('partials.footer')

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>


<script type="text/javascript" src="{{asset('/wp-includes/js/jquery/ui/core.min.js')}}" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="{{asset('/wp-includes/js/jquery/ui/datepicker.min.js')}}" id="jquery-ui-datepicker-js"></script>
<script type="text/javascript" id="jquery-ui-datepicker-js-after">
    /* <![CDATA[ */
    jQuery(function(jQuery) {
        jQuery.datepicker.setDefaults({
            "closeText": "Close",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "nextText": "Next",
            "prevText": "Previous",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "dateFormat": "MM d, yy",
            "firstDay": 1,
            "isRTL": false
        });
    });
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/mec-typekit-script.min.js')}}" id="mec-typekit-script-js"></script>
<script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/featherlight.min.js')}}" id="featherlight-js"></script>
<script type="text/javascript" src="{{asset('/wp-content/plugins/modern-events-calendar-lite/assets/packages/select2/select2.full.min.js')}}" id="mec-select2-script-js"></script>
<script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/mec-tooltip-script.min.js" id="mec-tooltip-script-js')}}"></script>
<script type="text/javascript" src="{{asset('/wp-content/plugins/modern-events-calendar-lite/assets/packages/lity/lity.min.js')}}" id="mec-lity-script-js"></script>
<script type="text/javascript" src="{{asset('/wp-content/plugins/modern-events-calendar-lite/assets/packages/colorbrightness/colorbrightness.min.js')}}" id="mec-colorbrightness-script-js"></script>
<script type="text/javascript" src="{{asset('/wp-content/plugins/modern-events-calendar-lite/assets/packages/owl-carousel/owl.carousel.min.js')}}" id="mec-owl-carousel-script-js"></script>
<script type="text/javascript" src="{{asset('/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js')}}" id="wp-polyfill-inert-js"></script>
<script type="text/javascript" src="{{asset('/wp-includes/js/dist/vendor/regenerator-runtime.min.js')}}" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="{{asset('/wp-includes/js/dist/vendor/wp-polyfill.min.js')}}" id="wp-polyfill-js"></script>
<script type="text/javascript" src="{{asset('/wp-includes/js/dist/hooks.min.js')}}" id="wp-hooks-js"></script>
<script type="text/javascript" src="{{asset('/wp-includes/js/dist/i18n.min.js')}}" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
    /* <![CDATA[ */
    wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['ltr']
    });
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/swv.min.js')}}" id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
    /* <![CDATA[ */
    var wpcf7 = {
        "api": {
            "root": "https:\/\/wildchina.com\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/contact-form-7.min.js')}}" id="contact-form-7-js"></script>
<script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/gdlr-core-plugin.min.js')}}" id="gdlr-core-plugin-js"></script>
<script type="text/javascript" id="gdlr-core-page-builder-js-extra">
    /* <![CDATA[ */
    var gdlr_core_pbf = {
        "admin": "",
        "video": {
            "width": "640",
            "height": "360"
        },
        "ajax_url": "https:\/\/wildchina.com\/wp-admin\/admin-ajax.php",
        "ilightbox_skin": "dark"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/gdlr-core-page-builder.min.js')}}" id="gdlr-core-page-builder-js"></script>
<script type="text/javascript" src="{{asset('/wp-content/plugins/sg-cachepress/assets/js/lazysizes.min.js')}}" id="siteground-optimizer-lazy-sizes-js-js"></script>
<script type="text/javascript" src="{{asset('/wp-includes/js/jquery/ui/effect.min.js')}}" id="jquery-effects-core-js"></script>
<script type="text/javascript" id="tourmaster-script-js-extra">
    /* <![CDATA[ */
    var TMi18n = {
        "closeText": "Done",
        "currentText": "Today",
        "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
        "firstDay": "1"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/tourmaster-script.min.js')}}" id="tourmaster-script-js"></script>
<script type="text/javascript" id="traveltour-script-core-js-extra">
    /* <![CDATA[ */
    var traveltour_script_core = {
        "home_url": "https:\/\/wildchina.com\/"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/traveltour-script-core.min.js')}}" id="traveltour-script-core-js"></script>
<script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/tourmaster-tour-script.min.js')}}" id="tourmaster-tour-script-js"></script>
<script type="text/javascript" id="popup-maker-site-js-extra">
    /* <![CDATA[ */
    var pum_vars = {
        "version": "1.19.0",
        "pm_dir_url": "https:\/\/wildchina.com\/wp-content\/plugins\/popup-maker\/",
        "ajaxurl": "https:\/\/wildchina.com\/wp-admin\/admin-ajax.php",
        "restapi": "https:\/\/wildchina.com\/wp-json\/pum\/v1",
        "rest_nonce": null,
        "default_theme": "28101",
        "debug_mode": "",
        "disable_tracking": "",
        "home_url": "\/",
        "message_position": "top",
        "core_sub_forms_enabled": "1",
        "popups": [],
        "cookie_domain": "",
        "analytics_route": "analytics",
        "analytics_api": "https:\/\/wildchina.com\/wp-json\/pum\/v1"
    };
    var pum_sub_vars = {
        "ajaxurl": "https:\/\/wildchina.com\/wp-admin\/admin-ajax.php",
        "message_position": "top"
    };
    var pum_popups = {
        "pum-28709": {
            "triggers": [],
            "cookies": [],
            "disable_on_mobile": false,
            "disable_on_tablet": false,
            "atc_promotion": null,
            "explain": null,
            "type_section": null,
            "theme_id": "28102",
            "size": "medium",
            "responsive_min_width": "0%",
            "responsive_max_width": "100%",
            "custom_width": "640px",
            "custom_height_auto": false,
            "custom_height": "380px",
            "scrollable_content": false,
            "animation_type": "fade",
            "animation_speed": "350",
            "animation_origin": "center top",
            "open_sound": "none",
            "custom_sound": "",
            "location": "center top",
            "position_top": "100",
            "position_bottom": "0",
            "position_left": "0",
            "position_right": "0",
            "position_from_trigger": false,
            "position_fixed": false,
            "overlay_disabled": false,
            "stackable": false,
            "disable_reposition": false,
            "zindex": "1999999999",
            "close_button_delay": "0",
            "fi_promotion": null,
            "close_on_form_submission": true,
            "close_on_form_submission_delay": "5000",
            "close_on_overlay_click": false,
            "close_on_esc_press": false,
            "close_on_f4_press": false,
            "disable_form_reopen": true,
            "disable_accessibility": false,
            "theme_slug": "lightbox",
            "id": 28709,
            "slug": "contact-pop-up"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('/wp-content/uploads/pum/pum-site-scriptsc9df.js?defer')}}" id="popup-maker-site-js"></script>
</body>

</html>
