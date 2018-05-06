<?php
session_start();

require_once("webRBMQ/rabbitClient.php");

function redirect ($message, $url)
{
    echo "<h1> $message </h1>";
    //user validation here put in the gatekeeper
    header("refresh: 4 ; url = $url");
    exit();
}

$type = 'getCoinData';
$pageKey = array();
$pageKey['type'] = "$type";

$array = runClient($pageKey);

print_r($array);
/*
foreach ($array as $coin_array => $value) :

    $_SESSION['USD_BALANCE'] = $value['balance'];
    $_SESSION['BTC_BALANCE'] = $value['bitcoinBalance'];
    $_SESSION['BTH_BALANCE'] = $value['bitcoincashBalance'];
    $_SESSION['ETH_BALANCE'] = $value['etheriumBalance'];
    $_SESSION['LTC_BALANCE'] = $value['litecoinBalance'];
    $_SESSION['TRX_BALANCE'] = $value['tronBalance'];

endforeach;
*/


$amount = filter_input(INPUT_POST, 'sell_amount'); // int
$userID = $_SESSION['userID'];
$coinBeingSold = $_SESSION['sell']; //if its usd being bought btc is being sold, if alt is bought btc is being sold.
$coinBeingBought = $_SESSION['buy']; //if its btc being sold then we need to buy usd or an alt, if its a alt being bought it is btc being sold,
$symbol = $_SESSION['symbol'];

echo $symbol;









//if you are selling bit coin i want cash in return





//echo $amount . ' '; echo $coinBeingBought  . ' '; echo $coinBeingSold  . ' ' . $userID;
redirect("yo", 'coin_view.php'); //redirect


?>