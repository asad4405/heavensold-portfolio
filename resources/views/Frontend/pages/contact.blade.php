@extends('Frontend.master')
@section('maincontent')
    <section id="contact-info">
        <div class="center">
            <br>
            <h2>Contact Us</h2>
            <p class="lead">You can get in touch with us if you have any queries.</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                src="{{ $setting->map }}"></iframe>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Head Office</h2>
                                <b>{{ $setting->name }}</b>
                                <br> {{ $setting->address }}
                                <br>
                                <br>
                                <div style="font-size: 12px;">
                                    <span class="glyphicon glyphicon-phone-alt"></span>&nbsp;{{ $setting->phone_one }}, {{ $setting->phone_two }}
                                    <br>
                                    <span class="glyphicon glyphicon-print"></span>&nbsp;{{ $setting->phone_three }}
                                </div>
                            </div>
                            {{-- <h2>Contact Persons</h2> --}}
                            <div class="col-md-6">
                                {{-- <b>Mr. A. K. Azad</b>
                                <br> Managing Director --}}
                                <br>
                                <br>
                                {{-- <b>Lt. Col. Md. Delwar Hossain PSC (retd.)</b> --}}
                                <br> Group Deputy Managing Director
                                <br>
                                <div style="font-size: 12px;">
                                    <span class="glyphicon glyphicon-envelope"></span>&nbsp;{{ $setting->email }}
                                    <br>
                                    <span class="glyphicon glyphicon-envelope"></span>&nbsp;{{ $setting->phone_one }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- <hr>
                <div class="row" style="font-size: 12px;">
                    <div class="col-md-3">
                        <h4>Merchandising Contacts</h4>
                        <b>Ms. Shahnaj Rojee</b>
                        <br> General Manager (KOHL'S)
                        <br>
                        <span class="glyphicon glyphicon-envelope"></span>&nbsp;rojee@hameemgroup.com
                    </div>
                    <div class="col-md-3">
                        <h4>&nbsp;</h4>
                        <b>Mr. Enayet Hossain</b>
                        <br> General Manager (AEO)
                        <br>
                        <span class="glyphicon glyphicon-envelope"></span>&nbsp;enayet@hameemgroup.com
                    </div>
                    <div class="col-md-3">
                        <h4>&nbsp;</h4>
                        <b>Mr. Syed Abu Md Saleh</b>
                        <br> General Manager (ANF)
                        <br>
                        <span class="glyphicon glyphicon-envelope"></span>&nbsp;saleh@hameemgroup.com
                    </div>
                    <div class="col-md-3">
                        <h4>&nbsp;</h4>
                        <b>Mr. Md. Omar Ali Mollah</b>
                        <br> Manager (GAP)
                        <br>
                        <span class="glyphicon glyphicon-envelope"></span>&nbsp;omar@hameemgroup.com
                    </div>
                </div>
                <div class="row" style="font-size: 12px;">
                    <div class="col-md-3">
                        <h4>&nbsp;</h4>
                        <b>Mr. Nazmul Huda</b>
                        <br> Manager (GAP)
                        <br>
                        <span class="glyphicon glyphicon-envelope"></span>&nbsp;nazmul@hameemgroup.com
                    </div>

                    <div class="col-md-3">
                        <h4>&nbsp;</h4>
                        <b>Mr. Mizanur Rahman</b>
                        <br> Manager (H&amp;M)
                        <br>
                        <span class="glyphicon glyphicon-envelope"></span>&nbsp;mizanur@hameemgroup.com
                    </div>
                    <div class="col-md-3">
                        <h4>&nbsp;</h4>
                        <b>Mr. Tarik Aziz Rubel</b>
                        <br> Deputy General Manager (JCP)
                        <br>
                        <span class="glyphicon glyphicon-envelope"></span>&nbsp;rubel@hameemgroup.com
                    </div>
                    <div class="col-md-3">
                        <h4>&nbsp;</h4>
                        <b>Mr. Saiful Islam Shahin</b>
                        <br> Manager (VF Asia)
                        <br>
                        <span class="glyphicon glyphicon-envelope"></span>&nbsp;shahin@hameemgroup.com
                    </div>
                </div> --}}
            </div>
        </div>
        <style>
            .gmap-area{
                background-image: url("{{ asset('public/Frontend/images/map.jpg') }}");
                background-position: 0 0;
                background-repeat: no-repeat;
                background-size: cover;
                padding: 70px 0;
            }
        </style>
    </section>
@endsection
