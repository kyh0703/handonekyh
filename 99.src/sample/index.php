<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />
    <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <link href="https://unpkg.com/@silvermine/videojs-quality-selector/dist/css/quality-selector.css" rel="stylesheet">
    <script src="https://unpkg.com/@silvermine/videojs-quality-selector/dist/js/silvermine-videojs-quality-selector.min.js"> </script>
    <title>video.js</title>
</head>

<body>

    <video id="myPlayer" class="video-js vjs-default-skin" webkit-playsinline></video>

    <script>
    let options = {
        sources: [{
            src: "/video/test.mp4",
            type: "video/mp4"
        }],
        poster: "image",
        controls: true,
        preload: "auto",
        width: 540,
        height: 320,
        controlBar: {
            playToggle: true,
            pictureInPictureToggle: false,
            remainingTimeDisplay: true,
            progressControl: true,
            qualitySelector: true,
            timeControl: true,
        }
    };

    var player = videojs('myPlayer', options);
    player.src([{
        src: '/video/test.mp4',
        type: 'video/mp4',
        label: '480P',
    }, ]);

    player.setInterval(function() {
        var play_rate = player.currentTime() / player.duration() * 100;
        if (80 < play_rate) {
            onplay(play_rate);
        }
    }, 10000)

    function onplay() {
        alert("80프로다")
    }
    </script>
</body>

</html>