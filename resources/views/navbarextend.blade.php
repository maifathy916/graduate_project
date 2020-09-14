<html>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="nav12">
    <div style="width: 100%;min-height: 50px" class="container container-nav">
        <div class="nav-img">
        <img class="navbar-brand" src="{{ asset('img\logo-header.png') }}">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
         
        <div class="ul-nav">
           
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/#firstPage">{{trans('main.HOME')}} <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/ask')}}">{{trans('main.ASK DOCTOR')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" data-toggle="dropdown" href="">{{trans('main.SERVICES')}}</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/#dental_services">{{trans('main.DENTAL SERVICES')}}</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ route('treat') }}">{{trans('main.treatment')}}</a>
                    </div>
                  </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="/#our-doctors">{{trans('main.DOCTORS')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("chatbot") }}">{{trans('main.chat')}}</a>
                </li>
                

                @php
                if (Auth::guest()){
                 
                    echo '<li class="nav-item">
                    <a class="nav-link sign-in" href="/register" style="font-size:25px;font-family: Impact, Charcoal, sans-serif;">';
                    echo trans('main.SIGN IN');
                echo '</a> </li>';
                }
                @endphp
                
                    <!------drop down profile list------->

                            @php
                          echo'  <li class="nav-item">';
                                if (!(Auth::guest())){
                       echo '<div class="btn-group profile-div">
                        <button type="button" class="btn profile-btn">
                            <img class="profile-img" src="'.asset("img\choseuse.png").'">
                        </button>
                        <div class="dropdown-menu profile-menu">';
                                  echo '<a class="dropdown-item" href="/editprofile">
                                <i class="fas fa-user"></i><span style="padding-left:10px;">Profile</span>
                            </a>
                            <a class="dropdown-item" href="'.route("archive",auth()->user()->id).'">
                                <i class="fas fa-comment"></i><span style="padding-left:10px;">Archive</span>
                            </a>';
                                }
                                 if(!(Auth::guest()) && auth()->user()->role=='Admin'){

                           echo '<a class="dropdown-item" href="/adddoctor">
                                <i class="fas fa-user-md"></i><span style="padding-left:10px;">Add Doctor</span>
                            </a>
                            <div class="dropdown-divider"></div>';
                           }
                            if(!(Auth::guest())){
                           echo '<a class="dropdown-item" href="'.route('logout').'">
                                <i class="fas fa-sign-out-alt"></i><span  style="padding-left:10px;">Log Out</span>
                            </a>';
                            }
                            echo '  </li>';
                            @endphp

                        </ul>  
                </div>
            </div>
                
            


               <div class="btn-group profile-div profile-div-lang">
                        <button type="button" class="btn profile-btn-lang">
                            <img class="profile-div-lang-img" style="width:35px;display" src="{{ asset('img/en.png') }}"> 
                        </button>
                        <div class="dropdown-menu profile-menu">
                            <div >
                                <a class="nav-link lang-button2" href="/lang/en" >   
                                   
                                    <img style="width:35px;display" src="{{ asset('img/en.png') }}" class="imgen"> 
                                </a>
                                </div>
                                <div >
                                <a class="nav-link lang-button1" href="/lang/ar"  >
                                    <img style="width:35px;display" src="{{ asset('img/ar.png') }}" class="imgar"> 
                                 </a>
                                    
                             </div>
                            
                        </div>
                    </div>
                
       
                    <script>
                        
/*
                        $(".imgar").click(function(){
                            var att= $(this).attr("src");
                            $(" .profile-btn-lang-img").attr("src",att);
                        });
                        $(".imgen").click(function(){
                            var att=     $(this).attr("src");
                            $(" .profile-btn-lang-img").attr("src",att);
                        });*/
                    </script>
       
       
       
       
        </div>
    </div> 

        <!-- language button -->
      <!--  <div >
            <a class="nav-link lang-button2" href="/lang/en" > {{trans('main.lang2')}}  </a>
            </div>
            <div>
            <a class="nav-link lang-button1" href="/lang/ar" > {{trans('main.lang1')}}  </a>
                
            </div>-->
    

    </div>
</nav>
</body>
</html>
