<?php
//include all query where operations
include("QueryEnums.php");
session_start();
if(!isset($_SESSION["hasStarted"])){
    //session_start();
    $_SESSION["hasStarted"] = true;
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

    $_SESSION["disjunctiveFlag"]=false;
}
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
        <h1> Bryce H. & Marissa S. CS360 research project.</h1>
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
            $_SESSION["initialContext"] = new SplDoublyLinkedList();
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

            <label for="YelpReviews"># Of Yelp Reviews: </label>
            <input id="YelpReviews" name="YelpReviews" value="Any">
            <br>



            <input type="submit" value="Begin" name="buttonBegin" <?php if ($_SESSION["Begin"] == '1'){ ?> disabled
                <?php   } ?>>

        </form>

        <?php if ($_SESSION["Begin"] == '1'){ ?> disabled <?php   } ?>
        <form method="post">
            <label for="relax">Relaxation:</label>
            <select id="relax" name="relax">
                <option selected="selected" value="">
                    Default
                </option>
                <option value="Location">Location</option>
                <option value="Cuisine">Cuisine</option>
                <option value="Rating">Rating</option>
                <option value="Price">Price</option>
                <option value="Dining">Dining</option>
                <option value="YelpReviews">YelpReviews</option>


            </select>

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

                if(isset($_POST['relax']) ){

                    if($_POST['relax'] == "Location"){
                        $_SESSION["LFlag"]=false;
                        $_SESSION["CFlag"]=true;
                        $_SESSION["RFlag"]=true;
                        $_SESSION["PFlag"]=true;
                        $_SESSION["DFlag"]=true;
                        $_SESSION["YFlag"]=true;
                    }

                    if($_POST['relax'] == "Cuisine"){
                        $_SESSION["LFlag"]=true;
                        $_SESSION["CFlag"]=false;
                        $_SESSION["RFlag"]=true;
                        $_SESSION["PFlag"]=true;
                        $_SESSION["DFlag"]=true;
                        $_SESSION["YFlag"]=true;
                    }

                    if($_POST['relax'] == "Rating"){
                        $_SESSION["LFlag"]=true;
                        $_SESSION["CFlag"]=true;
                        $_SESSION["RFlag"]=false;
                        $_SESSION["PFlag"]=true;
                        $_SESSION["DFlag"]=true;
                        $_SESSION["YFlag"]=true;
                    }

                    if($_POST['relax'] == "Price"){
                        $_SESSION["LFlag"]=true;
                        $_SESSION["CFlag"]=true;
                        $_SESSION["RFlag"]=true;
                        $_SESSION["PFlag"]=false;
                        $_SESSION["DFlag"]=true;
                        $_SESSION["YFlag"]=true;
                    }

                    if($_POST['relax'] == "Dining"){
                        $_SESSION["LFlag"]=true;
                        $_SESSION["CFlag"]=true;
                        $_SESSION["RFlag"]=true;
                        $_SESSION["PFlag"]=true;
                        $_SESSION["DFlag"]=false;
                        $_SESSION["YFlag"]=true;
                    }

                    if($_POST['relax'] == "YelpReviews"){
                        $_SESSION["LFlag"]=true;
                        $_SESSION["CFlag"]=true;
                        $_SESSION["RFlag"]=true;
                        $_SESSION["PFlag"]=true;
                        $_SESSION["DFlag"]=true;
                        $_SESSION["YFlag"]=false;
                    }


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
            $_SESSION["disjunctiveFlag"]=false;
        }
        function button1() {
            //echo "Conversation has ended, please begin a new query";
            $_SESSION["list"] =  new SplDoublyLinkedList();
            $_SESSION["initialContext"] = new SplDoublyLinkedList();
            $_SESSION["Begin"] = 0;
            $_SESSION["LFlag"]=false;
            $_SESSION["CFlag"]=false;
            $_SESSION["RFlag"]=false;
            $_SESSION["PFlag"]=false;
            $_SESSION["DFlag"]=false;
            $_SESSION["YFlag"]=false;
            $_SESSION["disjunctiveFlag"]=false;
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
            $_SESSION["disjunctiveFlag"]=false;
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
                        if($_SESSION["disjunctiveFlag"]==true){
                            $sqlActual = $_SESSION["list"]->offsetGet($_SESSION["list"]->count()-2);
                            $_SESSION["list"]->pop();
                            $sqlActual = parse($sqlActual);
                            $_SESSION["list"]->push($sqlActual);
                        }
                        else{
                            $sqlActual = parse($sqlActual);
                            $_SESSION["list"]->push($sqlActual);
                        }
                        $_SESSION["disjunctiveFlag"]=true;
                    }

                    
                    if(array_key_exists('buttonCumulative', $_POST)) {
                        $_SESSION["disjunctiveFlag"]=false;
                        $sqlActual = parse($sqlActual);
                        $_SESSION["list"]->push($sqlActual);
                    }
                        
                    if(array_key_exists('buttonBegin', $_POST)) {
                        $_SESSION["initialContext"]->push($sqlActual);
                    }
                    
                }
                else{
                    $sqlActual = $sql;

                       
                    
                    echo "List is Empty! ";
                }
                
                
                echo $sqlActual;
                $result = $con->query($sqlActual);
                

             
                // If initial context exists, check for yelpReview value, strip it and then check each query for close to intent
            if($_SESSION["initialContext"]->offsetExists($_SESSION["initialContext"]->count()-1)){
                $context = $_SESSION["initialContext"]->offsetGet($_SESSION["initialContext"]->count()-1);
                // Getting value of inital contexts yelp reviews
                
                if (str_contains($context, "YelpReviews")){


                    $num = explode(" ", $context);
                    foreach($num as $token){
                        if (str_contains($token, "YelpReviews")){
                            $num = $token;
                        }
                    }
                    
                    // Grabbing last 3 characters and checking if it is a number, else it will strip the last operator off
                    $num = substr($num, -3, 3);
                    if(!is_numeric($num)){
                        $num = substr($num, -2, 2);
                    }



                

                // Pulling real query and checking for the closest number to num
                $contextCheck = $con->query($sqlActual);
                

                $bestDistance = 100;
                while($contextRow = $contextCheck->fetch_assoc()){
                    

                    $distance = $contextRow['YelpReviews'] - $num;

                    if(abs($distance) < abs($bestDistance)){
                        $bestDistance = $distance;
                        $queryDistance = $contextRow['YelpReviews'];
                    }
                    
                    
                }

                echo "<h4> Showing only prefered tuples (results closest to the initial \"YelpReviews\" constraint) <h4>";
            }}
                
            
                $sr =1;
                while($row = $result->fetch_assoc()){
                    //Only printing if there is no initial context, or it is equal to the closest tuple
                    if(!isset($bestDistance) || $row['YelpReviews'] == $queryDistance){?> <tr>
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
                    <?php $sr++; }}
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