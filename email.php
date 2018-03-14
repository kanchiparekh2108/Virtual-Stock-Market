<?php
   
if(isset($_GET["email"]))
{
$email = $_GET["email"];
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect("localhost","root","");
mysql_select_db("vsm");
$query ="SELECT  `Email` FROM `login`";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
   if($row[0]==$email)
   {
       echo"email already exisits";
   }
}
}
if(isset($_GET["pwd"]))
{
    $pwd = $_GET["pwd"];
    
}
?>

