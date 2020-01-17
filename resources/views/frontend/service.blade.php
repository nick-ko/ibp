@extends('layouts.frontend')

@section('content')

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Nos Services</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Acceuil</a></li>
            <li><a href="#" class="active">Services</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Our Services Area -->
    <section class="our_services_tow">
        <div class="container">
            <div class="architecture_area services_pages">
                <div class="portfolio_filter portfolio_filter_2">
                    <ul>
                        @foreach($services as $s)
                             <li data-filter=".{{$s->title}}" class="active"><a href=""><i class="fa fa-desktop" aria-hidden="true"></i>{{$s->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                @foreach($services as $s)
                <div class="portfolio_item portfolio_2">
                    <div class="grid-sizer-2"></div>
                    <div class="single_facilities col-sm-7 informatique">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>{{$s->title}}</h2>
                            </div>
                            <p>
                                {{$s->contenue}}
                            </p>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5  {{$s->title}}">
                        <img src="{{URL::to($s->image)}}" alt="">
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Our Services Area -->
@endsection
