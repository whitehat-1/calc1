<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 if (isset($_POST['submit'])) {
  $qty = $_POST['qty'];
  $product = $_POST['product'];
  $amount = $_POST['amount'];
  $total = $qty * $amount;
  echo "Total:$product $total";
 }
?>