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



$amount = filter_input(INPUT_POST, 'buy_amount'); //int

$chosen_coin = $_SESSION['symbol'];




$buy_sell_array = array();
$buy_sell_array['buy_sell'] = $type;
$buy_sell_array['chosen_coin'] = $chosen_coin;
$buy_sell_array['userID'] = $_SESSION['userID'];
$buy_sell_array['amount'] = $amount;


print_r($buy_sell_array);


$result_message = runClient($buy_sell_array);



switch($result_message){

    case "pass":


    case "fail":


}


echo $amount . ' '; echo $coinBeingBought  . ' '; echo $coinBeingSold  . ' ' . $userID;

redirect("yo", 'coin_view.php');







?>