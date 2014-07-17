$(document).ready(function(){
    $("input").focus(function() {
        $(this).css("outline-color","#ff0000");
    });
    $(".globalNav").hover(
        function(){
            $(this).addClass('highlight');
        },
        function(){
            $(this).removeClass('highlight');
        }
    );
    $("a#SCLink").click(function(e){
        e.preventDefault;
        alert("Sorry for the inconvenience.\nThe SoundCloud API does not work on the current host so you can't acces this page.");
    });
});