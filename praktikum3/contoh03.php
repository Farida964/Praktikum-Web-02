<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ;?>">
        <label for="inpuitName">Name: </label>
        <input type="text" name="name" id="inputName">
        <input type="submit" value="submit">
    </form>

    <?php
    if (isset ($_POST["name"])) {
        echo "<p> Hi, " . $_POST["name"] . "</p>";
    }
    ?>
</body>
</html>