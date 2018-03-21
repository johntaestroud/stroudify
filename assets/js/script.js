var currentPlaylist = [];
var audioElement;



function Audio() {
	
	this.currentlyPlaying;
	//creating HTML element
	this.audio = document.createElement('audio');	

	this.setTrack = function(src) {
		this.audio.src = src; 
	}

	this.play = function() {
		this.audio.play();
	}

	this.pause = function() {
		this.audio.pause();
	}
}