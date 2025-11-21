@extends('Frontend.master')
@section('maincontent')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class=""></li>
                <li data-target="#main-slider" data-slide-to="1" class="active"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
                <li data-target="#main-slider" data-slide-to="3"></li>
                <li data-target="#main-slider" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($sliders as $key => $value)
                    <div class="item {{ $key == 0 ? 'active' : '' }}"
                        style="background-image: url('{{ asset($value->image) }}')">

                        <div class="container">
                            <div class="row slide-margin">
                                <div class="col-sm-6">
                                    <div class="carousel-content" style="background: rgba(0, 0, 0, 0.7); padding: 10px">

                                        <h1 class="animation animated-item-1">
                                            {{ $value->title }}
                                        </h1>

                                        <h2 class="animation animated-item-2">
                                            {{ $value->short_details }}
                                        </h2>

                                        @if (!empty($value->btn_link))
                                            <a class="btn-slide animation animated-item-3" href="{{ $value->btn_link }}">
                                                {{ $value->btn_name }}
                                            </a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->
    <section id="feature">
        <div class="container">
            <div class="wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown">
                <h1 style="color: #4e4e4e">Welcome to {{ $setting->name }}</h1>
            </div>
            <div class="wow fadeInDown animated" style="padding-top: 20px; text-align: justify; visibility: visible; animation-name: fadeInDown;">
                <p class="lead">{!! $setting->about_details !!}</p>
            </div>
            <hr />
            <div class="row wow fadeInDown" style="visibility: hidden; animation-name: none">
                @foreach ($services as $value)
                    <div class="col-md-4">
                        <div class="pricing-area text-center">
                            <div class="plan price-four wow fadeInDown" style="visibility: hidden; animation-name: none">
                                <ul>
                                    <li class="heading-four">
                                        <h1>{{ $value->title }}</h1>
                                    </li>
                                    @if ($value->name_one)
                                        <li>{{ $value->name_one }}</li>
                                    @endif
                                    @if ($value->name_two)
                                        <li>{{ $value->name_two }}</li>
                                    @endif
                                    @if ($value->name_three)
                                        <li>{{ $value->name_three }}</li>
                                    @endif
                                    @if ($value->name_four)
                                        <li>{{ $value->name_four }}</li>
                                    @endif
                                    @if ($value->name_five)
                                        <li>{{ $value->name_five }}</li>
                                    @endif
                                    @if ($value->name_six)
                                        <li>{{ $value->name_six }}</li>
                                    @endif
                                    @if ($value->name_seven)
                                        <li>{{ $value->name_seven }}</li>
                                    @endif
                                    @if ($value->name_eight)
                                        <li>{{ $value->name_eight }}</li>
                                    @endif
                                    @if ($value->name_nine)
                                        <li>{{ $value->name_nine }}</li>
                                    @endif
                                    @if ($value->name_ten)
                                        <li>{{ $value->name_ten }}</li>
                                    @endif
                                    @if ($value->youtube_link)
                                        <li>
                                            <iframe width="100%" height="215"
                                                src="https://www.youtube.com/embed/{{ $value->youtube_link }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </li>
                                    @endif
                                    <li class="plan-action">
                                        <a href="#" class="btn btn-primary">&nbsp;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#feature-->
    <section id="services" class="service-item">
        <div class="container">
            <div class="center wow fadeInDown" style="visibility: hidden; animation-name: none">
                <h2>Our Industries</h2>
                <p class="lead">
                    Heaven Soul Group has ventured into many industries in Bangladesh after it's inception.
                    <br /> It has become one of the fastest growing Group of Company in the country.
                </p>
            </div>
            <div class="row">
                @foreach ($industries as $value)
                    <div class="col-sm-6 col-md-4">
                        <div class="media services-wrap wow fadeInDown" style="visibility: hidden; animation-name: none">
                            <div class="pull-left">
                                <img class="img-responsive" src="{{ asset('public/Frontend/images') }}/services/woven-icon.png"
                                    width="80" height="80" />
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a>{{ $value->title }}</a>
                                </h3>
                                <p>
                                    {{ $value->short_details }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" style="
                                                visibility: hidden;
                                                animation-duration: 1000ms;
                                                animation-delay: 600ms;
                                                animation-name: none;
                                              ">
                        {{-- <div class="media-body text-center">
                            <h2>Achivements</h2>
                            <span class="glyphicon glyphicon-certificate"></span>&nbsp;Annual Winner of
                            Strategic Quality Assurance Dept.
                            KOHLS. 2010.
                            <br />
                            <span class="glyphicon glyphicon-certificate"></span>&nbsp;Annual Winner of
                            Strategic Quality Assurance Dept.
                            KOHLS. 2009.
                            <br />
                            <span class="glyphicon glyphicon-certificate"></span>&nbsp;Technical Design
                            Certification. KOHLS. 2011.
                            <br />
                            <span class="glyphicon glyphicon-certificate"></span>&nbsp;Technical Performance
                            Award. JCPenny. 2009.
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(".wrap-all").mousemove(function (event) {
            var containerWidth = $(this).innerWidth(),
                containerHeight = $(this).innerHeight(),
                mousePositionX = (event.pageX / containerWidth) * 100,
                mousePositionY = (event.pageY / containerHeight) * 100;

            $(this).css(
                "background-position",
                mousePositionX + "%" + " " + mousePositionY + "%"
            );
        });
    </script>
@endsection
