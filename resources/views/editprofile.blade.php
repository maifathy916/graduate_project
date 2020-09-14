<html>
    <head>
        <title>Edit Profile</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
        <link rel="stylesheet" href="{{ asset('css/editprofile.css') }}">
        <link rel="shortcut icon" href="{{ asset('img/logo-header2.png') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    </head>
    <body>
        <!--  -----   navbar  ------    -->
        @extends("navbarextend");
        @if(isset($dataprofile))
           @if(count($dataprofile) > 0)
             @foreach($dataprofile as $edit)



        <div class="" id="firstPage">
            <!--  -----   edit profile page  ------    -->

                <form class="container" action="{{route('updateprofile')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <!-- edit photo-->
                        <div class="container col-4 pro-picture">
                            <div>

                                <img src="{{ asset('publicimages/'.$edit->image) }}" id="imgg" class="rounded-circle">
                            </div>
                            <div class="">
                                <button class="btn btn-primary photo-btn" >
                                    <i class="fas fa-pen"></i>
                                </button>
                                <br><small>Select file < 1500 KB</small>
                                <br><input type="file" class="uploadfile" id="file" accept="image/*" name="image">
                            </div>
                        </div>
                        <!-- edit detail-->
                        <div class="col-sm-8">
                            <div class="row pro-detail">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label >First Name</label>
                                        <input type="text" class="form-control" name="fname" value="{{$edit->fristname}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label >Last Name</label>
                                        <input type="text" class="form-control" name="lname" value="{{$edit->lastname}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" name="email" value="{{$edit->email}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="phone" value="{{$edit->phone}}">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lname">Date</label>
                                        <input class="form-control" type="date" name="brithdate" value="{{$edit->brithdate}}">

                                    </div>
                                </div>
                                <div class="row container">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-6">
                                        <div class="form-group text-center">
                                            <label for="pwd">Old Password</label>
                                            <input type="password" class="form-control" name="oldpassword">
                                        </div>
                                    </div>
                                    <div class="col-sm-3"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pwd">New Password</label>
                                        <input type="password" class="form-control" name="newpassword">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pwd">Confirm New Password</label>
                                        <input type="password" class="form-control" name="confirampassword">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group container">
                            <hr>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                        </div>
                    </div>
                </form>

                @if(count($errors)>0)
                <div class="alert alert-danger error">
                    @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                    @endforeach
                </div>
                    @endif
                @if(!empty($wrong))
                <div class="alert alert-danger error">
                <p>{{$wrong}}</p>

                </div>
                    @endif

        </div>

             @endforeach
        @endif
           @endif
        <!--     footer    -->
        <div class="footer">
            <div style="background: #111111;">
                <p>© 2019 Copyright: All right reserved.Made with us for a better teeth. </p>
            </div>
        </div>

        <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/editprofile.js') }}"></script>

    </body>
</html>
