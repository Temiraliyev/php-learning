<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<h1>
    <?php 
echo '<hr>';
echo "#Variable";
echo '<hr>';


// variable
echo "Assalomu aleykum <br>" ;
echo 'Mujibali' . '<br>';
echo 'Temiraliev' . '<br>';
$age = 2003;
$float = 20.5;
$string = "String";
echo $age . '<br>';
echo '<hr>';


// mathematical operations
echo '<hr>';
echo "#mathematical operations" ;
echo '<hr>';


$x = 10;
$y = 2;

echo $x + $y ."<br>";
echo $x - $y ."<br>";
echo $x * $y ."<br>";
echo $x / $y ."<br>";
echo $x % $y ."<br>";
echo $x ** $y ."<br>";

// echo '$x += 10' ."<br>"; // $x = $x +10;

echo $x++ ."<br>" ; // $x = $x + 1;

echo M_PI ." Math_PI"."<br>";
echo M_E ." Math_E"."<br>";
echo abs(-2003) ." Modul".'<br>'; //modul
echo ceil(2.1) ." Ceil".'<br>';
echo floor(2.1) ." floor".'<br>';
echo round(2.1) ." Round".'<br>';
echo round(2.6) ." Round".'<br>';
echo mt_rand(1,20) ." Random". "<br>"; // random
echo min(1,2,3,4,5,6,7,8) ." Minimum"."<br>"; // minimum
echo max(1,2,3,4,5,6,7,8) ." Maximum"."<br>"; // maximum
echo '<hr>';
echo '<hr>';
echo "type data";
echo '<hr>';
$x = 5.0;
echo  var_dump($x); //type data
echo '<hr>';
echo '<hr>';
echo "Casting";
echo '<hr>';

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);














?>
</h1>
    
</body>
</html>