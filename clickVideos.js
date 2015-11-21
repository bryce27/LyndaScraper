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
    }, 10000);
}

playVideos();