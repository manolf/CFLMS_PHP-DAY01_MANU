<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Day 1</title>
	<link rel="stylesheet" href="day1.css">
</head>
<body>

	<?php

echo "<br><br>";
echo "<b>Exercise 1</b>";
echo "<br>";
	$firstname = 'Manu';
	$lastname = 'Thamer';

	echo "<h1>$firstname $lastname</h1>";

echo "<br><br>";
echo "<b>Exercise 2</b>";
echo "<br>";

$d=date("D");
if ($d=="Mon" )
	echo "<br><br><h2>Happy Monday! 
<br>
the matrix is everywhere...</h2><br><br>";
else
echo "Have a nice day!" ;


echo "<br><br>";
echo "<b>Exercise 3</b>";
echo "<br>";
$day=date("D");

if ($day=="Mon" ){
	echo "<h1 style =background: url('https:/cdn.pixabay.com/photo/2014/05/27/23/32/matrix-356024_960_720.jpg'>Happy Monday!</h1>";
} else if ($day=="Tue"){
	echo "Happy Tuesday!";
} else if ($day=="Wed"){
echo "Happy Wednesday!";
} else if ($day=="Thu" ){
echo "Happy Thursday!";	
}else if ($day=="Fri" ){
echo "Happy Friday!";	
}else if ($day=="Sat" ){
echo "Happy Saturday!";	
}
else {
	echo "Happy Sunday!";
}

echo "<br><br>";
echo "<b>Exercise 4</b>";
echo "<br>";

echo "<br><br>";
echo "<b>for loop</b>";
echo "<br>";
for( $i=0; $i<50; $i++  )
{
echo "$i $firstname $lastname <br>";
}

echo "<br><br>";
echo "<b>while loop</b>";
echo "<br>";
$j = 0;
while ( $j < 50)
{
echo "$j $firstname $lastname <br>";
$j++;
}

echo "<br><br>";
echo "<b>do-while loop</b>";
echo "<br>";
$x = 0;
do {
echo "$x $firstname $lastname <br>";
$x++;
} while ($x < 50);

echo "<br><br>";
echo "<b>Exercise 5</b>";
echo "<br>";

$numeros = array( 11 , 22, 33, 44, 55, 66, 77, 88, 99, 111);
foreach ($numeros as $values){
	echo "Value: $values <br>";
}

echo "<br><br>";
echo "<b>Exercise 6</b>";
echo "<br>";



$comics = array(
	"garfield" => array
	(
	"animal" => "cat",
	"food" => "much of everything delicious",
	"colour"  => "orange",
	"img"  =>  "<img class='foto' src='img/garfield.png'>"
	),
	"speedy" => array
	(
	"animal" => "cockold",
	"food" => "redbull",
	"colour"  => "brown",
	"img"  =>  "<img class='foto' src='img/speedy.jpg'>"
	),
	"winnie" =>  array
	(
	"animal" => "bear",
	"food" => "honey",
	"colour"  => "yellow",
	"img"  =>  "<img class='foto' src='img/winnie.png'>"
	),
	"brian" =>  array
	(
		"animal" => "dog",
		"food" => "gin tonic",
		"colour"  => "white",
		"img"  =>  "<img class='foto' src='img/brian.jpg'>"
		)
	);



echo "<b>now presenting:</b <br>";
echo  $comics['garfield']['img'] . "<br>"  ;
echo "favourite food: " . $comics['garfield']['food'] . "<br>" ;
echo "kind of animal: " . $comics['garfield']['animal']. "<br>";


echo "<b>now presenting:</b <br>";
echo  $comics['brian']['img'] . "<br>"  ;
echo "favourite food: " . $comics['brian']['food'] . "<br>" ;
echo "kind of animal: " . $comics['brian']['animal']. "<br>";

echo "<b>now presenting:</b <br>";
echo  $comics['speedy']['img'] . "<br>"  ;
echo "favourite food: " . $comics['speedy']['food'] . "<br>" ;
echo "kind of animal: " . $comics['speedy']['animal']. "<br>";


echo "<b>now presenting:</b <br>";
echo  $comics['winnie']['img'] . "<br>"  ;
echo "favourite food: " . $comics['winnie']['food'] . "<br>" ;
echo "kind of animal: " . $comics['winnie']['animal']. "<br>";

echo "<br><br>";
echo"<b>output array with var_dump</b>";
echo "<br>";
echo "<pre>";
var_dump($comics);
echo "</pre>";

echo "<br><br>";
echo"<b>output array with foreach</b>";
echo "<br>";
echo "<pre>";
echo "<b>ANIMAL</b>\t\t<b>favourite FOOD</b>\t\t<b>passportphoto</b>";
	foreach ( $comics as $var ) {
		echo "\n", $var['animal'], "\t\t", $var['food'], "\t\t", $var['img'];
	}
	echo "</pre>";



// echo "<br><br>";
// echo"<b>output array with foreach</b>";
// echo "<br>";

// $array = Array ( 
// 	0 => Array ( "product_id" => 33 , "amount" => 1 ) ,
// 	1 => Array ( "product_id" => 34  , "amount" => 3 ) ,
// 	2 => Array ( "product_id" => 10  , "amount" => 1 ) );

// 	echo "<pre>";
// 	echo "Product ID\tAmount";
// 	foreach ( $array as $var ) {
// 		echo "\n", $var['product_id'], "\t\t", $var['amount'];
// 	}

// 	echo "<pre>" ;

// 	echo "<br><br>";
// echo"<b>output array with arraymap</b>";
// echo "<br>";
// echo "Product ID\tAmount";
// array_map(function ($var) {
//     echo "\n", $var['product_id'], "\t\t", $var['amount'];
// }, $array);

?>
	
</body>
</html>