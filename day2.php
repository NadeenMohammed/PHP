<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>task one :</h1>
<?php
//^ task one ---------------------------------- 
    
echo nl2br("in case you are viewing \n the page source you will detect \n a newline inside this string.");
echo nl2br("You will detect the \n newlines inside this string \r\n on the window of the browser.<br> <hr>");
// print_r($_SERVER);
// echo $SERVER
echo '<hr>';
?>

<h1>task two:</h1>
<?php
    //^ task two -----------------------------------
    
//!  to set the hight 
function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight(); // will use the default value of 50
  setHeight(135);
  setHeight(80);

  echo '<hr>';
  //! to add 5
  function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;
  echo '<hr>';
  //! to write the family name 
  function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  

echo '<hr>';
echo '<hr>';
?>
<h1>task four :</h1>
<?php
    //^task four --------------------------------------------
    
echo '<hr>';
 $numbers = array (12,45,10,25);
 echo 'array is:';
print_r($numbers);
 $sum = array_sum($numbers);
 echo '<br> sum of numbers:'. $sum . '<br>';
 $count = count($numbers);
 echo 'count of numbers is :'. $count .'<br>';
 $argv = $sum / $count ;
 echo 'avrg is :' . $argv ;
$reverse = array_reverse($numbers);
 echo '<br>sort reverse by array_reverse :<br>';
 print_r($reverse);
  krsort($numbers);
  echo '<br>sort reverse by krsort :<br>';
  print_r($numbers);
 echo '<hr>';
 echo '<hr>';
 ?>
 <h1>task five:</h1>
 <?php
     //^task five --------------------------------------------
    
 $names = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) ;
 echo '<h2 style=color:red> ascending order by value </h2><br>';
 asort($names);
 print_r($names);
 foreach($names as $key => $value) {
    echo "<br> name=" . $key . ", number=" . $value;
    echo "<br>";
  }
 echo '<br> <h2 style=color:red>ascending order by key </h2> <br>';
 ksort($names);
 print_r($names);
 foreach($names as $key => $value) {
    echo "<br> name=" . $key . ", number=" . $value;
    echo "<br>";
  }
 echo '<br> <h2 style=color:red> descending order by key </h2><br>';
 krsort($names);
 print_r($names);
 foreach($names as $key => $value) {
    echo "<br> name=" . $key . ", number=" . $value;
    echo "<br>";
  }
 echo '<br> <h2 style=color:red> descending order by value </h2><br>';
 arsort($names);
 print_r($names);
 foreach($names as $key => $value) {
    echo "<br> name=" . $key . ", number=" . $value;
    echo "<br>";
  }
?>
<h1>task three :$_SERVER</h1>
<?php
     //^task three --------------------------------------------
foreach($_SERVER as $key => $value)
{
    echo $key . '-';
    if(!is_array($value))
    {
        echo ($value);
    };
    echo'<hr>';
};
echo '<hr>';
?>
</body>
</html>
