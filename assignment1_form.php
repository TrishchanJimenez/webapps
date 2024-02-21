<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="assignment1_output.php" method="POST">
        <legend style="text-align:center">My First HTML Form</legend>
        <div>
            <label for="firstname">Firstname: </label>
            <input type="text" name="firstname" value="Trishchan Lance Earl">
        </div>
        <br>
        <div>
            <label for="middlename">Middlename: </label>
            <input type="text" name="middlename" value="Q">
        </div>
        <br>
        <div>
            <label for="lastname">Lastname: </label>
            <input type="text" name="lastname" value="Jimenez">
        </div>
        <br>
        <div>
            <label for="course">Course: </label>
            <select name="course" id="">
                <option value="none">Course</option>
                <option value="Computer Science" selected>Computer Science</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Others">Others</option>
            </select>
        </div>
        <br>
        <div>
            <label for="gender">Gender: </label>
            <div>
                <input type="radio" name="gender" id="" value="Male" checked>
                <label for="gender">Male</label>
            </div>
            <div>
                <input type="radio" name="gender" id="" value="Female">
                <label for="gender">Female</label>
            </div>
            <div>
                <input type="radio" name="gender" id="" value="Other">
                <label for="gender">Other</label>
            </div>
        </div>
        <br>
        <div>
            <label for="phone">Phone: </label>
            <input type="text" name="country-code" id="" value="+63" size="4">
            <input type="text" name="tele-number" id="" value="9691406736">
        </div>
        <br>
        <label for="address">Address</label>
        <div></div>
        <textarea name="address" id="" cols="100" rows="5">Rizal, Makati City</textarea>
        <div></div>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>

</html>