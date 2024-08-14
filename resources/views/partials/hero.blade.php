<style>
    .hero-section {
        background: url('../images/landing-header.jpg') no-repeat center center;
        background-size: cover;
        color: white;
        text-align: center;
        padding: 100px 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .circle {
        width: 60px;
        height: 60px;
        border: 2px dashed white;
        border-radius: 50%;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: slideDown 2s infinite;
    }

    .arrow {
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 20px solid white;
        position: absolute;
        top: 32px;
    }

    .line {
        width: 2px;
        height: 40px;
        background-color: white;
        position: absolute;
        top: 10%;
    }

    .lens-clinic {
        font-family: Georgia, serif;
        font-weight: bold;
    }

    .hero-section i {
        font-family: 'Garamond', 'Times New Roman', serif;
        font-size: 20px;
        font-weight: normal;
        color: white;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    @keyframes slideDown {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(0);
        }
    }
</style>
<section class="hero-section" style="background:url({{$settingValues?->slider?->header_image??'../images/landing-header.jpg'}}) no-repeat center center">
    <div class="container p-4 m-5"></div>
    <div class="container">
        <p class="lens-clinic">NAMED AS</p>
        <h1>{{isset($settingValues->slider?->heading)?$settingValues->slider->heading:'DESTINATION OF THE YEAR'}}</h1>
        <i><b>By Condé Nast Traveller magazine</b></i>
        <p style="text-justify:'';"><b>
        {{
        isset($settingValues->slider?->content)?$settingValues->slider->content:
        'Here\'s what you need to know to enter Pakistan in 2024'}}
        </b></p>
        <a href="#" class="btn text-white">READ MORE</a>
        <center>
            <div class="circle">
                <div class="line"></div>
                <div class="arrow"></div>
            </div>
        </center>

    </div>
</section>
