<!DOCTYPE html>
<!-- saved from url=(0049)http://rikdevos.com/demos/youtube-video-playlist/ -->
<html lang="en" class="gr__rikdevos_com"><head id="" data-template-set="html5-reset"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>SwingFish Live Trading Room - Free</title>
	<!-- <meta name="viewport" content="width=device-width, maximum-scale=1.0" /> -->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<!-- Open Sans -->
	<link href="./Modern Youtube Playlist Video Player_files/css" rel="stylesheet" type="text/css">
	 
	<!-- FontAwesome Icon Pack -->
	<link rel="stylesheet" type="text/css" media="screen" href="./Modern Youtube Playlist Video Player_files/icons.min.css">
	 
	<!-- Main Stylesheet -->
	<link rel="stylesheet" type="text/css" media="screen" href="./Modern Youtube Playlist Video Player_files/youtube-video-player.min.css">
	 
	<!-- jQuery -->
	<script type="text/javascript" id="www-widgetapi-script" src="./Modern Youtube Playlist Video Player_files/www-widgetapi.js" async=""></script><script src="./Modern Youtube Playlist Video Player_files/iframe_api"></script><script type="text/javascript" src="./Modern Youtube Playlist Video Player_files/jquery.min.js"></script>
	 
	<!-- Main Javascript -->
	<script type="text/javascript" src="./Modern Youtube Playlist Video Player_files/youtube-video-player.jquery.js"></script>
	 
	<!-- Perfect Scrollbar -->
	<link rel="stylesheet" type="text/css" media="screen" href="./Modern Youtube Playlist Video Player_files/perfect-scrollbar.css">
	<script type="text/javascript" src="./Modern Youtube Playlist Video Player_files/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="./Modern Youtube Playlist Video Player_files/perfect-scrollbar.js"></script>
<style>
body {
	background: #e0e7eb;
	color: #454545;
	font-family: 'Open Sans', sans-serif;
	line-height: 1.5em;
}
h1, h2 {
	font-weight: 300;
	border-bottom: 1px solid rgba(0,0,0,.1);
}
h2 {
	font-weight: 300;
}
a.button {
	display: inline-block;
	background: #f45e34;
	color: #fff;
	font-weight: 300;
	font-size: 18px;
	line-height: 50px;
	padding: 0 30px 0 30px;
	height: 50px;
	text-align: center;
	text-transform: uppercase;
	text-decoration: none;
	opacity: 0.75;
	-webkit-transition: opacity .2s;
	-moz-transition: opacity .2s;
	-o-transition: opacity .2s;
	-ms-transition: opacity .2s;
	transition: opacity .2s;
	font-family: 'Open Sans', sans-serif;
	margin-bottom: 5px;
}

a.button:hover {
	opacity: 1;
}

a.button:active {
	background: #3a7d57;
}

a.button-small {
	font-size: 14px;
	padding: 0 18px 0 18px;
	line-height: 32px;
	height: 32px;
}

</style>
</head>
<? include("inc/Investing-quotes.inc.php"); ?>
<br />
<? include("inc/youtube-livecheck.php"); ?>
<body data-gr-c-s-loaded="true" class="yesp-youtube-iframe-ready">
	<div class="container" style="max-width: 960px; margin: auto; ">
<?
if ($isLive) {
        echo '<center><a href="#" target="_blank" class="button">Live Session in Progress !!</a></center>';
}
?>
		<br><br>
		<h2>SwingFish <? if ($isLive) { echo "Live Trading"; } else { echo "Video Archive, once back live, you will see the live tradingroom here"; } ?></h2>

		<div id="swingfish-live" class="yesp" style="width: 100%;"></div>

<center><br >
<?
include("youtube.inc"); ?><br>
<a href="https://pepperstone.com/th/?a_aid=swighfish" target="_blank">Support the Community, trade with us !, it wont cost you anything, but keep things spinning</a>
</center>
		<br><br>

<?
if ($IsLive) {
	echo '<a href="#" target="_blank" class="button">Live Session in Progress !!</a>';
}
?>
		</div>

		<div style="clear: both;"></div>
		
	</div>
	<script type="text/javascript">
		

	</script>
<script>
if (window.top !== window.self) {
	document.write = "";
	window.top.location = window.self.location;
	setTimeout(function(){
		document.body.innerHTML='';
	},0);

	window.self.onload=function(evt) {
		document.body.innerHTML='';
	};
}else {
$(document).ready(function() {
			$("#swingfish-live").youtube_video({
				<?=$Yplaylist?>
				user: false,
				max_results: 10,
				pagination: true,
				continuous: true,
				first_video: 0,
				show_playlist: 'auto',
				playlist_type: 'horizontal',
				show_channel_in_playlist:true,
				show_channel_in_title: true,
				width: false,
				show_annotations: false,
				now_playing_text: 'Now Playing',
				load_more_text: 'Load More',
				force_hd: false,
				hide_youtube_logo: false,
				play_control: true,
				time_indicator: 'full',
				volume_control: true,
				share_control: true,
				fwd_bck_control: true,
				youtube_link_control: true,
				fullscreen_control: true,
				playlist_toggle_control:true,
				volume: false,
				show_controls_on_load: true,
				show_controls_on_pause: true,
				show_controls_on_play: false,
				player_vars: {},
				colors: {
					'controls_bg': 'rgba(0,0,0,.9)'
				},
			});

		});
}
</script>

