@extends('layouts.frontend')

@section('content')

    <!-- Slider area -->
    <section class="slider_area row m0">
        <div class="slider_inner">
            @foreach($sliders as $slider)
            <div data-thumb="{{URL::to($slider->image)}}" data-src="{{URL::to($slider->image)}}">
                <div class="camera_caption">
                    <div class="container">
                        <!--h3 class="wow fadeInUp animated" data-wow-delay="0.5s" >{{$slider->description}}</h3-->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End Slider area -->

    <!-- Professional Builde -->
    <section class="professional_builder row">
        <div class="container">
            <div class="row builder_all">
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-area-chart" aria-hidden="true"></i>
                    <h4>Consulting</h4>
                    <p>Conseil management et strategie </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                    <h4>Systeme d'information</h4>
                    <p>L'innovation au service de tous </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-money" aria-hidden="true"></i>
                    <h4>Finance</h4>
                    <p>La finance au service de tous </p>
                </div>
                <div class="col-md-3 col-sm-6 builder">
                    <i class="fa fa-plane" aria-hidden="true"></i>
                    <h4>Tourisme</h4>
                    <p>Un click,et le voyage est à vous </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Professional Builde -->

    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>OUR JOB, YOUR SUCCESS !</h2>
                <h4>ACCOMPAGNER CHAQUE ENTREPRISE POUR EN FAIRE DES LEADERS DE LEURS MARCHÉS</h4>
            </div>
            <div class="row about_row wow zoomIn" data-wow-delay="1s">
                <div class="who_we_area col-md-7 col-sm-6">
                    <div class="subtittle">
                        <h2>QUI SOMME NOUS ?</h2>
                    </div>
                    <p>
                        S'adapter à un monde connecté, globalisé, accéléré, requiert de nouvelles approches.
                        Pour réfléchir, décider et agir efficacement, l'expertise pure ne suffit plus :
                        il devient nécessaire de considérer les interrelations de plusieurs secteurs d'activités, de plusieurs fonctions, de plusieurs cultures.
                        C'est pourquoi notre offre de services est systématiquement adaptée au métier et au contexte du client avec une méthodologie rigoureuse et éprouvée issue des expériences de grands groupes ainsi que d'une expérience issue de milieux opérationnels.
                    </p>
                </div>
                <div class="col-md-5 col-sm-6 about_client">
                    <img src="{{URL::to('frontend/images/Logo1.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->

    <!-- What ew offer Area -->
    <section class="what_we_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2 style="color: #1B3768">NOS SERVICES</h2>
                <h4 style="text-transform: lowercase">
                    Conscient qu'il n'est pas toujours facile pour une entreprise,
                    d'intégrer de  nouvelles approches, de nouveaux projets, de nouvelles technologies ou de trouver les bonnes personnes pour les gérer,
                    I.B.P propose plusieurs services.
                </h4>
            </div>
            <div class="row construction_iner wow zoomIn">
                @foreach($services as $s)
                <div class="col-md-4 col-sm-6 construction ">
                    <div class="cns-img">
                        <img src="{{URL::to($s->image)}}" alt="">
                    </div>
                    <div class="cns-content" style="height: 150px">
                        <i class="fa fa-comment" aria-hidden="true"></i>
                        <a href="{{route('service')}}">{{$s->title}}</a>
                    </div>
                </div>
                @endforeach
               <div class="row">
                   <div class="col-md-12">
                       <div style="text-align: center">
                           <a class="btn btn-primary" href="{{url('/service')}}"> PLUS D'INFO </a>
                       </div>
                   </div>
               </div>
            </div>

            </div>

    </section>
    <!-- End What ew offer Area -->

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
               <div style="text-align: center">
                   <a class="btn btn-primary" href="{{route('projet')}}"> VOIR TOUS LES PROJETS </a>
               </div>
            </div>
        </div>
    </section>
    <!-- End Our Services Area -->

    <!-- Our Latest Blog Area -->
    <section class="latest_blog_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>RÉCENTS POSTS DU BLOG</h2>
                <h4 style="text-transform: lowercase">N'hesitez pas à nous donner votre avis sur nos produits et services</h4>
            </div>
            <div class="row latest_blog wow bounceIn">
                @foreach($articles as $article)
                <div class="col-md-4 col-sm-6 blog_content">
                    <img src="{{URL::to($article->image)}}" alt="">
                    <a href="{{URL::to('/blog/article/'.$article->id)}}" class="blog_heading">{{$article->title}}</a>
                    <h4><i class="fa fa-bookmark"></i>   categorie <i class="fa fa-calendar"></i>  {{$article->created_at}}</h4>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Our Latest Blog Area -->

    <!-- Our Partners Area -->
    <section class="our_partners_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Nos Partenaires</h2>
                <h4 style="text-transform: lowercase">Ils nous font confiance</h4>
            </div>
            <div class="partners wow zoomIn" data-wow-delay="1s">
                <div class="item"><a href="http://www.chapchapci.com/" target="_blank"><img src="{{URL::to('frontend/images/1.jpg')}}" alt="" style="height: 100px"></a></div>
                <div class="item"><a href="http://www.chapchapci.com/" target="_blank"><img src="{{URL::to('frontend/images/2.png')}}" alt="" style="height: 100px"></a></div>
                <div class="item"><a href="http://www.chapchapci.com/"><img src="{{URL::to('frontend/images/3.png')}}" alt="" style="height: 100px"></a></div>
                <div class="item"><a href="http://www.chapchapci.com/"><img src="{{URL::to('frontend/images/3.png')}}" alt="" style="height: 100px"></a></div>
                <div class="item"><a href="http://www.chapchapci.com/"><img src="{{URL::to('frontend/images/5.png')}}" alt="" style="height: 100px"></a></div>
            </div>
        </div>
    </section>
    <!-- End Our Partners Area -->

@endsection
