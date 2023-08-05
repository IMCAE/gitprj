<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choco zone</title>

    @yield('loginc')
    <style>
        * {
            box-sizing: border-box;
        }

        .header {
            overflow: hidden;
            background-color: #020202;
            padding: 20px 10px;
        }

        .header a {
            float: left;
            color: #f8f7f6;
            text-align: center;
            padding: 12px;
            text-decoration: underline overline #775029;
            font-size: 20px;
            line-height: 25px;
            border-radius: 4px;
            font-weight: bolder;
        }

        .header a.logo {
            font-size: 30px;
            font-weight: bolder;
            background-color: #996633;
        }

        .header a:hover {
            background-color: #996633;
            color: black;
        }

        .header a.active {
            color: #775029;
        }

        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
        }

        .footer {
            overflow: hidden;
            background-color: #020202;
            padding: 20px 10px;
            float: center;
            color: #f8f7f6;
            text-align: center;
            padding: 12px;
            text-decoration: underline overline #775029;
            font-size: 20px;
            line-height: 25px;
            border-radius: 4px;
            font-weight: bolder;
        }


    </style>
</head>

<body>
    @section('head')
    <div class="header">
        <a href="#default" class="logo">Choco zone</a>
        <div class="header-right">
            <a  href="/home">HOME</a>
            <!-- <a href="/chocolates">CHOCOLATES</a> -->
            <a href="/about">ABOUT US</a>
            <a href="/gallery">GALLERY</a>
            <a href="/contact">CONTACT</a>
            <a href="/login">LOGIN</a>
            <a href="/register">REGISTER</a>
        </div>
    </div>
    @show

    @yield('change')

    
 




</body>

</html>