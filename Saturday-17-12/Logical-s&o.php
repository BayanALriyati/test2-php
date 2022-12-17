<!-- ---------------------task 1------------------- -->
<?php
echo "<br>";
// function year_check($my_year){
//     if ($my_year % 400 == 0)
//        print("It is a leap year");
//     else if ($my_year % 100 == 0)
//        print("It is not a leap year");
//     else if ($my_year % 4 == 0)
//        print("It is a leap year");
//     else
//        print("It is not a leap year");
//  }
//  $my_year = 2016;
//  year_check($my_year);

 $year = 2016;
 if($year % 4 == 0){
         echo "$year is a leap year";
 }
 else{
     echo "$year is not a leap year";}
    echo "<br>";
    echo "------------------------------";
    ?> 
    
<!-- ---------------------task 2------------------- -->
<?php
echo "<br>";
 $temp = 27;
 if($temp < 20){
     echo "It is wintertime!";
 }else{
     echo "It is summertime!";
 }

    echo "<br>";
    echo "------------------------------";
    ?>      

<!-- ---------------------task 3------------------- -->
<?php
echo "<br>";
 $num1 = 2;
 $num2 = 2;
 if($num1 == $num2){
     echo ($num1 + $num2) * 3;
 }else{  
     echo $num1 + $num2;
 }

    echo "<br>";
    echo "------------------------------";
    ?> 
    
<!-- ---------------------task 4------------------- -->
<?php
echo "<br>";
$num1 = 10;
$num2 = 10;
if($num1 + $num2 == 30){
 echo $num1 + $num2;
}else{
echo "false";
 }
    echo "<br>";
    echo "------------------------------";
    ?>      

<!-- ---------------------task 5------------------- -->
<?php
echo "<br>";
 $num = 20;
 if($num % 3 == 0){
     echo "True";
 }else{
    echo "false";
 }
    echo "<br>";
    echo "------------------------------";
    ?> 