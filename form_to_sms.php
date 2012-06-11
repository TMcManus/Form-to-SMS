<?php

/**
 * This script requires a Twilio Account and the Twilio PHP Helper Library,
 * which can be found at http://www.twilio.com/docs/libraries or directly
 * downloaded from Github here: https://github.com/twilio/twilio-php .
 * 
 * Once you have downloaded and unzipped the PHP helper library, copy the
 * entire 'Services' folder into the same folder that contains this file.
 */

require('Services/Twilio.php');

// Credentials to connect to Twilio
$accountSid = 'ACXXXXXXXXXXXXXXXXXXX';
$authToken = 'YYYYYYYYYYYYYYYYYYY';

// Twilio number the SMS message will be from. You can only send SMS messages from a number purchased from Twilio.
$sending_number = '+14155552456';

// Create a connection to Twilio's API with credentials
$client = new Services_Twilio($accountSid, $authToken);

// Actually send the number. This is where the magic happens!
if(!empty($_POST['phone']) && !empty($_POST['body'])){
	$message = $client->account->sms_messages->create(
	  $sending_number, // From a valid Twilio number
	  $_POST['phone'], // Text this number
	  $_POST['body']
	);
}

if($message->sid): 
// This content will appear conditionally when the form is submitted
?>

<p>Message Sent. Would you like to send another?</p>

<?php endif; ?>

<form action="#" method="post">
	<label for="phone">Phone Number</label>
	<input type="tel" name="phone" id="phone" placeholder="+14155551234"/><br/>
	<label for="body">Message Body</label>
	<textarea name="body" maxlength="160" id="body" placeholder="The body of the message. Up to 160 characters."></textarea><br/>
	<input type="submit" value="Send SMS" />
</form>