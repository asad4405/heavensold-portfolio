<header id="header">
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand cus-logo" href="{{ url('/') }}">
                    <img src="{{ asset('public/Frontend/images') }}/logo.png" alt="logo" />
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right customSize">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->
</header>
