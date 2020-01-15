@extends('layouts.frontend')

@section('content')

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Blog</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Acceuil</a></li>
            <li><a href="#" class="active">Blog </a></li>
        </ol>
    </section>
    <!-- End Banner area -->
    <!-- blog-2 area -->
    <section class="blog_tow_area">
        <div class="container">
            <div class="row blog_tow_row">
                @foreach($articles as $article)
                    <div class="col-md-4 col-sm-6 wow bounceInDown">
                        <div class="renovation">
                            <img src="{{URL::to($article->image)}}" alt="" >
                            <div class="renovation_content">
                                <a class="tittle" href="{{URL::to('/blog/article/'.$article->id)}}">{{$article->title}}</a>
                                <div class="date_comment">
                                    <a ><i class="fa fa-calendar" aria-hidden="true"></i>{{$article->created_at}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End blog-2 area -->
@endsection
