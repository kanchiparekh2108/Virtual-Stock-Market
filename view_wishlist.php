<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include 'user_header.php';


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
               <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 30%;
    
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
     text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;
 text-align: center;}

#customers tr:hover {background-color: #ddd;
 text-align: center;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}
</style>
    </head>
    <body>
        <?php
        
        $lid = $_SESSION["lid"];
      // include 'mysql_op.php';
       $v=new mysql_op();
//       $lid=1;
       $query = "SELECT * FROM `watchlist`,`sharedetail` WHERE watchlist.sid = sharedetail.s_id AND watchlist.uid = $lid"; 
//       echo $query;
       $result16=mysql_query($query);
       if(mysql_affected_rows())
       {
           ?>
        </br><h1 align ="center">Your Wishlist</h1></br>
             <table id="customers" align="center">
            <thead>
                <tr>
                    <th>Symbol</th>
                    <th>Name</th>
                    <th>Share Price</th>
                    <th>Previous Open</th>
                    <th>Previous Close </th>
                    <th>Low </th>
                    <th>High</th>
                    <th>Change</th>
                    <th>Change in Percentage</th>
                    <th>Buy</th>
                    <th>Remove</th>
                    
                     </tr>
                         <?php
       while($row=mysql_fetch_array($result16))
       {
          
        echo"<tr>";
         echo"<td>" ;echo $row["4"];echo"</td>";
         echo"<td>" ;echo $row["5"];echo"</td>";
         echo"<td>" ;echo $row["6"];echo"</td>";
        echo"<td>" ;echo $row["7"];echo"</td>";
        echo"<td>" ;echo $row["8"];echo"</td>";
        echo"<td>" ;echo $row["9"];echo"</td>";
        echo"<td>" ;echo $row["10"];echo"</td>";
        echo"<td>" ;echo $row["11"];echo"</td>";
        echo"<td>" ;echo $row["12"];echo"</td>";
        $wid = $row["0"];
        $sid=$row["3"];
         echo"<td>";  echo"<a href = buy_shares.php?sid=$sid>";echo"Buy"; echo"</a>";echo"</td>";
        echo"<td>";  echo"<a href =wishlist.php?wid=$wid>";echo"Remove"; echo"</a>";echo"</td>";
        
         echo"</tr>";
        
       
       }
      }
      else
      {
          ?>
           <h1 align ="center" style="margin-top:70px; color:blue;  "> Your Wishlist is currently empty.</h1>
     <?php
           }
       ?>
            
    </body>
</html>
