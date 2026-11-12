<?php
$units = (int)$_POST['units'];
$rate = (int)$_POST['rate'];
$total = $units * $rate;
echo "Total Electricity Bill: Rs. " . number_format($total, 2);
?>