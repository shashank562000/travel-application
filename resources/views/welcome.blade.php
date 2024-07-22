<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Planners Pakistan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: url('../resources/images/landing-header.jpg') no-repeat center center;
            background-size:cover;
            color: white;
            text-align: center;
            padding: 100px 0;
            display:flex;
        }
        .custom-section {
            padding: 60px 0;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: white;
            font-size: larger;
            font-weight: 500;
        }
        .hero-section {
            background: url(../resources/images/landing-header.jpg) no-repeat center center;
            background-size: cover;
            color: white;
            text-align: center;
            padding: 270px 0 0 0;
            background-repeat: no-repeat;
        }
        a.btn{
            border: 1px solid white;
            margin-bottom: 300px;
        }
        .form-control{
            width:20%;
            margin:10px;
        }
        .search-box{
            padding: 30px;
            display: flex;
        }
        .search-container{
            background: rgba( 0, 46, 64, 1.00 );
        }
    </style>
</head>

<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="justify-content: space-between">
                <li class="nav-item"><a class="nav-link" href="#">PLAN YOUR TRIP</a></li>
                <li class="nav-item"><a class="nav-link" href="#">TOURS & EXCURSIONS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">WHAT WE OFFER</a></li>
                <li class="nav-item"><a class="nav-link" href="#">WHY US</a></li>
                <li class="nav-item"><a class="nav-link" href="#">BLOG & VIDEOS</a></li>
            </ul>
        </div>
    </nav> --}}
    @include('partials.header')

    <section class="custom-section text-center " style="padding:0">
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
            <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 30px 0px;" data-skin="WildChina Section"><div class="gdlr-core-pbf-background-wrap"></div><div class="gdlr-core-pbf-wrapper-content gdlr-core-js "><div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container"><div class="gdlr-core-pbf-element"><div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 0px ;"><div class="gdlr-core-title-item-title-wrap"><h1 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 38px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Journey Through History & Natural Wonders<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h1></div></div></div><div class="gdlr-core-pbf-element"><div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-top: 20px ;margin-bottom: 20px ;"><div class="gdlr-core-divider-container" style="max-width: 640px ;"><div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #999999 ;"></div></div></div></div><div class="gdlr-core-pbf-element"><div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"><div class="gdlr-core-text-box-item-content" style="text-transform: none ;"><p style="text-align: center;">Pakistan is a country rich in heritage, rugged landscapes, and the most hospitable .</p><p style="text-align: center;">people you can imagine. It’s a place where an adventurous soul will ﬁt right in and 
                where a wanderlust spirit will ﬁnally feel at peace.&nbsp;</p></div></div></div><div class="gdlr-core-pbf-element"><div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"><div class="gdlr-core-title-item-title-wrap"><h2 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 22px ;font-weight: 400 ;font-style: italic ;text-transform: none ;color: #898989 ;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h2></div></div></div></div></div></div>
        </div>
    </section>

    <section class="custom-section bg-light text-center" style="background-image:url()">
        <div class="container">
            <h2>Our Favourite Expert-Led Tours</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3>Trekking Balochistan North Motorbike</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    <a href="#" class="btn btn-primary">EXPLORE</a>
                </div>
                <div class="col-md-4">
                    <h3>Explore Balochistan In Style</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <a href="#" class="btn btn-primary">EXPLORE</a>
                </div>
                <div class="col-md-4">
                    <h3>Custom-Made Luxury Journeys</h3>
                    <p>Let our luxury expert craft the perfect bespoke itinerary for your independent nature. We’ll include everything from moments with top chefs, 5-star hotels, and wonderful local guides who will make each stop in your journey something special.</p>
                    <a href="#" class="btn btn-primary">DETAILS</a>
                </div>
            </div>
        </div>
    </section>

    <section class="custom-section text-center">
        <div class="container">
            <h2>Destination of the Year</h2>
            <p>Pakistan is a country rich in heritage, rugged landscapes, and the most hospitable people you can imagine. It’s a place where an adventurous soul will fit right in and where a wanderlust spirit will finally feel at peace.</p>
            <a href="#" class="btn btn-primary">Start Planning</a>
        </div>
    </section>

    <section class="custom-section bg-light text-center">
        <div class="container">
            <h2>Create Memories To Last A Lifetime</h2>
            <p>Our team is just like you. We love to reconnect with nature, feel like intrepid explorers and not just tourists, and set off on journeys that ignite personal growth. We poured this passion for travel into our services.</p>
        </div>
    </section>

    <section class="custom-section text-center">
        <div class="container">
            <h2>Explore by Month</h2>
            <div class="row">
                <div class="col-md-3">
                    <h3>January</h3>
                </div>
                <div class="col-md-3">
                    <h3>February</h3>
                </div>
                <div class="col-md-3">
                    <h3>March</h3>
                </div>
                <div class="col-md-3">
                    <h3>April</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="custom-section text-center">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Office no.7, Mughal Plaza, Main Murree Road, Rawalpindi, Pakistan</p>
            <p>+92 301 858 5054 | info@adventureplanners.net</p>
        </div>
    </section>

    {{-- <footer class="footer"> 
        <div class="container">
            <p>© 2010-2024 - ALL RIGHTS RESERVED | TERMS & CONDITIONS | PRIVACY POLICY | SUPPORT CENTER</p>
        </div>
    </footer> --}}

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
