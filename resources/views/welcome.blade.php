<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choco zone</title>
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




        .container {
            position: relative;
            text-align: center;
          
        }


        .centered {
            color: white;
            font-weight: bolder;
            position: absolute;
            font-size: 80px;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .centered1 {
            color: #775029;
            font-weight: bolder;
            position: absolute;
            font-size: 80px;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .centered2 {
            color: #775029;
            font-weight: bolder;
            position: absolute;
            font-size: 40px;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .centered3 {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          background-color: #1a0900;
          color: #775029;
          font-size: 20px;
          padding: 12px 24px;
          border: double;
          cursor: pointer;
          border-radius: 20px;
          text-align: center;
        }
        
        .centered3:hover {
            background-color: #996633;
            color: black;
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
    <div class="header">
        <a href="#default" class="logo">Choco zone</a>
        <div class="header-right">
            <a class="active" href="/home">HOME</a>
            <!--<a href="/chocolates">CHOCOLATES</a>-->
            <a href="/about">ABOUT US</a>
            <a href="/gallery">GALLERY</a>
            <a href="/contact">CONTACT</a>
            <a href="/login">LOGIN</a>
            <a href="/register">REGISTER</a>
        </div>
    </div>

    <div class="container">
        <img src="/white1.jpg" alt="night" style="width:100%;" "height:auto";>
        
        <div class="centered"><strong><em>--- Welcome To ---</strong></em></div>
        <div class="centered1"><strong>CHOCO ZONE</strong></div>
   
        <div class="centered2">
        Choco zone currently our services in Mumbai,Delhi,                     
        Bangalore,Hyderabad,Ahmedabad,Chennai,Kolkata,Surat,
        Vadodara,Pune and Jaipur City Limits.
        </div>
        
        <button class="centered3" onclick="document.location='/about'"><strong>DETAILS</strong></button>
    </div>

    <img src="/kitkat.gif" alt="kitkat" width="450" height="200">
    <img src="/silk.webp" alt="silk" width="400" height="200">
    <img src="/oreo.gif" alt="oreo" width="450" height="200">
   
   
    <div class="footer" >  
        @Copyright 2023- Your Choco Zone
    </div>
   



</body>

</html>