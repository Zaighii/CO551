<?php
$conn = mysqli_connect("localhost", "zee", "", "co551");

// Check if connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['selweek'])) {
    $selectedWeek = $_POST['selweek'];

    $sql = "SELECT * FROM lotto WHERE wk=$selectedWeek";
    $result = mysqli_query($conn, $sql);

    if ($result && $row = mysqli_fetch_array($result)) {
        echo "Number 1 is  " . htmlspecialchars($row['number1']) . "<br/>";
        echo "Number 2 is  " . htmlspecialchars($row['number2']) . "<br/>";
        echo "Number 3 is  " . htmlspecialchars($row['number3']) . "<br/>";
        echo "Number 4 is  " . htmlspecialchars($row['number4']) . "<br/>";
        echo "Number 5 is  " . htmlspecialchars($row['number5']) . "<br/>";
        echo "Number 6 is  " . htmlspecialchars($row['number6']) . "<br/>";
    } else {
        echo "No lottery numbers found for the selected week.";
    }
} else {
    $sql = "SELECT * FROM lotto";
    $result = mysqli_query($conn, $sql);

    echo "<form action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "' method='post' >";
    echo "<br/>Select the lottery week ";
    echo "<select name='selweek' >";
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . htmlspecialchars($row['wk']) . "'>" . htmlspecialchars($row['wk']) . "</option>";
    }
    echo "</select><br/>";
    echo "<input type='submit' value='Select' />";
    echo "</form>";
}

mysqli_close($conn);
?>
