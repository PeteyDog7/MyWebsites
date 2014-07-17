$(document).ready(function(){
    var myVar = setInterval(function(){myTimer()},1000);
    function myTimer(){
        var d = new Date();
        var t = d.toLocaleTimeString();
        document.getElementById("clock").innerHTML=t;
    }
});