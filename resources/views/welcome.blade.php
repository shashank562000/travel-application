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
        div.zero-section{
            background:url('../resources/images/landing-footer.jpg') no-repeat center center;
            background-size: cover;
        }
        .zero-section input{
            background-color: transparent;
            border: 0px;
            border-bottom: 2px solid white;
            padding: 10px;
        }
        .zero-section input::placeholder{
            color: white;
        }
        .zero-section small.footer-info {
            display: flex;
            font-weight: 500;
        }
        .zero-section h1.text-white  {
            font-size: 125px;
            letter-spacing: 33px;
        }
    </style>
</head>

<body>

    <section class="custom-section text-center " style="padding:0">
        <div class="container-fluid" style="background-color:#232f66!important;color:white;font-family:none">
            <h2> Your Adventure Begins Here </h2>


        </div>
        <div class="container">
            <h2>Affordable Tours From 2 - 15 Days</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <a href="#" class="btn btn-primary">DETAILS</a>
        </div>
    </section>

    <section class="custom-section bg-light text-center">
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

    @include('partials.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
