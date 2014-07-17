$(document).ready(function(){
	$("#second, #progressBar,.pb25,.pb50,.pb75,.pb100,.pbDisable,.pbAuto,.pbReset").hide();
	$("#first").click(function(){
		$(this).hide();
		$("#second").show();
	});
	$("#second").click(function(){
		$(this).hide();
		$("#first").show();
	});
	$(".coloredDivs").mouseenter(function(){
		$(this).animate({
				height: "+=25px",
				width: "+=25px"
				});
	});
	$(".coloredDivs").mouseleave(function(){
		$(this).animate({
			height: "-=25px",
			width: "-=25px"
			});
	});
	$(".coloredDivs").click(function(){
		$(this).fadeTo("slow",0);
	});
	$(".coloredDivs").dblclick(function(){
		$(this).fadeTo("slow",100);
	});
	$("#accordionMenu").accordion({collapsible: true, active: true});
	var pbVal = function(val){
        $("#progressBar").progressbar({value:val});
    };
	//Progress Bar
    var i;
    $("a.enablePB").click(function(e){
        e.preventDefault();
        $("#progressBar,.pb25,.pb50,.pb75,.pb100,.pbDisable,.pbAuto,.pbReset").show();
        $(".enablePB").hide();
        pbVal(0);
        i=0;
    });
    $("a.pbReset").click(function(e){
        e.preventDefault();
        pbVal(0);
        i=0;
    });
    $("a.pb25").click(function(e){
        e.preventDefault();
        pbVal(25);
        i=25;
    });
    $("a.pb50").click(function(e){
        e.preventDefault();
        pbVal(50);
        i=50;
    });
    $("a.pb75").click(function(e){
        e.preventDefault();
        pbVal(75);
        i=75;
    });
    $("a.pb100").click(function(e){
        e.preventDefault();
        pbVal(100);
        i=100;
    });
    $("a.pbAuto").click(function(e){
        e.preventDefault();
        var pbTimer = function(){
          if(i>=100){
            clearInterval(pbAutoTimer);
            pbAutoTimer=null;
          }
          pbVal(i);
          i+=1;
          console.log(i);
        };
        var pbAutoTimer = setInterval(function(){pbTimer()},50);
    });
    $("a.pbDisable").click(function(e){
        e.preventDefault();
        $("#progressBar,.pb25,.pb50,.pb75,.pb100,.pbDisable,.pbAuto,.pbReset").hide();
        $(".enablePB").show();
    });
});