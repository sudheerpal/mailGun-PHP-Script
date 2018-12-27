<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;



# First, instantiate the SDK with your API credentials
$mg = Mailgun::create('key-xxxxxxxxxxxxxxxxxxxxxxxx');

# Now, compose and send your message.
# $mg->messages()->send($domain, $params);
$mg->messages()->send('domain.com', [
  'from'    => 'name@domain.com',
  'to'      => 'sudheerpal2@gmail.com',
  'subject' => 'Trying PHP SDK for MailGun',
  'text'    => 'It is so simple to send a message.'
]);





?>