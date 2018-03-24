var currentPlaylist = [];
var audioElement;



function Audio() {
	
	this.currentlyPlaying;
	//creating HTML element
	this.audio = document.createElement('audio');	

	this.audio.addEventListener("canplay", function() {
		//referring to the obj the event was called on
		$(".progressTime.remaining").text(this.duration);
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