$(document).ready(function(){
    $(".hidden-options").slideUp(0);  
    
    $(".more").on("click", function(){
        $(".hidden-options").slideToggle();  
    });
});