<?php
include "db connect.php";
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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


    <title>

         Books
    </title>

    <style type="text/css">

   .srch {

       padding-left: 1000px;
   }
    </style>

</head>
<body style="background-color: darkslategray">
<header style="height: 100px">

    <div class="logo">
        <img   src="images/2.png." style="height: 70px" width="150px"  >
    </div>
    <nav>
        <ul>
            <li> <a href="index.php">HOME</a> </li>
            <li> <a href="books.php">BOOKS</a> </li>
            <li> <a href="student%20login.php">STUDENT-REGISTRATION</a> </li>
            <li> <a href="student%20registration.php">ADMIN</a> </li>
            <li> <a href="feedback.php">FEEDBACK</a> </li>
        </ul>
    </nav>

</header>
<div class="srch">

<form class="navbar-form" method="post" name="form1">

    <div>
        <input class="form-control" type="text" name="search" placeholder="search books..." required>
        <button type="button" class="btn btn-info">
            <span class="glyphicon glyphicon-search"></span> Search
        </button>
    </div>

</form>
</div>

<table>

<h2>List of Books</h2>



<?php

if(isset($_POST['submit']))
{
$q=mysqli_query($db,"SELECT * FROM `books` where name like '%$_POST[search]%'");

if(mysqli_num_rows($q)==0 ){

echo " sorry,no book found,,,try searching again";
}
else
{
echo "<table class='table table-bordered table-hover'>";
    echo '<tr style="background-color: white ">';

    echo "<th>";   echo "ID";   echo "</th>>";
    echo "<th>";    echo "Book-Name "; "</th>>";
    echo "<th>";    echo "Authors-Name"; "</th>>";
    echo "<th>";    echo "Edition"; "</th>>";
    echo "<th>";    echo "Status"; "</th>>";
    echo "<th>";    echo "Quantity"; "</th>>";
    echo "<th>";    echo "Department"; "</th>>";

    echo "</tr>>";

    while($row=mysqli_fetch_assoc($q)){
    echo "<tr>";

    echo "<td>";  echo $row['bid'];  echo "</td>";
    echo "<td>";  echo $row['name'];  echo "</td>";
    echo "<td>";  echo $row['authors'];  echo "</td>";
    echo "<td>";  echo $row['edition'];  echo "</td>";
    echo "<td>";  echo $row['status'];  echo "</td>";
    echo "<td>";  echo $row['quantity'];  echo "</td>";
    echo "<td>";  echo $row['department'];  echo "</td>";

    echo "</tr>";

    }
    echo "</table>";
}
}

else{
$res=mysqli_query($db,"SELECT * FROM `books`;");



echo "<table class='table table-bordered table-hover'>";
    echo '<tr style="background-color: white ">';

        echo "<th>";   echo "ID";   echo "</th>>";
        echo "<th>";    echo "Book-Name ";    "</th>>";
        echo "<th>";    echo "Authors-Name";    "</th>>";
        echo "<th>";    echo "Edition";    "</th>>";
        echo "<th>";    echo "Status";    "</th>>";
        echo "<th>";    echo "Quantity";    "</th>>";
        echo "<th>";    echo "Department";     "</th>>";

        echo "</tr>>";

    while($row=mysqli_fetch_assoc($res))

    {
    echo "<tr>";

        echo "<td>";  echo $row['bid'];  echo "</td>";
        echo "<td>";  echo $row['name'];  echo "</td>";
        echo "<td>";  echo $row['authors'];  echo "</td>";
        echo "<td>";  echo $row['edition'];  echo "</td>";
        echo "<td>";  echo $row['status'];  echo "</td>";
        echo "<td>";  echo $row['quantity'];  echo "</td>";
        echo "<td>";  echo $row['department'];  echo "</td>";

        echo "</tr>";

    }
    echo "</table>";

}


$res=mysqli_query($db,"SELECT * FROM `books`;");



echo "<table class='table table-bordered table-hover'>";
echo '<tr style="background-color: white ">';

         //Table header
    echo "<th>";   echo "ID";   echo "</th>>";
        echo "<th>";    echo "Book-Name ";    "</th>>";
        echo "<th>";    echo "Authors-Name";    "</th>>";
        echo "<th>";    echo "Edition";    "</th>>";
        echo "<th>";    echo "Status";    "</th>>";
        echo "<th>";    echo "Quantity";    "</th>>";
        echo "<th>";    echo "Department";     "</th>>";

    echo "</tr>>";

while($row=mysqli_fetch_assoc($res))

{
echo "<tr>";

          echo "<td>";  echo $row['bid'];  echo "</td>";
         echo "<td>";  echo $row['name'];  echo "</td>";
          echo "<td>";  echo $row['authors'];  echo "</td>";
          echo "<td>";  echo $row['edition'];  echo "</td>";
         echo "<td>";  echo $row['status'];  echo "</td>";
         echo "<td>";  echo $row['quantity'];  echo "</td>";
         echo "<td>";  echo $row['department'];  echo "</td>";

    echo "</tr>";

}
echo "</table>";
?>


</body>

</html>
