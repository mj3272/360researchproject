<?php
//start session and initalize linked list
session_start();
    $_SESSION["list"] = new SplDoublyLinkedList();
    $_SESSION["Begin"] = 0;

    $_SESSION["list"]->push('a');
    $_SESSION["list"]->push('3');
    $_SESSION["list"]->push('v');
    $_SESSION["list"]->push('1');
    $_SESSION["list"]->push('p');
    //$_SESSION["list"] = new SplDoublyLinkedList();




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

    <?php
        $_SESSION["list"]->rewind();
        while ($_SESSION["list"]->valid()){
        //Print current node's value
        echo $_SESSION["list"]->current()."\n";
        //Turn the cursor to next node
        $_SESSION["list"]->next();
        }
        ?>
</body>

</html>