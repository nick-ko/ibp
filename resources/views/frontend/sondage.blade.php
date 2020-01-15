@extends('layouts.frontend')

@section('content')


    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Sondage</h2>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Acceuil</a></li>
            <li><a href="#" class="active">Sondage</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- About Us Area -->
    <section class="what_we_area row">

        <div class="container">
            @include('includes.validator')
            <div class="row construction_iner">
                @foreach($questions as $q)
                <div class="col-md-4 col-sm-6 construction wow zoomIn">
                    <div class="cns-content">
                        <i class="fa fa-question" aria-hidden="true"></i>
                        <a>{{$q->question}}</a>
                        <br>
                        <a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#largeModal" style="color: white">Participer au sondage</a>
                    </div>
                </div>
                <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                            <form action="{{url('/do-sondage')}}" method="post">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="largeModalLabel">Sondage</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">{{$q->question}}</h3>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label for="question" class="control-label mb-1">Votre Email</label>
                                                    <input type="email" id="question" name="email" class="form-control" required placeholder="Votre Email">
                                                </div>
                                                <div class="form-group text-center">
                                                    <input type="hidden" name="question" value="{{$q->id}}">

                                                    <label for="question" class="control-label mb-1">OUI</label> :
                                                    <input type="radio" name="answer" id="question" required value="pour">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <label for="question" class="control-label mb-1">NON</label> :
                                                    <input type="radio" name="answer" id="question" required value="contre">
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
