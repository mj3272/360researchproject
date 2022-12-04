<?php

include ("distancefunctions.php");

function parse($x) {
    $array = explode(" ", $x);
    //print_r($array);
    //echo "<br>";

    $location = '';
    $cuisine = '';
    $rating = '';
    $price = '';
    $dining = '';
    $yelpReviews = '';

    //Creating tokens of each
    foreach($array as $value){
        //echo $value . ' ';

        if(str_contains($value, "Location")){
            $location = $location . $value;
        }
        if(str_contains($value, "Cuisine")){
            $cuisine = $cuisine . $value;
        }
        if(str_contains($value, "Rating")){
            $rating = $rating . $value;
        }
        if(str_contains($value, "Price")){
            $price = $price . $value;
        }
        if(str_contains($value, "Dining")){
            $dining = $dining . $value;
        }
        if(str_contains($value, "YelpReviews")){
            $yelpReviews = $yelpReviews . $value;
        }
        

    }




    //reseting the global flags
    if ($_SESSION["LFlag"]==true && $_SESSION["CFlag"]==true && $_SESSION["RFlag"]==true && $_SESSION["PFlag"]==true && $_SESSION["DFlag"]==true && $_SESSION["YFlag"]==true){
        $_SESSION["LFlag"]=false;
        $_SESSION["CFlag"]=false;
        $_SESSION["RFlag"]=false;
        $_SESSION["PFlag"]=false;
        $_SESSION["DFlag"]=false;
        $_SESSION["YFlag"]=false;
    }

    //checking if strings had content
    if($location == ''){
        $_SESSION["LFlag"]= true;
    }
    if($cuisine == ''){
        $_SESSION["CFlag"]= true;
    }
    if($rating == ''){
        $_SESSION["RFlag"]= true;
    }
    if($price == ''){
        $_SESSION["PFlag"]= true;
    }
    if($dining == ''){
        $_SESSION["DFlag"]= true;
    }
    if($yelpReviews == ''){
        $_SESSION["YFlag"]= true;
    }


    $inUse = false;

    //Location distance
    if($_SESSION["LFlag"]==false && !$inUse){
        $_SESSION["LFlag"]= true; 
        $inUse = true;
        $location = location($location);

        if($location == ""){
            echo "<h1> ERROR LOCATION DISTANCE FUNCTION DID NOT RETURN </h1>";
        }
        

        //building the return
        $w ="";
        $or = false;
        $once = 0;
        //print_r($array);
         
        foreach($array as $token){
            if(str_contains($token, "and")){
                $or = false;
            }
            
            if(str_contains($token, "Location")){
                if($once==0){
                    $w = $w . ' ' . $location . ' ' ;
                    $once = 1;
                }
                $or = true;
            }
            elseif($or && str_contains($token, "or")){

            }
            else{
                $w = $w . $token . ' ';
            }

        }
    }

    //Cuisine distance
    if($_SESSION["CFlag"]==false && !$inUse){
        $_SESSION["CFlag"]= true; 
        $inUse = true;
        $cuisine = cuisine($cuisine);

        if($cuisine == ""){
            echo "<h1> ERROR CUISINE DISTANCE FUNCTION DID NOT RETURN </h1>";
        }
        

        //building the return
        $w ="";
        $or = false;
        $once = 0;
        //print_r($array);
         
        foreach($array as $token){
            if(str_contains($token, "and")){
                $or = false;
            }
            
            if(str_contains($token, "Cuisine")){
                if($once==0){
                    $w = $w . ' ' . $cuisine . ' ' ;
                    $once = 1;
                }
                $or = true;
            }
            elseif($or && str_contains($token, "or")){

            }
            else{
                $w = $w . $token . ' ';
            }

        }
    }

    //Rating distance
    if($_SESSION["RFlag"]==false && !$inUse){
        $_SESSION["RFlag"]= true; 
        $inUse = true;
        $rating = rating($rating);

        if($rating == ""){
            echo "<h1> ERROR RATING DISTANCE FUNCTION DID NOT RETURN </h1>";
        }

        //building the return
        $w ="";
        $or = false;
        $once = 0;
         //print_r($array);
         
        foreach($array as $token){
            if(str_contains($token, "and")){
                $or = false;
            }
            
            if(str_contains($token, "Rating")){
                if($once==0){
                    $w = $w . ' ' . $rating . ' ' ;
                    $once = 1;
                }
                $or = true;
            }
            elseif($or && str_contains($token, "or")){

            }
            else{
                $w = $w . $token . ' ';
            }

        }
    }

    //Price distance
    if($_SESSION["PFlag"]==false && !$inUse){
        $_SESSION["PFlag"]= true;
        $inUse = true;
        $price = price($price);

        if($price == ""){
            echo "<h1> ERROR PRICE DISTANCE FUNCTION DID NOT RETURN </h1>";
        }

        //building the return
        $w ="";
        $or = false;
        $once = 0;
         //print_r($array);
         
        foreach($array as $token){
            if(str_contains($token, "and")){
                $or = false;
            }

            if(str_contains($token, "Price")){
                if($once==0){
                    $w = $w . ' ' . $price . ' ' ;
                    $once = 1;
                }
                $or = true;
            }
            elseif($or && str_contains($token, "or")){

            }
            else{
                $or = false;
                $w = $w . $token . ' ';
            }

        }
    }

     //Dining distance
     if($_SESSION["DFlag"]==false && !$inUse){
        $_SESSION["DFlag"]= true;
        $inUse = true;
        $dining = dining($dining);

        if($dining == ""){
            echo "<h1> ERROR DINING DISTANCE FUNCTION DID NOT RETURN </h1>";
        }

        //building the return
        $w ="";
        $or = false;
        $once = 0;
         //print_r($array);
         
        foreach($array as $token){
            if(str_contains($token, "and")){
                $or = false;
            }

            if(str_contains($token, "Dining")){
                if($once==0){
                    $w = $w . ' ' . $dining . ' ' ;
                    $once = 1;
                }
                $or = true;
            }
            elseif($or && str_contains($token, "or")){

            }
            else{
                $or = false;
                $w = $w . $token . ' ';
            }

        }
    }

    //YelpReview distance
    if($_SESSION["YFlag"]==false && !$inUse){
        $_SESSION["YFlag"]= true;
        $inUse = true;
        $yelpReviews = yelpReviews($yelpReviews);

        if($yelpReviews == ""){
            echo "<h1> ERROR YELPREVIEWS DISTANCE FUNCTION DID NOT RETURN </h1>";
        }

        //building the return
        $w ="";
        $or = false;
        $once = 0;
         //print_r($array);
         
        foreach($array as $token){
            if(str_contains($token, "and")){
                $or = false;
            }

            if(str_contains($token, "YelpReviews")){
                if($once==0){
                    $w = $w . ' ' . $yelpReviews . ' ' ;
                    $once = 1;
                }
                $or = true;
            }
            elseif($or && str_contains($token, "or")){

            }
            else{
                $or = false;
                $w = $w . $token . ' ';
            }

        }
    }
    




    //echo "<br>";
    //echo "<h1>" . $x . "</h1>" ; 
    //echo "<br>";

   
return $w;


}
        
    
?>