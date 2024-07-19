<?php
// var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gasPrice = htmlspecialchars($_POST["gasPrice"]);
    $gasAmount = htmlspecialchars($_POST["gasAmount"]);
    // $totalPrice

    echo $gasPrice;
    echo $gasAmount;

    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}
