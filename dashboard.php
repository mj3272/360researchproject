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
                <option selected="selected" value="">
                    Any
                </option>
                <option value=<?php echo QueryWhere::LocationMoscow?>>Moscow</option>
                <option value=<?php echo QueryWhere::LocationArlington?>>Arlington</option>
                <option value=<?php echo QueryWhere::LocationPullman?>>Pullman</option>
                <option value=<?php echo QueryWhere::LocationSpokane?>>Spokane</option>
                <option value=<?php echo QueryWhere::LocationLewiston?>>Lewiston</option>
                <option value=<?php echo QueryWhere::LocationHayden?>>Hayden</option>
                <option value=<?php echo QueryWhere::LocationCoeurdAlene?>>CoeurdAlene</option>
                <option value=<?php echo QueryWhere::LocationPostFalls?>>PostFalls</option>

            </select>

            <label for="cuisine">Cuisine:</label>
            <select id="cuisine" name="cuisine">
                <option selected="selected" value="">
                    Any
                </option>
                <option value=<?php echo QueryWhere::CuisineVietnamese?>>Vietnamese</option>
                <option value=<?php echo QueryWhere::CuisineKorean?>>Korean</option>
                <option value=<?php echo QueryWhere::CuisinePakistani?>>Pakistani</option>
                <option value=<?php echo QueryWhere::CuisineTibetan?>>Tibetan</option>
                <option value=<?php echo QueryWhere::CuisineAmerican?>>American</option>
                <option value=<?php echo QueryWhere::CuisineFrench?>>French</option>
                <option value=<?php echo QueryWhere::CuisineItalian?>>Italian</option>
                <option value=<?php echo QueryWhere::CuisineBBQ?>>BBQ</option>
                <option value=<?php echo QueryWhere::CuisineChinese?>>Chinese</option>
                <option value=<?php echo QueryWhere::CuisineMexican?>>Mexican</option>

            </select>

            <label for="rating">Rating:</label>
            <select id="rating" name="rating">
                <option selected="selected" value="">
                    Any
                </option>
                <option value=<?php echo QueryWhere::Rating1?>>*</option>
                <option value=<?php echo QueryWhere::Rating2?>>**</option>
                <option value=<?php echo QueryWhere::Rating3?>>***</option>
                <option value=<?php echo QueryWhere::Rating4?>>****</option>
                <option value=<?php echo QueryWhere::Rating5?>>*****</option>

            </select>

            <label for="price">Price:</label>
            <select id="price" name="price">
                <option selected="selected" value="">
                    Any
                </option>
                <option value=<?php echo QueryWhere::PriceInexpensive?>>Inexpensive</option>
                <option value=<?php echo QueryWhere::PriceModerate?>>Moderate</option>
                <option value=<?php echo QueryWhere::PriceExpensive?>>Expensive</option>
                <option value=<?php echo QueryWhere::PriceVeryExpensive?>>VeryExpensive</option>

            </select>

            <label for="dining">Dining:</label>
            <select id="dining" name="dining">
                <option selected="selected" value="">
                    Any
                </option>
                <option value=<?php echo QueryWhere::DiningCarryout?>>Carryout</option>
                <option value=<?php echo QueryWhere::DiningPremise?>>Premise</option>
                <option value=<?php echo QueryWhere::DiningBoth?>>Both</option>

            </select>
            <br>
            <input type="submit" value="Submit">
        </form>


        <?php
        require('db.php');
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        function button1() {
            require('db.php');
            echo "Conversation has been reset";
            $reset = "TRUNCATE TABLE querydb";
            $con->query($reset);
        }
        function button2() {
            echo "This is Button2 that is selected";
        }
    ?>

        <form method="post">
            <input type="submit" name="button1" class="button" value="Fresh Conversation" />

            <input type="submit" name="button2" class="button" value="Button2" />
        </form>

        <hr>
        <table>
            <tr>
                <th>Entry</th>
                <th>Query</th>
                <th>Disjunctive?</th>


            </tr>
            <?php
    require('db.php');
   
$sql_query = "select * from querydb";
    $result_query = $con->query($sql_query);
    

   
    while($row_query = $result_query->fetch_assoc()){?> <tr>
                <form action="" method="post" role="form">
                    <td><?php echo $row_query['ID'];?></td>
                    <td><?php echo $row_query['Name'];?></td>
                    <td><?php echo $row_query['Disjunctive'];?></td>
                </form>
            </tr>
            <?php  }?>

            <!-- start of restaraunt query -->
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
                $whereCount = 0;
                //setting query from form
                if(isset($_POST['location']) && $_POST['location'] != null)
                {
                $whereCount++;
                $sql = $sql . " where " . $_POST['location'];
                }
                if(isset($_POST['cuisine']) && $_POST['cuisine'] != null)
                {
                if($whereCount ==0){
                $whereCount++;
                $sql = $sql . " where " . $_POST['cuisine'];
                }
                else{
                $sql = $sql . " and " . $_POST['cuisine'];
                }
                }
                if(isset($_POST['rating']) && $_POST['rating'] != null)
                {
                if($whereCount ==0){
                $whereCount++;
                $sql = $sql . " where " . $_POST['rating'];
                }
                else{
                $sql = $sql . " and " . $_POST['rating'];
                }
                }
                if(isset($_POST['price']) && $_POST['price'] != null)
                {
                if($whereCount ==0){
                $whereCount++;
                $sql = $sql . " where " . $_POST['price'];
                }
                else{
                $sql = $sql . " and " . $_POST['price'];
                }
                }
                if(isset($_POST['dining']) && $_POST['dining'] != null)
                {
                if($whereCount ==0){
                $whereCount++;
                $sql = $sql . " where " . $_POST['dining'];
                }
                else{
                $sql = $sql . " and " . $_POST['dining'];
                }
                }


                //$sql = $sql . " where " . $_POST['location'];



                if(isset($_POST['SQL']) && $_POST['SQL'] != null){

                $sql = $_POST['SQL'];
                }


                echo $sql;
                $result = $con->query($sql);
                $sr =1;


                while($row = $result->fetch_assoc()){?> <tr>
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

-->