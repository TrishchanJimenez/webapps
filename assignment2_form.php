<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="text-align:center">
        <h3>RICHARD GWAPO COOPERATIVE INCORPORATED</h3>
        <p>Forever Gwapo St., Mandaluyong City</p>
        <p>Telephone #: 123-4456</p>
    </div>
    <hr>
    <form action="assignment2_output.php" method="POST">
        <h1>REGISTRATION FORM:</h1>
        <ul style="list-style-type:none">
            <li>
                <label for="">Complete Name: </label>
                <input type="text" name="lastname" id="" placeholder="Last">,
                <input type="text" name="firstname" id="" placeholder="First">
                <input type="text" name="middleinitial" id="" size="4" placeholder="M.I.">
            </li>
            <li>
                <label for="">Address</label>
                <input type="text" name="address" id="">
            </li>
            <li>
                <label for="">Contact Number</label>
                <input type="text" name="telnumber" id="">
            </li>
            <li>
                <label for="">Date of Birth</label>
                <input type="date" name="birthdate" id="">
            </li>
            <li>
                <label for="">Gender</label>
                <label for="">Male</label>
                <input type="radio" name="gender" id="" value="male">
                <label for="">Female</label>
                <input type="radio" name="gender" id="" value="female">
            </li>
            <li>
                <label for="">Office Address</label>
                <input type="text" name="officeaddress" id="">
                <label for="">Phone Number</label>
                <input type="tel" name="phonenumber" id="">
            </li>
            <li>
                <label for="">Position</label>
                <input type="text" name="position" id="">
                <label for="">Employment Status</label>
                <select name="status" id="">
                    <option value="Permanent">Permanent</option>
                    <option value="Casual">Casual</option>
                </select>
            </li>
            <li>
                <label for="">Monthly Salary:</label>
                <select name="salary" id="">
                    <option value="Below Php10,000.00" selected>Below Php10,000.00</option>
                    <option value="Php10,000.00-Php20,000.00">Php10,000.00-Php20,000.00</option>
                    <option value="Above Php20,000.00">Above Php20,000.00</option>
                </select>
            </li>
            <br><br>
            <li>
                <input type="submit" value="Submit Registration">
                <input type="reset" value="Clear Form">
            </li>
        </ul>
    </form>
</body>

</html>