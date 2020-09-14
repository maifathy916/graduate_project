<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BotMan Studio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        body {
            font-family: "Source Sans Pro", sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("/img/chose-back.jpg");
            background-attachment: fixed;
            background-size: cover;
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
    </style>
</head>
<body>
<div class="container">
    <div class="content" id="app">
        <botman-tinker api-endpoint="/botman"></botman-tinker>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'>
        var botmanwidget= {
            frameEndpoint: 'botman/chat' ,
            title:'ask your automate doctor'  ,
            mainColor: "#007bff", 
            bubbleBackground: "#000",
            introMessage: "Hi at automate doctor",
            mobileWidth:500,
            mobileHeight:100%,
            desktopHeight:600,
            desktopWidth:500,
         
            
        }
        </script>
    
   
     
</div>
 
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>