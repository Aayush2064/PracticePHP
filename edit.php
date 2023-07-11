<?php include 'connection.php' ?>
<?php
$a = $b = $c = "";

if ($con->connect_error) {
    die("Error getting connection");
} else {
    if ((isset($_POST["submit"]))) {
        $a = test_input($_POST["fname"]);
        $b = test_input($_POST["lname"]);
        $c = test_input($_POST["email"]);
        // $ins = "INSERT INTO `practice3`(`fname`,`lname`, `email`) VALUES ('$a','$b','$c')";
        // $push = $con->query($ins);
        // if ($push) {
        //     header("location:tpractice.php");
        // }
    }
}function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="mystyle.css" rel="stylesheet">
 
</head>

<body>
    <div class="btn">
        <a class="btn" href="tpractice.php">Back</a>
    </div>

    <div class="form">
        <form action="practice3.php" method="post">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname"> 
            <?php
            if (empty($a)) {
                ?>
                <div class="error">*First Name is required!</div> <br>
                <?php
            }
            ?>
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname"> 
            <?php
            if (empty($a)) {
                ?>
                <div class="error">*Last Name is required!</div> <br>
                <?php
            }
            ?>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email"> 
            <?php
            if (empty($a)) {
                ?>
                <div class="error">*Email is required!</div> <br>
                <?php
            }
            ?>
            <input type="submit" id="submit" name="submit" value="Submit">
        </form>
    </div>

</body>