
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
                error_reporting(E_ALL ^ E_DEPRECATED);
                    mysql_connect("localhost", "root", "");
                    mysql_select_db("vsm");
                    $lid= $_SESSION["lid"];
         $query4 = "SELECT  `Balance` FROM `virtual money` WHERE `L_id` = $lid ";
          // echo $query4;
            $result15 = mysql_query($query4);
            if($row1 =  mysql_fetch_array($result15))
            {
                ?>
        </br> <h1 align ="center" style="color: orangered"> Your Current Balance is : <?php echo $row1[0]; ?> </h1></br>
        <?php
               
            }
        ?>
        <h1 align ="center">List of Shares</h1></br>
      <table id="customers" align="center">
            <thead>
                <tr>
                   
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
 
    
$query = "SELECT * FROM `sharedetail` ORDER BY `name` ASC ";
$result1 = mysql_query($query);
while($row = mysql_fetch_array($result1))
{
    echo"<tr>";
          
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




?>

      </body>   
            
            
            </html>
            