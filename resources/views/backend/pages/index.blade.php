<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SNM</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        section{
            text-align: center;
            font-size: 25px;
        }
        section h3{
            font-size: 40px;
            margin-bottom: 10px;
        }

        .logo img{
            margin-top: 50px;
        }
        .btn button{
            padding: 15px;
            margin: 30px 10px 0px 0px;
            background: blue;
            color: white;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 5px 17px -7px rgb(0 0 0 / 75%);
            cursor: pointer;
        }

        .btn .login{
            font-size: 20px;
            color: white;
            text-decoration: none;
        }

        .btn .register{
            font-size: 20px;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <section>
        <div class="logo">
            <img src="{{asset('backend/assets/images/list.png')}}" alt="" srcset="" width="200px">
        </div>
        <h3>Duty List</h3>
        <h6>Pracharak/Pracharika can easily find out his/her own duty</h6>
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
