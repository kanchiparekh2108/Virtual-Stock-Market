<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
         $uid =  $_SESSION["uid"];
        if ($uid=="")
        {
            
                                             ?>
<script>
    window.location="login.php";
</script>
<?php
        }

        include 'mysql_op.php';
 $a = new mysql_op();
         
       if(isset($_GET["reset"]))
       {
           
           $pass = $_GET["pass"];
           $cpass=$_GET["con"];
          
           $epass = md5($pass);
           $query="UPDATE `login` SET `Password`= '$epass' WHERE `lid`=$uid";
           $result = mysql_query($query);
           if($result>0)
           {
               $msg="Your password has been changed";
               unset($_SESSION["lid"]);
               header("Location:login.php?msg1=$msg");
           }
           else
           {
               echo"please try again";
               unset($_SESSION["lid"]);
           }
           
           
       }
       ?>
    </body>
</html>
