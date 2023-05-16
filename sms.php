<?php
require 'vendor/autoload.php';
include 'configs.php';
// Get one of the services
$sms      = $AT->sms();
// Use the service
$result   = $sms->send([
    'to'      => '+254768168060',
    'message' => 'Hello Umeskia Softwares!'
]);

print_r($result);