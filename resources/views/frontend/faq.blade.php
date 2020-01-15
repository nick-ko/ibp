@extends('layouts.frontend')

@section('content')
    <style>
        .hr{margin:5px 0;}
        .accordion-group{margin-bottom:10px;border-radius:0;}
        .accordion-toggle{
            background:rgb(248, 251, 252);
        }
        .accordion-toggle:hover{
            text-decoration: none;
        }
        .accordion-heading .accordion-toggle {
            display: block;
            padding: 8px 15px;
        }
        .selectStyle{
            width:46%; float: left; margin-right: 8%;
        }
        .accordion-group{
            margin-bottom:20px;
        }
    </style>
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Question frequemment posée</h2>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Acceuil</a></li>
            <li><a href="#" class="active">faq</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- About Us Area -->
    <section class="what_we_area row">
        <div class="container">
            <div class="row construction_iner">
                <div class="container ">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle"  data-toggle="collapse" data-parent="toggle" href="#collapseOne">
                                            <i class="fa fa-minus"></i>  Où est situé IBP ?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, voluptas, magnam, officiis, veritatis rerum amet enim in repellendus quae reprehenderit aut ipsum corporis dolore maxime cumque labore incidunt ad iusto maiores error doloribus. Similique, sequi, laboriosam voluptatum omnis nobis incidunt exercitationem facilis voluptatibus maxime harum accusantium tempore magni voluptate qui velit fugit iste quis aut possimus a praesentium ad in quia. Necessitatibus, excepturi, iste, quisquam expedita ratione quibusdam in ex nobis omnis odit voluptates veritatis recusandae sit. Adipisci perspiciatis laudantium vitae quaerat. Porro, mollitia, sequi cupiditate ratione cumque aut laboriosam fuga et nostrum officia. Expedita, vitae officia recusandae eius assumenda.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="toggle" href="#collapseTwo">
                                            <i class="fa fa-minus"></i> Property Type
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, voluptas, magnam, officiis, veritatis rerum amet enim in repellendus quae reprehenderit aut ipsum corporis dolore maxime cumque labore incidunt ad iusto maiores error doloribus. Similique, sequi, laboriosam voluptatum omnis nobis incidunt exercitationem facilis voluptatibus maxime harum accusantium tempore magni voluptate qui velit fugit iste quis aut possimus a praesentium ad in quia. Necessitatibus, excepturi, iste, quisquam expedita ratione quibusdam in ex nobis omnis odit voluptates veritatis recusandae sit. Adipisci perspiciatis laudantium vitae quaerat. Porro, mollitia, sequi cupiditate ratione cumque aut laboriosam fuga et nostrum officia. Expedita, vitae officia recusandae eius assumenda.


                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="toggle" href="#collapseThree">
                                            <i class="fa fa-minus"></i> Property Budget
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, voluptas, magnam, officiis, veritatis rerum amet enim in repellendus quae reprehenderit aut ipsum corporis dolore maxime cumque labore incidunt ad iusto maiores error doloribus. Similique, sequi, laboriosam voluptatum omnis nobis incidunt exercitationem facilis voluptatibus maxime harum accusantium tempore magni voluptate qui velit fugit iste quis aut possimus a praesentium ad in quia. Necessitatibus, excepturi, iste, quisquam expedita ratione quibusdam in ex nobis omnis odit voluptates veritatis recusandae sit. Adipisci perspiciatis laudantium vitae quaerat. Porro, mollitia, sequi cupiditate ratione cumque aut laboriosam fuga et nostrum officia. Expedita, vitae officia recusandae eius assumenda.


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->

@endsection
