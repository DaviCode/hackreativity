(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

  
  $(document).ready(function() {

    $('.collapsible').collapsible();
    $('.slider').slider({
        full_width: true
    });
    $('.materialboxed').materialbox();
});
    
$(document).ready(function() {
    $("#download-button").click(function(){
            var pre = "https://www.google.com/maps/embed/v1/search?key=AIzaSyCTjbj_bigtP6Tffc-fFm2HK62QEWmye9Q&q=riparazioni+caldaie+";
            $("#iframemap").attr("src", pre+$("#text").val());
    }); 
});
