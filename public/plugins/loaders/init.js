$(window).on('load', function() {
   
    $(".loader-overlay").fadeOut("slow", function() {
        $("#content").fadeIn("slow");
    });
});