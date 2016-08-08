<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page </title>
    <script src="https://simplewebrtc.com/latest-v2.js"></script>
    <script src="https://cdn.webrtc-experiment.com/socket.io.js"> </script>
    <script src="https://cdn.webrtc-experiment.com/RTCPeerConnection-v1.5.js"> </script>
    <script src="https://cdn.webrtc-experiment.com/video-conferencing/conference.js"> </script>


</head>
<body>





<button id="setup-new-room">Setup New Conference</button>

<video style="width: 100%;" id="rooms-list"></video>
<div id="videos-container"></div>

<script>
var config = {
openSocket: function (config) {
var SIGNALING_SERVER = 'https://socketio-signaling.herokuapp.com/',
defaultChannel = location.href.replace(/\/|:|#|%|\.|\[|\]/g, '');

var channel = config.channel || defaultChannel;
var sender = Math.round(Math.random() * 999999999) + 999999999;

io.connect(SIGNALING_SERVER).emit('new-channel', {
channel: channel,
sender: sender
});

var socket = io.connect(SIGNALING_SERVER + channel);
socket.channel = channel;
socket.on('connect', function () {
if (config.callback) config.callback(socket);
});

socket.send = function (message) {
socket.emit('message', {
sender: sender,
data: message
});
};

socket.on('message', config.onmessage);
},
onRemoteStream: function (media) {
var video = media.video;
video.setAttribute('controls', true);
video.setAttribute('id', media.stream.id);
videosContainer.insertBefore(video, videosContainer.firstChild);
video.play();
},
onRemoteStreamEnded: function (stream) {
var video = document.getElementById(stream.id);
if (video) video.parentNode.removeChild(video);
},
onRoomFound: function (room) {
var alreadyExist = document.querySelector('button[data-broadcaster="' + room.broadcaster + '"]');
if (alreadyExist) return;

var tr = document.createElement('tr');
tr.innerHTML = '<td><strong>' + room.roomName + '</strong> shared a conferencing room with you!</td>' +
'<td><button class="join">Join</button></td>';
roomsList.insertBefore(tr, roomsList.firstChild);

var joinRoomButton = tr.querySelector('.join');
joinRoomButton.setAttribute('data-broadcaster', room.broadcaster);
joinRoomButton.setAttribute('data-roomToken', room.broadcaster);
joinRoomButton.onclick = function () {
this.disabled = true;

var broadcaster = this.getAttribute('data-broadcaster');
var roomToken = this.getAttribute('data-roomToken');
captureUserMedia(function () {
conferenceUI.joinRoom({
roomToken: roomToken,
joinUser: broadcaster
});
});
};
}
};

var conferenceUI = conference(config);
var videosContainer = document.getElementById('videos-container') || document.body;
var roomsList = document.getElementById('rooms-list');

document.getElementById('setup-new-room').onclick = function () {
this.disabled = true;
captureUserMedia(function () {
conferenceUI.createRoom({
roomName: 'Anonymous'
});
});
};

function captureUserMedia(callback) {
var video = document.createElement('video');
video.setAttribute('autoplay', true);
video.setAttribute('controls', true);
videosContainer.insertBefore(video, videosContainer.firstChild);

getUserMedia({
video: video,
onsuccess: function (stream) {
config.attachStream = stream;
video.setAttribute('muted', true);
callback();
}
});
}


</script>

</body>
</html>