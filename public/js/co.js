/* upload img in main comment */

$('.uploadimg-bt').on('click',function(){
    $('#file').click();
    return false;
});

$('#file').on('change',function(){
    var input=this;
    if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $item=$("<img>");
                $item.attr('src',e.target.result).width(150).height(130);        
                $(".img-comment-upload").append($item);
            }
            reader.readAsDataURL(input.files[i]);
        }
    }  
});
/* upload img to make replay to main comment */

$('.make-replay-uploadimg-bt').on('click',function(){
    $('.make-replay-file').click();
    return false;
});

$('.make-replay-file').on('change',function(){
    var input=this;
    if (input.files) {
        var filesAmount = input.files.length;
        for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $item=$("<img>");
                $item.attr('src',e.target.result).width(150).height(130);
                $('.make-replay-file').parent().parent().append($item);
            }
            reader.readAsDataURL(input.files[i]);
        }
    }  
});
//  make textarea dinamic with line
$("textarea").on('input', function() {
    this.style.height = "";
    this.style.height = Math.min(this.scrollHeight) + "px";
});

$('.interaction-like').on('click',function(){
    $color = $(this).css('color');
    if($color=='rgb(0, 0, 255)'){
      
        $(this).css({'color':''});
    }else{
       
        $(this).css({'color':'blue'});
    }
    
});

$('.interaction-comment').click(function(){
    $s= $(this).parent().parent().children('.all').children().length; ;
    console.log($s);
    $(this).children('span').text($s);
})

$(".editspan").click(function(e){
    $(".showpostforedit").slideDown("500");

     
   var p= $(this).parent().parent().children().eq(2).text();
   var p1= $(this).parent().parent().children().eq(3).text();
   $("#postidedit").val(p1);
   console.log(p);
     $(".showpostforedit #postbodytextarea").val(p);
    
});


$(".edit-comment").click(function(e){
    $(".showcommentforedit").slideDown("500");

     
   var p= $(this).parent().parent().children().eq(2).text();
   var p1= $(this).parent().parent().children().eq(3).text();
   $("#commentidedit").val(p1);
   console.log(p);
     $(".showcommentforedit #commentbodytextarea").val(p);
    
});

$(".showpostforedit #cancle").click(function(){
       $(".showpostforedit").slideUp("500");
});

$(".showpostfordelete #cancle ").click(function(){
    $(".showpostfordelete").slideUp("500");
});

$(".showcommentfordelete #cancle ").click(function(){
    $(".showcommentfordelete").slideUp("500");
});
$(".showcommentforedit #cancle ").click(function(){
    $(".showcommentforedit").slideUp("500");
});
$(".showcommentfordelete #cancle ").click(function(){
    $(".showcommentfordelete").slideUp("500");
});
$(".deletespan").click(function(e){
    $(".showpostfordelete").slideDown();("500");

     
   var p= $(this).attr("id");
   $("#postiddelete").val(p);
   
    
});

$(".deletespancomment").click(function(e){
    $(".showcommentfordelete").slideDown("500");

     
   var p= $(this).attr("id");
   $("#commentiddelete").val(p);
   
    
});


 $(".cancle-post-submit").on("click",function(){
    $(".showcommentfordelete").slideUp();("500");
 });

 $(".cancle-post-submit").on("click",function(){
    $(".showcommentfordelete").slideUp("500");
 });
 $(".stting").click(function(){
    var bro=$(this).siblings(".stting-content").eq(0);
    bro.toggle(100);
});
 
$(".sttingcomment").click(function(){
    var bro=$(this).siblings(".stting-content-comment").eq(0);
    bro.toggle(100);
});

$(".showcomment").click(function(){
  //var el=  $(this).parent().parent().parent().children().eq(7).children().eq(0);
  //var el  =$(this).parent().parent().after('.all.comments');
  var el  =$(this).parent().parent().siblings('.all').children().eq(0);
  console.log(el);
     el.slideToggle("500");
});


//********************* */
$(".showimg #cancle").on("click",function(){
    $(".showimg").slideUp();("500");
 });

 $("img").on("click",function(){
    $(".showimg").slideDown("500");
    var srcimg = $(this).attr("src");
     $(".showimg img").attr("src",srcimg);

 });