<?
require_once('youtube-live-embed-master/EmbedYoutubeLiveStreaming.php');
//$YouTubeLive = new EmbedYoutubeLiveStreaming("UCPYRRG0xYgGRXNO4hd34WAQ","AIzaSyCt0-jxjgHhwk6zvM31p8XNb5tCikZcOno"); // private
$YouTubeLive = new EmbedYoutubeLiveStreaming("UCqEcEGQ0sG89j7ZhOdgFOyg","AIzaSyCt0-jxjgHhwk6zvM31p8XNb5tCikZcOno"); // swingfish

if(!$YouTubeLive->isLive) {
//        $Yplaylist = " playlist: 'PLTIropM8Wc6kIVXU7gVQ5PYi0oScsPv_L',";
        $Yplaylist = " playlist: false,";
	$Yplaylist .= " videos: false,";
	$Yplaylist .= " channel: 'UCqEcEGQ0sG89j7ZhOdgFOyg',";
        $Yplaylist .= " autoplay: false,";
	$isLive = false;
}
else {
	$Yplaylist = " videos: ['".$YouTubeLive->live_video_id."'], ";
	$Yplaylist .= " playlist: false,";
//        echo " playlist: 'PLTIropM8Wc6kIVXU7gVQ5PYi0oScsPv_L',";
	$Yplaylist .= " show_playlist: false, ";
	$Yplaylist .= " autoplay: true,";
	$isLive = true;
}
