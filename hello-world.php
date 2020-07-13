<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hello World!</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

	$greeting = "my dearest Manu!";

	echo "<h1>hello $greeting :-)</h1>";

	$capital = 67;
	echo("Variable capital is $capital<br>" );
	echo("Variable CaPiTaL is $CaPiTaL<br>");

	$a = 2;  // define variable with global scope
// define function
function Sum()
{
$a =  1;       // Define variable with same name,
              // but with local function scope.
echo "a inside function =";
echo "$a \n"; // $a will be interpreted and
              // rendered as "1",
              // when you use double quotes in string.
}
Sum();         // call the function

echo "a outside the function =";                                      
echo $a;       // renders "2"   


$first_number = 2;  // define variables with global scope
$second_number = 3;
// define function
function Sum2($a, $b)
{
$c = $a + $b;
echo "<br>";
echo "\nsum is = $c \n";                                        
}
Sum2($first_number, $second_number);   // Call the function.
                                      // output is:
                                     // "sum is = 5" 


$a2 = 2;          // variable with global scope
$b2 = 3;          // variable explicitly declared
                // "global" in function
// define function
function test_scope()
{
// global $a;   // commented on purpose  
echo "a2 inside function = ";
echo "$a2 \n";               // produces "Undefined variable:" notice
global $b2;
echo "b2 inside function = " ;
echo "$b2 \n";   // produces "3"
$b2 = $b2 + 1;    // changes global variable
}
test_scope();    

                  // call the function
echo "a2 OUTSIDE function = $a2 \n";  // produces "2"              
echo "b2 OUTSIDE function = $b2 \n";  // produces "4"


echo "<br><br>";
echo "<b>TEST STATIC</b>";
echo "<br>";

function myTest() {
   static $x =  0;
   echo $x;
   $x++;
}

myTest ();
echo "<br>";
myTest();
echo "<br>" ;
myTest();
//output:
//0
//1
//2

//wenn nicht static: 0 0 0

echo "<br><br>";
echo "<b>conditional operator</b>";
echo "<br>";

$x = 10;
$y =  20;
$result = ($x < $y) ? "smaller" : "not smaller";
echo "x is $result than y \n"; // produces:
                              // "x is smaller than y"

echo "<br><br>";
echo "<b>If-Statement with Weekday</b>";
echo "<br>";
$d=date("D");
if ($d=="Fri" )
echo "Have a nice weekend!";
else
echo "Have a nice day!" ;

echo "<br><br>";
echo "<b>Switch-Statement with Weekday</b>";
echo "<br>";
$d=date("D");
switch($d){
	case "Mon":
	echo "today it's Monday";
	break;
	case "Tue":
	echo "Today is Tuesday";
	break;
	case "Wed":
echo "Today is Wednesday" ;
break;
case "Thu":
echo "Today is Thursday";
break;
case "Fri" :
echo "Today is Friday";
break;
case  "Sat":
echo "Today is Saturday";
break ;
case "Sun":
echo "Today is Sunday" ;
break;
default:
echo "Wonder which day is this ?" ;
}


echo "<br><br>";
echo "<b>the for loop</b>";
echo "<br>";
$a = 0;
$b = 0;
for( $i=0; $i<5; $i++  )
{
$a += 10;
$b += 5 ;
}
echo ("At the end of the loop a=$a and b=$b");

// Output:
// At the end of the loop a=50 and b=25


echo "<br><br>";
echo "<b>the while loop</b>";
echo "<br>";
$i = 0;
$num = 50;
while( $i < 10)
{
$num--;
$i ++;
}
echo ("Loop stopped at i = $i and num = $num" );
// Output:

// "Loop stopped at i = 10 and num = 40"

echo "<br><br>";
echo "<b>do..while loop statement</b>";
echo "<br>";
$i = 0;
$num = 0;
do
{
$i++;
} while( $i < 10 );
echo ("Loop stopped at i = $i" );

//Output:
//Loop stopped at i = 10

echo "<br><br>";
echo "<b>the foreach loop statement</b>";
echo "<br>";
$array = array( 1, 2, 3, 4, 5);
foreach( $array as  $value )
{
echo "Value is $value <br />";
}
//Output:
//Value is 1
//Value is 2
//Value is 3
//Value is 4
//Value is 5

echo "<br><br>";
echo "<b>the break statement</b>";
echo "<br>";
$i = 0;
while( $i <  10)
{
$i++;
if( $i == 3  )break;
}
echo ("Loop stopped at i = $i \n"  );

//Output:
//Loop stopped at i=3

echo "<br><br>";
echo "<b>the continue statement</b>";
echo "<br>";
$array = array( 1, 2, 3, 4, 5);
foreach( $array as  $value )
{
 if( $value == 3 ) continue ;
 echo "Value is $value <br />";
}
// Output:
// Value is 1
// Value is 2
// Value is 4
// Value is 5

echo "<br><br>";
echo "<b>ARRAY TYPES</b>";

echo "<br><br>";
echo "<b>Numeric array</b>";
echo "<br>";
$numbers = array( 1 , 2, 3, 4, 5);
foreach( $numbers as $value )
{
echo "Value is $value <br />";
}
/* Second method to create array. */
$numbers[0] = "one" ;
$numbers[1] = "two";
$numbers[2 ] = "three";
$numbers[3] =  "four";
$numbers[4] = "five" ;
foreach( $numbers as $value )
{
echo "Value is $value <br />" ;
}

//Output:
//Value is 1
//Value is 2
//Value is 3
//Value is 4
//Value is 5
//Value is one
//Value is two
//Value is three
//Value is four
//Value is five

echo "<br><br>";
echo "<b>Associative array</b>";
echo "<br>";
/* First method to associate create array. */
$salaries = array(
"mark" => 2000,
"anthony"  => 1000,
"eric" =>  500
);
echo "Salary of mark is ". $salaries['mark' ] . "<br />";
echo "Salary of anthony is " . $salaries['anthony']. "<br />" ;
echo "Salary of eric is ". $salaries['eric'] . "<br />";
/* Second method to create array. */
$salaries[ 'mark'] = "high";
$salaries['anthony' ] = "medium";
$salaries['eric'] = "low";
echo "Salary of mark is ".  $salaries['mark'] . "<br />";
echo "Salary of anthony is ". $salaries['anthony'] . "<br />";
echo "Salary of eric is " . $salaries['eric']. "<br />" ;


//Output:

//Salary of mark is 2000
//Salary of anthony is 1000
//Salary of eric is 500
//Salary of mark is high
//Salary of anthony is medium
//Salary of eric is low

echo "<br><br>";
echo "<b>Multidimensional array</b>";
echo "<br>";
$marks = array(
"mark" => array
(
"physics" => 35,
"maths" => 30,
"chemistry"  => 39
),
"anthony" =>  array
(
"physics" => 30,
"maths" => 32,
"chemistry"  => 29
),
"eric" =>  array
(
"physics" => 31 ,
"maths" => 22,
"chemistry" => 39
)
);
/* Accessing multidimensional array values */
echo "Marks for mark in physics : ";
echo $marks[ 'mark']['physics'] . "<br />" ;
echo "Marks for anthony in maths : ";
echo $marks[ 'anthony']['maths'] . "<br />" ;
echo "Marks for eric in chemistry : " ;
echo $marks['eric']['chemistry'] .  "<br />";


//Output:

//Marks for mark in physics : 35
//Marks for anthony in maths : 32
//Marks for eric in chemistry : 39

	 ?>
	
</body>
</html>