<style>#playlist.yesp .yesp-controls{background:rgba(0,0,0,.9)!important}#playlist.yesp .yesp-controls a{color:rgba(255,255,255,.5)!important}#playlist.yesp .yesp-controls a:hover{color:rgba(255,255,255,1)!important}#playlist.yesp .yesp-controls a:active{color:rgba(255,255,255,1)!important}#playlist.yesp .yesp-time{color:#FFFFFF!important}#playlist.yesp .yesp-bar,#playlist.yesp .yesp-volume .yesp-volume-bar{background:rgba(255,255,255,.5)!important}#playlist.yesp .yesp-bar .yesp-bar-buffer{background:rgba(255,255,255,.25)!important}#playlist.yesp .yesp-bar .yesp-bar-time,#playlist.yesp .yesp-volume .yesp-volume-bar .yesp-volume-amount{background:#FFFFFF!important}#playlist.yesp .yesp-title-wrapper{color:#FFFFFF!important}#playlist.yesp .yesp-title a.yesp-subtitle{border-color:#FFFFFF!important}#playlist.yesp .yesp-title-wrapper a{color:#DFF76D!important}#playlist.yesp .yesp-playlist-overlay,#playlist.yesp .yesp-hp-overlay,#playlist.yesp .yesp-playlist-current,#playlist.yesp .yesp-hp-current{background: rgba(0,0,0,.5) !important;}#playlist.yesp .yesp-playlist-overlay .yesp-playlist-title,#playlist.yesp .yesp-hp-overlay .yesp-hp-title,#playlist.yesp .yesp-playlist-current,#playlist.yesp .yesp-hp-current{color: #FFFFFF !important;}#playlist.yesp .yesp-playlist-overlay .yesp-playlist-channel,#playlist.yesp .yesp-hp-overlay .yesp-hp-channel {color: #DFF76D !important;}#playlist.yesp .ps-scrollbar-y-rail, #playlist.yesp .ps-scrollbar-x-rail {background: rgba(255,255,255,.25) !important;}#playlist.yesp .ps-scrollbar-y,#playlist.yesp .ps-scrollbar-x {background: #FFFFFF !important;}#playlist.yesp .yesp-next-page,#playlist.yesp .yesp-hp-next-page {background:#000000 !important;color:#FFFFFF !important;}</style><style>#playlist-horizontal.yesp .yesp-controls{background:rgba(0,0,0,.9)!important}#playlist-horizontal.yesp .yesp-controls a{color:rgba(255,255,255,.5)!important}#playlist-horizontal.yesp .yesp-controls a:hover{color:rgba(255,255,255,1)!important}#playlist-horizontal.yesp .yesp-controls a:active{color:rgba(255,255,255,1)!important}#playlist-horizontal.yesp .yesp-time{color:#FFFFFF!important}#playlist-horizontal.yesp .yesp-bar,#playlist-horizontal.yesp .yesp-volume .yesp-volume-bar{background:rgba(255,255,255,.5)!important}#playlist-horizontal.yesp .yesp-bar .yesp-bar-buffer{background:rgba(255,255,255,.25)!important}#playlist-horizontal.yesp .yesp-bar .yesp-bar-time,#playlist-horizontal.yesp .yesp-volume .yesp-volume-bar .yesp-volume-amount{background:#FFFFFF!important}#playlist-horizontal.yesp .yesp-title-wrapper{color:#FFFFFF!important}#playlist-horizontal.yesp .yesp-title a.yesp-subtitle{border-color:#FFFFFF!important}#playlist-horizontal.yesp .yesp-title-wrapper a{color:#DFF76D!important}#playlist-horizontal.yesp .yesp-playlist-overlay,#playlist-horizontal.yesp .yesp-hp-overlay,#playlist-horizontal.yesp .yesp-playlist-current,#playlist-horizontal.yesp .yesp-hp-current{background: rgba(0,0,0,.5) !important;}#playlist-horizontal.yesp .yesp-playlist-overlay .yesp-playlist-title,#playlist-horizontal.yesp .yesp-hp-overlay .yesp-hp-title,#playlist-horizontal.yesp .yesp-playlist-current,#playlist-horizontal.yesp .yesp-hp-current{color: #FFFFFF !important;}#playlist-horizontal.yesp .yesp-playlist-overlay .yesp-playlist-channel,#playlist-horizontal.yesp .yesp-hp-overlay .yesp-hp-channel {color: #DFF76D !important;}#playlist-horizontal.yesp .ps-scrollbar-y-rail, #playlist-horizontal.yesp .ps-scrollbar-x-rail {background: rgba(255,255,255,.25) !important;}#playlist-horizontal.yesp .ps-scrollbar-y,#playlist-horizontal.yesp .ps-scrollbar-x {background: #FFFFFF !important;}#playlist-horizontal.yesp .yesp-next-page,#playlist-horizontal.yesp .yesp-hp-next-page {background:#000000 !important;color:#FFFFFF !important;}</style>
Git: <?
include("inc/version.php"); ?></body>
</html>
