<?php

$obj = new main();
$numbers = array('1','2','3','4','5');
$obj-> print_r($numbers);
$obj-> array_product($numbers);
$obj-> array_chunk($numbers);
$obj-> array_sum($numbers);
$obj-> rsort($numbers);
$obj-> shuffle($numbers);
$obj->  count($numbers);
$obj-> array_rand($numbers);
class main
{
public function print_r($numbers)
{
echo '<pre>',print_r($numbers, true),'</pre>';
echo'<hr>';
}
public function array_product($numbers)
{
echo'<h1> Calculating product of array</h1>';
echo"Product of array:" . array_product($numbers);
echo'<hr>';
}
public function array_chunk($numbers)
{
echo'<h1>Splitting arrray</h1>';
echo"Splitting of array : " . array_chunk($numbers,2);
echo'<hr>';
}
public function array_sum($numbers)
{
echo'<h1>Sum of array</h1>';
echo"Sum of array:" . array_sum($numbers);
echo'<hr>';
}
public function rsort($numbers)
{
echo'<h1Resorting the Array</h1>';
echo"Resorted array:" . rsort($numbers);
echo'<hr>';
}
public function shuffle($numbers)
{
echo'<h1>Shuffling the array</h1>';
echo"Reschuffled array:" . shuffle($numbers);
echo'<hr>';
}
public function count($numbers)
{
echo'<h1>Counting elements in array</h1>';
echo"No. of elements in array are:" . count($numbers);
echo'<hr>';
}
public function array_rand($numbers)
{
echo'<h1>Picking random number from Array</h1>';
echo"Random number selected:" . array_rand($numbers);
echo'<hr>';
}














}
?>
