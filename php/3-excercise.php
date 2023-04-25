<?php
$tariff = $_POST['tariff'];
$days = $_POST['days'];

$gross_Amount = $tariff * $days;
$discount = $gross_Amount * 0.15;
$net_Amount = $gross_Amount - $discount;
$pencils = $days * 3;

echo "Importe bruto: S/." . $gross_Amount;
echo '<br>';
echo "Importe de descuento: S/." . $discount;
echo '<br>';
echo "Importe neto a pagar: S/." . $net_Amount;
echo '<br>';
echo "Cantidad de lapiceros de obsequio: " . $pencils;
?>