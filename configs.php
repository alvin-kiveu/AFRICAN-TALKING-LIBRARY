<?php
//SET APP TO LIVE OR SANDBOX MODE
define('APP_STATUS', 'LIVE');
//CHECK IF APP IS IN LIVE MODE
if(APP_STATUS == 'LIVE'){
    //SET LIVE APP CREDENTIALS
    define('APP_USERNAME', '');
    define('APP_API_KEY', '');
}else{
    //SET SANDBOX APP CREDENTIALS
    define('APP_USERNAME', '');
    define('APP_API_KEY', '');
}
$username = APP_USERNAME;
$apiKey = APP_API_KEY;
use AfricasTalking\SDK\AfricasTalking;
// Initialize the SDK
$AT          = new AfricasTalking($username, $apiKey);
