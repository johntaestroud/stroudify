function Audio() {
	
	this.currentlyPlaying;
	//creating HTML element
	this.audio = document.createElement('audio');	

	this.setTrack = function(src) {
		this.audio.src = src; 
	}
}