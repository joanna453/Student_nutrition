<?php
include 'config.php';

if(isset($_POST['register'])){

    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO students(full_name, gender, age, course, email, password)
            VALUES('$fullname','$gender','$age','$course','$email','$password')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Registration Successful');</script>";
    }else{
        echo "<script>alert('Registration Failed');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
        <div class="logo">
            Student Nutrition Survey System
        </div>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <div class="form-container">
        <h2>Student Registration</h2>

        <form action="" method="POST">

            <input type="text" name="fullname" placeholder="Full Name" required>

            <select name="gender" required>
                <option value="">Select Gender</option>
                <option>Male</option>
                <option>Female</option>
            </select>

            <input type="number" name="age" placeholder="Age" required>

            <input type="text" name="course" placeholder="Course / Program" required>

            <input type="email" name="email" placeholder="Email Address" required>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit" name="register">Register</button>

        </form>
    </div>

</body>
</html>