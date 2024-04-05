document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('myVideo');

    video.addEventListener('ended', function() {
        video.pause();
    });
});