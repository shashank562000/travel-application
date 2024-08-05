<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Condensed:100,200,300,400" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="footer">
    <div class="container-fluid zero-section">
        <form action="" class="form-group">
            <h3 class="text-white">{{ isset($settingValues) ? $settingValues->footerHeading??'Keep me updated!' : 'Keep me updated!'}}</h3>
            <div class="form-group ">
                <input type="text" class="mb-1" placeholder="First Name" style="background-color:transparent!important">
                <input type="text" class="mb-1" placeholder="Last Name" style="background-color:transparent!important">
            </div>
            <div class="form-group ">
                <input type="text" class="mb-4" placeholder="Email" style="background-color:transparent!important">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-light tourBtn">
                    SUBMIT
                </button>
            </div>
        </form>
        <div class="row" style="display:flex;justify-content:center">
            <b class="nav-link text-white">NORTHERN</b>
            <b class="nav-link text-white">SINDH</b>
            <b class="nav-link text-white">BALOCHISTAN</b>
            <b class="nav-link text-white">PUNJAB</b>
            <b class="nav-link text-white">AZAD JAMMU & KASHMIR </b>
        </div>
        <div class="row">
            <div class="col-6" style="border-right:2px solid white;height:auto;">
                <b class="float-right" style="padding-top:10%">
                    <img class="thumbImg" src="{{asset('images/pakistan icon-footer.png')}}">
                </b>
            </div>
            <div class="col-6">
                <div class="text-white mb-1" style="margin-left:0px">
                    <small class="footer-info"> MOBILE & WHATSAPP </small>
                    <small class="footer-info"> +92 301 858 5054 </small>
                </div>
                <div class="text-white mb-1">
                    <small class="footer-info"> info@adventureplanners.net </small>
                    <small class="footer-info"> adventureplanners.net </small>
                </div>
                <div class="text-white mb-1">
                    <small class="footer-info"> Office no.7, Mughal Plaza </small>
                    <small class="footer-info"> Main Murree Road </small>
                    <small class="footer-info"> Rawalpindi, Pakistan </small>
                </div>
            </div>
        </div>

        <div class="textwidget custom-html-widget">
            <span class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align gdlr-direction-horizontal" style="padding-bottom: 0px ;display: block ;">
                <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook" rel="noopener"><i class="fa fa-facebook"></i></a>

                <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="instagram" rel="noopener"><i class="fa fa-instagram"></i></a>
                <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="youtube" rel="noopener"><i class="fa fa-youtube"></i></a>
            </span>
        </div>

        <!-- <div class="row justify-content-center align-items-center mt-2 mb-2">
            <div class="text-center ">
                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
            </div>
        </div> -->
        @include('partials.footer-bottom')
    </div>
</section>
