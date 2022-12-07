<?php
//start session and initalize linked list
session_start();
    $_SESSION["list"] = new SplDoublyLinkedList();
    $_SESSION["initialContext"] = new SplDoublyLinkedList();
    $_SESSION["Begin"] = 0;

    $_SESSION["initialContext"]->push('a');
    $_SESSION["list"]->push('a');
    $_SESSION["list"]->push('3');
    $_SESSION["list"]->push('v');
    $_SESSION["list"]->push('1');
    $_SESSION["list"]->push('p');
    $_SESSION["initialContext"] = new SplDoublyLinkedList();
    $_SESSION["list"] = new SplDoublyLinkedList();

    $_SESSION["LFlag"]=false;
    $_SESSION["CFlag"]=false;
    $_SESSION["RFlag"]=false;
    $_SESSION["PFlag"]=false;
    $_SESSION["DFlag"]=false;
    $_SESSION["YFlag"]=false;

    $_SESSION["DisjunctiveFlag"]=false;



?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Research Assignment</title>
</head>

<body>
    <h1> Bryce H. & Marissa S. CS360 research project</h1>
    <p> Please direct youself to the SQL dashboard </p>
    <a href="./dashboard.php">Dashboard</a>
</body>

</html>