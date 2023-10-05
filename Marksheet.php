<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Marksheet</title>
</head>
<body>
     
    <h1>Marksheet</h1>
    <p>TotalMarks:<?php echo $totalMarks;?></p>
    <p>AverageMarks:<?php echo $average;?></p>
    <p>Grade:<?php echo $grade;?></p>

  <?php
    function($_server["Request_method"]=="post"){
        $eng = $_post['eng'];
        $urdu = $_post ['urdu'];
        $maths = $post ['maths'];
        $studentname = $post['Filza'];
        $Serialno = $post['12'];

        //calculatetotal marks  and average 
        $totalMarks = $seng + $urdu + $maths;
        $average = $totalMarks / 3;

    

      //Grades baseed on average
       
      if ($average >=90){
       echo grade = "A";
      }elseif($average >=80){
        echo grade = "B";
      }elseif($average >=70){
        echo grade = "C";
      }elseif($average >=60){
        echo grade = "D";
      }else{
        echo grade = "F";
      }
      

    }
  
  ?>
 
   





</body>
</html>