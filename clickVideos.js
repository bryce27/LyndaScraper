var i = 0;

function clickPlay(){
	var playButtons = $('.video-cta');
	playButtons[i].click();
	i++;
}

function playVideos() {
    setTimeout(function () {
        clickPlay();
        playVideos();
    }, 5000); // Change this value to speed up or slow down the time interval
}

playVideos();