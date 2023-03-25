<?php  
// phpinfo();
//*--------------------//
define("SITENAME", "<h1 style=color:red;>PHP First Day</h1>");
echo SITENAME;
//*--------------------//

//? address
$host = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
echo $host."<br>";
//? server
$serv = $_SERVER['HTTP_HOST'] ;
echo $serv."<br>";

//? port
$intservname = getservbyport(80, "tcp");
echo $intservname.":";
$number = $_SERVER['SERVER_PORT'];
echo $number."<br>";

//? file name
$path = "/php/test.php";
echo basename($path) ."<br/>";
$name = basename($path,".php");
echo $name."<br>";
echo "file path and name : " .__FILE__ ."<br/>";

//*-------------------//

$age = 8;
echo "Age is :".$age."<br>";

switch ($age) {
  case $age<5:
    echo "stay at home";
    break;
  case $age==5:
    echo "Go to Kindergarden";
    break;
  case $age>5 && $age<13:
    echo "go to grade :".$age-6;
    break;
    default:
    echo "no sign";
}




?>


