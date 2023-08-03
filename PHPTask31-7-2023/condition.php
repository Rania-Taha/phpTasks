<!-- Operators           		         
1.	Write a PHP script to see if the specified year is a leap year or not.
Sample Input: 2013
Sample Output: ‘This year is not a leap year’ -->

<?php
$year =2013;

if ($year % 4 == 0) { 
    echo $year. " This year is a leap year " . "<br>" ; }
else { echo $year. " This year is not a leap year. ". "<br>";}

echo "<br>";
echo "<br>";

?>



<!-- 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
Sample Input: 27
Sample Output: ‘It is summertime!’ -->
<?php
$temperature =27;

if ($temperature < 20) { 
    echo  " It is wintertime! ". "<br>" ; }
else { echo  " It is summertime!" . "<br>";}

echo "<br>";
echo "<br>";

?>


<!-- 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
Sample Output: ( 2 + 2 ) * 3 = 12
Sample Output: ‘It is summertime!’ -->

<?php
$x=5 ;
$y=10; 

if ( $x == $y ) { 
    $sum = ( $x + $y ) * 3 ;
    echo  $sum . "<br>" ; }
else { echo "not equal" . "<br>"; } 

echo "<br>";
echo "<br>";
?>



 
<!-- 4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
Sample Output: ‘false’ -->

<?php
$x=20 ;
$y=10; 

if ($x + $y == 30) { 
    echo  ( $x + $y ) . "<br>"; }
else { echo "false" . "<br>";} 

echo "<br>";
echo "<br>";
?>





<!-- 5.	Write in PHP script to check if the given positive number is a multiple of 3.
Sample Input: number = 20
Sample Output: ‘false’ -->

<?php
$x=33 ;


if ($x % 3 == 0) { 
    echo  "true"  . "<br>"; }
else { echo "false" . "<br>";} 

echo "<br>";
echo "<br>";
?>


<!-- 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
Sample Input: number = 50
Sample Output: ‘true’ -->

<?php
$x=66 ;


if ( $x >= 20 && $x <= 50 ) { 
    echo   "true" . "<br>"; 
}
else { echo "false" . "<br>";} 

echo "<br>";
echo "<br>";
?>



<!-- 7.	Write PHP script to find the largest number between the three integers
Sample Input: [ 1, 5, 9 ]
Sample Output: 9 -->
 


<?php
$arr = [ 1, 15, 9 ];

switch ( $arr) {
    case( $arr[0] > $arr[1] && $arr[0] > $arr[2] ):
        echo $arr[0] . "<br>" ;
        break;
        case( $arr[1] > $arr[0] && $arr[1] > $arr[2] ):
            echo $arr[1] . "<br>" ;
            break;
                default:
                echo  $arr[2] . "<br>" ;
}

echo "<br>";
echo "<br>";
?>



<!-- 8.	Write PHP script to calculate the monthly electricity bill according to these rules
 
a.	For first 50 units – 2.50 JOD/Unit
b.	For next 100 units – 5.00 JOD/Unit
c.	For next 100 units – 6.20 JOD/Unit
d.	For units above 250 – 7.50 JOD/Unit -->

<?php
$units = 240 ;

switch ( $units) {
    case( $units <= 50):
        echo $units*2.5 ."JD" . "<br>";
        break;
        case( $units > 50 && $units <= 150):
            echo 125+($units-50)*5  ."JD" . "<br>";
            break;
            case( $units > 150 && $units <= 250):
                echo 625+($units-150)*6.2 ."JD" . "<br>";
                break;
                default:
                echo (($units-250)*7.5)+(2175) ."JD" . "<br>";
}

echo "<br>";
echo "<br>";
?>

<!-- 9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

Sample Input: 15
Sample Output: ‘is no eligible to vote’ -->


<?php
$age  = 28 ;


if ( $age >= 18 ) { 
    echo  $age . "is eligible to vote" . "<br>"; 
}
else { echo $age ."  is no eligible to vote" . "<br>" ;} 

echo "<br>";
echo "<br>";
?>



<!-- 10.	Write php script  to check whether a number is positive, negative or zero

Sample Input: -60
Sample Output: ‘Negative’ -->


<?php
$num = -55 ;

switch ( $num) {
    case( $num == 0):
        echo "Zero" . "<br>";
        break;
        case( $num < 0):
            echo "Negative" . "<br>";
            break;
        
                default:
                echo "positive" . "<br>";
}

echo "<br>";
echo "<br>";

?>

<!-- 11.	Write php script to make a calculator, the calculator should contain the four main operations 

e.	Addition
f.	Subtraction
g.	Multiplication
h.	Division -->

<?php

$num1=10;
$num2=13;
$sign="+";
if($sign==="+"){
echo $num1+$num2;
}else if($sign==="-"){
echo $num1-$num2;
}else if($sign==="/"){
echo $num1/$num2;
}else if($sign==="*"){
echo $num1*$num2;
}



echo "<br>";
echo "<br>";

?>

<!--  12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

Sample Inputs: [60,86,95,63,55,74,79,62,50]
Sample Output: ‘D’

Range	Grade
<60	F
<70	D
<80	C
<90	B
<10 A

	 -->

     <?php
$arr = [60,86,95,63,55,74,79,62,50];

$SubjectsNum = count($arr);
$totalmark = array_sum($arr);
$average = $totalmark / $SubjectsNum;

switch ( $arr) {
    case( $average < 60 ):
        echo "F" ;
        break;
        case( $average < 70 && $average > 60):
            echo "D" ;
            break;
            case( $average < 80 && $average > 70):
                echo "C" ;
                break;
                case( $average < 90 && $average > 80):
                    echo "B" ;
                    break;
                default:
                echo "A" ;
}
?> 