<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SNM</title>
</head>
<body>
    <style>
        section{
            justify-content: center;
            align-items: center;
        }
        .btn{
            position: absolute;
            bottom: 5%;
            left: 10%;
        }
        .btn button{
            margin: 10px;
            font-size: 25px;
            font-weight: 500;
            padding: 10px;
            background: #000000;
        }
        a{
            text-decoration: none;
            color: rgb(255, 255, 255);
        }
    </style>
    <section>
        <div class="btn">
            <button>
                <a href="{{route('login')}}" class="login">Login</a>
            </button>
            <button>
                <a href="{{route('register.index')}}" class="register">Register</a>
            </button>
        </div>
    </section>
</body>
</html>
