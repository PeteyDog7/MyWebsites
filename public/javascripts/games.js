$(document).ready(function(){
    console.log(260%10);
    console.log(460%10);
    console.log(465%10);
    //Mario
    var marioHeight = 0;
    var marioWidth = 0;
        $(document).keyup(function(key) {
        switch(parseInt(key.which,10)) {
			// Left Arrow Pressed
			case 37:
				if(marioWidth>0){
					$('#mario').animate({left: "-=10px"}, 'fast');
					marioWidth-=10;
					console.log(marioWidth);
				}
			break;
			// Up Arrow Pressed
			case 38:
				if(marioHeight>0){
					$('#mario').animate({top: "-=10px"}, 'fast');
					marioHeight-=10;
					console.log(marioHeight);
				}
			break;
			// Right Arrow Pressed
			case 39:
				if(marioWidth<460){
					$('#mario').animate({left: "+=10px"}, 'fast');
					marioWidth+=10;
					console.log(marioWidth);
				}
			break;
			// Down Arrow Pressed
			case 40:
				if(marioHeight<260){
					$('#mario').animate({top: "+=10px"}, 'fast');
					marioHeight+=10;
					console.log(marioHeight);
				}
			break;
		}
	});
});
/*
Test
case 37:
if(marioWidth>0){
$("#mario").css("margin",marioWidth)
marioWidth+=5
break;
*/