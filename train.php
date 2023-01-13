<?php
// Change the LIV to your FROM station and change the MAN to your Destination Station
// https://www.realtimetrains.co.uk/about/developer/pull/docs/locationlist/ for details.
$url = 'https://api.rtt.io/api/v1/json/search/LIV/to/MAN';
$username = 'YOUR USERNAME';
$password = 'YOURPASSWORD';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
$json = curl_exec($ch);
curl_close($ch);
//print_r($json);

$data = json_decode($json, true);
header("Content-Type: application/rss+xml; charset=UTF-8");
echo '<?xml version="1.0" encoding="UTF-8" ?>';
echo '<rss version="2.0">';
echo '<channel>';
echo '<title>Train Services From '.$data['location']['name'].'</title>';
echo '<description>Train services at '.$data['location']['name'].'</description>';
foreach($data['services'] as $service){
    echo '<item>';
    $first_part = substr($service['locationDetail']['gbttBookedDeparture'], 0, 2);
	$second_part = substr($service['locationDetail']['gbttBookedDeparture'], 2);
	$new_string = $first_part . ":" . $second_part;
    echo '<title>'.$new_string.' to '.$data['filter']['destination']['name'].' Departing from Platform '.$service['locationDetail']['platform'].'</title>';
    echo '<description>'.$service['atocName'].' train from '.$service['locationDetail']['origin'][0]['description'].' to '.$data['filter']['destination']['name'].'. Departing at '.$new_string.' Departing from Platform '.$service['locationDetail']['platform'].'</description>';
    echo '</item>';
}
echo '</channel>';
echo '</rss>';
