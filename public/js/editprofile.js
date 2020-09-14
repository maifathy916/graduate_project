$(function(){
    /* to show img upload in img tag */
    $('.photo-btn').on('click',function(){
        $('#file').click();
        return false;
    });
    $('.uploadfile').on('change',function(){
        console.log('ho');
        var input=this
        if(input.files ){
              console.log('ho');
            var reader=new FileReader();
            reader.onload=function(e){
                $('#imgg').attr('src',e.target.result).width(200).height(190);

            };
            reader.readAsDataURL(input.files[0]);
        }    
    });
    
    
  
    
});



