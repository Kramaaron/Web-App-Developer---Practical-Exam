<?php
$arr = array("red", "blue", "black", "red", "blue", "blue", "blue", "red", "gold");
$array = array();
for($a = 0; $a<= 8; $a++){
    $c = 0; //initializes the counter to 0.
    for($b = 0; $b <= 8; $b++){
        if($arr[$a] == $arr[$b]){ //checking to see whether the condition has a duplication.
            $c++; //increment counter
        } 
    }
    if($c == 1){ //If the counter is more than one, it indicates that there are duplicates.
        array_push($array, $arr[$a]); //If counter is only one, the value will be replicated to another array.
    }
}
echo "List of Color ";
print_r($array); //printing the array with only unique values.
?>