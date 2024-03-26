<html>
<body>
<?php
    $hourlyrate = 5.75;
    $hoursperweek = 40;
    $gross = $hourlyrate * $hoursperweek;
    $taxRate = 0.22; // 22% tax rate
    $taxAmount = $gross * $taxRate;
    $net = $gross - $taxAmount;
    echo "Gross wage: $gross<br>";
    echo "Tax amount: $taxAmount<br>";
    echo "Net wage after tax: $net";
?>
</body>
</html>
