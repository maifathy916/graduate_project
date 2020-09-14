$(function(){


    $(".nav-item").click(function(){
        $(".nav-item").removeClass("active");
        $(this).addClass("active");
    });
    $(window).scroll(function(){
        var scroll_top=$(window).scrollTop();
        if(scroll_top >= $(".carousel").offset().top+100){
            $(".chosimg-div").animate({"top":"0px"},2000)
        }


        if(scroll_top>= $(".ask_back").offset().top-220  && scroll_top<= $(".ask_back").offset().top+outerHeight-450){
            $(".nav-item").removeClass("active");
            $(".nav-item:eq(1)").addClass("active");
            $(".service-div").animate({"left":"0px","top":"0px"},2000);
        }else if(scroll_top >= $(".dental_services").offset().top-200 && scroll_top <= $(".dental_services").offset().top+outerHeight){
           $(".nav-item").removeClass("active");
           $(".nav-item:eq(2)").addClass("active");
            $(".feature-div").animate({"bottom":"0px"},2000);

        }else if(scroll_top >= $("#our-doctors").offset().top-80 && scroll_top <= $("#our-doctors").offset().top+outerHeight){
           $(".nav-item").removeClass("active");
           $(".nav-item:eq(3)").addClass("active");

        }else{
           $(".nav-item").removeClass("active");
           $(".nav-item:eq(0)").addClass("active");
        }

        if(scroll_top >= $("#our-doctors").offset().top-300 ){
            $(".ourdoc-div").animate({"left":"0px","right":"0px"},2000);

        }

    });


     ///   service detail show
    $(".service-div").click(function(){
        $(".service-detial").css({"display":"block"});
        var ch1=$(this).children().eq(0);
        var ch2=$(this).children().eq(1);
        var ch3=$(this).children().eq(3);
        $(".service-detial .detial-img").attr("src",ch1.attr("src"));
        $(".service-detial h4").text(ch2.text());
        $(".service-detial .p1").text(ch3.text());
    });

    $(".service-detial-exit").click(function(){
        $(".service-detial").css({"display":"none"});
    });

    $(window).scroll(function () {
        var scroll_top=$(window).scrollTop();
       if(scroll_top >= $(".ask_back").offset().top){
           $(".arrow-top").fadeIn(1000);
       }else {
           $(".arrow-top").fadeOut(1000);
       }
    });

    $(".arrow-top").click(function () {
       document.body.scrollTop=0;


        $("body").animate({scrollTop:0},500);


    });

    $(".stting").click(function(){
        var bro=$(this).siblings(".stting-content").eq(0);
        bro.toggle(100);
    });
       
    $(".cancel").click(function(){
        $("#divmid-doctor").hide(500);
    });
    $(".update-doctor").click(function(){
        var bro=$(this).parent();
        bro.hide(100);
        $("#divmid-doctor").fadeIn(500);
        var img=$(this).parent().parent().children().eq(0).attr("src");
        var fullname=$(this).parent().parent().children().eq(1).children().eq(0).text();   var name =[]; name =fullname.split(" ");
        var adress=$(this).parent().parent().children().eq(1).children().eq(1).children().eq(0).text();
        var phone=$(this).parent().parent().children().eq(1).children().eq(1).children().eq(2).text();
        var email=$(this).parent().parent().children().eq(1).children().eq(1).children().eq(4).text();
        var description=$(this).parent().parent().children().eq(1).children().eq(1).children().eq(6).text();
        var id=$(this).parent().children().eq(0).text();
          console.log(img);
          $("#imgg").attr("src",img);
        $(".fname-input").val(name[0]);
        $(".lname-input").val(name[1]);
        $(".email-input1").val(email);
        $(".phone-input").val(phone);
        $(".adressdoctor").val(adress);
        $(".descripe-input").text(description);
        $(".id-input").val(id);
        
        if ( $('.email-input1 ,.email-input, .fname-input, .lname-input ,.descripe-input, .phone-input').val() != '') {
            $('.fname-char').css({'color':'#007BFF'});
            $('.fname-char').animate({'top':'9px'},500);
            $('.lname-char').css({'color':'#007BFF'});
            $('.lname-char').animate({'top':'9px'},500);
            $('.email-char1, .email-char').css({'color':'#007BFF'});
            $('.email-char1 , .email-char').animate({'top':'9px'},500);
            $('.descripe-char').css({'color':'#007BFF'});
            $('.descripe-char').animate({'top':'9px'},500);
            $('.descripe-char').text('Description');
            $('.phone-char').css({'color':'#007BFF'});
            $('.phone-char').animate({'top':'9px'},500);
            $('.descripe-char').css({'color':'#007BFF'});
            $('.descripe-char').animate({'top':'9px'},500);
            $('.descripe-char').text('Description');
        }
  
    });
   



});



