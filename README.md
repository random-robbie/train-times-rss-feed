# train-times-rss-feed
Using the realtraintimes.co.uk / rtt.io json feed converting to a RSS feed.

I've done this for a LED sign i use so it can display it as it only takes RSS feeds.

edit train.php
----
```
// Change the LIV to your FROM station and change the MAN to your Destination Station
// https://www.realtimetrains.co.uk/about/developer/pull/docs/locationlist/ for details.
$url = 'https://api.rtt.io/api/v1/json/search/LIV/to/MAN';
$username = 'YOUR USERNAME';
$password = 'YOURPASSWORD';
```
