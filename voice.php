<?php
require 'vendor/autoload.php';
include 'configs.php';
// Get the voice service
$voice    = $AT->voice();
// Set your Africa's Talking phone number in international format
$from     = "+254768123456";
// Set the numbers you want to call to in a comma-separated list
$to       = "+254113015674,+254790493120";
try {
    // Make the call
    $results = $voice->call([
        'from' => $from,
        'to'   => $to
    ]);
    print_r($results);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}