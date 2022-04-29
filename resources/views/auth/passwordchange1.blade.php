<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>SNM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
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
            width: 300px;
            height: 350px;
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
        }
        .main form{
            margin-top: 25%;
        }
        </style>
        <div class="main">
            <form method="POST" action="{{ route('password.change.store') }}">
                @csrf
                <div class="input">
                    <input type="text" name="phone" placeholder="Mobile Number">
                </div>
                <div class="input">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="input">
                    <input type="text" placeholder="Confirm Password">
                </div>
                <div>
                    <button class="btn" type="submit">Reset Password</button>
                </div>
            </form>
        </div>
</body>
</html>
