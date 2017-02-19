<?php
require('../src/Client.php');

// Start 
$apiclient = new Petdiscount\Api\Client('--email--', '--apikey--');

// Retrieve Prepaid Balance
$balance = $apiclient->getPrepaidBalance();

var_dump($balance);
