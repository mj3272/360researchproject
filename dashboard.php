<?php
//include auth_session.php file on all user panel pages

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="form">
        <p>Hey, user!</p>
        <p>You are now logged into the user dashboard page.</p>
        <hr>
    </div>

    <div>

        <form method="post">
            <p>SQL Query: <input type="text" name="SQL" style="height:220px" />
            </p>
            <p><input type="submit" /></p>
        </form>


        <table>
            <tr>
                <th>TiD</th>
                <th>Name</th>
                <th>Location</th>
                <th>Cuisine</th>
                <th>Rating</th>
                <th>Price</th>
                <th>Dining</th>

            </tr>
            <?php
    require('db.php');
    if($_POST['SQL'] == null){
        $sql = "select * from restaurants";
    }
    else{
        $sql = $_POST['SQL'];
    }
   

    $result = $con->query($sql);
    $sr =1;

   
    while($row = $result->fetch_assoc()){?>
            <tr>
                <form action="" method="post" role="form">
                    <td><?php echo $sr;?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Location'];?></td>
                    <td><?php echo $row['Cuisine'];?></td>
                    <td><?php echo $row['Rating'];?></td>
                    <td><?php echo $row['Price'];?></td>
                    <td><?php echo $row['Dining'];?></td>

                </form>
            </tr>
            <?php $sr++; }
        ?>
        </table>


    </div>






</body>

</html>

<!--
sql statement to create table

CREATE TABLE IF NOT EXISTS restaurants (
 TiD int(11) NOT NULL AUTO_INCREMENT,
 Name varchar(50) NOT NULL,
    Location varchar(50) NOT NULL,
    Cuisine varchar(50) NOT NULL,
 Rating varchar(5) NOT NULL,
 Price varchar(50) NOT NULL,
 Dining varchar(50) NOT NULL,
 PRIMARY KEY (TiD)
);

--!>