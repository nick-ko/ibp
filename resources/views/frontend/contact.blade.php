@extends('layouts.frontend')

@section('content')

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Nous Contacter</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Acceuil</a></li>
            <li><a href="#" class="active">Contact</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>Info</h2>

                    <div class="location">
                        {!! $data->content !!}
                    </div>
                </div>
                <div class="col-sm-6 contact_info send_message">
                    <h2>Envoyer nous un message</h2>
                    <form class="form-inline contact_box">
                        <input type="text" class="form-control input_box" placeholder="Votre Nom *" required>
                        <input type="email" class="form-control input_box" placeholder="Votre Email *" required>
                        <input type="text" class="form-control input_box" placeholder="Sujet"  required>
                        <textarea class="form-control input_box" placeholder="Message"></textarea>
                        <button type="submit" class="btn btn-default" style="color: white">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

    <!-- Map -->
    <div class="contact_map">
        <iframe src="https://www.google.com/maps/d/embed?mid=13sCynpCJmi-0N0VqAVcA5JIUUCapx2do" width="640" height="480"></iframe>
    </div>
    <!-- End Map -->
@endsection
