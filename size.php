<html>
<head>
    <title>Select Size</title>
</head>
<body>
    <form action="selectcolour.php" method="post">
        <?php
        $qty = $_POST['selqty'];
        ?>
        Select the size for the <?php echo $qty; ?> widgets you are ordering:
        <select name="selsize">
            <option value="15.75">Small (£15.75)</option>
            <option value="16.75">Medium (£16.75)</option>
            <option value="17.75">Large (£17.75)</option>
            <option value="18.75">Extra Large (£18.75)</option>
        </select>
        <input type="hidden" name="selqty" value="<?php echo $qty; ?>">
        <br/><br/>
        <input type="submit" value="Next"/>
    </form>
</body>
</html>

