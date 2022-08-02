<?php

include 'db_connect.php';

$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['password_confirmation'];

    // validate password
    if ($password == $password_confirmation) {

        // Insert into users 
        $regiserQuery = "INSERT INTO users (name, username, email, password ) VALUES ('$name','$username', '$email' , '$password')";

        if ($conn->query($regiserQuery) === TRUE) {
            $_SESSION['is_user_logged_in'] == TRUE;
            $_SESSION['user_id'] = $conn->insert_id;
            $_SESSION['name'] = $name;
            $_SESSION['usesrname'] = $usesrname;
            header("Location:index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            exit;
        }
    } else {
        $errorMessage = "Password confirmation does not match.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <title>Registration Form</title>
</head>

<body>
    <div class="container">
        
    <div class="header">
            <h2>Registration Form</h2>
        </div>
        <form class="form" id="form" method="POST">

            <?php
            if (!empty($errorMessage)) {
            ?>
                <div class="error">
                    <?php echo $errorMessage; ?>
                </div>
            <?php
            }
            ?>

            <div class="form-control">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your full name" autocomplete="off">
            </div>
            <div class="form-control">
                <label for="username">UserName</label>
                <input type="text" name="username" id="username" placeholder="Enter your full username" autocomplete="off">
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your Email">
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password">
            </div>
            <div class="form-control">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter your password again">
            </div>
            <input type="submit" value="Submit" class="btn" name="" id="">

            <a href="login.php">If you have an account?</a>
        </form>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>