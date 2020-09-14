<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Dentist</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>BotMan Studio</title>
    
        <!-- Fonts -->
       >
    
        <!-- Styles -->
        
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="shortcut icon" href="{{ asset('img/logo-header2.png') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
       
    </head>
    <body>
        
    <script src="js/jquery-3.4.1.js"></script>
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
                    $('.showmoreservice').css('bottom','-2');
                });
            </script>";
            }elseif($language == 'ar'){
                echo "<script>
                $(function(){
                    $('.profile-div-lang-img').attr('src','img/ar.png');

                    $('.dental_service_div h4').css('text-align','right');
                    $('.dental_service_div p').css('text-align','right');
                    $('body').css('direction','rtl');
                    $('.sign-in').css('width','170px');
                   
                });
            </script>";
            }
        @endphp
       

        
    <!--  -----   navbar  ------    -->
      @extends("navbarextend");
        <div class="" id="firstPage">
    <!--  -----   carousel  ------    -->

            <div id="carouselExampleCaptions" class="carousel slide mt-40" data-ride="carousel">

                <div class="overlay"></div>

                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img\slider-1.jpg" class="d-block w-100" alt="slider 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img\slider-2.jpg" class="d-block w-100" alt="slider-2">
                    </div>
                    <div class="carousel-item">
                        <img src="img\slider-3.jpg" class="d-block w-100" alt="slider-3">
                    </div>
                </div>
                <!-- carousel-caption in top for all -->

                <div class="carousel-caption carousel-caption-edit d-none d-md-block">
                    <p id="carousel-caption-paragraph-lg">
                        <span>{{trans('main.welcome')}}</span> <span id="carousel-caption-paragraph-sm">{{trans('main.to')}} <br></span>Shiny
                        <span id="carousel-caption-paragraph-sm">Dental </span>care
                        <br><span id="carousel-caption-paragraph-sm">clinic </span>

                    </p>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">{{trans('main.Previous')}}</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">{{trans('main.Next')}}</span>
                </a>
            </div>

    <!--  -----   why choose us  ------  -->
                 
            <div class="container containerhide">
                <h1 class="hed1">{{trans('main.Why Choose Us?')}}  
                  
                  
            </h1>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <img class="choose-img " src="img\slider-3.jpg">
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">

                        <div class="col-lg-5 chosimg-div" id="choose-div" style="background-color: #f4f9fc;">
                            <img class="choose-img2" src="img\choose us1.png">
                            <h4>{{trans('main.edoctor')}}</h4>

                        </div>
                        <div class="col-lg-5 chosimg-div" id="choose-div" style="background-color: #f4f9fc;">
                            <img class="choose-img2" src="img\choose us2.png">
                            <h4>20 <p>{{trans('main.Years of Experience')}}</p></h4>

                        </div><br>
                        <div class="col-lg-5 chosimg-div" id="choose-div" style="background-color: #f4f9fc;">
                            <img class="choose-img2" src="img\choose us3.png">
                            <h4>{{trans('main.Successful Cases')}}</h4>

                        </div>
                        <div class="col-lg-5 chosimg-div" id="choose-div" style="background-color: #f4f9fc;">
                            <img class="choose-img2" src="img\choose us4.png">
                            <h4>{{trans('main.Happy  Patient')}}</h4>

                        </div>

                    </div>

                </div>
            </div>

    <!--    -------   Ask doctor --------   -->

            <div id="ask_doctor">
                <div class="ask_back">
                    <!-- img background-->
                    <div class="ask_overlay">
                        <div class="container container-edit">
                            <div class="row">
                                    <div class="ask_front"></div>
                                    <div class="ask_back_detail">
                                        <h1>{{trans('main.Put your question')}}</h1>
                                        <p>{{trans('main.Doctors will answer')}}</p>
                                        <a href="/ask">
                                            <button type="button" class="btn btn-primary ask_btn">{{trans('main.ASK DOCTOR')}}</button>
                                        </a>

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    <!--   ----   Dental Services   -------  -->

            <div class="container containerhide dental_services" id="dental_services">
                <h1 class="hed1">{{trans('main.DENTAL SERVICES')}}</h1>
                <div class="dental_service_div row">

                    <div class="service-detial">
                        <div class="service-detial-img">
                            <img class="detial-img">
                        </div>
                        <h4></h4>
                        <p class="p1"></p>
                        <p class="p2"></p>
                        <div class="service-detial-exit">
                            <span>X</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-1.jpg" id="service-img" class="col-lg-12">
                        <h4>{{trans('main.Root Canal Treatment')}}</h4>
                          <span class="showmoreservice">{{trans('main.showinfo')}}</span>
                        <p class="hide">
                            {{trans('main.root canal')}}    
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-2.jpg" id="service-img" class="col-lg-12">
                        <h4>{{trans('main.Dentures')}}</h4>
                        <span class="showmoreservice">{{trans('main.showinfo')}}</span>
                        <p class="hide">
                            {{trans('main.denture ')}}    
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-3.jpg" id="service-img" class="col-lg-12">
                        <h4>{{trans('main.Fillings')}} </h4>
                        <span class="showmoreservice">{{trans('main.showinfo')}}</span>
                        <p class="hide">
                            {{trans('main.filling')}}
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-4.jpg" id="service-img" class="col-lg-12">
                        <h4>{{trans('main.Scaling')}}</h4>
                        <span class="showmoreservice">{{trans('main.showinfo')}}</span>
                        <p class="hide">
                            {{trans('main.Dental scaling')}}
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-5.jpg" id="service-img" class="col-lg-12">
                        <h4>{{trans('main.Prevention of tooth decay')}}</h4>
                        <span class="showmoreservice">{{trans('main.showinfo')}}</span>
                        <p class="hide">
                            {{trans('main.Tooth decay')}}
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 service-div">
                        <img src="img\services-6.jpg" id="service-img" class="col-lg-12">
                        <h4>{{trans('main.Teeth Whitening')}}</h4>
                        <span class="showmoreservice">{{trans('main.showinfo')}}</span>
                        <p class="hide">
                            {{trans('main.teeth')}}
                        </p>
                    </div>


                </div>
            </div>




    <!--    -------   feature --------   -->

            <div class="feature">
                <div class="container containerhide">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 feature-div">
                            <img src="img\feature-1.png" class="rounded-circle">
                            <h2>4,500</h2>
                            <p>{{trans('main.Happy  Patient')}}</p>
                        </div>
                        <div class="col-lg-3 col-sm-6 feature-div">
                            <img src="img\feature-2.png" class="rounded-circle">
                            <h2>15,600+</h2>
                            <p>{{trans('main.Successful Cases')}}</p>
                        </div>
                        <div class="col-lg-3 col-sm-6 feature-div">
                            <img src="img\feature-3.png" class="rounded-circle">
                            <h2>20</h2>
                            <p>{{trans('main.Years of Experience')}}</p>
                        </div>
                        <div class="col-lg-3 col-sm-6 feature-div">
                            <img src="img\feature-4.png" class="rounded-circle">
                            <h2>25</h2>
                            <p>{{trans('main.edoctor')}}</p>
                        </div>
                    </div>
                </div>

            </div>


    <!--  --------   Our Doctors    ------- -->

            <div class="container containerhide" id="our-doctors">
                <h1 class="hed1">{{trans('main.doctor')}}</h1>
                <div class="row">
                    @if(isset($datadoctor) )
                    @if( count($datadoctor ) > 0)
                        @foreach($datadoctor  as $data)
                            @if($data->role=='Admin' || $data->role=='doctor')
                    <div class="doctors col-md-6 col-sm-12 ourdoc-div">
                        <img src="{{ asset('publicimages/'. $data->image ) }}" class="doctors_img">
                        <div class="doctors_detail">
                            <h1>{{$data->fristname}} {{$data->lastname}}</h1>
                            <p>
                                {{$data->clenicAdress}}<br>
                                {{$data->phone}}<br>
                                {{$data->email}}<br>
                                {{$data->describtion}}<br>

                            </p>
                        </div>
                    </div>

                           
                                @endif
                        @endforeach
                        @if(count($datadoctor)== 4)
                        <div class="showmore-doctor">
                        <a href="{{ route("showdoctor") }}">
                            <button type="button" class="btn btn-primary showmore_btn">Show More</button>
                        </a>
                        </div>
                        @endif
                    @endif
                    @endif


                </div>
            </div>

            <!--     footer    -->
            <div class="footer">
                <div class="container">

                    <p>
                    <span>{{trans('main.Register for free')}}</span>
                    <a class="btn btn-rounded btn-light footer-btn" href="/register">{{trans('main.SIGN IN')}}</a>
                    </p>
                    <ul class="ml-auto footerlinks">
                        <li class="nav-item active">
                            <a class="nav-link" href="/#firstPage">{{trans("main.HOME")  }} <span class="sr-only">{{trans('main.(current)')}}</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/ask">{{trans('main.ASK DOCTOR')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#dental_services">{{trans('main.DENTAL SERVICES')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#our-doctors">{{trans('main.DOCTORS')}}</a>
                        </li>
                    </ul>


                </div>

                <div style="background: #111111;">
                    <p>{{trans('main.copy')}}</p>
                </div>

                <div class="arrow-top">
                    <i class="fas fa-chevron-up"></i>
                </div>

            </div>


         

        </div>
               
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/home.js"></script>
    </body>
   
</html>
