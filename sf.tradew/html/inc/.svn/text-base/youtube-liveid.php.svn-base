<?
require_once('youtube-live-embed-master/EmbedYoutubeLiveStreaming.php');
$YouTubeLive = new EmbedYoutubeLiveStreaming("UCPYRRG0xYgGRXNO4hd34WAQ","AIzaSyCt0-jxjgHhwk6zvM31p8XNb5tCikZcOno");

if(!$YouTubeLive->isLive) {
//        echo " playlist: 'PLTIropM8Wc6kIVXU7gVQ5PYi0oScsPv_L',";
        echo " playlist: false,";
	echo " videos: false,";
	echo " autoplay: false,";
	echo " channel: 'UCPYRRG0xYgGRXNO4hd34WAQ',";
}
else {
	echo " videos: ['".$YouTubeLive->live_video_id."'], ";
	echo " playlist: false,";
//        echo " playlist: 'PLTIropM8Wc6kIVXU7gVQ5PYi0oScsPv_L',";
	echo " channel: false,";
	echo " show_playlist: false, ";
	echo " autoplay: true,";
}
