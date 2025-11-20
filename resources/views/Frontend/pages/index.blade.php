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
                <h1 style="color: #4e4e4e">Welcome to Ha-Meem Group</h1>
            </div>
            <div class="wow fadeInDown animated" style="
                        padding-top: 20px;
                        text-align: justify;
                        visibility: visible;
                        animation-name: fadeInDown;
                      ">
                <p class="lead">
                    Ha-Meem Group, a Bangladeshi clothing manufacturer, is leading supplier of readymade
                    garments and denim fabric in the world. We are one of the top clothing companies in
                    Bangladesh. The company produces some of the most fashionable denim fabrics and garment
                    products and owns one of the most comprehensive and resourceful manufacturing facilities in
                    Bangladesh.
                    <br />
                    <br /> Ha-Meem Group has earned name and fame both at home and abroad as one of the top
                    clothing companies in Bangladesh. The continuous growth of this group is moving forward hand
                    on hand with the industrialization of the
                    home country Bangladesh. Moreover we as a Bangladeshi clothing manufacturer have been
                    contributing immensely in the financial growth of the nation.
                    <br />
                    <br /> Ha‐Meem Group, one of the top clothing companies in Bangladesh exporting to USA and
                    Europe for a long time. Because of our successful history with the world leading customers
                    and buyers, we are the most valued and well
                    reputed Bangladeshi clothing manufacturer.
                    <br />
                    <br /> Company produces 7 million pcs of woven garments per month with the assortment of
                    infant to adult in men and women. Today Ha-Meem Group employs around 50,000 workers and the
                    company is equipped with 26 garments factories,
                    a unique Denim mill, Sweater factory, Embroidery and Printing factory, Carton factory, Poly
                    bag industry, Label factory, Jute mill, Chemical formulation plant, Tea Gardens, Transport
                    company, News Channel and a national daily
                    Newspaper. Own C &amp; F office in every Bangladeshi port gives privilege of quick clearing
                    and forwarding support.
                    <br />
                    <br /> Ha-Meem Knit will start within a year. It will have capacity of 10 tons composite
                    knit which will be increased to 50 tons in phases. It will make all types of knit products
                    like tops &amp; bottoms for man, women and
                    children.
                </p>
            </div>
            <hr />
            <div class="row wow fadeInDown" style="visibility: hidden; animation-name: none">
                <div class="col-md-4">
                    <div class="pricing-area text-center">
                        <div class="plan price-four wow fadeInDown" style="visibility: hidden; animation-name: none">
                            <ul>
                                <li class="heading-four">
                                    <h1>Our Strength</h1>
                                </li>
                                <li>
                                    550 MILLION USD TURNOVER
                                    <br /> (woven+denim+sweater)
                                </li>
                                <li>7 MILLION PCS/MONTH PRODUCTION</li>
                                <li>7 WASHING PLANTS</li>
                                <li>300 PRODUCTION LINES</li>
                                <li>LABEL / EMBROIDERY FACILITY</li>
                                <li>PACKAGING INDUSTRY</li>
                                <li>TRANSPORT FACILITIES</li>
                                <li>PRINTING OF GARMENTS &amp; PAPERS</li>
                                <li>TEA GARDEN</li>
                                <li class="plan-action">
                                    <a href="#" class="btn btn-primary">&nbsp;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-area text-center">
                        <div class="plan price-four wow fadeInDown" style="visibility: hidden; animation-name: none">
                            <ul>
                                <li class="heading-four">
                                    <h1>Major Products</h1>
                                </li>
                                <li>
                                    ALL TYPES OF BOTTOMS AND TOPS
                                    <br /> (Hi-Fashion with critical washes)
                                </li>
                                <li>CRITICAL CARGOS</li>
                                <li>HI-FASHION DENIM JEANS</li>
                                <li>BASIC AND HIFASHION WASHES</li>
                                <li>WRINKLE FREE</li>
                                <li>OVER DYEING OF GARMENTS</li>
                                <li>LASER FINISH / 3D WHISKER</li>
                                <li>MENS SHIRTS</li>
                                <li>DRESS PANTS</li>
                                <li>OUTWEAR / JACKETS FACILITY</li>
                                <li class="plan-action">
                                    <a href="#" class="btn btn-primary">&nbsp;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-area text-center">
                        <div class="plan price-four wow fadeInDown" style="visibility: hidden; animation-name: none">
                            <ul>
                                <li class="heading-four">
                                    <h1>Ha-Meem at a glance</h1>
                                </li>
                                <li>
                                    <video id="example_video_1" controls="" preload="auto" poster="img/video-preview.jpg"
                                        data-setup='{"example_option":true}' width="" height="200">
                                        <source src="video/Ha-Meem-Video-Presentation.mp4" type="video/mp4" />
                                        <source src="video/Ha-Meem-Video-Presentation.webm" type="video/webm" />
                                        <source src="video/Ha-Meem-Video-Presentation.ogv" type="video/ogg" />
                                        <p class="vjs-no-js">
                                            To view this video please enable JavaScript, and
                                            consider upgrading to a web browser that
                                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports
                                                HTML5 video</a>
                                        </p>
                                    </video>
                                </li>
                                <li class="plan-action">
                                    <a href="#" class="btn btn-primary">&nbsp;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
                    Ha-Meem Group has ventured into many industries in Bangladesh after it's inception.
                    <br /> It has become one of the fastest growing Group of Company in the country.
                </p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" style="visibility: hidden; animation-name: none">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('public/Frontend/images') }}/services/woven-icon.png"
                                width="80" height="80" />
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="woven.html">Woven</a>
                            </h3>
                            <p>
                                Our woven factories are equipped with 300 production lines in six different
                                location.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" style="visibility: hidden; animation-name: none">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('public/Frontend/images') }}/services/denim-icon.png"
                                width="80" height="80" />
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="denim-mill.html">Denim Mill</a>
                            </h3>
                            <p>
                                A dream project of Ha‐Meem group located in a serene surrounding of 100 acres.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" style="visibility: hidden; animation-name: none">
                        <div class="pull-left">
                            <img class="img-responsive"
                                src="{{ asset('public/Frontend/images') }}/services/wash-icon.png" />
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="laundry.html">Laundry</a>
                            </h3>
                            <p>
                                All the washing plants have dry process capability with required equipment.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" style="visibility: hidden; animation-name: none">
                        <div class="pull-left">
                            <img class="img-responsive"
                                src="{{ asset('public/Frontend/images') }}/services/sweater-icon.png" />
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="sweater.html">Sweater</a>
                            </h3>
                            <p>
                                Two Sweater Units consisting of 400 Jacquard Stall (German) machines.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" style="visibility: hidden; animation-name: none">
                        <div class="pull-left">
                            <img class="img-responsive"
                                src="{{ asset('public/Frontend/images') }}/services/jute-mill-icon.png" />
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><a href="#">Jute Mill</a></h3>
                            <p>
                                M.H. Jute Mills Ltd., one of the growing industry of Ha-Meem Group.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" style="visibility: hidden; animation-name: none">
                        <div class="pull-left">
                            <img class="img-responsive"
                                src="{{ asset('public/Frontend/images') }}/services/design-icon.png" />
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="design.html">Design</a>
                            </h3>
                            <p>
                                Ha‐Meem has a resourceful design team lead by experienced designers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" style="visibility: hidden; animation-name: none">
                        <div class="pull-left">
                            <img class="img-responsive"
                                src="{{ asset('public/Frontend/images') }}/services/newspaper-icon.png" />
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="http://www.samakal.net/" target="_blank">Newspaper</a>
                            </h3>
                            <p>
                                Samakal, a popular &amp; widely circulated national daily
                                newspaper in Bangladesh.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" style="visibility: hidden; animation-name: none">
                        <div class="pull-left">
                            <img class="img-responsive"
                                src="{{ asset('public/Frontend/images') }}/services/channel-icon.png" />
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="http://www.channel24bd.tv/" target="_blank">News Channel</a>
                            </h3>
                            <p>
                                Channel-24, a very popular news channel covering news all
                                over Bangladesh.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" style="visibility: hidden; animation-name: none">
                        <div class="pull-left">
                            <img class="img-responsive"
                                src="{{ asset('public/Frontend/images') }}/services/ancillary-icon.png" />
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="ancillary.html">Ancillary</a>
                            </h3>
                            <p>
                                Embroidery Factory, Printing Factory, Carton Factory, Poly Bag Industry, Label
                                Factory.
                            </p>
                        </div>
                    </div>
                </div>
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
                        <div class="media-body text-center">
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
                        </div>
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
