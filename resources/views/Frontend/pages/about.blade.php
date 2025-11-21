@extends('Frontend.master')
@section('maincontent')
    <!--/#main-slider-->
    <section id="feature">
        <div class="container">
            <div class="wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown">
                <h1 style="color: #4e4e4e;text-align: center">About Us</h1>
            </div>
            <div class="wow fadeInDown animated" style="padding-top: 20px; text-align: justify; visibility: visible; animation-name: fadeInDown;">
                <p class="lead">{!! $setting->about_details !!}</p>
            </div>
        </div>
        <!--/.container-->
    </section>
@endsection
