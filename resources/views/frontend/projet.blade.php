@extends('layouts.frontend')

@section('content')
    <br>
    <br>
    <!-- Our Services Area -->
    <section class="our_services_area" style="background: #fefefe;">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2 style="color: black">Nos projets</h2>
                <h4 style="text-transform: lowercase ;color: black">Â toutes les étapes de la chaine de l'innovation, du développement,
                    de la mise en oeuvre d'une idée, associant une pluralité d'acteurs, sur de multiples thématiques et à diverses échelles d'intervention :
                    les projets que nous menons, de par leur nature et leur diversité, manifestent le mieux notre raison d'être
                </h4>
            </div>
            <div class="portfolio_inner_area">
                <div class="portfolio_item">
                    <div class="grid-sizer"></div>
                    @foreach($projects as $p)
                        <div class="single_facilities col-xs-4 p0 painting photography {{$p->categorie}}">
                            <div class="single_facilities_inner">
                                <img src="{{URL::to($p->image)}}" alt="">
                                <div class="gallery_hover">
                                    <h4>{{$p->title}}</h4>
                                    <ul>
                                        <li><a href="{{url('/projet-details/'.$p->id)}}"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br>
            </div>
        </div>
    </section>
    <!-- End Our Services Area -->
@endsection
