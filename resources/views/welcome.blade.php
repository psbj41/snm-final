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

    <!-- Slider Wrapper -->
    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

            <!-- SLIDE 1 / Home -->
            <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25"
                data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

                <div class="sl-slide-inner">

                    <div class="content-slide">

                        <div class="container">
                            <img src="{{ asset('frontend/img/logo.png') }}" alt="" class="brand-logo text-intro opacity-0" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- END - SLIDE 1 / Home -->$

        </div>
        <!-- END - sl-slider -->
    </div>
    <!-- END - Slider Wrapper -->

    <!-- Newsletter Popup -->
    <div id="somedialog" class="dialog">

        <div class="dialog__overlay"></div>

        <!-- dialog__content -->
        <div class="dialog__content">

            <div class="header-picture"></div>

            <!-- dialog-inner -->
            <div class="dialog-inner">

                <h4>You like taking the lead of line?</h4>

                <p>Being the first to know always feels great... Signing up to our newsletter gives you
                    <strong>exclusive access to our fantastic Grand Opening on August 6th 2017</strong></p>

                <!-- Newsletter Form -->
                <div id="subscribe">

                    <form action="php/notify-me.php" id="notifyMe" method="POST">

                        <div class="form-group">

                            <div class="controls">

                                <!-- Field  -->
                                <input type="text" id="mail-sub" name="email"
                                    placeholder="Click here to write your email" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Click here to write your email'"
                                    class="form-control email srequiredField" />

                                <!-- Spinner top left during the submission -->
                                <i class="fa fa-spinner opacity-0"></i>

                                <!-- Button -->
                                <button class="btn btn-lg submit">Get notified</button>

                                <div class="clear"></div>

                            </div>

                        </div>

                    </form>

                    <!-- Answer for the newsletter form is displayed in the next div, do not remove it. -->
                    <div class="block-message">

                        <div class="message">

                            <p class="notify-valid"></p>

                        </div>

                    </div>
                    <!-- END - Answer for the newsletter form is displayed in the next div, do not remove it. -->

                </div>
                <!-- END - Newsletter Form -->
            </div>
            <!-- END - dialog-inner -->
        </div>
        <!-- END - dialog__content -->

    </div>
    <!-- END - Newsletter Popup -->

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
