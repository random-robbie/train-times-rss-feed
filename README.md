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


XML output
----

```

<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0">
	<channel>
		<title>Train Services at Hoylake</title>
		<description>Train services at Hoylake</description>
		<item>
			<title>10:51 to Liverpool Lime Street Departing from Platform 1</title>
			<description>Merseyrail train from Hoylake to Liverpool Lime Street. Departing at 10:51 Departing from Platform 1</description>
		</item>
		<item>
			<title>11:06 to Liverpool Lime Street Departing from Platform 1</title>
			<description>Merseyrail train from Hoylake to Liverpool Lime Street. Departing at 11:06 Departing from Platform 1</description>
		</item>
		<item>
			<title>11:21 to Liverpool Lime Street Departing from Platform 1</title>
			<description>Merseyrail train from Hoylake to Liverpool Lime Street. Departing at 11:21 Departing from Platform 1</description>
		</item>
		<item>
			<title>11:36 to Liverpool Lime Street Departing from Platform 1</title>
			<description>Merseyrail train from Hoylake to Liverpool Lime Street. Departing at 11:36 Departing from Platform 1</description>
		</item>
		<item>
			<title>11:51 to Liverpool Lime Street Departing from Platform 1</title>
			<description>Merseyrail train from Hoylake to Liverpool Lime Street. Departing at 11:51 Departing from Platform 1</description>
		</item>
	
	</channel>
</rss>
```
