<?php
$qty = $_POST['selqty'];
$size = $_POST['selsize'];
$colour = $_POST['selcolour'];

switch ($size) {
    case 15.75:
        $sizeLabel = "Small";
        break;
    case 16.75:
        $sizeLabel = "Medium";
        break;
    case 17.75:
        $sizeLabel = "Large";
        break;
    case 18.75:
        $sizeLabel = "Extra Large";
        break;
    default:
        $sizeLabel = "Unknown";
}

$total = $qty * $size;
echo "<h2>Your order qty is $qty</h2>";
echo "<h2>Size: $sizeLabel (£$size)</h2>";
echo "<h2>Colour: $colour</h2>";
echo "<h2>Total price: £$total</h2>";
?>

