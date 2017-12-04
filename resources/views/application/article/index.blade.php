@extends('layouts.app')

@section('content')
    <div class="dashboard-bth dashboard-b2">
        <div class="container">
            <div class="row">

                <div class="col-offset-3 col-md-6 col-xs-12 col-offset-3 content">
                    <div class="work-large">
                        <h2>I am a Dragon</h2>
                        <p class="date">12th, September, 2017</p>
                        <div class="image-box">
                        </div>
                        <p>A great illustration project that I worked on for the restaurant, Elemento owned by Mr, Kamran Haqqi.
                            <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passag.</p>
                    </div>
                    <ul class="cbox">
                        <li><a href="#"><img src="images\comment.png"></a></li>
                        <li><a href="#"><img src="images\reply.png"></a></li>
                        <li><a href="#"><img src="images\fblike.png"></a></li>
                    </ul>
                    <div class="content-control">
                        <a href="#" class="comment">Comment</a>
                    </div>

                    <div class="content-control">
                        <textarea class="form-control" rows="10"></textarea>
                    </div>

                    <div class="content-control">
                        <a href="#" class="more-back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')