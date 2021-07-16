<?php
$n = 0;
$s = 0;
while($n <= 10 && $n % 2 == 0){ // Doing the while loop with the condition if it is lower than 10 and an even number.
    $s = $s + $n; //sum fuction to add even numbers
    $n = $n++; //increment the number
}
echo "The Sum is : $s";// displays the total sum 
?>