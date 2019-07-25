
<?php
include "db connect.php";
if(isset($_POST['submit'])) {

    extract($_POST);
    $count = 0;
    $sql = "SELECT username FROM `student`";
    $res = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_assoc($res)){
        if ($row['username'] == $_POST['username']) {
            $count = $count + 1;
        }
    }

    if ($count == 0) {
    mysqli_query($db, "INSERT INTO student VALUES('$First', '$Second', '$username', '$roll', '$email', '$contact', '$password')");

    }
}

?>



<!DOCTYPEhtml>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width",initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Student Registration</title>
</head>
<body>

<header style="height: 100px">

    <div class="logo">
        <img   src="images/2.png." style="height: 70px" width="150px"  >
    </div>
    <nav>
        <ul>
            <li> <a href="index.php">HOME</a> </li>
            <li> <a href="books.php">BOOKS</a> </li>
            <li> <a href="student_login.php">STUDENT-REGISTRATION</a> </li>
            <li> <a href="student_registration.php">REGISTRATION</a> </li>
            <li> <a href="feedback.php">FEEDBACK</a> </li>
        </ul>
    </nav>

</header>

<section class="reg_sec">

    </div><br>
    <div class="box2" >
        <h1 style="text-align: center";>Library Management System</h1>
        <h1 style="text-align: center">User Registration</h1>
        <form name="login"  method="POST">
            <br><br>
            <div class="register">
                <input class="form-control" type="text" name="First" placeholder="First Name" required><br><br>
                <input class="form-control" type="text" name="Second" placeholder="Second Name" required><br><br>
                <input class="form-control" type="text" name="username" placeholder="User Name" required><br><br>
                <input class="form-control" type="text" name="roll" placeholder="Roll No" required><br><br>
                <input class="form-control" type="text" name="email" placeholder="Email" required><br><br>
                <input class="form-control" type="text" name="contact" placeholder="Phone No" required><br><br>
                <input class="form-control" type="Password" name="password" placeholder="Password" required><br><br>
                <input class="btn btn-default" type="submit" name="submit" value="submit" style="background-color: darkslategray">
            </div>
        </form>

    </div>



</section>

</body>

</html>