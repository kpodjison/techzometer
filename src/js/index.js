$(document).ready(function(){
    // owl carousel 
    $("#banner-area .owl-carousel").owlCarousel({
        dots:true,
        items:1,
        loop:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true
    });


    // owl carousel 
    $("#hot-deals .owl-carousel").owlCarousel({
        nav:true,        
        dots:false,
        loop:true,
        margin: 10,
        responsive: {
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });


    // owl carousel 
    $("#coming-soon .owl-carousel").owlCarousel({
        nav:true,
        loop:true,
        margin: 10,
        responsive: {
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
    // owl carousel 
    $("#latest-blog .owl-carousel").owlCarousel({
        nav:true,
        loop:true,
        margin: 10,
        dots:false,
        responsive: {
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
    });

    /*Start of product page js*/
    //Toggle effect to display accessories content when accessories button is clicked
    
    $(".access-btn").on("click",function(){    
        $(".pull").each(function(){ 
            var value = $(this).css("display");            

            if(($(this).hasClass("content-access") == false) && value == "block"){
                $(this).slideUp("slow");  
                console.log("switched to accessories content");                  
            }               
        });
        $(".pdt-dtl-btn").each(function(){
            if($(this).hasClass("focus-btn") == true){
                $(this).removeClass("focus-btn");  
                console.log("class name removed");                  
            }
        });
        $("#unq_prdt").find(".content-access").slideToggle("slow");
        $(this).addClass("focus-btn");

    });

        //Toggle effect to display description content when description button is clicked
    
    $(".desc-btn").on("click",function(){    
        $(".pull").each(function(){ 
            var value = $(this).css("display");            

            if(($(this).hasClass("content-desc") == false) && value == "block"){
                $(this).slideUp("slow");  
                console.log("switched to description content");                  
            }               
        });
        $(".pdt-dtl-btn").each(function(){
            if($(this).hasClass("focus-btn") == true){
                $(this).removeClass("focus-btn");  
                console.log("class name removed");                  
            }
        });
        $("#unq_prdt").find(".content-desc").slideToggle("slow");
        $(this).addClass("focus-btn");

    });

            //Toggle effect to display specification content when specification button is clicked
    
    $(".specs-btn").on("click",function(){    
        $(".pull").each(function(){ 
            var value = $(this).css("display");            

            if(($(this).hasClass("content-specs") == false) && value == "block"){
                $(this).slideUp("slow");  
                console.log("switched to specification content");                  
            }               
        });
        $(".pdt-dtl-btn").each(function(){
            if($(this).hasClass("focus-btn") == true){
                $(this).removeClass("focus-btn");  
                console.log("class name removed");                  
            }
        });
        $("#unq_prdt").find(".content-specs").slideToggle("slow");
        $(this).addClass("focus-btn");

    });

        //Toggle effect to display reivews content when review button is clicked
    
    $(".rev-btn").on("click",function(){    
        $(".pull").each(function(){ 
            var value = $(this).css("display");            

            if(($(this).hasClass("content-reviews") == false) && value == "block"){
                $(this).slideUp("slow");  
                console.log("switched to reviews content");                  
            }               
        });
        $(".pdt-dtl-btn").each(function(){
            if($(this).hasClass("focus-btn") == true){
                $(this).removeClass("focus-btn");  
                console.log("class name removed");                  
            }
        });
        $("#unq_prdt").find(".content-reviews").slideToggle("slow");
        $(this).addClass("focus-btn");

    });
    
    //Focus effect to show selected color    
    $(".product-color-rbtn").on("click",function(){    
        $(".product-color-rbtn").each(function(){
            if($(this).hasClass("selected-color") == true){
                $(this).removeClass("selected-color");  
                console.log("class name removed");                  
            }
        });
        $(this).addClass("selected-color");
    });

    //Focus effect to show selected RAM size    
     $(".product-size-rbtn").on("click",function(){    
        $(".product-size-rbtn").each(function(){
            if($(this).hasClass("selected-size") == true){
                $(this).removeClass("selected-size");  
                console.log("class name removed");                  
            }
        });
        $(this).addClass("selected-size");
    });
    /* End of product page js*/
});
