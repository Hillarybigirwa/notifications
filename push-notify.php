<?php
// if there is anything to notify, then return the response with data for
// push notification else just exit the code
$webNotificationPayload['title'] = 'RWAMPARA SUITES';
$webNotificationPayload['body'] = 'Have Happy moments at Rwampara suites this Xmass a day is worth a memory of happiness';
$webNotificationPayload['icon'] = 'images/rwamp.png';
$webNotificationPayload['url'] = 'https://rwamparasuites.com';
echo json_encode($webNotificationPayload);
exit();
?>