$(document).ready(function(){
	alert("Test Alert");
	$("#second").hide();
	$("#playTracks").hide();
	$("#playWarning").hide();
	$("#player").hide();
	$("#player1").hide();
	$("#poweredBySC").hide();
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
	SC.initialize({
			client_id: '919e741da6fbdf066ac2baae9507e81a',
			redirect_uri: 'https://googledrive.com/host/0ByK1P866EEnXSldSTVJnUmNOOTQ/callback.html'
	});
	$('a.connect').click(function(e) {
		e.preventDefault();
		$("#playTracks").show();
		$("#playWarning").show();
		$("#poweredBySC").show();
		SC.connect(function(){
		SC.get('/me',function(me){
		$('#username').html(me.username);
		alert('Hello, ' + me.username);
		});
		});
    });
	$('a.playATrack').click(function(e) {
		e.preventDefault();
		alert("Sorry for the inconvenience.\nThis function is still a Work in Progress and the script is not fully functional yet.");
		/*$("#player").show();
		$("#player1").hide();
		SC.get('/me/favorites', function(favorites){
			var random = Math.floor(Math.random()*4);
			var randomUser = favorites[random].user_id;
			SC.get('/user/{randomUser}/tracks'
			,function(tracks){
			console.log(SC.get('/user/{randomUser}/tracks'));
			console.log(tracks);
			console.log(favorites[random].user_id);
			console.log(tracks[random].uri);
			SC.oEmbed(tracks[random].uri, {
				auto_play: true,
				show_comments: false,
				maxheight: 250,
				maxwidth: 900
			}, document.getElementById('player2'));
			});
		});*/
		});
	$('a.playAFavTrack').click(function(e) {
		e.preventDefault();
		$("#player1").show();
		$("#player").hide();
		SC.get('/me/favorites', function(favorites){
			var random = Math.floor(Math.random()*9);
			console.log("favorites.length");
			SC.oEmbed(favorites[random].uri, {
				auto_play: true,
				show_comments: false,
				maxheight: 250,
				maxwidth: 900
			}, document.getElementById('player1'));
		});
		});
	});