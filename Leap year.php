<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year</title>
</head>
<body>
 <?php
 echo <h1>Leap year</h1>
 $year =2023 ;

 if ($year % 4 !== 0) {
  echo $year. "its leap year" ;
 }  else {
  echo $year. "its not leap year";
 }

 ?>




</body>
</html>