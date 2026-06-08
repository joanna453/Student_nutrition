<?php
session_start();

if(!isset($_SESSION['student_id'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<?php include 'navbar.php'; ?>

<!-- MAIN CONTENT -->
<div class="form-container">

    <h2>Welcome <?php echo $_SESSION['full_name']; ?></h2>

    <p>You are logged in to the Student Nutrition Survey System.</p>

    <br>

    <a href="survey.php" class="btn">
        Fill Nutrition Survey
    </a>

    <br><br>

    <a href="logout.php" class="btn">
        Logout
    </a>

</div>

</body>
</html>