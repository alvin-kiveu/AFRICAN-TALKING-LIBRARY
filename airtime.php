<?php
require 'vendor/autoload.php';
include 'configs.php';
$airtime  = $AT->airtime();
// Set the phone number, currency code and amount in the format below
$recipients = [[
    "phoneNumber"  => "+254768168060",
    "currencyCode" => "KES",
    "amount"       => 10
]];
try {
    // That's it, hit send and we'll take care of the rest
    $results = $airtime->send([
        "recipients" => $recipients
    ]);
    print_r($results);
} catch(Exception $e) {
    echo "Error: ".$e->getMessage();
}