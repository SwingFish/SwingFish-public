<?
require_once('youtube-live-embed-master/EmbedYoutubeLiveStreaming.php');
$YouTubeLive = new EmbedYoutubeLiveStreaming("UCPYRRG0xYgGRXNO4hd34WAQ","AIzaSyCt0-jxjgHhwk6zvM31p8XNb5tCikZcOno");

if(!$YouTubeLive->isLive) {
        echo "There is <strong>no live streaming right now</strong>, Sorry!<br />
        it`s not a permanent thing (just check back later again)<br /></center>
        <br />
        <ul>the usual reasons why there is no live-stream:
                <li>- i`m doing some Real physical work instead <small>(you know the things you have to move yourself to get things done :) )</small></li>
                <li>- it`s off Market (eg. Weekend) ?</li>
                <li>- Internet is not connected <small>happens regulary since i live in Thailand out of Town)</small></li>
                <li>- Sleeping <small>(yes i do that too some times)</small></li>
                <li>- not to worry <a href=\"http://0x8.in.th/trade#morevideos\"><font color=\"red\">Here are some Videos and cuts out of previous Live Shows ..</font></a>
        </ul>
        <br><br>";
}
else {
/*
        $ago = HumanAgo(strtotime($YouTubeLive->live_video_published_at));
echo <<<EOT
EOT;

        $YouTubeLive->setEmbedSizeByWidth(640);
        $YouTubeLive->setEmbedSizeByHeight(360);
        $YouTubeLive->embed_autoplay = true;

        echo $YouTubeLive->embedCode();
*/
echo '<iframe id="video" width="100%" height="100%" src="//www.youtube.com/embed/'.$YouTubeLive->live_video_id.'?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>';
}
?>
