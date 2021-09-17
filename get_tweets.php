<?php
require_once('twitter_proxy.php');
// Twitter OAuth Config options
$oauth_access_token = '1303711816296656918-EfuUcuozkPTtfde2IXQGVXZy3IinWi';
$oauth_access_token_secret = 'tjwwvvYNnIf7xjqxPaQoHzr3u993WzgdjWiI9cGDA1lq2';
$consumer_key = '7vjRlOF4rmLCNUROt1ImskKN3';
$consumer_secret = 'in8GQepZ124kSvElssAjkbpTeX0TcyfYvXk0WW2KGmYeCIQGzy';
$user_id = '1303711816296656918';
$screen_name = 'kavisubu1992';
$count = 10;
$twitter_url = 'statuses/user_timeline.json';
$twitter_url .= '?user_id=' . $user_id;
$twitter_url .= '&screen_name=' . $screen_name;
$twitter_url .= '&count=' . $count;
// Create a Twitter Proxy object from our twitter_proxy.php class
$twitter_proxy = new TwitterProxy(
	$oauth_access_token,			// 'Access token' on https://apps.twitter.com
	$oauth_access_token_secret,		// 'Access token secret' on https://apps.twitter.com
	$consumer_key,					// 'API key' on https://apps.twitter.com
	$consumer_secret,				// 'API secret' on https://apps.twitter.com
	$user_id,						// User id (http://gettwitterid.com/)
	$screen_name,					// Twitter handle
	$count							// The number of tweets to pull out
);
// Invoke the get method to retrieve results via a cURL request
$tweets = $twitter_proxy->get($twitter_url);
echo $tweets;
?>