@extends('layouts.frontend')

@section('content')

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>{{$actualite->title}}</h2>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Acceuil</a></li>
            <li><a href="#" class="active">Actualité</a></li>
        </ol>
    </section>

    <!-- Building Construction Area -->
    <section class="building_construction_area">
        <div class="container">
            <div class="row building_construction_row">
                <div class="col-sm-8 constructing_laft">
                    <h2>{{$actualite->title}}</h2>
                    <img src="{{URL::to($actualite->image)}}" alt="">
                    <div class="col-md-6 ipsum">
                        {{$actualite->description}}
                    </div>
                    <div class="col-md-6 ipsum_img"><img src="images/construction-2.jpg" alt=""></div>
                    <div class="col-md-12 p0">
                    </div>
                </div>
                <div class="col-sm-4 constructing_right">
                    <h3>Autres actualite</h3>
                    <br>
                    @if(count($others)>0)
                    <ul class="painting">
                        @foreach($others as $other)
                        <li><a href="{{url('/details-actualite/'.$other->id)}}"><img src="{{URL::to($other->image)}}" alt="" style="width: 75px; height: 75px; border-radius: 6px;">    {{$other->title}}</a></li>
                        @endforeach
                    </ul>
                    @else
                        <p>pas d'autres actualite</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- End Building Construction Area -->
@endsection
