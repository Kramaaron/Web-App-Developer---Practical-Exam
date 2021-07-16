<?php
$nar = array(9863, 7127, 2020, 80, 131, 55, 100);
$c;
echo "Unsorted ";
print_r($nar); //Displays Unsorted array.
for($c=0; $c<=6; $c++){ 

    if($nar[$c] % 10 != 0){ //checks if number is divisile by 10.
        $round = round($nar[$c], -1); //round functions the number to the nearest 10.
    $nar[$c] = $round; //get the value of rounded number.

    }
}
echo "<br><br>Sorted ";
sort($nar); //Sort the array into ascending order
print_r($nar);
?>