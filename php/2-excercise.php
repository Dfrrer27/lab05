<?php
  $price = $_POST['price'];
  $soda = $_POST['soda'];

  $new_price = $price * 0.95;
  $subtotal = $new_price * $soda;
  $discount = $subtotal * 0.07;
  $total = $subtotal - $discount;
  $gifts = $soda * 2;

  echo "Precio Actual: S/." . $price;
  echo '<br>';
  echo "Nuevo Precio: S/." . $new_price;
  echo '<br>';
  echo "Cantidad de Gaseosas: S/." . $soda;
  echo '<br>';
  echo "Importe de Compra: S/." . $subtotal;
  echo '<br>';
  echo "Importe de Descuento: S/." . $discount;
  echo '<br>';
  echo "Importe a Pagar: S/." . $total;
  echo '<br>';
  echo "Obsequios: " . $gifts ." caramelos";
?>