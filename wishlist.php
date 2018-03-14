<?php
include'mysql_op.php';
session_start();
$lid =  $_SESSION["lid"];
        if ($lid=="")
        {
            
                                             ?>
<script>
    window.location="login.php";
</script>
<?php
        }
        $k = new mysql_op();
        if(isset($_GET["sid"]))
        {
$sid=$_GET["sid"];


$query="INSERT INTO `watchlist`(`wid`, `uid`, `sid`) VALUES (NULL,$lid,$sid)";
$result = mysql_query($query);
if($result>0)
{
    header('Location:view_wishlist.php');
}
 else 
    
 {
     echo"failed";
 }
        }   
       if(isset($_GET["wid"]))
       {
           $wid = $_GET["wid"];
           $query1 ="DELETE FROM `watchlist` WHERE `wid`=$wid";
         //  echo $query1;
           $result17= mysql_query($query1);
           if($result17 >0)
           {
               echo"hello";
               ?>
               <script>
                   window.location="view_wishlist.php";
                   
               </script>
               
         <?php
           }
           else
           {
               echo"hii";
           }
          
       }
       
        ?>


