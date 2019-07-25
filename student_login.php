
<?php
include "db connect.php";
if(isset($_POST['submit'])) {
    $count = 0;
    $res = mysqli_query($db, "SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        header("location: dashboard");

    }else{

        echo "<script>alert('wrong password')</script>";
    }
}


?>
<!DOCTYPE html>
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
    <title> student log in</title>
</head>
<body>


<header style="height: 100px">

  <div class="logo">
        <img   src="images/2.png." style="height: 70px" width="150px"  >
    </div>
    <nav>
        <ul>
            <li> <a href="index.php">HOME</a> </li>
            <li> <a href=" books.php">BOOKS</a> </li>
            <li> <a href="student_login.php">STUDENT-LOGIN</a> </li>
            <li> <a href="student_registration.php">REGISTRATION</a> </li>
            <li> <a href="feedback.php">FEEDBACK</a> </li>
        </ul>
    </nav>

</header>

<section class="login_sec">
    <br>
    </div>
    <div class="box1" >
        <h1 style="text-align: center"; >Library Management System</h1>
        <h1 style="text-align: center">User log In</h1>
        <form name="login" action="student_login.php" method="POST">
            <br>
            <div class="login">
                <input class="form-control" type="text" name="username" placeholder="User name" required><br><br>
                <input class="form-control"type="Password" name="password" placeholder="Password" required><br><br>
                <input class="btn btn-default" type="submit" name="submit" value="LogIn" style=  background-color:darkblue; >
            </div>

            <p style="color: black";>
                <br><br><br>
                <a style="color: white"; href=""> Forgot password?</a>&nbsp &nbsp &nbsp &nbsp &nbsp
                New to this website?
                <a style="color: white"; href="registration.html"> &nbsp Sign Up</a>
            </p>
        </form>
    </div>



</section>


</body>
</html>