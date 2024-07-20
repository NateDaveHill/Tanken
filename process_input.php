<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gasPrice = htmlspecialchars($_POST["gasPrice"]);
    $gasAmount = htmlspecialchars($_POST["gasAmount"]);
    $totalPrice = $gasAmount * $gasPrice;

    header("Location: ../PHPinVisualStudioCode/");
} else {
    header("Location: ../PHPinVisualStudioCode/");
}
