# Form to SMS #
This is a simple example of how you can use [Twilio](http://www.twilio.com/) to add SMS functionality to a web form.

## Using this code ##
In order to use this code you will need:
* A web sever capable of running PHP
* An FTP client, or some other way to deploy code
* An upgraded Twilio account
* An SMS enabled phone number which you have purchased from Twilio

You will need to follow these steps:
1. Download and unzip this code
1. Rename the folder `form_to_sms` for now. You can rename it again later, it just makes it easer to explain what we are going to do next.
1. Download and unzip [Twilio PHP Helper Library](https://github.com/twilio/twilio-php)
1. Move the `Services` folder from the Twilio PHP folder you just unzipped into the `form_to_sms` folder
1. Open `form_to_sms.php` and replace the dummy Account SID, Auth Token and Sending Number with values relevant to your Twilio Account.
1. Upload the entire `form_to_sms` folder to your web server, and visit the URL of `index.html`

### Also read… ###
* [PHP Quickstart Tutorial for SMS Messages](https://www.twilio.com/docs/quickstart/php/sms)
* [REST API Documentation](https://www.twilio.com/docs/api/rest/sending-sms)
* The handy, dandy [API Explorer Tool](https://www.twilio.com/user/account/developer-tools/api-explorer#POST/2010-04-01/Accounts/[AccountSid]/SMS/Messages.[format])
* [FAQ on sending SMS Messages](https://www.twilio.com/help/faq/sms)

