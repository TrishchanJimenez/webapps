<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="rectarea.php" method="POST">
        <b>Enter Length:</b>
        <input type="number" name="length" id="" size="20" required>
        <div></div>
        <b>Enter Width:</b>
        <input type="number" name="width" id="" size="20" required>
        <br>
        <input type="submit" value="Get Area of the Rectangle" name="submit">
    </form>
    <form action="circarea.php" method="POST">
        <b>Enter Circle Radius:</b>
        <input type="number" name="radius" id="" size="20" required>
        <input type="submit" value="Get Area of the Circle" name="submit">
    </form>
</body>

</html>