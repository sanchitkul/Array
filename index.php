<?php

$obj = new main();
$numbers = array('1','2','3','4','5');
$obj-> print_r($numbers);
$obj-> array_product($numbers);
$obj-> array_slice($numbers);
$obj-> array_sum($numbers);
$obj-> rsort($numbers);
$obj-> shuffle($numbers);
$obj->  count($numbers);
$obj-> array_rand($numbers);
$obj-> array_pop($numbers); 
class main
{
public function print_r($numbers)
{
echo '<h1><pre>',print_r($numbers, true),'</pre></h1>';
echo'<hr>';
}
public function array_product($numbers)
{
echo'<h1> Calculating product of array</h1>';
echo"Product of array:" . array_product($numbers);
echo'<hr>';
}
public function array_slice($numbers)
{
echo'<h1>Slicing an arrray</h1>';
$pac=array_slice($numbers, 2);
print_r($pac);

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
echo'<h1>Resorting the Array</h1>';
rsort($numbers);
print_r($numbers);
echo'<hr>';
}
public function shuffle($numbers)
{
echo'<h1>Shuffling the array</h1>';
shuffle($numbers);
print_r($numbers);
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
public function array_pop($numbers)
{
echo '<h1> Poping of the elements </h1>';
array_pop($numbers);
print_r($numbers);
}
}
?>
