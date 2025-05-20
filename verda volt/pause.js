
  function togglePlay() {
    const video = document.getElementById('interior');
    if (video.paused) {
      video.play();
    } else {
      video.pause();
    }
  }
