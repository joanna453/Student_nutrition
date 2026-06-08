<?php
include 'config.php';

$students = mysqli_query($conn, "SELECT * FROM students");
$surveys = mysqli_query($conn, "SELECT * FROM surveys");

$total_students = mysqli_num_rows($students);
$total_surveys = mysqli_num_rows($surveys);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="admin-container">

    <h1>Student Nutrition Survey System</h1>

    <div class="cards">

        <div class="card">
            <h2><?php echo $total_students; ?></h2>
            <p>Total Students</p>
        </div>

        <div class="card">
            <h2><?php echo $total_surveys; ?></h2>
            <p>Total Surveys</p>
        </div>

    </div>

    <h2>Registered Students</h2>

    <table>

        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Course</th>
        </tr>

        <?php
        mysqli_data_seek($students, 0);

        while($row = mysqli_fetch_assoc($students)){
        ?>

        <tr>
            <td><?php echo $row['student_id']; ?></td>
            <td><?php echo $row['full_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['course']; ?></td>
        </tr>

        <?php } ?>

    </table>


    <h2>Nutrition Survey Responses</h2>

<table>

    <tr>
        <th>Survey ID</th>
        <th>Student ID</th>
        <th>Meals/Day</th>
        <th>Water Glasses</th>
        <th>Fruits/Week</th>
        <th>Vegetables/Week</th>
        <th>Exercise</th>
    </tr>

    <?php
    mysqli_data_seek($surveys, 0);

    while($survey = mysqli_fetch_assoc($surveys)){
    ?>

    <tr>
        <td><?php echo $survey['survey_id']; ?></td>
        <td><?php echo $survey['student_id']; ?></td>
        <td><?php echo $survey['meals_per_day']; ?></td>
        <td><?php echo $survey['water_glasses']; ?></td>
        <td><?php echo $survey['fruits_per_week']; ?></td>
        <td><?php echo $survey['vegetables_per_week']; ?></td>
        <td><?php echo $survey['exercise']; ?></td>
    </tr>

    <?php } ?>

</table>

</div>

</body>
</html>