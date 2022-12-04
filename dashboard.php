<?php
//include all query where operations
include("QueryEnums.php");
session_start();
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
            <?php
        
        if(array_key_exists('buttonEnd', $_POST)) {
            //echo "Conversation has ended, please begin a new query";
            button1();
        }
        else if(array_key_exists('buttonBegin', $_POST)) {
            $_SESSION["Begin"] = 1;
        }
        else if(array_key_exists('buttonFresh', $_POST)) {
            $_SESSION["Begin"] = 0;
            button4();
        }
        ?>
            <p>SQL Query: <input type="text" name="SQL" style="width:100%" />
                <input type="submit" name="buttonBegin" <?php if ($_SESSION["Begin"] == '1'){ ?> disabled <?php   } ?>>
            </p>

        </form>




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

            <label for="YelpReviews"># Of Yelp Reviews </label>
            <input id="YelpReviews" name="YelpReviews" value="Any">
            <br>


            <input type="submit" value="Begin" name="buttonBegin" <?php if ($_SESSION["Begin"] == '1'){ ?> disabled
                <?php   } ?>>

        </form>

        <?php if ($_SESSION["Begin"] == '1'){ ?> disabled <?php   } ?>
        <form method="post">
            <input type="submit" name="buttonCumulative" class="button" value="Cumulative" />
            <input type="submit" name="buttonDisjunctive" class="button" value="Disjunctive" />
            <input type="submit" name="buttonEnd" class="button" value="End" />
            <input type="submit" name="buttonBackTrack" class="button" value="Backtrack" />
            <input type="submit" name="buttonFresh" class="button" value="Fresh Conversation" />
        </form>

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
                if(isset($_POST['YelpReviews']) && ($_POST['YelpReviews'] != "Any" && $_POST['YelpReviews'] != null))
                {
                if($whereCount ==0){
                $whereCount++;
                $sql = $sql . " where " . "YelpReviews" . $_POST['YelpReviews'];
                }
                else{
                $sql = $sql . " and " . "YelpReviews" . $_POST['YelpReviews'];
                }
                }

                if(isset($_POST['SQL']) && $_POST['SQL'] != null){

                $sql = $_POST['SQL'];
                }
                ?>



        <?php



        if(array_key_exists('buttonEnd', $_POST)) {
            echo "Conversation has ended, please begin a new query";
            //button1();
        }
        else if(array_key_exists('buttonBegin', $_POST)) {
            button2($sql);
        }
        if(array_key_exists('buttonBackTrack', $_POST)) {
            button3();
            $_SESSION["DisjunctiveFlag"]=false;
        }
        function button1() {
            //echo "Conversation has ended, please begin a new query";
            $_SESSION["list"] =  new SplDoublyLinkedList();
            $_SESSION["Begin"] = 0;
            $_SESSION["LFlag"]=false;
            $_SESSION["CFlag"]=false;
            $_SESSION["RFlag"]=false;
            $_SESSION["PFlag"]=false;
            $_SESSION["DFlag"]=false;
            $_SESSION["YFlag"]=false;
            $_SESSION["DisjunctiveFlag"]=false;
        }
        function button2($x) {
            //$_SESSION["Begin"] = 1;
            
            $_SESSION["list"]->push($x);
        }
        function button3() {
            if($_SESSION["list"]->count() > 1){
                $_SESSION["list"]->pop();
            }
        }
        function button4(){
            
            $_SESSION["LFlag"]=false;
            $_SESSION["CFlag"]=false;
            $_SESSION["RFlag"]=false;
            $_SESSION["PFlag"]=false;
            $_SESSION["DFlag"]=false;
            $_SESSION["YFlag"]=false;
            $_SESSION["DisjunctiveFlag"]=false;
        }

    ?>





        <!-- start of restaraunt query -->
        <hr>

        <div class="row">
            <div class="column">

                <table>
                    <tr>

                        <th>TiD</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Cuisine</th>
                        <th>Rating</th>
                        <th>Price</th>
                        <th>Dining</th>
                        <th># Of Yelp Reviews</th>


                    </tr>


                    <?php
                include("parse.php");
                if($_SESSION["list"]->offsetExists($_SESSION["list"]->count()-1)){
                    $sqlActual = $_SESSION["list"]->offsetGet($_SESSION["list"]->count()-1);

                    
                    if(array_key_exists('buttonDisjunctive', $_POST)){
                        if($_SESSION["DisjunctiveFlag"]==true){
                            $sqlActual = $_SESSION["list"]->offsetGet($_SESSION["list"]->count()-2);
                            $_SESSION["list"]->pop();
                            $sqlActual = parse($sqlActual);
                            $_SESSION["list"]->push($sqlActual);
                        }
                        else{
                            $sqlActual = parse($sqlActual);
                            $_SESSION["list"]->push($sqlActual);
                        }
                        $_SESSION["DisjunctiveFlag"]=true;
                    }

                    
                    if(array_key_exists('buttonCumulative', $_POST)) {
                        $_SESSION["DisjunctiveFlag"]=false;
                        $sqlActual = parse($sqlActual);
                        $_SESSION["list"]->push($sqlActual);
                    }
                        

                    
                }
                else{
                    $sqlActual = $sql;
                    echo "List is Empty! ";
                }
                
                
                echo $sqlActual;
                $result = $con->query($sqlActual);
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
                            <td><?php echo $row['YelpReviews'];?></td>

                        </form>
                    </tr>
                    <?php $sr++; }
        ?>
                </table>
            </div>

            <div class="column">

                <?php
                echo "<h3>Query chain: </h3>";
        $_SESSION["list"]->rewind();
        while ($_SESSION["list"]->valid()){
        //Print current node's value
        echo "<p>" . $_SESSION["list"]->current()."</p>";
        //Turn the cursor to next node
        $_SESSION["list"]->next();
        }
        ?>
            </div>
        </div>




    </div>


    <hr>



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