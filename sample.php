<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>
</head>
<body>
    <form action="handle_form.php" method="POST">
        Enter your information in the form below:
            <p>
                <b>Name:</b>
                <input type="text" name="name" size="20">
            </p>
            <p>
                <b>Email Address:</b>
                <input type="text" name="email" size="40">
            </p>
            <p>
                <b>Gender:</b>
                <input type="radio" name="gender" value="M">Male
                <input type="radio" name="gender" value="F">Female
            </p>
            <p>
                <b>Comments</b>
                <textarea name="comments" id="" cols="50" rows="3"></textarea>
            </p>
            <input type="submit" value="Submit" name="Submit Information">
    </form>
</body>
</html>