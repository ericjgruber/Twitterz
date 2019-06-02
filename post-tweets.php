<?php

require_once "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', '');
define('CONSUMER_SECRET', '');
define('ACCESS_TOKEN', '');
define('ACCESS_TOKEN_SECRET', '');

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

$status = 'This is a test tweet. I\'m playing around with the @twitter API as part of #100DaysOfCode.';

$post_tweets = $connection->post('statuses/upddate', ['status' => $status]);