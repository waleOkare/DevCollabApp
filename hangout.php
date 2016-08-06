<!DOCTYPE html>
<html>
<head>
    <script src="https://simplewebrtc.com/latest-v2.js"></script>
    <style>
        #remoteVideos video {
            height: 150px;
        }
        #localVideo {
            height: 150px;
        }
    </style>
</head>
<body>



<video id="localVideo">

    <script type="application/javascript">
        var webrtc = new SimpleWebRTC({
            // the id/element dom element that will hold "our" video
            localVideoEl: 'localVideo',
            // the id/element dom element that will hold remote videos
            remoteVideosEl: 'remoteVideos',
            // immediately ask for camera access
            autoRequestMedia: true
        });

        // we have to wait until it's ready
        webrtc.on('readyToCall', function () {
            // you can name it anything
            webrtc.joinRoom('your awesome room name');
        });

    </script>



</video>

<div id="remoteVideos">








</div>








</body>
</html>