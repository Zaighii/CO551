<?php
if (isset($_POST["txtage"]) && isset($_POST["txtgender"])) {
    $age = $_POST["txtage"];
    $gender = $_POST["txtgender"];

    echo "<h2>Form Data:</h2>";
    
    if ($age < 21) {
        echo "You are under 21 years old<br>";
    } else {
        echo "You are 21 years old or over<br>";
    }

    if ($gender == "Male") {
        echo "Gender: Male";
    } elseif ($gender == "Female") {
        echo "Gender: Female";
    } else {
        echo "Gender: Other";
    }
} else {
    echo "Error: Form data not submitted.";
}
?>
