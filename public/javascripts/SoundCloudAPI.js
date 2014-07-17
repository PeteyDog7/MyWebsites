alert("Sorry for the inconvenience.\nThe SoundCloud API does not work on the current host so you will be redirected back to the homepage.");
$(document).ready(function(){
	$("#playTracks,#playWarning,#player,#player1,#poweredBySC,#SCwelcome").hide();
	/*SC.initialize({
			client_id: '919e741da6fbdf066ac2baae9507e81a',
			redirect_uri: 'https://googledrive.com/host/0ByK1P866EEnXSldSTVJnUmNOOTQ/callback.html'
	});
	$('a.connect').click(function(e) {
		e.preventDefault();
		$("#playTracks,#playWarning,#poweredBySC,#SCwelcome").show();
		SC.connect(function(){
		SC.get('/me',function(me){
		$('#username').html(me.username);
		alert('Hello, ' + me.username);
		});
		});
    });
	$('a.playATrack').click(function(e) {
		e.preventDefault();
		alert("Sorry for the inconvenience.\nThis function does not work on the current host.");
		$("#player").show();
		$("#player1").hide();
		SC.get('/me/favorites', function(favorites){
			var random = Math.floor(Math.random()*4);
			var favUser = favorites[random].id;
			SC.get('/users/'+favUser+'/tracks',function(tracks){
			SC.oEmbed(tracks[random].uri, {
				auto_play: true,
				show_comments: false,
				maxheight: 250,
				maxwidth: 750
			}, document.getElementById('player'));
			});
		});
	});
	$('a.playAFavTrack').click(function(e) {
		e.preventDefault();
		$("#player").hide();
		SC.get('/me/favorites', function(favorites,errors){
            if(errors){alert("An error has occured!\nPlease make sure you are connected to SoundCloud before you try again.")}
			var random = Math.floor(Math.random()*9);
			$("#player1").show();
			SC.oEmbed(favorites[random].uri, {
				auto_play: true,
				show_comments: false,
				maxheight: 250,
				maxwidth: 900
			}, document.getElementById('player1'));
		});
		});*/
});