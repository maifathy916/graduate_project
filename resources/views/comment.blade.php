<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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



       @extends('navbarextend');

    <div class="container">
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
           

            @endforeach
   @endif
@endif

   </div>

       

    </div>

</div>

    <!--/***********************************************************************************/-->


    <div class="container">
        @if(isset($allcomment))
        @if(count($allcomment) >0)
            @foreach($allcomment as $comment)
   <div class="comment-replay row allpost">
       <!-- details of the person put post-->
       <div class="col-2 text-center">
        
       </div>
          
       <div class="col-10">
          
           <p class="postbody">{{$comment->body}}</p> 
           <span class="idpost-span hide">{{ $comment->id }}</span>
           @php
              $arrdate =explode(" ",$comment->created_at_post);
           @endphp
            <span class="datepost">{{ $arrdate[0] }}</span>
           @if(isset($comment->imagepost))
           @foreach(explode(',',$comment->imagepost) as $img)

               <img class="replay-image" src="{{ asset('publicimages/' .$img) }}">
           @endforeach
            @endif
           
           
                   

           <!--  replayied comment -->
           <div class="all">
               <div class="comments">
                   
                   <div class="row">
                       <div class="col-2" style="float: left;">
                           <div class="text-center">
                               <img class="person_comment_img rounded-circle" src="{{ asset('publicimages/'.$comment->image) }}">
                               <div class="person_name" >{{$comment->fristname}} {{$comment->lastname}}</div>
                           </div>
                               
                       </div>
                       <div class="col-10" style="float: left;">
                          
                           <!--  text replay -->
                           <p>{{ $comment->bodycomment }}</p>
                           <span class="spanidcomment hide">{{ $comment->idcom }}</span>
                           @if(isset($comment->imagecomment))
                           @foreach(explode(',',$comment->imagecomment) as $img)
                           <img class="replay-image" src=" {{ asset('publicimages/'. $img) }}">
                           @endforeach
                           @endif
                          
                       </div>
                   </div>
               </div>
           </div>
                      
                   @endforeach
               @endif
               @endif

       </div>


   </div>

       

    </div>



    <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>

	<script src="{{ asset('js/co.js') }}"></script>
</body>
</html>
