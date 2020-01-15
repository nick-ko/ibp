@extends('layouts.frontend')

@section('content')
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Resultat Sondage</h2>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Acceuil</a></li>
            <li><a href="#" class="active">Sondage</a></li>
        </ol>
    </section>
    <!-- End Banner area -->
    @include('includes.validator')
    <!-- blog area -->
    <section class="blog_all">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <?php
                        $q=DB::table('sondages')->where('id',$question)->first();
                        ?>

                        <div class="panel-heading">{{$q->question}}</div>

                        <div class="panel-body">
                            {!! $chart->html() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog area -->

    {!! Charts::scripts() !!}
    {!! $chart->script() !!}
@endsection
