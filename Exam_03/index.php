<?php
function Fibonacci($n){
  
    $num1 = 1; //Initialized Fibonacci Number.
    $counter = 0;
    $s1=0;
    $s2=0;
    while ($counter < $n){
        $s1 = 5*(pow($num1, 2))+4; //Formula for numbers if it is Fibonacci or not.
        $s2 = 5*(pow($num1, 2))-4; //Formula for numbers if it is Fibonacci or not.
        if(floor(sqrt($s1)) === sqrt($s1) || floor(sqrt($s2)) === sqrt($s2)){ //checks condition if it is a perfecr square or not.
            echo "$num1 is a Fibonacci Number. <br>";//Displays valid fibonacci number.
        }
        else{
            echo "$num1 is not a Fibonacci Number. <br>";//Displays invalid fibonacci number.
        }
        $num1++;
        $counter++;
    }
}
  
// Driver Code
$n = 10;
Fibonacci($n);
?>