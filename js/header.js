//search icon
$(document).ready(function(){
   $(".navbar-search-icon").on('click',function(){
       $(".navbar-search-box").toggle("slow");  
   });
});

//responsive search icon
$(document).ready(function(){
   $(".search-responsivebar").on('click',function(){
       $(".responsive-navbar-search-box").toggle("slow");  
   });
});

//Sticky search icon
$(document).ready(function(){
   $(".sticky-navbar-searchicon").on('click',function(){
       $(".stickynavbar-searchbox").toggle();  
   });
});



//Clothing
$(document).ready(function(){
   $(".level0.nav-1").mouseover(function(){
       $(".nav-1 ul.level0").show();       
   });
    
   $(".level0.nav-1").mouseout(function(){
     $(".nav-1 ul.level0").hide();       
   });
});

//Accessories
$(document).ready(function(){
   $(".level0.nav-2").mouseover(function(){
       $(".nav-2 ul.level0").show();       
   });
    
    $(".level0.nav-2").mouseout(function(){
       $(".nav-2 ul.level0").hide();       
   });
});

//Accessories
//$(document).ready(function(){
 //  $(".level0.nav-3").mouseover(function(){
     //  $(".nav-3 ul.level0").show();       
  // });
    
   // $(".level0.nav-3").mouseout(function(){
   //    $(".nav-3 ul.level0").hide();       
  // });
//});

//Home Decor
$(document).ready(function(){
   $(".level0.nav-4").mouseover(function(){
       $(".nav-4 ul.level0").show();       
   });
    
    $(".level0.nav-4").mouseout(function(){
       $(".nav-4 ul.level0").hide();       
   });
});

//sale
$(document).ready(function(){
   $(".level0.nav-5").mouseover(function(){
       $(".nav-5 ul.level0").show();       
   });
    
    $(".level0.nav-5").mouseout(function(){
       $(".nav-5 ul.level0").hide();       
   });
});


$(document).ready(function(){
    var navOffset = jQuery("div.custom-navigation").offset().top;
    
    jQuery(window).scroll(function(){
        var scrollPos= jQuery(window).scrollTop();
        if(scrollPos >= navOffset){
            jQuery("div.custom-navigation").addClass("fixed");
        } else {
           jQuery("div.custom-navigation").removeClass("fixed");
        }
    });
    
})

$(document).ready(function(){
    var navOffset = jQuery("div.custom-navigation").offset().top;
    
    jQuery(window).scroll(function(){
        var scrollPos= jQuery(window).scrollTop();
        if(scrollPos >= navOffset){
          $(".nav-icon").show();
            $(".nav-logo img").show();
        } else {
           $(".nav-icon").hide();
            $(".nav-logo img").hide();
        }
    });
    
})

$(document).ready(function(){
    var navOffset = jQuery("div.custom-navigation").offset().top;
    
    jQuery(window).scroll(function(){
        var scrollPos= jQuery(window).scrollTop();
        if(scrollPos >= navOffset){
            jQuery("div.custom-navigation").addClass("fixed");
        } else {
           jQuery("div.custom-navigation").removeClass("fixed");
        }
    });
    
})
$(document).ready(function(){
    var navOffset = jQuery("div.sidebar-content1").offset().top;
    
    jQuery(window).scroll(function(){
        var scrollPos= jQuery(window).scrollTop();
        if(scrollPos >= navOffset){
            jQuery("div.sidebar-content1").addClass("fixed").css("transition","margin-top 0.5s ease 0.2s").css("margin-top","4rem");
        } else {
           jQuery("div.sidebar-content1").removeClass("fixed").css("transition","margin-top 0.5s ease 0.2s").css("margin-top","0rem");
        }
    });
    
})



