@extends('layouts.frontend')

@section('content')


    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>{{$article->title}}</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Acceuil</a></li>
            <li><a href="#" class="active">Blog</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- blog area -->
    <section class="blog_all">
        <div class="container">
            <div class="row m0 blog_row">
                <div class="col-sm-8 main_blog">
                    <img src="{{URL::to($article->image)}}" alt="">
                    <div class="col-xs-1 p0">
                        <div class="blog_date">
                            <a href="#">18</a>
                            <a href="#">Oct</a>
                        </div>
                    </div>
                    <div class="col-xs-11 blog_content">
                        <a class="blog_heading" href="#">{{$article->title}}</a>
                        <a class="blog_admin" href="#"><i class="fa fa-user" aria-hidden="true"></i>IBP</a>
                        <!--ul class="like_share">
                            <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>3</a></li>
                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>10</a></li>
                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul-->
                        {!! $article->content !!}
                        <br>
                    </div>
                    <div class="client_text">

                    </div>
                    <div class="comment_area">
                        <h3>{{count($comments)}} Commentaire</h3>
                        @foreach($comments as $comment)
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/testimonial-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a class="media-heading" href="#">{{$comment->name}}</a>
                                <h5>{{$comment->created_at}}</h5>
                                <p>{{$comment->comment}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="post_comment">
                        <h3>Commenter</h3>
                        <form class="comment_box" action="{{url('/comment')}}" method="post">
                            @csrf
                            <div class="col-md-6">
                                <h4>Nom</h4>
                                <input type="text" name="name" class="form-control input_box" id="fullname" placeholder="" required>
                            </div>
                            <div class="col-md-6">
                                <h4>Email</h4>
                                <input type="text" name="email" class="form-control input_box" id="email" placeholder="" required>
                                <input type="hidden" name="article" value="{{$article->id}}">
                            </div>
                            <div class="col-md-12">
                                <h4>Votre Commentaire</h4>
                                <textarea class="form-control input_box" name="comment" placeholder="" required></textarea>
                                <button type="submit">Commenter</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4 widget_area">

                    <div class="resent">
                        <h3>ARTICLE RECENT</h3>
                        @if(count($others)>0)
                           @foreach($others as $other)
                        <div class="media">
                            <div class="media-left">
                                <a href="{{URL::to('/blog/article/'.$other->id)}}">
                                    <img class="media-object" src="{{URL::to($other->image)}}" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="{{URL::to('/blog/article/'.$other->id)}}">
                                    {{$other->title}}.</a>
                                <h6>{{$other->created_at}}</h6>
                            </div>
                        </div>
                            @endforeach
                            @else
                            <p> PAS AUTRE ARTICLE</p>
                        @endif


                    </div>
                    <!--div class="resent">
                        <h3>CATEGORIES</h3>
                        <ul class="architecture">
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Construction</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Architecture</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Building</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Design</a></li>
                        </ul>
                    </div-->

                </div>
            </div>
        </div>
    </section>
    <!-- End blog area -->
@endsection
