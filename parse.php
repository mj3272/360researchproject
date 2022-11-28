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
    }



    $w = "select * from restaurants where ";
    $inUse = false;

    
    //$price = price($price);


    if($rating != '' && $_SESSION["RFlag"]==false && !$inUse){
        //$_SESSION["RFlag"]= true; //need to remove this if working
        $inUse = true;
        $rating = rating($rating);

        $x = $w . $rating;
        $x ='';

        //building x
        $or = false;
        $once = 0;
         print_r($array);
        foreach($array as $token){
            
    
            if(str_contains($token, "Rating")){
                if($once==0){
                    $x = $x . ' ' . $rating . ' ' ;
                    $once = 1;
                }
                $or = true;
            }
            elseif($or && str_contains($token, "or")){

            }
            
            else{
                $x = $x . $token . ' ';
            }

            
        }
        
    }

    if($price != '' && $_SESSION["PFlag"]==false && !$inUse){
        $_SESSION["PFlag"]= true;
        $inUse = true;
        $price = price($price);
        $x = $w . $price;
    }

    echo "<br>";
    echo "<h1>" . $x . "</h1>" ; 
    echo "<br>";

    
return $x;


}
        
    
?>