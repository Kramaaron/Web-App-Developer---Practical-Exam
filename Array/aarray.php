<?php 
$array = ["Marvin","Marco","Marvin","Marco","Marco","Marvin","Christian"]; 
$repeated = []; 
 
foreach (array_unique($array) as $n) { 
    $matches = array_filter($array, function ($value) use ($n) { 
        return $n === $value; //returns true if array in the word is equal to value, and if they are of the same type.
    }); 
        $matchCounts = count($matches); //counts strings in the new modified array.
        if ($matchCounts > 1) { 
            $repeated[] = $n; //inputs string in the another new array.
        } 
}
echo "List of most occurence name: <br><br>";
sort($repeated); // sorting the new array
foreach($repeated as $result){
    echo $result . "<br>"; //displays the new array
}
?>