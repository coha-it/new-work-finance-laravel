var iSize = 0;
var sAmazonAws = 'https://corporatehappiness.s3.eu-central-1.amazonaws.com/nwf/videos/';

// Polling for the sake of my intern tests
var interval = setInterval(function() {
    if(document.readyState === 'complete') {
        clearInterval(interval);
        // Load Video
        initAll();
    }
}, 100);

function initAll() {
    // initVideos();

    initResize();
}

function initResize () {
    $( window ).resize(function () {
        onResize();
    });
    onResize();
}

function onResize () {
    var w = window.innerWidth;

    switch (true) {
        case w <= 440:
            changeVideo(1, '3_mobile');
            break;
        case w <= 770:
            changeVideo(2, '2_tablet');
            break;
        default:
            changeVideo(3, '1_desktop');
            break;
    }
}

function changeVideo (iNew, sFilename){
    // Only if new is Bigger than the last size
    if(iNew > iSize) {
        // Change
        iSize = iNew;
        var sUrl = sAmazonAws+sFilename;
        var video = $('.coha-video');
        video.find('source[type="video/webm"]').attr('src', sUrl+'.webm');
        video.find('source[type="video/mp4"]' ).attr('src', sUrl+'.mp4');
        video.find('source[type="video/ogv"]' ).attr('src', sUrl+'.ogv');
        video.load();
    }
}

function initVideos () {
    // playVideo();
    // $('.jq-preload-video').each( (i,vid) => {
    //     $(vid).find('source').each( (j, source) => {
    //         var s = $(source);
    //         var url = s.attr('data-src');

    //         // Set URL
    //         s.attr('src', url);
    //     })
    // });
}


function playVideo () {
    // $('video[autoplay]').each(function(i, video) {
    //     var $vid = $(video);
    //     var vid = $vid[0];
    //     $vid.off('ended');
    //     vid.load();
    //     vid.play();
    // });
};
