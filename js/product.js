$(document).ready(function(){
    $(".thumb-one-icon").on('click',function(){
       $(".xzoom-thumbs-one").css("display","none"); 
        $(".xzoom-thumbs-two").css("display","block");
    });
    $(".thumb-two-icon").on('click',function(){
       $(".xzoom-thumbs-two").css("display","none");
        $(".xzoom-thumbs-one").css("display","block");
    });
    
    
    $('.product-size li').click(function(e) {

        $('.product-size li').removeClass('active');

        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        //e.preventDefault();
    });  
});

function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('fa-plus fa-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);