<?php
$n1 = 0;
$n2 = 1;
$next;
echo "Fibonacci Sequence up to 10 numbers: $n1 $n2 ";
for($c = 0; $c < 10; ++$c){ // starts with 2 because 0 and 1 is done
    $next = $n1 + $n2; //adds the previous 2 numbers to get the next numer sequence
    echo "$next "; // prints the number
    $n1= $n2;//Substitutes the values of the first num to second num
    $n2= $next;//substitutes the second num to the new value for the next sequence
}
?>