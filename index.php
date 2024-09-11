<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>
<body>
    <?php
    
function validatePhone($phone){
    $phonePattern = "/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/";
    return preg_match($phonePattern, $phone);
}


    print_r($_GET);
    //checks once form is submitted
    if($_GET)
    {
        echo("Data recieved by the Server");
    

    if (isset($_GET['fName']) && isset($_GET['email']) && isset($_GET['phone']))

    {
        echo($_GET['fName']);
        echo($_GET['email']);
        echo($_GET['phone']);

        if (validatePhone($phone)){
            echo("Valid Phone Number");
        }
        else 
        {
            echo("Invalid Phone Number");
        }
    } else {
        echo ("Please fill in all fields");
    }

}
    ?>

    <form action="" method="get">
        <input type="text" name="fName" placeholder="Enter Your Name">
        <input type="text" name="email" placeholder="Enter Your Email">
        <input type="tel" name="phone" placeholder="Enter your Phone Number">
        <input type="submit" value="Submit the Information">

    </form>
</body>
</html>