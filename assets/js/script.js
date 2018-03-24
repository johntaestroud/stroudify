var currentPlaylist = [];
var audioElement;

function formatTime(seconds) {
	var time = Math.round(seconds);
	var minutes = Math.floor(time / 60); 
	var seconds = time - (minutes * 60);

	var extraZero = (seconds < 10) ? "0" : "";
	
	return minutes + ":" + extraZero + seconds;
}

function Audio() {
	
	this.currentlyPlaying;
	//creating HTML element
	this.audio = document.createElement('audio');	

	this.audio.addEventListener("canplay", function() {
		//referring to the obj the event was called on
		var duration = formatTime(this.duration)
		$(".progressTime.remaining").text(duration);
	});

	this.setTrack = function(track) {
		this.currentlyPlaying = track; //keeping track of the song currently playing everytime we set the track
		this.audio.src = track.path; //path is the name in the db 
	}

	this.play = function() {
		this.audio.play();
	}

	this.pause = function() {
		this.audio.pause();
	}
}