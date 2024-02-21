<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hands On 1</title>
</head>
<body>
    <form action="handson2.php" method="POST">
        <fieldset>
            <legend>Basic Information</legend>
            <ol>
                <li>
                    <label for="">Name</label>
                    <input type="text" name="name" id="" placeholder="Last Name, First Name Mi">
                </li>
                <li>
                    <label for="">Email</label>
                    <input type="email" name="email" id="" placeholder="example@example.com">
                </li>
                <li>
                    <label for="">Phone</label>
                    <input type="tel" name="number" id="" placeholder="+639999999999">
                </li>
            </ol>
        </fieldset>
        <fieldset>
            <legend>Home Address</legend>
            <ol>
                <li>
                    <label for="">Address</label>
                    <textarea name="address" id="" cols="30" rows="5"></textarea>
                </li>
                <li>
                    <label for="">Post Code</label>
                    <input type="text" name="postcode">
                </li>
                <li>
                    <label for="">Country</label>
                    <input type="text" name="country">
                </li>
            </ol>
        </fieldset>
        <fieldset>
            <legend>Type of Payment</legend>
            <ol>
                <li>
                    <fieldset>
                        <legend>Payment</legend>
                        <ol>
                            <li>
                                <input type="radio" name="payment" id="" value="Credit">
                                <label for="">Credit</label>
                            </li>
                            <li>
                                <input type="radio" name="payment" id="" value="Cash">
                                <label for="">Cash</label>
                            </li>
                            <li>
                                <input type="radio" name="payment" id="" value="Gcash">
                                <label for="">Gcash</label>
                            </li>
                        </ol>
                    </fieldset>
                </li>
                <li>
                    <label for="">Account Number</label>
                    <input type="text" name="accnumber">
                </li>
                <li>
                    <label for="">Account Name</label>
                    <input type="text" placeholder="Account Name" name="accname">
                </li>
                <li>
                    <label for="">Amount</label>
                    <input type="number" placeholder="Exact Amount" name="amount">
                </li>
            </ol>
        </fieldset>
        <fieldset>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>