<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logo-header2.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Regist</title>
</head>
<body>

<div class="container">
    <!--set language-->
    <script src="js/jquery-3.4.1.js"></script>
    @php
            $a = session()->get('lang');
            if($a=='en'){
                echo "<script>
                    $(function(){
                        $('body').css('direction','ltr');
                        $('.email-char,.password-char,.fname-char,.lname-char,.email-char1,.password-char1,.password-char1-confirm,.phone-char,.password-char1,.password-char1-confirm,.descripe-char').css('left',16);
                        $('.show-password,.hide-password,.show-password1,.hide-password1,.show-password2,.hide-password2').css('right',10);
                    
                    });
                </script>";
                }elseif($a == 'ar'){
                    echo "<script>
                    $(function(){
                        
                        $('body').css('direction','rtl');
                        $('.email-char,.password-char,.fname-char,.lname-char,.email-char1,.password-char1,.password-char1-confirm,.phone-char,.password-char1,.password-char1-confirm,.descripe-char').css('right',16);
                        $('.show-password,.hide-password,.show-password1,.hide-password1,.show-password2,.hide-password2').css('left',10);
                    
                        });
                </script>";
                }
            @endphp

    @php
        if(Auth::guest()){
             // print( auth()->user()->id ." - ". auth()->user()->email );
           }
    @endphp

    @if(count($errors) > 0)

        <div class="alert alert-danger error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{  $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (Session()->has('users') || true)
        <p></p>
@endif
<!--    sign in /**/ login -->
    <div class="divmid-login col-lg-5 col-md-8 col-sm-10">

        <div class="login-logo">
            <img src="img/logo-header2.png">
            <h2>{{trans('main.Login')}}</h2>
        </div>

        <div class="bt-back">{{trans('main.Back')}}</div>
        <form class="px-4 py-3" action="{{route('login')}}" method="post" enctype="multipart/form-data">
            <!--email-->
            <div class="form-group email-div">
                <input type="email" class="form-control email-input" id="exampleDropdownFormEmail1" name="email" value="{{ Request::old('email')}}">
                <span class="email-char">{{trans('main.Email')}}</span>
            </div>
            <!-- password -->
            <div class="form-group password-div">
                <input type="password" class="form-control password-input" id="exampleDropdownFormPassword1" name="password">
                <span class="password-char">{{trans('main.Password')}}</span>
                <span class="show-password hide"><i class="fa fa-eye" aria-hidden="true"></i></span>
                <span class="hide-password"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
            </div>
            <button type="submit" class="btn btn-primary bt">{{trans('main.Sign')}}</button>
            <input type="hidden" value="{{ Session::token()}}" name="_token">
        </form>
        <div class="dropdown-divider"></div>
        
        <div class="bt-sign-up">{{trans('main.Create New Account')}}</div>
    </div>




    <div class="divmid hide col-lg-5 col-md-8 col-sm-10">
        <div class="login-logo">
            <img src="img/logo-header2.png">
            <h2>{{trans('main.Register')}}</h2>
        </div>
        <div class="bt-back-regist">{{trans('main.Back')}}</div>

        <form class="px-4 py-3" action="{{route('registertion')}}" method="post" enctype="multipart/form-data">

            <!--First,Last Name-->
            <div class="form-row">
                <div class="form-group col fname-div {{ $errors->has('fname') ? 'has-error':'' }}">
                    <input type="text" class="form-control fname-input" id="exampleDropdownFormEmail1" name="fname" value="{{ Request::old('fname')}}">
                    <span class="fname-char">{{trans('main.First Name')}}</span>
                </div>
                <div class="form-group col lname-div">
                    <input type="text" class="form-control lname-input" id="exampleDropdownFormEmail1" name="lname" value="{{ Request::old('lname')}}">
                    <span class="lname-char">{{trans('main.Last Name')}}</span>
                </div>
            </div>
            <!--email-->
            <div class="form-group email-div1">
                <input type="email" class="form-control email-input1" id="exampleDropdownFormEmail1" name="email" value="{{ Request::old('email')}}">
                <span class="email-char1">{{trans('main.Email Address')}}</span>
            </div>

            <!--pass-->
            <div class="form-group password-div1">
                <input type="password" class="form-control password-input1" id="exampleDropdownFormPassword1" name="password">
                <span class="password-char1">{{trans('main.Password')}}</span>
                <span class="show-password1 hide"><i class="fa fa-eye" aria-hidden="true"></i></span>
                <span class="hide-password1"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
            </div>
            <!--c pass-->
            <div class="form-group password-div1-confirm ">
                <input type="password" class="form-control password-input1-confirm" id="exampleDropdownFormPassword1" name="confrimpassword">
                <span class="password-char1-confirm">{{trans('main.Confirm Password')}}</span>
                <span class="show-password2 hide"><i class="fa fa-eye" aria-hidden="true"></i></span>
                <span class="hide-password2"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
            </div>
            <!--Gender-->
            <div class="form-group" >

                <select class="form-control select-input" name="sl-gender">
                    <option value="0" disabled selected>{{trans('main.Gender')}}</option>
                    <option value="male">{{trans('main.Male')}}</option>
                    <option value="{{trans('main.Female')}}">Female</option>
                </select>
            </div>
            <!--Date-->
            <div class="form-group">
                <input class="form-control date-input" type="date" name="brithdate" value="{{ Request::old('brithdate')}}">
            </div>

            <!--  phone-->
            <div class="form-group phone-div">
                <input type="text" class="form-control phone-input" id="exampleDropdownFormEmail1" name="phone" value="{{ Request::old('phone')}}">
                <span class="phone-char">{{trans('main.Phone')}}</span>

            </div>
            <!--  Profile Image -->
            <div class="container pro-picture">
                <div class="row">

                    <div style="bottom: 0px;" class="col-4">
                        <label>{{trans('main.Profile Image')}}</label><br>
                        <button class="btn btn-primary photo-btn">
                            <i class="fas fa-folder-open"></i>
                        </button>
                        <br><input type="file" class="uploadfile" id="file" accept="image/*" name="image" value="value="{{ Request::old('image')}}">
                    </div>
                    <div class="col-8">
                        <img src="img\choseuse.png" id="imgg" class="rounded-circle">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{trans('main.Sign Up')}}</button>
                <input type="hidden" value="{{ Session::token()}}" name="_token">
            </div>

        </form>
    </div>

</div>





<script src="js/jquery-3.4.1.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/register.js"></script>


</body>
</html>
