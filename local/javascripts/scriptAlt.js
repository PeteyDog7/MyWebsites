$(document).ready(function(){
	alert("Test Alert");
	$("#second").hide();
	$(".playATrack").hide();
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
		$(".playATrack").show();
		SC.connect(function(){
		SC.get('/me',function(me){
		$('#username').html(me.username);
		alert('Hello, ' + me.username);
		});
		});
    });
	$('a.playATrack').click(function(e) {
		e.preventDefault();
		SC.get('/me/favorites', function(favorites){
			var random = Math.floor(Math.random()*4);
			SC.get('/tracks',{
				genres: favorites[random].genre,
				q: favorites[random].user_id}
			,function(tracks){
			console.log(tracks);
			console.log(favorites[random].genre);
			console.log(favorites[random].user_id);
			console.log(tracks[random].uri);
			SC.oEmbed(tracks[random].uri, {
				auto_play: true,
				show_comments: false,
				maxheight: 250,
				maxwidth: 750
			}, document.getElementById('player'));
			});
		});
		});
	});