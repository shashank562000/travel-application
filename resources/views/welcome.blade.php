<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Planners Pakistan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/header.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <style>
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
    .search-container{
        background-color:#002e44;
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
        }
        .month-card {
            width: 23%;
            margin-bottom: 20px;
        }
    }
    </style>
</head>

<body>
    @include('partials.header')

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
            <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 30px 0px;" data-skin="WildChina Section"><div class="gdlr-core-pbf-background-wrap"></div><div class="gdlr-core-pbf-wrapper-content gdlr-core-js "><div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container"><div class="gdlr-core-pbf-element"><div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px ;"><div class="gdlr-core-title-item-title-wrap"><h1 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 38px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Journey Through History & Natural Wonders<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h1></div></div></div><hr style="font-size:large;font-weight:bold;color:black"><div class="gdlr-core-pbf-element"><div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-top: 20px ;margin-bottom: 20px ;"><div class="gdlr-core-divider-container" style="max-width: 640px ;"><div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #999999 ;"></div></div></div></div><div class="gdlr-core-pbf-element"><div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><div class="gdlr-core-text-box-item-content" style="text-transform: none ;"><p style="text-align: center;">Pakistan is a country rich in heritage, rugged landscapes, and the most hospitable .</p><p style="text-align: center;">people you can imagine. It’s a place where an adventurous soul will ﬁt right in and
                where a wanderlust spirit will ﬁnally feel at peace.&nbsp;</p></div></div></div><div class="gdlr-core-pbf-element"><div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"><div class="gdlr-core-title-item-title-wrap"><h2 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 22px ;font-weight: 400 ;font-style: italic ;text-transform: none ;color: #898989 ;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h2></div></div></div></div></div></div>
        </div>
    </section>

    <section class="custom-section bg-light text-center" style="background:url('images/landing-page.pdf-image-002.jpg') no-repeat center center;background-size:cover">
    <div class="container mt-5">
        <h1 class="text-center text-white mb-5">Our Favorite Private Journeys</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="journey-card">
                    <div class="position-relative">
                        <img src="{{asset('images/landing page.pdf-image-022.jpg')}}" alt="Island Flavors: A Culinary Journey Through Taiwan">
                        <div class="badge">Featured Experience</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Island Flavors: A Culinary Journey Through Taiwan</h5>
                        <p class="card-text">Experience a full spectrum of flavors, from 2-star-toting Michelin Star...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="journey-card">
                    <div class="position-relative">
                        <img src="{{asset('images/landing page.pdf-image-015.jpg')}}" alt="Origins Of The Yangtze: Trekking The Jinsha River Valley">
                        <div class="badge">Featured Experience</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Origins Of The Yangtze: Trekking The Jinsha River Valley</h5>
                        <p class="card-text">Lace up your hiking boots and prepare for a trek through the remarkable trails...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="journey-card">
                    <div class="position-relative">
                        <img src="{{asset('images/landing page.pdf-image-013.jpg')}}" alt="Dunhuang Discovery: Desertscapes And Grottoes">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Dunhuang Discovery: Desertscapes And Grottoes</h5>
                        <p class="card-text">For centuries, the winding province of Gansu marked the crossroads of civilizations...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="journey-card">
                    <div class="position-relative">
                        <img src="{{asset('images/landing page.pdf-image-023.jpg')}}" alt="Inside Guizhou: A Discovery Of Miao, Buyi, And Dong Traditions">
                        <div class="badge" style="background-color: #17a2b8;">Editor's Choice</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Inside Guizhou: A Discovery Of Miao, Buyi, And Dong Traditions</h5>
                        <p class="card-text">We're excited to partner with Global Heritage Fund to bring you an enriching experience...</p>
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
            <p >Our team is just like you. We love to reconnect with nature, feel like intrepid explorers and not just tourists, and set off on journeys that ignite personal growth. We poured this passion for travel into our services.</p>
        </div>
    </section>

    <section class="">
       <div class="container mt-5 support-section">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('images/landing page.pdf-image-000.jpg')}}" alt="Hikers Image" class="img-fluid">
            </div>
            <div class="col-md-6 support-content">
                <div>
                    <h2>Visa & LOI Support</h2>
                    <hr>
                    <p>We offer trusted visa support and letter of invitation services 7 days a week and free of charge if you book a tour with us. If you'd simply like to engage our visa services, the price is US$75.</p>
                    <a href="#" class="btn btn-outline-dark">APPLY HERE</a>
                </div>
            </div>

            <div class="col-md-6 support-content">
                <div>
                    <h2>Visa & LOI Support</h2>
                    <hr>
                    <p>We offer trusted visa support and letter of invitation services 7 days a week and free of charge if you book a tour with us. If you'd simply like to engage our visa services, the price is US$75.</p>
                    <a href="#" class="btn btn-outline-dark">APPLY HERE</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('images/landing page.pdf-image-001.jpg')}}" alt="Hikers Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <img src="{{asset('images/landing page.pdf-image-020.jpg')}}" alt="Hikers Image" class="img-fluid">
            </div>
            <div class="col-md-6 support-content">
                <div>
                    <h2>Visa & LOI Support</h2>
                    <hr>
                    <p>We offer trusted visa support and letter of invitation services 7 days a week and free of charge if you book a tour with us. If you'd simply like to engage our visa services, the price is US$75.</p>
                    <a href="#" class="btn btn-outline-dark">APPLY HERE</a>
                </div>
            </div>
        </div>
    </div>
    </section>

    <div class="container mt-5">
        <div class="text-center section-title">
            <h2>Explore by Month</h2>
            <hr>
            <p><em>There is always somewhere wonderful to explore in Pakistan!</em></p>
            <p>Here you'll find the best month to adventure around our diverse eco-systems: from the beaches, dunes & deserts to the top of K2.</p>
        </div>
        <div class="row">
            <div class="col-md-4 month-card">
                <img src="{{asset('images/landing page.pdf-image-015.jpg')}}" class="box-image" alt="January">
                <div class="month-label">January</div>
            </div>
            <div class="col-md-4 month-card">
                <img src="{{asset('images/landing page.pdf-image-017.jpg')}}" class="box-image" alt="February">
                <div class="month-label">February</div>
            </div>
            <div class="col-md-4 month-card">
                <img src="{{asset('images/landing page.pdf-image-017.jpg')}}" class="box-image"  alt="March">
                <div class="month-label">March</div>
            </div>
            <div class="col-md-4 month-card">
                <img src="{{asset('images/landing page.pdf-image-019.jpg')}}" class="box-image" alt="April">
                <div class="month-label april">April</div>
            </div>
            <div class="col-md-4 month-card">
                <img src="{{asset('images/landing page.pdf-image-004.jpg')}}" class="box-image" alt="May">
                <div class="month-label">May</div>
            </div>
            <div class="col-md-4 month-card">
                <img src="{{asset('images/landing page.pdf-image-005.jpg')}}" class="box-image" alt="June">
                <div class="month-label">June</div>
            </div>
            <div class="col-md-4 month-card">
                <img src="{{asset('images/landing page.pdf-image-003.jpg')}}"class="box-image"  alt="June">
                <div class="month-label">July</div>
            </div>
            <div class="col-md-4 month-card">
                <img src="{{asset('images/landing page.pdf-image-006.jpg')}}" class="box-image" alt="June">
                <div class="month-label">August</div>
            </div>
            <div class="col-md-4 month-card">
                <img src="{{asset('images/landing page.pdf-image-007.jpg')}}" class="box-image" alt="June">
                <div class="month-label">
                    September
                </div>
            </div>
            <div class="col-md-4 month-card">
                <img src="{{asset('images/landing page.pdf-image-008.jpg')}}"class="box-image" alt="June">
                <div class="month-label">October</div>
            </div>
            <div class="col-md-4 month-card">
                <img src="{{asset('images/2.jpg')}}" class="box-image" alt="June">
                <div class="month-label">November</div>
            </div>
            <div class="col-md-4 month-card">
                <img src="{{asset('images/landing page.pdf-image-013.jpg')}}" class="box-image" alt="June">
                <div class="month-label">December</div>
            </div>

        </div>
    </div>

    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
