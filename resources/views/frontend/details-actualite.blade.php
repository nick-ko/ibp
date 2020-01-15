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
                            <a href="{{url('/')}}" >Acceuil</a>
                        </li>
                        <li class="header_active underline" >
                            <a href="{{route('actualite')}}" style="color:blue">Actualité</a>
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
        <h2>{{$actualite->title}}</h2>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Acceuil</a></li>
            <li><a href="#" class="active">Actualité</a></li>
        </ol>
    </section>

    <!-- Building Construction Area -->
    <section class="building_construction_area">
        <div class="container">
            <div class="row building_construction_row">
                <div class="col-sm-8 constructing_laft">
                    <h2>{{$actualite->title}}</h2>
                    <img src="{{URL::to($actualite->image)}}" alt="">
                    <div class="col-md-6 ipsum">
                        {{$actualite->description}}
                    </div>
                    <div class="col-md-6 ipsum_img"><img src="images/construction-2.jpg" alt=""></div>
                    <div class="col-md-12 p0">
                    </div>
                </div>
                <div class="col-sm-4 constructing_right">
                    <h3>Autres actualite</h3>
                    <br>
                    @if(count($others)>0)
                    <ul class="painting">
                        @foreach($others as $other)
                        <li><a href="{{url('/details-actualite/'.$other->id)}}"><img src="{{URL::to($other->image)}}" alt="" style="width: 75px; height: 75px; border-radius: 6px;">    {{$other->title}}</a></li>
                        @endforeach
                    </ul>
                    @else
                        <p>pas d'autres actualite</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- End Building Construction Area -->
@endsection
