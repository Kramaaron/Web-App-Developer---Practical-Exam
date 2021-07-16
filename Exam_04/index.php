<?php  
// Declare the two dates
$date1 = strtotime("2019-05-31"); 
$date2 = strtotime("2018-04-05"); 

echo "2019-05-31<br>";
echo "2018-04-05<br>";
  
$diff = abs($date2 - $date1); // Formulate the difference between two dates

$years = floor($diff / (365*60*60*24)); // To get the year divide the resultant date into total seconds in a year (365*60*60*24)

$months = floor(($diff - $years * 365*60*60*24)/ (30*60*60*24)); // To get the month, subtract it with years and divide the resultant date into total seconds in a month (30*60*60*24)
  
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));//To get the day, subtract it with years and months and divide the resultant date.

echo "<br>Result: <br>$years Year, $months Month, $days Days";//display the result
?>