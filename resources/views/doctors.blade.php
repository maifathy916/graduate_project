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
       
    @extends("navbarextend");
       
           

    <!--  --------   Our Doctors    ------- -->

            <div class="container containerhid" id="our-doctor">
                <h1 class="hed1">Our Doctors</h1>
                <div class="row">
                    @if(isset($datadoctors) )
                    @if( count($datadoctors ) > 0)
                        @foreach($datadoctors  as $data)
                            @if($data->role=='Admin' || $data->role=='doctor')
                         
                    <div class="doctors col-md-6 col-sm-12 ourdoc-di">
                        <img src="{{ asset('publicimages/'. $data->image ) }}" class="doctors_img">
                        <div class="doctors_detail">
                            <h1>{{$data->fristname}} {{$data->lastname}}</h1>
                            <p>
                              <span class="clenicadress">{{$data->clenicAdress}} </span><br>
                              <span class="phone">  {{$data->phone}}</span><br>
                                <span class="email"> {{$data->email}}</span><br>
                               <span class="description"> {{$data->describtion}}</span><br>

                            </p>
                        </div>
                        @if(!Auth::guest() && auth()->user()->role=='Admin')
                       <div class="stting"> <i class="fas fa-ellipsis-v"></i></div>
                       @endif
                       <div class="stting-content">
                        <span class="hide iddoctor">{{ $data->id }}</span>
                            <p href="" class="update-doctor">update</p>
                            <a href="{{ route("deletedoctor", $data->id) }}">delete</a>
                       </div>
                    </div>
                                @endif
                        @endforeach
                
                        
                </div>

                @endif
                      
                {{ $datadoctors->render()}}
                @endif

            </div>

            <!--     footer    -->
            <div class="divmid-doctor hide col-lg-5 col-md-8 col-sm-10" id="divmid-doctor">
                
                <div class="bt-back-doctor cancel">X</div>

                <form class="px-4 py-3" action="{{route('updatedoctor')}}" method="post" enctype="multipart/form-data">
                    <!--First,Last Name-->
                    <div class="form-row">
                        <div class="form-group col fname-div">
                            <input type="text" class="form-control fname-input" id="exampleDropdownFormEmail1" name="fname" value="">
                            <span class="fname-char">First Name</span>
                        </div>
                        <div class="form-group col lname-div">
                            <input type="text" class="form-control lname-input" id="exampleDropdownFormEmail1" name="lname" value="">
                            <span class="lname-char">Last Name</span>
                        </div>
                    </div>
                    
                    <!--email-->
                    <div class="form-group email-div1">
                        <input type="email" class="form-control email-input1" id="exampleDropdownFormEmail1" name="email" value="">
                        <span class="email-char1">Email Address</span>
                    </div>
                    <div class="form-group email-div1">
                        <input type="hidden" class="form-control id-input" id="exampleDropdownFormEmail1" name="id" value="">
                       
                    </div>
                    <!--  phone-->
                    <div class="form-group phone-div">
                        <input type="text" class="form-control phone-input" id="exampleDropdownFormEmail1" name="phone" value="">
                        <span class="phone-char">Phone</span>
                    </div>
                    <!--  description   -->
                    <div class="form-group descripe-div">
                        <textarea rows="3" class="form-control descripe-input"  name="description" ></textarea>
                        <span class="descripe-char">Put Description About Doctor</span>
                    </div>


                    <!--delete-->
                    <div class="form-group  clinic-address">
                        <label for="exampleDropdownFormEmail1">Clenic s Adress</label>
                        <input type="text" class="form-control adressdoctor" id="exampleDropdownFormEmail1" placeholder="adress clenic" name="clenicAdress" value="">
                    </div>
                    <div class="form-group" >

                        <select class="form-control select-input" name="sl-role">
                            <option value="0" disabled selected>Role</option>
                            <option value="Admin">Admin</option>
                            <option value="doctor">doctor</option>
                        </select>
                    </div>
                    <!--  Profile Image -->
                    <div class="container pro-picture">
                        <div class="row">

                            <div style="bottom: 0px;" class="col-4">
                                <label>Profile Image</label><br>
                                <button class="btn btn-primary photo-btn">
                                    <i class="fas fa-folder-open "></i>
                                </button>
                                <br><input type="file" class="uploadfile" id="file" accept="image/*" name="image">
                            </div>
                            <div class="col-8">
                                <img src="img\choseuse.png" id="imgg" class="rounded-circle">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <input type="hidden" value="{{ Session::token()}}" name="_token">
                    </div>

                </form>
            </div>


    </div>



         

        </div>
               
        <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        
        <script src="{{ asset('js/home.js') }}"></script>
    </body>
   
</html>
