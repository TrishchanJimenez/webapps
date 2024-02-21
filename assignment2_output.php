<div style="text-align:center">
    <h3>RICHARD GWAPO COOPERATIVE INCORPORATED</h3>
    <p>Forever Gwapo St., Mandaluyong City</p>
    <p>Telephone #: 123-4456</p>
</div>
<hr>
<h2 style="text-align:center">Member Information</h2>

<?php
    $name = $_POST['lastname'].", ". $_POST['firstname']." ". $_POST['middleinitial'];
    $address = $_POST['address'];
    $telnumber = $_POST['telnumber'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $officeaddress = $_POST['officeaddress'];
    $phonenumber = $_POST['phonenumber'];
    $position = $_POST['position'];
    $status = $_POST['status'];
    $salary = $_POST['salary'];
    echo "
        <table>
    <tr>
        <td>Name: </td>
        <td>$name</td>
    </tr>
    <tr>
        <td>Address: </td>
        <td>$address</td>
    </tr>
    <tr>
        <td>Telephone #: </td>
        <td>$telnumber</td>
    </tr>
    <tr>
        <td>Date of Birth: </td>
        <td>$birthdate</td>
    </tr>
    <tr>
        <td>Gender: </td>
        <td>$gender</td>
    </tr>
    <tr>
        <td>Office Address: </td>
        <td>$officeaddress</td>
    </tr>
    <tr>
        <td>Phone #: </td>
        <td>$phonenumber</td>
    </tr>
    <tr>
        <td>Position: </td>
        <td>$position</td>
    </tr>
    <tr>
        <td>Employment Status: </td>
        <td>$status</td>
    </tr>
    <tr>
        <td>Monthly Salary</td>
        <td>$salary</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>
    ";
?>