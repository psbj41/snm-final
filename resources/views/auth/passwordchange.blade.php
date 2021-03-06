<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNM Mumbai App</title>
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/iofrm-theme5.css')}}">
    {{-- <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{asset('auth/images/graphic2.svg')}}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Dhan Nirankar Ji</h3>
                        <p>Welcome To SNM Mumbai App</p>
                        <h3 style="color: rgb(255, 166, 0)">Reset Password</h3>
                        <form method="POST" action="{{ route('password.change.store') }}">
                            @csrf
                            <input class="form-control" type="text" name="phone" placeholder="Mobile Number"
                                required>
                            <input class="form-control" type="password" name="password" placeholder="New Password" required>
                            <div style="display: flex; justify-content:center; align-items:center">
                                <span class="captcha" >{!! captcha_img() !!}</span>
                                <button type="button" class="reload" id="reload" style="margin-left: 10px; padding:5px; font-size:18px; background-color:forestgreen; color:white; border:none; border-radius:5px; cursor: pointer; outline:none">
                                    &#x21bb;
                                </button>
                            </div>
                            <input id="captcha" class="form-control" style="margin-top: 5px;" type="text" placeholder="Enter Captcha" name="captcha">
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Change Password</button>
                            </div>
                        </form>
                        {{-- <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a
                                href="#">Linkedin</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('auth/js/jquery.min.js')}}"></script>
    <script src="{{asset('auth/js/popper.min.js')}}"></script>
    <script src="{{asset('auth/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('auth/js/main.js')}}"></script>
    <script type="text/javascript">
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $(".captcha").html(data.captcha);
                }
            });
        });
    </script>
</body>

</html>
