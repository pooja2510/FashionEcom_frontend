$(document).ready(function(){
   $(".wishlist-heart").on('click',function(){
       $(this).hide();
       $(this).siblings(".wishlist-heart2").css("display","block");
   });
    
   $(".wishlist-heart2").on('click',function(){
      $(this).hide();
       $(this).siblings(".wishlist-heart").show();     
   });
});