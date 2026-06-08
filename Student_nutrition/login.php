<?php
session_start();
include 'config.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students
            WHERE email='$email'
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_assoc($result);

        $_SESSION['student_id'] = $row['student_id'];
        $_SESSION['full_name'] = $row['full_name'];

        header("Location: dashboard.php");
        exit();

    }else{

        echo "<script>alert('Invalid Email or Password');</script>";

    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">

    <h2>Student Login</h2>

    <form method="POST">

        <input type="email"
               name="email"
               placeholder="Enter Email"
               required>

        <input type="password"
               name="password"
               placeholder="Enter Password"
               required>

        <button type="submit"
                name="login">
                Login
        </button>

    </form>

</div>

</body>
</html>