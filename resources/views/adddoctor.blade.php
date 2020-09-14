<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logo-header2.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link rel="stylesheet" href= "{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/register.css') }}">
    <title>Add New Doctor</title>
</head>
<body>

    <div class="container">

            @if(count($errors)> 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <ul>
                        <li>{{$error}}</li>
                    </ul>
                    @endforeach
                </div>
             @endif
            <!--------------------------  register for new doctor        ------------------------->

            <div class="divmid-doctor col-lg-5 col-md-8 col-sm-10" id="divmid-doctor">
                <div class="login-logo">
                    <img src="img/logo-header2.png">
                    <h2>Add Doctor</h2>
                </div>
                <div class="bt-back-doctor">Back</div>

                <form class="px-4 py-3" action="{{route('registdoctor')}}" method="post" enctype="multipart/form-data">
                    <!--First,Last Name-->
                    <div class="form-row">
                        <div class="form-group col fname-div">
                            <input type="text" class="form-control fname-input" id="exampleDropdownFormEmail1" name="fname" value="{{ Request::old('fname')}}">
                            <span class="fname-char">First Name</span>
                        </div>
                        <div class="form-group col lname-div">
                            <input type="text" class="form-control lname-input" id="exampleDropdownFormEmail1" name="lname" value="{{ Request::old('lname')}}">
                            <span class="lname-char">Last Name</span>
                        </div>
                    </div>
                    <!--email-->
                    <div class="form-group email-div1">
                        <input type="email" class="form-control email-input1" id="exampleDropdownFormEmail1" name="email" value="{{ Request::old('email')}}">
                        <span class="email-char1">Email Address</span>
                    </div>

                    <!--pass-->
                    <div class="form-group password-div1">
                        <input type="password" class="form-control password-input1" id="exampleDropdownFormPassword1" name="password" >
                        <span class="password-char1">Password</span>
                        <span class="show-password1"><i class="fa fa-eye" aria-hidden="true"></i></span>
                        <span class="hide-password1 hide"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                    </div>
                    <!--c pass-->
                    <div class="form-group password-div1-confirm">
                        <input type="password" class="form-control password-input1-confirm" id="exampleDropdownFormPassword1"  name="confrimpassword">
                        <span class="password-char1-confirm">Confirm Password</span>
                        <span class="show-password2"><i class="fa fa-eye" aria-hidden="true"></i></span>
                        <span class="hide-password2 hide"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                    </div>
                    <!--Gender-->
                    <div class="form-group" >

                        <select class="form-control select-input" name="sl-gender"  >
                            <option value="0" disabled selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <!--Date-->
                    <div class="form-group">
                        <input class="form-control date-input" type="date" name="brithdate" value="{{ Request::old('date')}}">
                    </div>
                    <!--  phone-->
                    <div class="form-group phone-div">
                        <input type="text" class="form-control phone-input" id="exampleDropdownFormEmail1" name="phone" value="{{ Request::old('phone')}}">
                        <span class="phone-char">Phone</span>
                    </div>
                    <!--  description   -->
                    <div class="form-group descripe-div">
                        <textarea rows="3" class="form-control descripe-input"  name="description" >{{ Request::old('description')}}</textarea>
                        <span class="descripe-char">Put Description About Doctor</span>
                    </div>


                    <!--delete-->
                    <div class="form-group  clinic-address">
                        <label for="exampleDropdownFormEmail1">Clenic s Adress</label>
                        <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="adress clenic" name="clenicAdress" value="{{ Request::old('clenicAdress')}}">
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
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                        <input type="hidden" value="{{ Session::token()}}" name="_token">
                    </div>

                </form>
            </div>


    </div>





    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>

	<script src="{{ asset('js/register.js') }}"></script>


</body>
</html>
