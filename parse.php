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

    //reseting the global flags
    if ($_SESSION["LFlag"]==true && $_SESSION["CFlag"]==true && $_SESSION["RFlag"]==true && $_SESSION["PFlag"]==true && $_SESSION["DFlag"]==true){
        $_SESSION["LFlag"]=false;
        $_SESSION["CFlag"]=false;
        $_SESSION["RFlag"]=false;
        $_SESSION["PFlag"]=false;
        $_SESSION["DFlag"]=false;
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


    $inUse = false;

    //Rating distance
    if($_SESSION["RFlag"]==false && !$inUse){
        $_SESSION["RFlag"]= true; //need to remove this if working
        $inUse = true;
        $rating = rating($rating);

        //building the return
        $x ='';
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

    //Price distance
    if($_SESSION["PFlag"]==false && !$inUse){
        $_SESSION["PFlag"]= true; //need to remove this if working
        $inUse = true;
        $price = price($price);

        //building the return
        $x ='';
        $or = false;
        $once = 0;
         print_r($array);
         
        foreach($array as $token){
            
            if(str_contains($token, "Price")){
                if($once==0){
                    $x = $x . ' ' . $price . ' ' ;
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




    echo "<br>";
    echo "<h1>" . $x . "</h1>" ; 
    echo "<br>";

    
return $x;


}
        
    
?>