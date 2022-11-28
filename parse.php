<?php
function parse($x) {
    $array = explode(" ", $x);
   // print_r($array);
    echo "<br>";

    $location = '';
    $cuisine = '';
    $rating = '';
    $price = '';
    $dining = '';

    //Creating tokens of each
    foreach($array as $value){
        echo $value . ' ';

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


    echo "<br>";
    echo $location;

    $x = "select * from restaurants where";

    if($location != ''){
        $x = $x . $location;
    }




}
        
    
?>