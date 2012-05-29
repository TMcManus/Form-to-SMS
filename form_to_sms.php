<?php

/**
 * This script requires a Twilio Account and the Twilio PHP Helper Library,
 * which can be found at http://www.twilio.com/docs/libraries
 */

// Require Twilio Helper Library
require('Services/Twilio.php');

// Credentials to connect to Twilio
$accountSid = 'ACXXXXXXXXXXXXXXXXXXXXXX';
$authToken = 'YYYYYYYYYYYYYYYYYYYYYY';

// Twilio number the SMS message will be from. You can only send SMS messages from a number purchased from Twilio.
$sending_number = '+15555555555';

// Create a connection to Twilio's API with credentials
$client = new Services_Twilio($accountSid, $authToken);

// Actually send the number. This is where the magic happens!
$message = $client->account->sms_messages->create(
  $sending_number, // From a valid Twilio number
  $_REQUEST['phone'], // Text this number
  $_REQUEST['body']
);

echo "<p>Message Sent</p>";