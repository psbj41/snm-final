<!DOCTYPE html>
<html lang="en-us" class="no-js">

<head>
    <meta charset="utf-8">
    <title>SNM Mumbai</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.png') }}">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend/img/favicon-retina-ipad.png') }}">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/img/favicon-retina-iphone.png') }}">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/img/favicon-standard-ipad.png') }}">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend/img/favicon-standard-iphone.png') }}">

    <!-- ============== Resources style ============== -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style-minimal-flat.css') }}" />

    <!-- Modernizr runs quickly on page load for detecting features -->
    <script src="{{ asset('frontend/js/modernizr.custom.js') }}"></script>
</head>

<body>

    <!-- Loading overlay -->
    <div id="loading" class="dark-back">
        <div class="loading-bar"></div>
        <span class="loading-text opacity-0">Please wait...</span>
    </div>

    <!-- Canvas for particles animation -->
    <div id="particles-js"></div>

    <!-- Informations bar on top of the screen -->
    <div class="info-bar bar-intro opacity-0">

        <div class="row">

            <div class="col-xs-12 col-sm-6 col-lg-6 info-bar-left">

                <p>Grand Opening in <span id="countdown"></span></p>

            </div>

            <div class="col-xs-12 col-sm-6 col-lg-6 info-bar-right">
                <a href="{{ route('login') }}" style="color: black; font-weight:900">Log-in | </a>
                <a href="{{ route('register.index') }}" style="color: black; font-weight:900">Register</a>
            </div>
        </div>
    </div>
    <!-- END - Informations bar on top of the screen -->

    <style>
        .thought{
            background-color: #0193FF;
            position: absolute;
            float: left;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 5;
            padding: 15px;
            width: 90%;
            /* border-radius: 10px; */
            margin-top: 20px;
            color: rgba(255, 255, 255, 0.952);
        }
        .para{
            text-align: justify;
            color: white;
        }
        </style>
    <div class="thought" style="text-align: center">
        <img width="150px" src="{{asset('backend/assets/images/logot.png')}}" alt="" srcset="">
        <p class="para">
            {{$thoughts}}
        </p>
    </div>

    <!-- //////////////////////\\\\\\\\\\\\\\\\\\\\\\ -->
    <!-- ********** List of jQuery Plugins ********** -->
    <!-- \\\\\\\\\\\\\\\\\\\\\\////////////////////// -->

    <!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easings.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

    <!-- SlitSlider plugin -->
    <script src="{{ asset('frontend/js/jquery.ba-cond.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slitslider.js') }}"></script>

    <!-- Newsletter plugin -->
    <script src="{{ asset('frontend/js/notifyMe.js') }}"></script>

    <!-- Popup Newsletter Form -->
    <script src="{{ asset('frontend/js/classie.js') }}"></script>
    <script src="{{ asset('frontend/js/dialogFx.js') }}"></script>

    <!-- Particles effect plugin on the right -->
    <script src="{{ asset('frontend/js/particles.js') }}"></script>

    <!-- Custom Scrollbar plugin -->
    <script src="{{ asset('frontend/js/jquery.mCustomScrollbar.js') }}"></script>

    <!-- Countdown plugin -->
    <script src="{{ asset('frontend/js/jquery.countdown.js') }}"></script>

    <script>
        $("#countdown")
            // Year/Month/Day Hour:Minute:Second
            .countdown("2022/05/1 12:00:00", function (event) {
                $(this).html(
                    event.strftime('%D Days %Hh %Mm %Ss')
                );
            });

    </script>

    <!-- Main application scripts -->
    <script src="{{ asset('frontend/js/main-flat.js') }}"></script>

</body>

</html>
