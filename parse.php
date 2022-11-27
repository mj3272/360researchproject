<?php
function parse($x) {
    $array = explode(" ", $x);
    print_r($array);
    echo "<br>";

    $location = '';
    $cuisine = '';
    $rating = '';
    $price = '';
    $dining = '';

    foreach($array as $value){
        echo $value . ' ';

        if(str_contains($value, "Location")){
            $location = $location . $value;
            
            echo "Yippie!";
        }
        if(str_contains($value, "Cuisine")){
            $cuisine = $cuisine . $value;
            echo "Yippie!";
        }
        if(str_contains($value, "Rating")){
            $rating = $rating . $value;
            echo "Yippie!";
        }
        if(str_contains($value, "Price")){
            $price = $price . $value;
            echo "Yippie!";
        }
        if(str_contains($value, "Dining")){
            $dining = $dining . $value;
            echo "Yippie!";
        }

    }
    echo "<br>";
    echo $location;
}
        
    
?>