@extends('layouts.frontend')

@section('content')


    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Carriere</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Acceuil</a></li>
            <li><a href="#" class="active">carriere</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Rejoindre IBP, c’est :</h2>
                <h4>your job,our success</h4>
            </div>
            <div class="row about_row">
                <div class="who_we_area col-md-12 col-sm-6 wow slideInRight">
                    <div class="subtittle">
                        <h2 style="text-transform: lowercase">Rejoindre un Groupe qui veut construire dans la durée son positionnement d’employeur de référence.</h2>
                    </div>
                    <p>
                        à travers une politique de Ressources humaines qui prend largement en compte
                        les besoins de formation et de protection sociale des pays dans lequel nous opérons.
                    </p>
                </div>
                <div class="who_we_area col-md-12 col-sm-6 wow slideInLeft">
                    <div class="subtittle">
                        <h2 style="text-transform: lowercase">Vivre un parcours professionnel dynamique alliant mobilité géographique, diversité culturelle et développement professionnel.</h2>
                    </div>
                    <p>
                        Plus de 60 nationalités travaillent ensemble et partagent leurs différences au quotidien : cette diversité culturelle constitue l’une des plus grandes richesses du Groupe.
                        Elle favorise l’ouverture d’esprit et permet de saisir de nouvelles opportunités
                    </p>
                </div>
                <div class="text-center">
                    <a href="{{url('/carriere/offres')}}" class="btn btn-lg btn-primary" style="cursor: pointer">Consultez les offres </a>
                </div>
                <!-- Our Team Area -->
                <section class="our_team_area">
                    <div class="tittle wow fadeInUp">
                        <h2>Notre Equipe</h2>
                        <h4 style="text-transform: lowercase"> Au delà de leurs expertises et leur expérience de terrain, les collaborateurs, dirigeants des entités et les experts du réseau I.B.P sont choisis pour leur capacité à contribuer efficacement au travail collaboratif. Nous apprécions les personnalités curieuses, enthousiastes, généreuses et prêtes à partager leurs connaissances, soucieuses de l'intérêt collectif et dotés d'une véritable éthique professionelle, des collègues qui travaillent sans se prendre trop au sérieux.</h4>
                    </div>
                    <div class="row team_row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3 col-sm-6 wow fadeInUp">
                            <div class="team_membar">
                                <img src="{{URL::to('frontend/images/team/1.jpg')}}" alt="">
                                <div class="team_content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a href="" class="name">SOUMAHORO Ousmane</a>
                                    <h6>Co-fondateur</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team_membar">
                                <img src="{{URL::to('frontend/images/team/2.jpg')}}" alt="">
                                <div class="team_content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a href="" class="name">DJEDJE Yves</a>
                                    <h6>Co-fondateur</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </section>
                <!-- End Our Team Area -->
            </div>
        </div>
    </section>
    <!-- End About Us Area -->
    <!-- Our Partners Area -->
    <section class="our_partners_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Nos Partenaires</h2>
                <h4 style="text-transform: lowercase">Ils nous font confiance</h4>
            </div>
            <div class="partners">
                @foreach($partenaires as $p)
                    <div class="item"><a href="{{$p->link}}" target="_blank"><img src="{{URL::to($p->image)}}" alt="" style="height: 100px"></a></div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Our Partners Area -->
@endsection
