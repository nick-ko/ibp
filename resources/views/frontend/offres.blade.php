@extends('layouts.frontend')

@section('content')


    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Offres</h2>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Acceuil</a></li>
            <li><a href="#" class="active">offres</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- About Us Area -->
    <section class="what_we_area row">

        <div class="container">
            @include('includes.validator')

            <div class="row construction_iner">
                @foreach($offres as $offre)
                    <div class="col-md-4 col-sm-6 construction wow zoomIn">
                        <div class="cns-content">
                            <i class="fa fa-question" aria-hidden="true"></i>
                            <a>{{$offre->poste}} <br> - <br>
                                {{$offre->type}}
                            </a>
                            <h4>Description : {{$offre->description}}</h4>
                            <br>
                            <a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#largeModal" style="color: white">Postuler</a>
                        </div>
                    </div>
                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                            <form action="{{url('/save-cv')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="largeModalLabel">Nos offres</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">{{$offre->poste}}</h3>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label for="question" class="control-label mb-1">Votre Nom</label>
                                                    <input type="text" id="question" name="name" class="form-control" required placeholder="Votre Nom">
                                                </div>
                                                <div class="form-group">
                                                    <label for="question" class="control-label mb-1">Votre CV</label>
                                                    <input type="file" id="question" name="cv" class="form-control" required placeholder="Votre Cv">
                                                    <input type="hidden" name="offre" value="{{$offre->id}}">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-primary">Valider</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End About Us Area -->

@endsection
