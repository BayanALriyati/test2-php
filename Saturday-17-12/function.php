<!-- ---------------------task 1------------------- -->
<?php
function primeCheck($number){
    if ($number == 1)
    return 0;
     
    for ($i = 2; $i <= sqrt($number); $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
$number = 3;
$flag = primeCheck($number);
if ($flag == 1)
    echo "$number is a prime number ";
else
    echo "$number is a Not prime number ";
    echo "<br>";
    echo "------------------------------";
    ?>
   
<!-- ---------------------task 2------------------- -->
<?php
echo "<br>";
function Reverse($str){
    return strrev($str);
}
$str = "remove";
echo Reverse($str);
    echo "<br>";
    echo "------------------------------";
    ?>

<!-- ---------------------task 3------------------- -->
<?php
echo "<br>";
$strings = array("remove");
foreach ($strings as $testcase) {
    if (ctype_lower($testcase)) {
        echo "Your String is Ok ";
    } else {
        echo "Your String is not ";
    }
}
    echo "<br>";
    echo "------------------------------";
    ?>

<!-- ---------------------task 4------------------- -->
<?php
echo "<br>";
    $x=12;  
    $y=10; 
    echo " x: $x </br>";  
    echo " y: $y </br>";  
    echo "<br>";
    echo "------------------------------";
    ?>    


<!-- ---------------------task 5------------------- -->
<?php
echo "<br>";
function armstrongCheck($number){
    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
    if ($number == $sum)
        return 1;  
    return 0;   
}
$number = 407;
$flag = armstrongCheck($number);
if ($flag == 1)
    echo "Yes";
else
    echo "No" ; 
    echo "<br>";
    echo "------------------------------";
    ?>        