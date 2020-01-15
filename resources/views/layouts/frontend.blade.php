<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IBP-Holding</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/images/favicon.png')}}" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Animate CSS -->
    <link href="{{asset('frontend/vendors/animate/animate.css')}}" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="{{asset('frontend/vendors/font-awesome/css/font-awesome.min.css')}}">

    <!-- Camera Slider -->
    <link rel="stylesheet" href="{{asset('frontend/vendors/camera-slider/camera.css')}}">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendors/owl_carousel/owl.carousel.css')}}" media="all">

    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}" media="all" />

    <!--animate CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('frontend/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('frontend/js/respond.min.js')}}"></script>
    <![endif]-->
    {!! Charts::styles() !!}
</head>
<body>

@include('includes.header')

<!-- Header_Area -->
<nav class="navbar navbar-default header_aera" id="main_navbar">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="col-md-1 p0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="col-md-10 p0">
            <div class="collapse navbar-collapse" id="min_navbar">
                <ul class="nav navbar-nav navbar-center ">
                    <li class="{{$menu == 'acceuil'?'header_active':''}}">
                        <a href="{{url('/')}}">Accueil</a>
                    </li>
                    <li class="{{$menu == 'actualite'?'header_active':''}}" >
                        <a href="{{route('actualite')}}" >Actualité</a>
                    </li>
                    <li class="{{$menu == 'a-propos'?'header_active':''}}">
                        <a href="{{route('about')}}" >A propos</a>
                    </li>
                    <li class="{{$menu == 'carriere'?'header_active':''}}">
                        <a href="{{route('carriere')}}" >Carriere</a>
                    </li>
                    <li><a  href="{{url('/')}}"><img src="{{URL::to('frontend/images/Logo1.png')}}" alt="" style="width: 150px"></a></li>
                    <li class="{{$menu == 'service'?'header_active':''}}">
                        <a href="{{route('service')}}" >Service</a>
                    </li>
                    <li class="{{$menu == 'blog'?'header_active':''}}">
                        <a href="{{route('blog')}}" >Blog</a>
                    </li>
                    <li class="{{$menu == 'sondage'?'header_active':''}}">
                        <a href="{{route('sondage')}}">Sondage</a>
                    </li>
                    <li class="{{$menu == 'contact'?'header_active':''}}">
                        <a href="{{route('contact')}}">Contact</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

        <div class="col-md-1 p0"></div>
    </div><!-- /.container -->
</nav>
<!-- End Header_Area -->
@yield('content')

@include('includes.footer')

<!-- jQuery JS -->
<script src="{{asset('frontend/js/jquery-1.12.0.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- Animate JS -->
<script src="{{asset('frontend/vendors/animate/wow.min.js')}}"></script>
<!-- Camera Slider -->
<script src="{{asset('frontend/vendors/camera-slider/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('frontend/vendors/camera-slider/camera.min.js')}}"></script>
<!-- Isotope JS -->
<script src="{{asset('frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/vendors/isotope/isotope.pkgd.min.js')}}"></script>
<!-- Progress JS -->
<script src="{{asset('frontend/vendors/Counter-Up/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/vendors/Counter-Up/waypoints.min.js')}}"></script>
<!-- Owlcarousel JS -->
<script src="{{asset('frontend/vendors/owl_carousel/owl.carousel.min.js')}}"></script>
<!-- Stellar JS -->
<script src="{{asset('frontend/vendors/stellar/jquery.stellar.js')}}"></script>
<!-- Theme JS -->
<script src="{{asset('frontend/js/theme.js')}}"></script>

<script>
    //var bgcolorlist = ["#1B3768", "#1B3768", "#3C50D1"];
    //$(".header_aera").css("background-color",bgcolorlist[Math.floor(Math.random()*bgcolorlist.length)]);

    // accordion pluse minus goes here
    jQuery('.accordion-toggle').click(function(){
        var has = jQuery(this);
        if(has.hasClass('collapsed')){
            jQuery(this).find('i').removeClass('fa-plus');
            jQuery(this).find('i').addClass('fa-minus');
        }
        else{
            jQuery(this).find('i').removeClass('fa-minus');
            jQuery(this).find('i').addClass('fa-plus');
        }
    })
</script>
</body>
</html>
