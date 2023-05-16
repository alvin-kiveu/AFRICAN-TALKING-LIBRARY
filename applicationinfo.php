<?php  
require 'vendor/autoload.php';
include 'configs.php';
$application = $AT->application();
try {
    // Fetch the application data
    $data = $application->fetchApplicationData();
    print_r($data);
} catch(Exception $e) {
    echo "Error: ".$e->getMessage();
}