<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>SNM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Styles -->
</head>
<body class="body-login">
    <style>
        .body-login{
            background-color: #f0f2f5;
            color: rgb(0, 47, 255);
            padding: 0px;
            margin: 0px;
        }
        .main{
            width: 400px;
            height: 450px;
            background-color: rgb(255, 255, 255);
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            text-align: center;
            border-radius:10px;
            box-shadow: 0px 5px 17px -7px rgb(0 0 0 / 75%);
        }
        .input{
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .input input{
            font-family:Arial, Helvetica, sans-serif;
            width: 70%;
            padding: 12px;
            border: 2px solid black;
            border-radius: 5px;
            outline: none;
        }
        .btn{
            width: 80%;
            padding: 10px;
            background-color: #24a0ed;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            color: white;
            margin-bottom: 15px;
        }
        .btn:hover{
            color: white;
        }
        .main form{
            margin-top: 10%;
        }
        #capta{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        </style>
        <div class="main">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input">
                    <input type="text" name="phone" placeholder="Mobile Number">
                </div>
                <div class="input">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="input" id="capta">
                    <span class="captcha">{!! captcha_img() !!}</span>
                    <button type="button" class="reload" id="reload" style="margin-left: 10px; padding:5px; font-size:18px; background-color:forestgreen; color:white; border:none; border-radius:5px; cursor: pointer; outline:none">
                        &#x21bb;
                    </button>
                </div>
                <div class="input">
                    <input id="captcha" type="text" placeholder="Enter Captcha" name="captcha">
                </div>
                <div>
                    <button class="btn" type="submit">Log In</button>
                </div>
            </form>
            <div class="d-flex">
                <a class="btn" style="width:50%; margin: 10px; background-color: green" href="{{route('password.change')}}" class="for_pass">Forgot Password</a>
                <a class="btn" style="width:50%; margin: 10px; background-color: #1F2937" href="{{route('register.index')}}" class="for_pass">Register</a>
            </div>
        </div>
</body>
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
</html>
