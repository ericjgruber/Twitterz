*Post Tweets*

REQUIREMENTS:
- Credentials from Twitter.
- The Twitter OAuth library for PHP.

In it, you'll need the following, available with a dev account from https://apps.twitter.com/.

I'm following this article for how to get this to work: https://artisansweb.net/tweet-twitter-php/ 

The project uses this library: https://github.com/abraham/twitteroauth.

For this to work, you'll need to create an auth.php file in the project root, the code for that file is as follows:

<?php

$consumerKey = '';
$consumerSecret = '';
$accessToken = '';
$accessTokenSecret = '';

