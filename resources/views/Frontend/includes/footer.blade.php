<section id="bottom">
    <div class="container wow fadeInDown" style="
              padding-top: 20px;
              padding-bottom: 20px;
              visibility: hidden;
              animation-duration: 1000ms;
              animation-delay: 600ms;
              animation-name: none;
            " data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="widget">
                    <h3>About Us</h3>
                    {{$setting->footer_text}}
                </div>
            </div>
            <!--/.col-md-3-->

            <div class="col-md-4 col-sm-6">
                <div class="widget">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <!--/.col-md-3-->

            <div class="col-md-4 col-sm-6">
                <div class="widget">
                    <h3>Head Office</h3>
                    <address>
                        <strong>{{ $setting->name }}</strong><br />
                        {{$setting->address}}<br />
                        <div style="font-size: 12px">
                            <span class="glyphicon glyphicon-phone-alt"></span>&nbsp;{{ $setting->phone_one }},
                            {{ $setting->phone_two }}
                            <br />
                            <span class="glyphicon glyphicon-print"></span>&nbsp;{{ $setting->phone_three }}
                        </div>
                    </address>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                © {{ date('Y') }}
                {{$setting->name}}. All Rights Reserved | Developed by <a target="_blank" href="http://danpite.tech"> Danpite Tech</a>
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
