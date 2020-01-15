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
                        <li data-filter=".informatique" class="active"><a href=""><i class="fa fa-desktop" aria-hidden="true"></i>Systeme d'information</a></li>
                        <li data-filter=".performance"><a href=""><i class="fa fa-line-chart" aria-hidden="true"></i>Amelioration de la performance</a></li>
                        <li data-filter=".conseil"><a href=""><i class="fa fa-users" aria-hidden="true"></i>Conseil en strategie,organisation et management</a></li>
                        <li data-filter=".etude"><a href=""><i class="fa fa-chain" aria-hidden="true"></i>Etude & projet</a></li>
                        <li data-filter=".pilotage"><a href=""><i class="fa fa-paint-brush" aria-hidden="true"></i>Pilotage de la transformation</a></li>
                        <li data-filter=".pilotage"><a href=""><i class="fa fa-paint-brush" aria-hidden="true"></i>Strategie operationnelle</a></li>
                    </ul>
                </div>
                <div class="portfolio_item portfolio_2">
                    <div class="grid-sizer-2"></div>
                    <div class="single_facilities col-sm-7 informatique">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>SYSTEME D'INFORMATION</h2>
                            </div>
                            <p>
                                L'innovation, levier de changement pour votre entreprise.
                                De l'audit de votre système d'information jusqu'à sa maintenance, nous nous engageons dans le maintien en conditions opérationnelles de votre informatique. Nous dévéloppons toutes solutions répondant à vos besoins métier. nous réalisons votre schéma directeur ainsi que les strategies de mise en oeuvre.
                            </p>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5  informatique">
                        <img src="{{URL::to('frontend/images/dev.jpg')}}" alt="">
                    </div>


                    <div class="single_facilities col-sm-7 performance">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>AMELIORATION DE LA PERFORMANCE</h2>
                            </div>
                            <p>
                                L'innovation, levier de changement pour votre entreprise.
                                De l'audit de votre système d'information jusqu'à sa maintenance, nous nous engageons dans le maintien en conditions opérationnelles de votre informatique. Nous dévéloppons toutes solutions répondant à vos besoins métier. nous réalisons votre schéma directeur ainsi que les strategies de mise en oeuvre.
                            </p>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5  performance">
                        <img src="{{URL::to('frontend/images/performance.jpg')}}" alt="">
                    </div>

                    <div class="single_facilities col-sm-7 etude">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>ÉTUDES & PROJETS</h2>
                            </div>
                            <p>
                                Mener des études ou assurer la direction déléguée d'un projet, sont une manière générale de décrire nos activités. De manière concrète,
                                nos missions peuvent se répartir selon la classification suivante :
                                Process & Performance, Amélioration de la Performance, Business Plan, Plans Stratégiques, Schéma Directeur, Etude de marché et Audit.
                            </p>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5  etude">
                        <img src="{{URL::to('frontend/images/etude.jpg')}}" alt="">
                    </div>

                    <div class="single_facilities col-sm-7 conseil">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2 style="font-size: 12px;">CONSEIL EN STRATEGIE, ORGANISATION ET MANAGEMENT</h2>
                            </div>
                            <p>
                                Passer du conseil en organisation au conseil en stratégie,
                                les frontières entre les deux sont parfois floues. Le premier a néanmoins une image généralement plus prestigieuse.
                            </p>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5  conseil">
                        <img src="{{URL::to('frontend/images/conseil.jpg')}}" alt="">
                    </div>

                    <div class="single_facilities col-sm-7 pilotage">
                        <div class="who_we_area">
                            <div class="subtittle">
                                <h2>PILOTAGE DE LA TRANSFORMATION</h2>
                            </div>
                            <p>
                                La vison stratégique est certainement importante. Plus important encore est la capacité d'exécution. Nous vous aidons à manager et à réussir la transformation : animer la gouvernance, anticiper et gérer les risques
                            </p>
                        </div>
                    </div>
                    <div class="single_facilities col-sm-5  pilotage">
                        <img src="{{URL::to('frontend/images/pilotage.jpg')}}" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Our Services Area -->
@endsection
