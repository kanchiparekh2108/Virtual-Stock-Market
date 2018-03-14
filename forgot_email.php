<?php

if(isset($_GET["email"]))
{
$email = $_GET["email"];
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect("localhost","root","");
mysql_select_db("vsm");
$query ="SELECT * FROM `login` WHERE `Email`='$email'";
$result = mysql_query($query);
if(!mysql_affected_rows())
{
  echo"This username does not exists";  
}



}
else
{
                                             ?>
<script>
    window.location="login.php";
</script>
<?php
        }
?>


