function iniciar() {
    video=document.getElementById('slider-video');
    video.addEventListener('ended',reproducir1,false);
    //video.addEventListener('ended',reproducir2,false);
    }

    function reproducir1() {
    video.setAttribute('src', 'images/video2.mp4');
    video.addEventListener('ended',reproducir2,false);
    }
    function reproducir2() {
    video.setAttribute('src', 'images/video3.mp4');
    video.addEventListener('ended',reproducir3,false);
    }
    function reproducir3() {
    video.setAttribute('src', 'images/video4.mp4');
    video.addEventListener('ended',reproducir4,false);
    }
    function reproducir4() {
    video.setAttribute('src', 'images/video5.mp4');
    video.addEventListener('ended',reproducir5,false);
    }
    function reproducir5() {
    video.setAttribute('src', 'images/video6.mp4');
    video.addEventListener('ended',reproducir6,false);
    }
    function reproducir6() {
    video.setAttribute('src', 'images/video7.mp4');
    video.addEventListener('ended',reproducir1,false);
    }
    window.addEventListener('load',iniciar,false);