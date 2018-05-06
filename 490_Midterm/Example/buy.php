<?php
session_start();
echo $_SESSION['userID'];

require_once('db/rickys_scripts.php');

$amount = filter_input(INPUT_POST, 'buy_amount');
$amount = filter_input(INPUT_POST, 'sell_amount');
$userID = $_SESSION['userID'];
$coinSell = $_SESSION['sell'];
$coinBuy = $_SESSION['buy'];



buyCoins($userID, $coinSell, $coinBuy, $amount);




        $message = "You ". $userID . " BUY_COIN: " . $coinBuy . " SELL_COIN:  " . $coinSell . " AMOUNT SPENT:  " . $amount ;
        $url = "user_wallet.php";
        redirect($message,$url);


?>