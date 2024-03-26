<?php
$db = mysqli_connect("localhost", "zee", "", "co551");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form submission - save monster details
    $name = $_POST['txtname'];
    $image_tmp = $_FILES['monsterimage']['tmp_name'];
    $audio_tmp = $_FILES['monsteraudio']['tmp_name'];

    // Read binary data from image and audio files
    $image_data = addslashes(file_get_contents($image_tmp));
    $audio_data = addslashes(file_get_contents($audio_tmp));

    $sql = "INSERT INTO monster (name, image, audio) ";
    $sql .= "VALUES ('$name', '$image_data', '$audio_data')";

    $result = mysqli_query($db, $sql);
    if (!$result) {
        die('Error: ' . mysqli_error($db));
    }

    mysqli_close($db);

    // Redirect to prevent form resubmission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
} else {
    // Display the form
    ?>

    <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
    </head>
    <body>
    <h2>Monster Details</h2>
    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Monster name:
        <input type="text" name="txtname" size="15" class="form-control"/>
        <br/><br/>
        Monster image:
        <input type="file" name="monsterimage" accept="image/jpeg" class="form-control"/>
        <br/><br/>
        Monster Sound:
        <input type="file" name="monsteraudio" accept="audio/basic" class="form-control"/>
        <br/><br/>
        <input type="submit" class="btn btn-default" value="Save"/>
    </form>
    </body>
    </html>

    <?php
}
?>


