@extends('layouts.frontend')

@section('content')
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
                        <li >
                            <a href="{{url('/')}}" style="color:blue">Acceuil</a>
                        </li>
                        <li class="underline" >
                            <a href="{{route('actualite')}}" >Actualité</a>
                        </li>
                        <li >
                            <a href="{{route('about')}}" >A propos</a>
                        </li>
                        <li >
                            <a href="{{route('carriere')}}" >Carriere</a>
                        </li>
                        <li><a  href="{{url('/')}}"><img src="{{URL::to('frontend/images/Logo1.png')}}" alt="" style="width: 150px"></a></li>
                        <li >
                            <a href="{{route('service')}}">Service</a>
                        </li>
                        <li >
                            <a href="{{route('blog')}}" >Blog</a>
                        </li>
                        <li>
                            <a href="{{route('sondage')}}">Sondage</a>
                        </li>
                        <li><a href="{{route('contact')}}">Contact</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <div class="col-md-1 p0"></div>
        </div><!-- /.container -->
    </nav>
    <!-- End Header_Area -->

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>{{$projects->title}}</h2>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Acceuil</a></li>
            <li><a href="#" class="active">Projet</a></li>
        </ol>
    </section>

    <!-- Building Construction Area -->
    <section class="building_construction_area">
        <div class="container">
            <div class="row building_construction_row">
                <div class="col-sm-8 constructing_laft">
                    <h2>{{$projects->categorie}}</h2>
                    <img src="{{URL::to($projects->image)}}" alt="">
                    <div class="col-md-12 ipsum">
                        {!! $projects->content !!}
                    </div>
                    <div class="col-md-6 ipsum_img"><img src="images/construction-2.jpg" alt=""></div>
                    <div class="col-md-12 p0">
                    </div>
                </div>
                <div class="col-sm-4 constructing_right">
                    <h2>Autre Projet</h2>
                    @if(count($others)>0)
                    <ul class="painting">
                        @foreach($others as $other)
                             <li><a href="{{url('/projet-details/'.$other->id)}}"><img src="{{URL::to($other->image)}}" style="height: 50px;width: 50px" alt="">{{$other->title}}</a></li>
                        @endforeach
                    </ul>
                    @else
                        <div class="alert alert-primary" role="alert">Pas d'autre projet</div>
                    @endif
                    <br>
                    <div class="contact_us">
                        <h4>Contacter nous</h4>
                        <a href="#" class="contac_namber">+225 02 15 50 24 </a>
                        <a href="#" class="contac_namber">+225 09 86 63 93</a>
                        <p>ABIDJAN, COCODY, RIVIERA 3 BONOUMIN
                            BP 2425 Abidjan, Cote D’Ivoire</p>
                        <a href="{{route('contact')}}" class="button_all">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Building Construction Area -->
@endsection
