*Post Tweets*

REQUIREMENTS:
- Credentials from Twitter.
- The Twitter OAuth library for PHP.


I'm following this article for how to get this to work: https://artisansweb.net/tweet-twitter-php/ 

The project uses this library: https://github.com/abraham/twitteroauth.

For this to work, you'll need to create an auth.php file in the project root.

The code for that file is as follows:


    <?php

    $consumerKey = '';
    $consumerSecret = '';
    $accessToken = '';
    $accessTokenSecret = '';

For each PHP variable, add the info you get when creating a dev account at https://apps.twitter.com/.

