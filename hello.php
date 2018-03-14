
<?php
    session_start();
    include'user_header.php';
      $lid = $_SESSION["lid"];
        if ($lid=="")
        {
            
                                             ?>
<script>
             window.location="login.php";
</script>
<?php
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
$sid= $_GET["sid"];
$b = new mysql_op();
//error_reporting(E_ALL ^ E_DEPRECATED);
//   mysql_connect("localhost", "root");
//mysql_select_db("vsm");
$query1="SELECT `b_id`,`quantity` FROM `buy_shares` WHERE `l_id` = $lid AND `s_id` = $sid";
$result1 = mysql_query($query1);
$query = "SELECT * FROM `sharedetail` WHERE `s_id`=$sid";
$result = mysql_query($query);

    if($row = mysql_fetch_array($result1))
    {
        if($row["1"]>0)
        {
            $qt = $row["1"];
           $bid =$row["0"]; 
    ?>
<table id="customers" align="center">
            <thead>
                <tr>
                    <th>Share Name</th>
                    <th>Name</th>
                    <th>Share Price</th>
                    <th>Previous Open</th>
                    <th>Previous Close </th>
                    <th>Low </th>
                    <th>High</th>
                    <th>Change</th>
                    <th>Change in Percentage</th>
                    <th>Buy Shares</th>
                     <th>Wishlist</th>
                     <th>Sell</th>
                </tr>
            </thead>
<?php
    while($row= mysql_fetch_array($result))
    {
        
    echo"<tr>";
          echo"<td>" ;echo $row["1"];echo"</td>";
         echo"<td>" ;echo $row["2"];echo"</td>";
         echo"<td>" ;echo $row["3"];echo"</td>";
        echo"<td>" ;echo $row["4"];echo"</td>";
        echo"<td>" ;echo $row["5"];echo"</td>";
        echo"<td>" ;echo $row["6"];echo"</td>";
        echo"<td>" ;echo $row["7"];echo"</td>";
        echo"<td>" ;echo $row["8"];echo"</td>";
        echo"<td>" ;echo $row["9"];echo"</td>";
        
       $sid = $row["0"];
       echo"<td>";  echo"<a href = buy_shares.php?sid=$sid>";echo"Buy"; echo"</a>";echo"</td>";
         echo"<td>";  echo"<a href = wishlist.php?sid=$sid>";echo"Wishlist"; echo"</a>";echo"</td>";
          echo"<td>";  echo"<a href = sell_shares.php?bid=$bid&qt=$qt>";echo"Sell"; echo"</a>";echo"</td>";
          echo"</tr>";
    
    
}
        
    }

?>
</table>
        <?php
        }
    


else
{
    ?>
<table id="customers" align="center">
            <thead>
                <tr>
                    <th>Share Name</th>
                    <th>Name</th>
                    <th>Share Price</th>
                    <th>Previous Open</th>
                    <th>Previous Close </th>
                    <th>Low </th>
                    <th>High</th>
                    <th>Change</th>
                    <th>Change in Percentage</th>
                    <th>Buy Shares</th>
                     <th>Wishlist</th>
                </tr>
            </thead>
<?php
    while($row= mysql_fetch_array($result))
    {
        
    echo"<tr>";
          echo"<td>" ;echo $row["1"];echo"</td>";
         echo"<td>" ;echo $row["2"];echo"</td>";
         echo"<td>" ;echo $row["3"];echo"</td>";
        echo"<td>" ;echo $row["4"];echo"</td>";
        echo"<td>" ;echo $row["5"];echo"</td>";
        echo"<td>" ;echo $row["6"];echo"</td>";
        echo"<td>" ;echo $row["7"];echo"</td>";
        echo"<td>" ;echo $row["8"];echo"</td>";
        echo"<td>" ;echo $row["9"];echo"</td>";
        
       $sid = $row["0"];
       echo"<td>";  echo"<a href = buy_shares.php?sid=$sid>";echo"Buy"; echo"</a>";echo"</td>";
         echo"<td>";  echo"<a href = wishlist.php?sid=$sid>";echo"Wishlist"; echo"</a>";echo"</td>";
          echo"</tr>";
    
    
}
        
    }

?>
</table>
    </body>
</html>