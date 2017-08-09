<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--@hasSection('explore_reports')--}}
    <meta http-equiv="refresh" content="30">
    {{--@endif--}}

    <title>@yield('title')</title>

    <!-- Fonts
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>-->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/css.css')}}" rel="stylesheet">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">


<!-- Styles
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet">--}}
        -->

    @hasSection('submit_report')
    <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">
    @endif

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout" data-base_url={{url('/')}}>
<header>
    @hasSection('welcome')
    <div class="container-fluid" align="right">
        <img class="img-responsive" alt="uReporter" src="{{asset('img/uReporterLogo.png')}}">
    </div>
    @endif
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    uReporter
                </a>
            </div>


            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <ul class="nav navbar-nav">
                    @hasSection('welcome')
                    {!! '<li class="active">' !!}
                    @else
                        {!! '<li>' !!}
                    @endif
                    <a href="{{ url('/') }}">
                        Welcome
                    </a>
                    </li>
                    @hasSection('submit_report')
                    {!! '<li class="active">' !!}
                    @else
                        {!! '<li>' !!}
                    @endif
                    <a href="{{ url('/report/create') }}">
                        Submit Report
                    </a>
                    </li>
                    @hasSection('tutorial')
                    {!! '<li class="active">' !!}
                    @else
                        {!! '<li>' !!}
                    @endif
                    <a href="{{ url('tutorial') }}">
                        Tutorial
                    </a>
                    </li>
                    @hasSection('explore_reports')
                    {!! '<li class="active">' !!}
                    @else
                        {!! '<li>' !!}
                    @endif
                    <a href="{{ url('/report') }}">
                        Explore Reports
                    </a>
                    </li>
                    @hasSection('faqs')
                    {!! '<li class="active">' !!}
                    @else
                        {!! '<li>' !!}
                    @endif
                    <a href="#faqs">
                        FAQs
                    </a>
                    </li>
                    @hasSection('about_us')
                    {!! '<li class="active">' !!}
                    @else
                        {!! '<li>' !!}
                    @endif
                    <a href="{{ url('/about_us') }}">
                        About Us
                    </a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        @hasSection('register')
                        {!! '<li class="active">' !!}
                        @else
                            {!! '<li>' !!}
                        @endif
                        <a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span>Register</a></li>
                        @hasSection('login')
                        {!! '<li class="active">' !!}
                        @else
                            {!! '<li>' !!}
                        @endif
                        <a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                    @else
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->full_name }}<span class="glyphicon glyphicon-user">
								</span> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                @hasSection('view_profile')
                                {!! '<li class="active">' !!}
                                @else
                                    {!! '<li>' !!}
                                @endif
                                <a href="{{url('/home/'.Auth::id())}}">
                                    My Profile
                                </a>
                                </li>
                                @hasSection('update_profile')
                                {!! '<li class="active">' !!}
                                @else
                                    {!! '<li>' !!}
                                @endif
                                <a href="{{url('update_profile')}}">
                                    Update Profile
                                </a>
                                </li>
                                @hasSection('home')
                                {!! '<li class="active">' !!}
                                @else
                                    {!! '<li>' !!}
                                @endif
                                <a href="{{url('/home')}}">
                                    My Reports
                                </a>
                                </li>
                                @if (Auth::user()->isReviewer())
                                    @hasSection('explore_reporters')
                                    {!! '<li class="active">' !!}
                                @else
                                    {!! '<li>' !!}
                                @endif
                                <a href="{{url('explore_reporters')}}">
                                    Explore Reporters
                                </a>
                                </li>
                                @endif
                                @if (Auth::user()->isAdmin())
                                    @hasSection('admin')
                                    {!! '<li class="active">' !!}
                                @else
                                    {!! '<li>' !!}
                                @endif
                                <a href="{{url('admin')}}">
                                    Administration
                                </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        <li><a href="{{ url('/logout') }}">Log Out<span class="glyphicon glyphicon-log-out"></span></a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content')
<div class="container">
    <footer class="footer">
        <p align="right">
            <strong>
                <em>
                    <span class="glyphicon glyphicon-copyright-mark">
                    </span> Team uReporter <?php echo date("Y");?>
                </em>
            </strong>
        </p>
    </footer>
</div>
<!-- JavaScripts
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}-->

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

@hasSection('submit_report')
    <script>
        function changeSubType(reportType) {
            var base_url = $('body').attr('data-base_url');
            var reportSubType = document.getElementById("report_subtype");
            var subTypesLength = reportSubType.getElementsByTagName("option").length;
            for (var i = 0; i < subTypesLength; i++) {
                reportSubType.removeChild(reportSubType.lastChild);
            }

            $.get(base_url + '/subtypes/' + reportType, function (response) {
                var subTypes = response.split(",");
                for (var i = 0; i < subTypes.length; i++) {
                    var option = document.createElement("option");
                    option.value = subTypes[i];
                    option.text = subTypes[i];
                    reportSubType.appendChild(option);
                }
            });
        }
    </script>
@endif

@hasSection('explore_reports')
<script>
    function changeSubType(reportType) {
        var base_url = $('body').attr('data-base_url');
        var reportSubType = document.getElementById("report_subtype");
        var subTypesLength = reportSubType.getElementsByTagName("option").length;
        for (var i = 0; i < subTypesLength; i++) {
            reportSubType.removeChild(reportSubType.lastChild);
        }

        $.get(base_url + '/subtypes/' + reportType, function (response) {
            var subTypes = response.split(",");
            for (var i = 0; i < subTypes.length; i++) {
                var option = document.createElement("option");
                option.value = subTypes[i];
                option.text = subTypes[i];
                reportSubType.appendChild(option);
            }
        });
    }
</script>
@endif

</body>
</html>
