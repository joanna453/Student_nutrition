

<style>
.navbar{
    background:#2e8b57;
    padding:15px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.navbar a{
    color:white;
    text-decoration:none;
    margin:0 10px;
    font-weight:bold;
}

.navbar a:hover{
    text-decoration:underline;
}
</style>

<div class="navbar">

    <div>
        <a href="dashboard.php">Home</a>
        <a href="survey.php">Survey</a>
        <a href="admin.php">Admin</a>
    </div>

    <div>
        <?php if(isset($_SESSION['student_id'])) { ?>
            <a href="logout.php">Logout</a>
        <?php } else { ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php } ?>
    </div>

</div>