<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BotMan Studio</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo-header2.png') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    <style>
        body {
            font-family: "Varela Round", sans-serif;
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-size: contain;
            width:100% ;
            height: 100%;
           
        }

        .container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .content {
            text-align: center;
        }

        .logo {
            margin-right: 40px;
            margin-bottom: 20px;
        }

        .links a {
            font-size: 1.25rem;
            text-decoration: none;
            color: white;
            margin: 10px;
        }

        @media all and (max-width: 500px) {

            .links {
                display: flex;
                flex-direction: column;
            }
        }

        #nav12{
            height: 90px;
        }
    </style>
    
</head>
<body style="background-image:url('{{ asset('Img/friendly-chatbot.jpg') }}') ">

    @include('navbarextend')
<div class="container">
   
    @php
        $language = session()->get('lang');
        if($language =='en'){
            echo "<script>
                $(function(){
                    $('.profile-div-lang-img').attr('src','img/en.png');

                    $('.dental_service_div h4').css('text-align','left');
                    $('.dental_service_div p').css('text-align','left');
                    $('body').css('direction','ltr');
                  
                });
            </script>";
            }elseif($language == 'ar'){
                echo "<script>
                $(function(){
                    $('.profile-div-lang-img').attr('src','img/ar.png');

                    $('.dental_service_div h4').css('text-align','right');
                    $('.dental_service_div p').css('text-align','right');
                    $('body').css('direction','rtl');
                    $('.sign-in').css('width','170px')
                   
                });
            </script>";
            }
        @endphp
       
    <div class="content">
      

       
    </div>
    <script id="botmanWidget" src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    <script>
    var botmanWidget= {
        frameEndpoint: '/botman/chat' ,
        title:'ask your automate doctor'  ,
        aboutLink:"",
        aboutText:"more size chat",
        mainColor: "#007bff", 
        bubbleBackground: "#007bff",
         introMessage: "Hi at automate doctor",
     
        
    };
     </script>
  
</div>
</body>
</html>