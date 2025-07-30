# Realtime Train Times RSS Feed

This PHP script fetches real-time train departure information from the [Realtime Trains API](https://www.realtimetrains.co.uk/about/developer) and generates an RSS feed. This is useful for displaying train times on devices or applications that can consume RSS feeds, such as LED ticker signs.

## Features

*   Fetches live train times for a specified route.
*   Generates a valid RSS 2.0 feed.
*   Customizable for any UK train stations.

## Prerequisites

*   A web server with PHP and the cURL extension installed.
*   A Realtime Trains API account to get your username and password. You can register for an account on their [developer page](https://www.realtimetrains.co.uk/about/developer).

## Setup

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/user/train-times-rss-feed.git
    ```
2.  **Configure the script:**
    Open `train.php` and edit the following lines:

    ```php
    // Change the LIV to your FROM station and change the MAN to your Destination Station
    // A list of station codes can be found here: https://www.realtimetrains.co.uk/about/developer/pull/docs/locationlist/
    $url = 'https://api.rtt.io/api/v1/json/search/LIV/to/MAN';

    // Your Realtime Trains API credentials
    $username = 'YOUR_USERNAME';
    $password = 'YOUR_PASSWORD';
    ```

    *   Replace `LIV` (Liverpool Lime Street) and `MAN` (Manchester Piccadilly) with the station codes for your desired journey.
    *   Replace `'YOUR_USERNAME'` and `'YOUR_PASSWORD'` with your actual Realtime Trains API credentials.

## Usage

Upload the `train.php` file to your web server. You can then access the RSS feed by navigating to the URL of the script in your web browser or RSS reader (e.g., `http://your-domain.com/train.php`).

## Hosting

You can run this on a VPS. If you sign up for DigitalOcean using the link below, you get $200 in credit for 60 days.

[![DigitalOcean Referral Badge](https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%203.svg)](https://www.digitalocean.com/?refcode=e22bbff5f6f1&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge)

## Example Output

The generated RSS feed will look something like this:

```xml
<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0">
    <channel>
        <title>Train Services From Liverpool Lime Street</title>
        <description>Train services at Liverpool Lime Street</description>
        <item>
            <title>10:51 to Manchester Piccadilly Departing from Platform 1</title>
            <description>Northern train from Liverpool Lime Street to Manchester Piccadilly. Departing at 10:51 Departing from Platform 1</description>
        </item>
        <item>
            <title>11:06 to Manchester Piccadilly Departing from Platform 1</title>
            <description>Northern train from Liverpool Lime Street to Manchester Piccadilly. Departing at 11:06 Departing from Platform 1</description>
        </item>
    </channel>
</rss>
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

[MIT](https.choosealicense.com/licenses/mit/)
