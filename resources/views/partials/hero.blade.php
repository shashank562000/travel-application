@php
    $bg = $_COOKIE['path'] ?? asset('images/landing-header.jpg');
@endphp

<section class="hero-section" style="background: url({{$bg}}) no-repeat center center">
<div class="container">
    <p>NAMED AS</p>
    <h1>DESTINATION OF THE YEAR</h1>
    <i>By Condé Nast Traveller magazine</i>
    <p>Here's what you need to know to enter Pakistan in 2024</p>
    <a href="#" class="btn text-white">READ MORE</a>
</div>
</section>
