<!-- Preloader -->
<div class="preloader"></div>

<!-- Top Header_Area -->
<section class="top_header_area">
    <div class="container">
        <ul class="nav navbar-nav top_nav">
            <li><a href="#"><i class="fa fa-phone"></i>+225 02 15 50 24</a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i>info@ibp-holding.com</a></li>
            <li><a href="#"><i class="fa fa-clock-o"></i>Lundi - Vendredi 8:00 - 17:00</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right social_nav">
            @foreach($socials as $s)
               <li><a href="{{$s->link}}" target="_blank"><i class="{{$s->logo}}" aria-hidden="true"></i></a></li>
            @endforeach
        </ul>
    </div>
</section>
<!-- End Top Header_Area -->
