@extends('layouts.frontend')

@section('content')


    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Actualité</h2>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Acceuil</a></li>
            <li><a href="#" class="active">Actualité</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <ul class="timeline">
                @foreach($actualites as $actualite)
                <li>
                    <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <img class="img-responsive" src="{{URL::to($actualite->image)}}" />
                        </div>
                        <div class="timeline-body">
                            <p>{{$actualite->description}}</p>
                        </div>

                        <div class="timeline-footer">
                            <br>
                            <a href="{{url('/details-actualite/'.$actualite->id)}}" class="text-center">{{$actualite->title}}</a>
                            <br>
                        </div>
                    </div>
                </li>
                @endforeach
                <!--li  class="timeline-inverted"-->
                <li class="clearfix" style="float: none;"></li>
            </ul>
        </div>
    </section>
    <!-- End About Us Area -->


@endsection
