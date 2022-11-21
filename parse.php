<?php
function parse($x) {
    $array = explode(" ", $x);
    print_r($array);
    echo "<br>";

    foreach($array as $value){
        echo $value . ' ';

        if(str_contains($value, "Location")){
            echo "Yippie!";
        }
        if(str_contains($value, "Cuisine")){
            echo "Yippie!";
        }
        if(str_contains($value, "Rating")){
            echo "Yippie!";
        }
        if(str_contains($value, "Price")){
            echo "Yippie!";
        }
        if(str_contains($value, "Dining")){
            echo "Yippie!";
        }

    }
}
        
    
?>