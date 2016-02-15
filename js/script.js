$(document).ready(function(){

    $(".login-input, .user-adress").addClass("hidden");
    
    $(".log-in").click(function(){
       $(".login-input").toggleClass("hidden", "visible");
    });              
    
    $('#without-log-in').click(function(){
         $('.user-adress').toggleClass("hidden", "visible")
    });
    
});




