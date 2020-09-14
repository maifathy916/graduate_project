
    
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">

     
    <script>
        var botmanWidget = {
            frameEndpoint: "/botman/chat",
            title:"ask your automate doctor"  ,
            mainColor: "#007bff", 
            bubbleBackground: "#007bff",
            introMessage: "Hi at automate doctor",
            aboutLink:"",
           aboutText:"more size chat",
            desktopHeight:600,
            desktopWidth:500,
            mobileWidth:300,
            mobileHeight:500,
       
            

        };
        </script>
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
                        $('.showmoreservice').css('right','10');
                        $('.showmoreservice').css('bottom','-2')
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
      <script id="botmanWidget" src="js/widget.js"></script>
     
</div>
 
<script src="{{ asset('js/app.js') }}"></script>
