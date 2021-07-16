<?php
$n=0;
echo "Odd Numbers from 0 to 10: ";
do{
    if($n % 2 != 0){ //checks if the number is odd number
        echo "$n "; //displays the odd numbers
    }
    $n++;

}while($n <= 10);//checks if the condition of number is less than or equal to 10.
?>