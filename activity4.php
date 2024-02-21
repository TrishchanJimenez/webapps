<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
</head>
<body>
    <form action="" method="POST">
        Enter Name: <input type="text" name="name" id=""><br><br>
        <input type="submit" value="Session" name="Sub1">
        <input type="submit" value="View Session" name="Sub2">
        <input type="submit" value="Delete Session" name="Sub3">
    </form>
    <?php
        if(isset($_POST['Sub1'])) {
            $_SESSION["Sname"]=$_POST["name"];
        }
        if(isset($_POST['Sub2'])) {
            if(isset($_SESSION["Sname"])) {
                echo "The Session Value = " . $_SESSION["Sname"];
            } else {
                echo "The Sessions are Destroyed !!";
            }
        }
        if(isset($_POST['Sub3'])) {
            session_destroy();
        }
    ?>
</body>
</html>