<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: "Open Sans", sans-serif;
        }

        .traveltour-header-background-transparent {
            background: transparent;
        }

        .traveltour-top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #002939;
            font-size: 0.8em;
        }

        .traveltour-top-bar-left,
        .traveltour-top-bar-right {
            display: flex;
            align-items: center;
        }

        .traveltour-top-bar-left a {
            color: white;
            text-decoration: none;
        }

        .traveltour-top-bar-right .contact-number {
            color: white;
            margin-right: 20px;
            text-decoration: none;
        }

        .traveltour-top-bar-right .social-icon {
            color: white;
            margin-left: 10px;
        }

        .traveltour-top-bar-right .social-icon i {
            font-size: 18px;
            color: white;
        }

        .traveltour-main-menu-right-button {
            margin-top: -18px;
        }

        .traveltour-main-menu-search img {
            height: 20px;
        }

        .search-link,
        .help-link {
            color: white;
            text-decoration: none;
        }

        .help-link .fa-caret-down {
            margin-left: 5px;
        }

        .contact-number {
            font-weight: bold;
        }

        .traveltour-header-wrap {
            color: black;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .traveltour-header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            width: 100%;
        }

        .traveltour-navigation ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .traveltour-navigation ul li {
            position: relative;
        }

        .traveltour-navigation ul li a {
            color: black;
            text-decoration: none;
            padding: 10px 10px;
            display: block;
        }

        .traveltour-main-menu>ul>li>a::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: white;
            transition: width .3s;
            position: absolute;
            bottom: -5px;
            left: 0;
        }

        .traveltour-main-menu>ul>li>a:hover::after {
            width: 100%;
        }

        .traveltour-main-menu-search {
            color: white;
            cursor: pointer;
            /* margin-right: 10px; */
        }

        .traveltour-main-menu-right-button {
            background-color: #005f73;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border: 1px solid #005f73;
        }

        .traveltour-main-menu-right-button:hover {
            background-color: #005f73;
            color: white;
        }



        .traveltour-navigation {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .traveltour-header-style-plain.traveltour-style-menu-right .traveltour-main-menu-right-wrap {
            margin-top: -48px;
        }

        /* Media query for devices with a max-width of 1024px */
        @media (max-width: 1024px) {

            .traveltour-logo img {
                max-height: 50px;
                padding: 0;
                margin-top: 2%;
            }

            .traveltour-header-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .traveltour-navigation ul {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .traveltour-main-menu-right-button {
                margin-top: 10px;
                padding: 5px 10px;
            }

        }

        /* Media query for devices with a max-width of 768px */
        @media (max-width: 768px) {
            .traveltour-logo img {
                max-height: 50px;
                padding: 0;
                margin-top: 2%;
            }

            .traveltour-top-bar {
                flex-direction: column;
                align-items: flex-start;
                font-size: 0.7em;
            }

            .traveltour-header-container {
                padding: 10px;
            }

            .traveltour-navigation ul {
                flex-direction: column;
                align-items: flex-start;
            }

            .traveltour-main-menu-right-button {
                padding: 5px 10px;
            }
        }

        /* Media query for devices with a max-width of 480px */
        @media (max-width: 480px) {

            .traveltour-logo img {
                max-height: 50px;
                padding: 0;
                margin-top: 2%;
            }

            .traveltour-top-bar {
                padding: 5px 10px;
                font-size: 0.6em;
            }

            .traveltour-header-container {
                padding: 5px;
            }

            .traveltour-navigation ul {
                align-items: flex-start;
            }

            .traveltour-main-menu-right-button {
                padding: 5px 10px;
            }
        }

        /* Media query for devices with a min-width of 1500px */
        @media (min-width: 1500px) {

            .traveltour-main-menu-search img {
                height: 20px;
            }

            .traveltour-main-menu-right-button {
                margin-top: -18px;
            }

            .traveltour-logo img {
                max-height: 50px;
                padding: 0;
                margin-top: 2%;
            }


        }

        @media (max-width: 1360px) {
            .traveltour-navigation {
                display: contents;
                width: 100%;
            }

            .traveltour-logo img {
                max-height: 81px;
                top: 10px;
            }

            .traveltour-header-style-plain.traveltour-style-menu-right .traveltour-main-menu-right-wrap {
                margin-top: 0px;
            }
        }

        @media (min-width: 1141px) and (max-width: 1234px) {
            .traveltour-navigation {
                display: flex;
                align-items: center;
                width: 100%;
                justify-content: space-between;
            }

            .traveltour-logo img {
                max-height: 75px;
                position: relative;
                top: 10px;
            }

            .traveltour-header-style-plain.traveltour-style-menu-right .traveltour-main-menu-right-wrap {
                margin-top: 0px;
            }

            .traveltour-navigation ul {
                display: flex;
                align-items: center;
                justify-content: space-around;
                width: 100%;
            }

            .traveltour-navigation .sf-menu>li {
                padding-left: 0px;
                padding-right: 0px;
            }

            .traveltour-navigation .sf-menu>li>a {
                font-size: 12px;
            }

            .traveltour-item-pdlr {
                padding-left: 10px;
                padding-right: 10px;
            }

            .traveltour-navigation .sf-menu>.traveltour-normal-menu .sub-menu {
                font-size: 10px;
            }

            .traveltour-navigation .sf-menu>.traveltour-normal-menu .sub-menu>a {
                text-decoration: none;
            }
        }

    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body>

    <div class="traveltour-header-background-transparent">
        <div class="traveltour-wrapper">
            <header>
                <div class="traveltour-top-bar">
                    <div class="traveltour-top-bar-left">
                        <a href="#" class="search-link"><b>SEARCH FOR TOURS | </b><a>
                                <a href="#" class="help-link"><b> HELP</b><span class="fa fa-caret-down"></span></a>
                    </div>
                    <div class="traveltour-top-bar-right">
                        <span class="contact-number">+92 301 858 5054</span>
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </header>
        </div>
        <header class="traveltour-header-wrap traveltour-header-style-plain traveltour-style-menu-right traveltour-sticky-navigation traveltour-style-slide">
            <div class="traveltour-header-container traveltour-header-full">
                <div class="traveltour-navigation traveltour-item-pdlr clearfix">
                    <div class="traveltour-main-menu" id="traveltour-main-menu">
                        <ul id="menu-wildchina-menu-feb-2025" class="sf-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-42054 traveltour-normal-menu">
                                <a href="/" class="sf-with-ul-pre">Plan Your Trip <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42065">
                                        <a href="#">By Destination</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                        <a href="#">By Experience
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                        <a href="#">By Month
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                        <a href="#">Solo Travel
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42061 traveltour-normal-menu">
                                <a href="{{URL('/get-started')}}" class="sf-with-ul-pre">Tours & Excursions <span class="fa fa-caret-down"></span> </a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44380 women-only-fa">
                                        <a href="#">Expert-Led Private Tours <span class="fa fa-angle-right"> </span> </a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42089">
                                                <a href="#">2D Hunza</a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                                <a href="#">1D Lahore Walled City
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                                <a href="#">1D Islamabad
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                                <a href="#">2D Isl - Peshawar
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                                <a href="#">3D Naran Valley (spelling?)
                                                </a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                                <a href="#">1D Taxila
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171 women-only-fa">
                                        <a href="#">Small Group Tours <span class="fa fa-angle-right"> </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42089">
                                                <a href="#">8D Balochistan</a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42090">
                                                <a href="#">15D Balochistan</a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42091">
                                                <a href="#">4D Skardu</a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42092">
                                                <a href="#">11D Hunza & Ghizer</a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42093">
                                                <a href="#">8D Skardu by air</a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42094">
                                                <a href="#">10D Wonders of Pakistan</a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42095">
                                                <a href="#">8D Hunza</a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42096">
                                                <a href="#">6D Culture & Nature</a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42097">
                                                <a href="#">6D Isl Swat Kalam</a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42098">
                                                <a href="#">14D Bike Ride North</a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42099">
                                                <a href="#">5D Naran Valley</a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42100">
                                                <a href="#">5D Hunza</a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42101">
                                                <a href="#">10D Hunza</a>
                                            </li>
                                        </ul>

                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                        <a href="#">Motorbike Tours </a>

                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42071 women-only-fa">
                                        <a href="#" class="">Women Only(trps ? tours ? experiences) <span class="fa fa-angle-right"> </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-42089">
                                                <a href="#">Yoga</a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                                <a href="#">Personal Branding & Improvement
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-44381 traveltour-normal-menu">
                                <a href="{{url('/what-we-Offer')}}" class="sf-with-ul-pre">What We Offer <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42065">
                                        <a href="#">Letter for invitation for Pakistan</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                        <a href="#">How to apply for Pakistan visa
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                        <a href="#">Bespoke Luxury Tarvel Planning</a>
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                        <a href="#">Balochistan NOC
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                        <a href="#">Corporate Travel Services
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                        <a href="#">Car & Driver
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46171">
                                        <a href="#">Motoprbike Rental
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item traveltour-logo">
                                <a href="/"><img src="{{asset('/images/full lofo.png')}}" alt="WildChina" title="WC_LOGO_FULL" /></a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-42075 traveltour-normal-menu">
                                <a href="{{url('/booking-condition')}}" class="sf-with-ul-pre">Why Us <span class="fa fa-caret-down"></span></a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-43846 traveltour-normal-menu">
                                <a href="">Blog & Videos <span class="fa fa-caret-down"></span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="traveltour-main-menu-right-wrap clearfix">
                        <div class="traveltour-main-menu-search" id="traveltour-top-search"><i class="fi fi-rr-user"><img src="{{asset('/images/user.svg')}}" alt=""></i></div>
                        <div class="traveltour-top-search-wrap">
                            <div class="traveltour-top-search-close"></div>
                            <div class="traveltour-top-search-row">
                                <div class="traveltour-top-search-cell">
                                    <form role="search" method="get" class="search-form" action="#">
                                        <input type="text" class="search-field traveltour-title-font" placeholder="Search..." value="" name="s">
                                        <div class="traveltour-top-search-submit"><i class="fa fa-search"></i></div>
                                        <input type="submit" class="search-submit" value="Search">
                                        <div class="traveltour-top-search-close"><i class="icon_close"></i></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a class="traveltour-main-menu-right-button" href="#" target="_self">START PLANNING</a>
                    </div>
                </div><!-- traveltour-navigation -->
            </div><!-- traveltour-header-container -->
        </header><!-- header -->
    </div>

</body>

</html>