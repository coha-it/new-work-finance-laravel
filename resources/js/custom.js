// Polling for the sake of my intern tests
var interval = setInterval(function() {
    if(document.readyState === 'complete') {
        clearInterval(interval);
        // Load Video
        initAll();
    }
}, 100);

function initAll() {
    initVideos();
}

function initVideos() {
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
    $('video[autoplay]').each(function(i, video) {
        var $vid = $(video);
        var vid = $vid[0];
        $vid.off('ended');
        vid.load();
        vid.play();
    });
};