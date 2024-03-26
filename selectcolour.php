<html>
<head>
    <title>Select Colour</title>
</head>
<body>
    <form action="confirmation.php" method="post">
        <?php
        $qty = $_POST['selqty'];
        $size = $_POST['selsize'];
        ?>
        Select the colour for the <?php echo $qty; ?> widgets you are ordering:
        <select name="selcolour">
            <option>white</option>
            <option>red</option>
            <option>yellow</option>
            <option>green</option>
            <option>blue</option>
        </select>
        <input type="hidden" name="selqty" value="<?php echo $qty; ?>">
        <input type="hidden" name="selsize" value="<?php echo $size; ?>">
        <br/><br/>
        <input type="submit" value="Buy"/>
    </form>
</body>
</html>

