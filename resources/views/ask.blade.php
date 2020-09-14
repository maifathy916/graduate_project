<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logo-header2.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/co.css') }}">
    <title>comment</title>

</head>
<body>
    <!--  -----   navbar  ------    -->
    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

        @extends("navbarextend");
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
        <!--  add post(main comment) -->
        <div class="add-post">
            <form action="{{route('saveposts')}}" method="post" enctype="multipart/form-data" id="form-data">
                <!--  add comment text-->
                <div class="form-group">
                    <textarea class="form-control" id="postbodytextarea"  name="postbody"></textarea>
                </div>
                <!--  upload img to explain the case of patient-->
                <div class="upload-img">
                    <div class="img-comment-upload"></div>
                    <div class="">
                        <button class="btn btn-primary uploadimg-bt">Upload Image</button>
                        <input type="file" id="file" accept="image/*" name="image[]" style="display: none;" multiple >
                    </div>
               </div>
               <!--  to sent the comment -->
               <button type="submit" class="btn btn-primary add-post-submit">Ask</button>
                <input type="hidden"  value="{{Session::token()}}" name="_token">
               <div class="clearfix"></div>
            </form>
        </div>
           

             @if(isset($allpost))
             @if(count($allpost) >0)
                 @foreach($allpost as $post)
        <div class="comment-replay row allpost">
            <!-- details of the person put post-->
            <div class="col-2 text-center">
                <div>
                    
                    <img class="person_comment_img rounded-circle" src="{{ asset('publicimages/'.$post->image) }}">
                    <div class="text-center person_name">{{$post->fristname. " ".$post->lastname}}</div>
                    
                </div>
            </div>
               
            <div class="col-10">
                @if($post->id_user_post == auth()->user()->id || auth()->user()->role=="Admin")
                <div class="stting"> <i class="fas fa-ellipsis-v"></i></div>
                @endif
                <div class="stting-content">
                   @if( $post->id_user_post == auth()->user()->id )
                     <p href="" class="update-doctor editspan">Edit</p>
                     @endif
                     <a href="#" id="{{ $post->id }}"  class="deletespan" >delete</a>
                </div>
                <p class="postbody">{{$post->body}}</p> 
                <span class="idpost-span hide">{{ $post->id }}</span>
                @php
                   $arrdate =explode(" ",$post->created_at_post);
                @endphp
                 <span class="datepost">{{ $arrdate[0] }}</span>
                @if(isset($post->imagepost))
                @foreach(explode(',',$post->imagepost) as $img)

                    <img class="replay-image" src="{{ asset('publicimages/' .$img) }}">
                @endforeach
                 @endif
                

                <!-- interaction  like comment -->
                <div class="interaction">
                <!--    <div class="interaction-like">

                    
                      <a href="" id="like-action"> <span ></span>
                          <span class="id_post-like"></span>
                        <i class="fas fa-thumbs-up"></i>
                          like</a>
                    </div>-->

                    <div class="interaction-comment">  
                            <p href="#" class="showcomment"><i class="fas fa-comment-alt"></i>  comment </p>

                    </div>


                </div>



                <!--make replay for cooment -->
                <div class="make-replayied">
                    <form action="{{route('savecomments')}}" enctype="multipart/form-data" method="post" id="form-data-comment">
                        {{csrf_field()}}
                        
                        <div class="form-group">
                            <input  type="hidden" class="form-control" rows="1" name="postid" value="{{$post->id}}">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="1" name="commentbody"></textarea>
                        </div>

                        <!--  upload img to explain the case of patient-->
                        <div class="replay-upload-img">
                            <div class="img-make-replay-upload"></div>
                            <div class="make-replay-uploadimg-div">
                                <button class="btn btn-primary make-replay-uploadimg-bt">
                                    <i class="fas fa-camera"></i>
                                </button>
                                <input type="file" class="make-replay-file" accept="image/*" style="display: none;" multiple name="imagescomment[]">
                            </div>
                        </div>
                        <!--  to sent the comment -->
                        <div class="make-replayied-send">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                            </button>
                        </div>
                    </form>
                </div>

            
                @if(count($allcomment) > 0 )
                    @foreach($allcomment as $comment)

                            @if($post->id == $comment->id_post )

                <!--  replayied comment -->
                <div class="all">
                    <div class="comments hide">
                        <p class="hide">dddd<p>
                         <span class="postidshowcomment hide">{{ $post->id }}<span>
                        <div class="row">
                            <div class="col-2" style="float: left;">
                                <div class="text-center">
                                    <img class="person_comment_img rounded-circle" src="{{ asset('publicimages/'.$comment->image) }}">
                                    <div class="person_name" >{{$comment->fristname}} {{$comment->lastname}}</div>
                                </div>
                                    
                            </div>
                            <div class="col-10" style="float: left;">
                               
                                @if($comment->id_user_comment == auth()->user()->id || auth()->user()->role=="Admin")
                                <div class="sttingcomment"> <i class="fas fa-ellipsis-v"></i></div>
                                 @endif
                                <div class="stting-content-comment">
                                    @if( $comment->id_user_comment == auth()->user()->id )
                                 <p  class="update-doctor edit-comment">Edit</p>
                                 @endif
                                 <a href="#" id="{{ $comment->idcom }}"  class="deletespancomment" >delete</a>
                               </div>
                                <!--  text replay -->
                                <p>{{ $comment->bodycomment }}</p>
                                <span class="spanidcomment hide">{{ $comment->idcom }}</span>
                                @if(isset($comment->imagecomment))
                                @foreach(explode(',',$comment->imagecomment) as $img)
                                <img class="replay-image" src=" {{ asset('publicimages/'. $img) }}">
                                @endforeach
                                @endif
                                <!-- interaction replay like comment -->
                               <!--<div class="interaction-replay">
                                    <div class="interaction-like">
                                        <span>0</span>
                                        <i class="fas fa-thumbs-up"></i>
                                        like
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                           @endif
                        @endforeach
                    @endif
                

            </div>


        </div>

            @endforeach
        @endif
    @endif

        <!-- delete-->
        
        <div>
               
            {{ $allpost->render()}}
        </div>
         
        <div class="showpostforedit">
               <form method="post" enctype="multipart/form-data" id="editpostform" action="{{ route('updatedpost') }}">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <input class="form-control" id="postbodytextarea" type="text" name="postbodyedit">
                </div>
                <div class="form-group">
                    <input class="form-control" id="postidedit" type="hidden" name="id">
                </div>
                <button type="submit" class="btn btn-primary edit-post-submit">Edit Post</button>
                
               </form>
               <span aria-hidden="true" id="cancle">&times;</span>
        </div>

        <!--delete show model-->
          
        <div class="showpostfordelete">
            <form method="post" enctype="multipart/form-data" id="deletpostform" action="{{ route('deletepost') }}">
             {{ csrf_field() }}
            
            <h3>Do you sure delete this post?</h3>
             <div class="form-group">
                 <input class="form-control" id="postiddelete" type="text" name="id">
             </div>
             <button type="submit" class="btn btn-primary delete-post-submit">Delete Post</button>
             <button type="button" class="btn btn-primary cancle-post-submit">cancle</button>
             
            </form>
            <span aria-hidden="true" id="cancle">&times;</span>
     </div>

     <div class="showcommentforedit">
        <form method="post" enctype="multipart/form-data" id="editpostform" action="{{ route("updatecomment") }}">
         {{ csrf_field() }}
         
         <div class="form-group">
             <input class="form-control" id="commentbodytextarea" type="text" name="commentbodyedit">
         </div>
         <div class="form-group">
             <input class="form-control" id="commentidedit" type="hidden" name="id">
         </div>
         <button type="submit" class="btn btn-primary edit-comment-submit">Edit Comment</button>
         
        </form>
        <span aria-hidden="true" id="cancle">&times;</span>
 </div>

 <div class="showcommentfordelete">
    <form method="post" enctype="multipart/form-data" id="deletpostform" action="{{ route('deletecomment') }}">
     {{ csrf_field() }}
    
    <h3>Do you sure delete this post?</h3>
     <div class="form-group">
         <input class="form-control" id="commentiddelete" type="text" name="id">
     </div>
     <button type="submit" class="btn btn-primary delete-comment-submit">Delete Post</button>
     <button type="button" class="btn btn-primary cancle-comment-submit">cancle</button>
     
    </form>
    <span aria-hidden="true" id="cancle">&times;</span>
</div>
       

       <div class="showimg">
           <img src="">
           <span aria-hidden="true" id="cancle">&times;</span>
       </div>

    </div>
          
      





    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/co.js') }}"></script>
   

            <script>
                /*$('#form-data').submit(function (e) {
                      //   e.preventDefault();
                         var route='/saveposts';
                    $.ajax({
                        type:'post',
                        url:route,
                        data:$(this).serialize(),
                        success:function () {
                            alert("post update");
                            location.reload();
                        }
                    });
                });*/

               /* $('#like-action').click(function (e) {
                    //   e.preventDefault();
                    var route='/likes';
                    var id_post= $("#id_post-like").text();
                    var status_like=false;
                    if(id_post){
                         status_like= true;
                    }*/

                               /*  start update post*/

               /* $('#editpostform').on("submit",function (e){
                          alert("sddddddddddddd");
                          var idpost= $("#postidedit").val();
                    $.ajax({
                        type:'PUT',
                        url:"/updatedpost/"+idpost,
                        data:$(this).serialize(),
                        success:function (respos) {
                            $(".showpostforedit").slideUp("500");
                            console.log('okkk'+ respos);
                        }
                    });
                });*/
                
                               
                             




                              /*  end update post*/
                    

               
            </script>
</body>
</html>
