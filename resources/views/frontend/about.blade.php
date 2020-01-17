@extends('layouts.frontend')

@section('content')


    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Qui somme nous ?</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Acceuil</a></li>
            <li><a href="#" class="active">A propos</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>International Business Partners !</h2>
                <h4>your job,our success</h4>
            </div>
            <div class="row about_row">
                <div class="col-md-5 col-sm-6 about_client about_pages_client wow slideInRight">
                    <img src="{{URL::to('/frontend/images/Logo1.png')}}" alt="">
                </div>
                <div class="who_we_area col-md-7 col-sm-6 wow slideInRight">
                    <div class="subtittle">
                        <h2>NOTRE ENTREPRISE</h2>
                    </div>
                    <p>
                        I.B.P est né pour répondre aux nouveaux besoins des organisations (grandes et petites entreprises, écosystèmes innovants, administrations et organismes du secteur public, associations…) qui font face à des défis de plus en plus complexes, dans un contexte d’incertitude accrue
                        S’adapter à un monde connecté, globalisé, accéléré, requiert de nouvelles approches. Pour réfléchir, décider et agir efficacement, l’expertise pure ne suffit plus : il devient nécessaire de considérer les interrelations de plusieurs secteurs d’activités, de plusieurs fonctions, de plusieurs cultures.
                        À une époque de chocs et de crises, les méthodes et analyses classiques peuvent s’avérer inappropriées. Alors que des secteurs d’activité entiers sont sous pression, les organisations S’adapter à un monde connecté, globalisé, accéléré, requiert de nouvelles approches. Pour réfléchir, décider et agir efficacement, l’expertise pure ne suffit plus : il devient nécessaire de considérer les interrelations de plusieurs secteurs d’activités, de plusieurs fonctions, de plusieurs cultures.
                        À une époque de chocs et de crises, les méthodes et analyses classiques peuvent s’avérer inappropriées. Alors que des secteurs d’activité entiers sont sous pression, les organisations doivent plus que jamais innover, se différencier et se doter de l’agilité nécessaire pour créer et prévenir la surprise stratégique.
                    </p>
                </div>
                <div class="who_we_area col-md-7 col-sm-6 wow slideInLeft">
                    <div class="subtittle">
                        <h2>NOTRE MISSION</h2>
                    </div>
                    <p>
                        Répondre aux nouveaux besoins des organisations (grandes et petites entreprises, écosystèmes innovants, administrations et organismes du secteur public, associations…) qui font face à des défis de plus en plus complexes, dans un contexte d’incertitude accrue.
                        S’adapter à un monde connecté, globalisé, accéléré, requiert de nouvelles approches. Pour réfléchir, décider et agir efficacement, l’expertise pure ne suffit plus : il devient nécessaire de considérer les interrelations de plusieurs secteurs d’activités, de plusieurs fonctions, de plusieurs cultures.
                        Votre réussite est notre affaire, nous sommes à vos cotés et nous vous conseillons dans vos démarches. Mettons à votre disposition une expertise avec des outils qui permettent de vous proposer des solutions en adéquation avec la demande de votre marché.
                        Nous développons aussi des applications métiers qui boosteront votre productivité.
                        À une époque de chocs et de crises, les méthodes et analyses classiques peuvent s’avérer inappropriées. Alors que des secteurs d’activité entiers sont sous pression, les organisations doivent plus que jamais innover, se différencier et se doter de l’agilité nécessaire pour créer et prévenir la surprise stratégique.
                    </p>
                </div>
                <div class="col-md-5 col-sm-6 about_client about_pages_client">
                    <img src="images/Logo1.png" alt="">
                </div>
                <!-- Our Features Area -->
                <section class="our_feature_area wow slideInUp">
                    <div class="container">
                        <div class="feature_row row ">
                            <div class="col-md-6 feature_img">
                                <img src="" alt="">
                            </div>
                            <div class="col-md-6 feature_content">
                                <div class="subtittle">
                                    <h2>NOTRE OBJECTIF</h2>
                                    <h5>IBP s'engage a:</h5>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="fa fa-wrench" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">Contribuer à développer votre stratégie</a>
                                        <p>
                                            Nous croyons qu’une stratégie ne se copie pas. Au-delà des benchmarks et de la reproduction des “bonnes pratiques” d’un secteur donné,
                                            au final pas toujours adaptées et, de surcroît, non différenciantes dans un contexte compétitif, I.B.P vous propose d’innover en vous dotant d’une solution unique, conçue pour vous et par vous, avec le support de consultants et d’experts à votre service.
                                            Ceux-ci vous apporteront une écoute attentive et un appui méthodologique, ils partageront leurs expériences vécues dans des circonstances analogues, ainsi que le fruit de la R&D de I.B.P dans les domaines de la stratégie et du management.
                                        </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="fa fa-rocket" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">Écouter et impliquer les parties prenantes </a>
                                        <p>
                                            La réussite ou l’échec de toute action au sein d’une organisation dépend, de manière cruciale, de facteurs humains : enjeux personnels et collectifs spécifiques qu’il faut savoir percevoir et intégrer, même lorsqu’ils ne sont pas exprimés,
                                            sensation d’être, ou de ne pas être respecté, enthousiasme ou résistance au changement, atmosphère de travail positive ou négative… Un Associé, personnellement impliqué à vos côtés,
                                            et des consultants recrutés pour leurs qualités interpersonnelles sont autant d’alliés de confiance pour que votre projet soit un succès.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Our Features Area -->

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
