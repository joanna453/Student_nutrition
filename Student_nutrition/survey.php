<?php
session_start();
include 'config.php';

if(!isset($_SESSION['student_id'])){
    header("Location: login.php");
    exit();
}

if(isset($_POST['submit_survey'])){

    $student_id = $_SESSION['student_id'];

    $meals = $_POST['meals'];
    $water = $_POST['water'];
    $fruits = $_POST['fruits'];
    $vegetables = $_POST['vegetables'];
    $exercise = $_POST['exercise'];

    $sql = "INSERT INTO surveys
            (student_id, meals_per_day, water_glasses, fruits_per_week, vegetables_per_week, exercise)
            VALUES
            ('$student_id', '$meals', '$water', '$fruits', '$vegetables', '$exercise')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Survey Submitted Successfully');</script>";
    } else {
        echo "<script>alert('Failed to Submit Survey');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Nutrition Survey</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">

    <h2>Nutrition Survey Form</h2>

    <form method="POST">

        <input type="number" name="meals" placeholder="Meals Per Day" required>

        <input type="number" name="water" placeholder="Glasses of Water Per Day" required>

        <input type="number" name="fruits" placeholder="Fruits Per Week" required>

        <input type="number" name="vegetables" placeholder="Vegetables Per Week" required>

        <select name="exercise" required>
            <option value="">Do You Exercise?</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <button type="submit" name="submit_survey">
            Submit Survey
        </button>

    </form>

</div>

</body>
</html>