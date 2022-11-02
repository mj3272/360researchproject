<?php
//include all query where operations
include("QueryEnums.php");
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
        <h1>Welcome to the ConSQL dashboard page.<h1>
                <hr>
    </div>

    <div>

        <form method="post">
            <p>SQL Query: <input type="text" name="SQL" style="width:100%" />
                <input type="submit" />
            </p>

        </form>

        <hr>

        <form method="post">
            <label for="location">Location:</label>
            <select id="location" name="location">
                <option selected="selected" value="*">
                    Any
                </option>
                <option value=QueryWhere::LocationMoscow>Moscow</option>
                <option value=QueryWhere::LocationArlington>Arlington</option>
                <option value=QueryWhere::LocationPullman>Pullman</option>
                <option value=QueryWhere::LocationSpokane>Spokane</option>

            </select>

            <label for="cuisine">Cuisine:</label>
            <select id="cuisine" name="cuisine">
                <option selected="selected" value="*">
                    Any
                </option>
                <option value=QueryWhere::CuisineVietnamese>Vietnamese</option>
                <option value=QueryWhere::CuisineKorean>Korean</option>
                <option value=QueryWhere::CuisinePakistani>Pakistani</option>
                <option value=QueryWhere::CuisineTibetan>Tibetan</option>

            </select>

            <label for="rating">Rating:</label>
            <select id="rating" name="rating">
                <option selected="selected" value="*">
                    Any
                </option>
                <option value=QueryWhere::Rating1>*</option>
                <option value=QueryWhere::Rating2>**</option>
                <option value=QueryWhere::Rating3>***</option>
                <option value=QueryWhere::Rating4>****</option>
                <option value=QueryWhere::Rating5>*****</option>

            </select>

            <label for="price">Price:</label>
            <select id="price" name="price">
                <option selected="selected" value="*">
                    Any
                </option>
                <option value=QueryWhere::PriceInexpensive>Inexpensive</option>
                <option value=QueryWhere::PriceModerate>Moderate</option>
                <option value=QueryWhere::PriceExpensive>Expensive</option>
                <option value=QueryWhere::PriceVeryExpensive>VeryExpensive</option>

            </select>

            <label for="dining">Dining:</label>
            <select id="dining" name="dining">
                <option selected="selected" value="*">
                    Any
                </option>
                <option value=QueryWhere::DiningCarryout>Carryout</option>
                <option value=QueryWhere::DiningPremise>Premise</option>
                <option value=QueryWhere::DiningBoth>Both</option>

            </select>
            <br>
            <input type="submit" value="Submit">
        </form>

        <hr>
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


    
    $sql = "select * from restaurants";
    if(isset($_POST['SQL']) && $_POST['SQL'] != null){
        
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