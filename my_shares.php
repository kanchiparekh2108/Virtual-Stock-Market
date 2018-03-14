<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
 include_once 'user_header.php';
        $lid =  $_SESSION["lid"];
        if ($lid=="")
        {
            
                                             ?>
<script>
    window.location="login.php";
</script>
<?php
        }
if(isset($_GET["msg"]))
{
    $a= $_GET["msg"];
  echo"<h2 align =center>";  echo $a; echo"<h2>";
}
?>
<html>
    <head>
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
        //include 'mysql_op.php';
       
        $s = new mysql_op();
        $query="SELECT `b_id`, `s_id`, `l_id`, `Share Name`, `Share_price`, `quantity`, `cost`, `date`, `time` FROM `buy_shares` WHERE `l_id`='$lid'  AND `quantity` > 0";
        $result8 = mysql_query($query);
        
        if(mysql_affected_rows())
        {
        ?>
             <h1 align ="center">List of Shares</h1>
             <table id="customers" style="width: 70%" align="center">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Current Price</th>
                    <th>Sell</th>
                </tr>
            </thead>
        <?php
        
       
        while($row=mysql_fetch_array($result8))
        {
           $sid = $row["1"];
            $query9="SELECT `price`FROM `sharedetail` WHERE `s_id`=$sid ";
            $result9 =mysql_query($query9);
            if($row1 = mysql_fetch_array($result9))
            {
              echo"<tr>";
          echo"<td>" ;echo $row["3"];echo"</td>";
         echo"<td>" ;echo $row["4"];echo"</td>";
         echo"<td>" ;echo $row["5"];echo"</td>";
        echo"<td>" ;echo $row["7"];echo"</td>";
        echo"<td>" ;echo $row["8"];echo"</td>";
         echo"<td>" ;echo $row1["0"];echo"</td>";
        $qt = $row["5"];
        $bid = $row["0"];
       
         echo"<td>";  echo"<a href = sell_shares.php?bid=$bid&qt=$qt>";echo"Sell"; echo"</a>";echo"</td>";
        echo"</tr>";
        }
        }
        }
        else
        {
            ?>
            <h1 align ="center" style="margin-top:70px; "> Currently you do not have any shares click <a href="shares.php">here</a> to buy some shares.</h1>
            <?php
        }
        ?>
    </body>
</html>
