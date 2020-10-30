<?php

/*
 *  how to use this demo:
 *
 *  0.  Replace the $channelId and $api_key with yours.
 *
 *  1.  Upload it to an webserver with php, with the EmbedYoutubeLiveStreaming.php
 *        in the same directory.
 *
 *  2.  Then open it in your browser.
 *
 *  3.  Then, start a live broadcast "Hangouts On Air" from Google Plus, from the user of Channel ID.
 *
 *  4.  Wait several seconds while reloading the page, it has a delay for the server to
 *        change it's response after a video is broadcasting.
 *
 *  5.  When the server response changes, it will embed the video with autoplay (which is default)
 *        and show some video info.
 *
 *  Check the code and the class for more info.
 *
 */

require_once('EmbedYoutubeLiveStreaming.php');

$channelId = "UCPYRRG0xYgGRXNO4hd34WAQ";
$api_key = "AIzaSyCt0-jxjgHhwk6zvM31p8XNb5tCikZcOno";

$YouTubeLive = new EmbedYoutubeLiveStreaming($channelId,$api_key);

if(!$YouTubeLive->isLive)
{
	echo "There is no live streaming right now, Sorry!<br />
	<br />
	<ul>possible reasons:
		<li>i`m doing some Real physical work instead</li>
		<li>it`s off Market (eg. Weekend) ?</li>
		<li>internet is not connected</li>
		<li>Sleeping</li>
	</ul>
	<br><br>";
}
else
{
	echo <<<EOT
Published at: {$YouTubeLive->live_video_published_at}<br><br>
EOT;

	$YouTubeLive->setEmbedSizeByWidth(640);
	$YouTubeLive->setEmbedSizeByHeight(360);
	$YouTubeLive->embed_autoplay = true;

	echo $YouTubeLive->embedCode();
}
?>
