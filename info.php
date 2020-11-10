<?php
require ('vendor/autoload.php');
use bcmath_compat\BCMath;
use ipinfo\ipinfo\IPinfo;
use IPTools\IP;

$client = new IPinfo();
 $ip_address = '216.239.36.21';
$details = $client->getDetails($ip_address);
$detail->city;
$details->loc;


$access_token = '123456789abc';
$client = new IPinfo($access_token);

$details->hostname;

$details->country;
$details->country_name;

$details->loc;
$details->latitude;
$details->longitude;



?>
El numero elegido es: <?php $numero = $_POST['numero'];
echo $numero;?>

