<?php
$connection = mysqli_connect("localhost" , "root" , "" , "school_managment");

if(!$connection){
    die("Not connected with database");
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>School Manament system</title>
    <link rel="stylesheet" href="bootstrap.css">
    </head>
    
    <style>
    
        .back{
         background-image: url(Pic/background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1 , h2 , h3 , h4{
            text-align: center;
        }
        .mar{
           border: 1px solid black;
            color: white;
            font-size: bolder;
            padding: 4px;
        }
        
    </style>
<!--    this style blow tags for navigation bar-->
 <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    box-shadow: 0px 0px 10px white;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>

    <body class="container back">
    <h1 style="color:white;  text-shadow:0px 0px 10px black;"><strong> School Managment System</strong> </h1>
    
         
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="school.php">Schools</a></li>
  <li><a href="teacher.php">Teachers</a></li>
  <li><a href="student.php">Student</a></li>
<li><a href="viewAll.php">View All</a></li>    
</ul>
    