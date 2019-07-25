<?php
include "nav-bar.php";
include "db connect.php"
?>

<!DOCTYPE html>
<html>

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
    <title>
        Feedback
    </title>
    <style>
        body{
            background-image: url("images/pexels-photo (1).jpg");
        }
        h1{
            background-color: darkblue;
            color: black;
            border: 1px solid;
            margin: 20px auto;
        }
        .wrapper2{
            padding: 10px;
            margin: -20px auto;
            width: 900px;
            height:600px ;
            background-color: black;
            color: white;
            opacity: .8;
        }
        .form-control{
           height: 70px;
            width: 60%;
        }
        .scroll{
            width: 100%;
            height: 300px;
            overflow: auto;
        }


    </style>

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

<div class="wrapper2">
<h4> If you have any suggestions you can comment below</h4>

    <form style="" action="feedback.php" method="post">

        <input class="form-control"  type="text" name="comment" placeholder="write something "><br>
        <input class="btn btn default"  type="submit" name="submit" placeholder="comment " style="width: 100px" height="35px" >
    </form>

<br><br>

<div class="scroll">

    <?php
if( isset ($_POST['submit']))
{

    $sql="INSERT INTO `comments` values( '','$_POST[comment]')";
 if( mysqli_query($db,$sql))
 {

 $q="SELECT * FROM `comments`  ORDER BY `comments`.`id` DESC";
 $res=mysqli_query($db,$q );

 echo"<table class='table table bordered'>";
    while($row=mysqli_fetch_assoc($res)){

echo "<tr>";


    echo"<td>";   echo$row['comments'];   echo"</td>>";


    echo "</tr>";

    }
}

 }

    else{

    $q="SELECT * FROM `comments`  ORDER BY `comments`.`id` DESC";
    $res=mysqli_query($db,$q );

    echo"<table class='table table bordered'>";
    while($row=mysqli_fetch_assoc($res)){

    echo "<tr>";


        echo"<td>";   echo $row['comments'];   echo"</td>>";


        echo "</tr>";

    }





    }
?>
</table>
</div>
</div>

</body>
</html>