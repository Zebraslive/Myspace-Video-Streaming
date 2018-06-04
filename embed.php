<?php
require 'mystream.php';
$myspacelink = isset($_GET['url']) && !empty($_GET['url']) ? $_GET['url'] : "https://myspace.com/cypher.sessions/video/cypher-sessions-chaz/109878898";
$vlink = myStream($myspacelink); //direct mp4
$posterimg = grabImg($myspacelink);
?>
<!DOCTYPE html>
<html >
   <head>
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/video.js/5.11.9/video-js.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {margin:0px !important; border-radius:0px !important; padding:0px !important;}
    .video-js .vjs-menu-button-inline.vjs-slider-active,.video-js .vjs-menu-button-inline:focus,.video-js .vjs-menu-button-inline:hover,.video-js.vjs-no-flex .vjs-menu-button-inline{width:10em}.video-js .vjs-controls-disabled .vjs-big-play-button{display:none!important}.video-js .vjs-control{width:4em}.video-js .vjs-menu-button-inline:before{width:1.5em}.vjs-menu-button-inline .vjs-menu{left:3em}.video-js .vjs-load-progress div,.vjs-seeking .vjs-big-play-button,.vjs-waiting .vjs-big-play-button{display:none!important}.video-js .vjs-mouse-display:after,.video-js .vjs-play-progress:after{padding:0 .4em .3em}.video-js.vjs-ended .vjs-loading-spinner{display:none}.video-js.vjs-ended .vjs-big-play-button{display:block!important}.video-js.vjs-paused .vjs-big-play-button,.vjs-paused.vjs-has-started.video-js .vjs-big-play-button,video-js.vjs-ended .vjs-big-play-button{display:block}.video-js .vjs-big-play-button{top:50%;left:50%;background-color:rgba(151,72,189,.84);font-size:2.5em;border-radius:50%}.video-js .vjs-big-play-button:active,.video-js .vjs-big-play-button:focus,.video-js .vjs-loading-spinner{border-color:#2c97de}.video-js .vjs-control-bar2{background-color:#72169e}.video-js .vjs-control-bar{background-color:rgba(114,22,158,.14)!important;color:#fff;font-size:17px}.video-js .vjs-play-progress,.video-js .vjs-volume-level{background-color:#802fbf}.video-js .vjs-big-play-button{height:2em!important;width:2em!important;line-height:1.7em!important;margin-top:-1em!important;margin-left:-1em;border-width:4px}.video-js .vjs-big-play-button:before,.video-js .vjs-icon-play:before{font-size:40px}.video-js .vjs-progress-holder{font-size:1.7em;border-radius:10px}.video-js .vjs-progress-holder .vjs-load-progress,.video-js .vjs-progress-holder .vjs-load-progress div,.video-js .vjs-progress-holder .vjs-play-progress,.video-js .vjs-slider,.vjs-volume-level{border-radius:10px}.video-js .vjs-load-progress{background:rgba(255,255,255,.5)}.video-js,.video-js .vjs-tech,.video-js video,.vjs-poster{border-radius:8px}
    #vjs-image-overlay-holder { -webkit-transition: all 0.2s linear; transition: all 0.2s linear; height:auto !important;
    width: 100%; opacity:0;
    max-width: 250px;
    margin-left: 5px;
    margin-top: 5px;
    }
   #vjs-image-overlay-holder img {opacity: 0.6;
    max-width: 309px; height: auto !important;
    width: 100%;
    float: left;}
    .vjs-control-bar:hover ~ #vjs-image-overlay-holder {
         opacity:1 !important; -webkit-transition: all 0.2s linear; transition: all 0.2s linear;
    }
    .vjs-menu-button-popup .vjs-menu {width:auto !important;}
    .video-js.vjs-has-started .vjs-poster {
  display: none !important;
}
    .video-js.vjs-has-ended .vjs-poster {
  display: none !important;
}
    .vjs-paused .vjs-poster {
    display:none !important;
}
    .video-js .vjs-control-bar {
        font-size:13px;
    }

    .vjs-looping .vjs-loading-spinner {
  display: none;
}
    .video-js, .video-js .vjs-tech, .video-js video, .vjs-poster {border-radius: 0px !important;} .video-js .vjs-play-progress, .video-js .vjs-volume-level {
    background-color: #2f65bf !important;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/5.11.9/ie8/videojs-ie8.min.js"></script>

</head>
<body>
     <video id="uniqueID" class="video-js vjs-fluid vjs-16-9" controls preload="auto" width="640" height="264" poster="<?php echo $posterimg; ?>" data-setup='{}'>
<source src="<?php echo $vlink; ?>" type="video/mp4" />

      </video>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- VIDEOJS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/5.11.9/video.min.js"></script>
    <script>
      $( document ).ready(function() {

        function InitializeIFrame() {
            document.body.getcss = true;
        }
videojs('uniqueID', {

    controls: true,
    plugins: {

    }
  }, function(){
    var player = this;
    window.player = player
 var pausetime = 600;
      player.on('seeking', function(e) {
  if(player.currentTime() === 0) {
    player.addClass('vjs-looping');
  }
})
player.on('playing', function(e) {
  if(player.currentTime() === 0) {
    player.removeClass('vjs-looping');
  }
})
    var xix = 0;


  })


          $(document).ready(function(){
    $('video').bind('contextmenu',function() { return false; });

});
        });
    </script>



</body>
</html>
