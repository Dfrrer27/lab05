<?php
$price =  $_POST['price'];
$quantity = $_POST['quantity'];

$purchase_Price = $price * $quantity;

$discount1 = $purchase_Price * 0.05;
$discount_Amount1 = $purchase_Price - $discount1;

$discount2 = $discount_Amount1 * 0.05;
$discount_Amount2 = $discount_Amount1 - $discount2;

$amount_To_Pay = $discount_Amount2;

$total_Discount_Amount = $discount1 + $discount2;

echo "Importe de la compra: S/." . $purchase_Price;
echo '<br>';
echo "Importe del primer descuento: S/." . $discount1;
echo '<br>';
echo "Importe del segundo descuento: S/." . $discount2;
echo '<br>';
echo "Importe a pagar: S/." . $amount_To_Pay;
echo '<br>';
echo "Importe del descuento total: S/." . $total_Discount_Amount;
?>