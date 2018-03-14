<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
   include_once 'user_header.php';
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
       // include'mysql_op.php';
        $a = new mysql_op();
       $lid =$_SESSION["lid"];
       $query3 = "SELECT  `pl` FROM `profit_loss` WHERE lid = $lid";
      $result3= mysql_query($query3);
      if($row3= mysql_fetch_array($result3))
      {
          $pl = $row3["0"];
          $mins="-";
          if($pl["0"]==$mins)
          {
              $loss = substr($pl,1);
              ?> <h1 style="color:red; margin-top:50px; " align="center"> <?php echo " Currently you have incurred loss of $loss"; echo"</h1>";
          }
          else if($pl["0"]==0)
          {
            ?> <h1 margin-top:50px; " align="center"> <?php   echo" Currently you have no profit no loss";echo"</h1>";
          }
        else 
            {
             ?> <h1 style="color:red; margin-top:50px; " align="center"> <?php echo"Currently you have profit of $pl";echo"</h1>";
            }    
          
      }
        $query="SELECT * FROM `sell_shares` WHERE `lid`=$lid";
       // echo $query;
        
       $result= mysql_query($query);
       if(mysql_affected_rows())
       {
           
           
           
           ?>
         
        
        <table id="customers"   align="center" style="width:70%;  margin-top: 50px;">
              <thead>
                <tr>
                    <th>Name</th>
                    <th>Buying Price</th>
                    <th>Buying quantity</th>
                    <th>Buying Date</th>
                    <th> Buying Time</th>
                    <th>Selling Price</th>
                    <th>Quantity Sold</th>
                    <th>Selling Date</th>
                    <th>Selling Time</th>
                    <th>Profit/Loss</th>
                </tr>
              </thead>
            
       <?php             
       while($row=  mysql_fetch_array($result))
       {
             $bid = $row["b_price"];
             $query1=" SELECT * FROM `buy_shares` WHERE `b_id`=$bid";
         //   echo $query1;
             $result1 = mysql_query($query1);
             while($row1=  mysql_fetch_array($result1))
             {
                  ?>
              <tr>
                 
                  <td><?php echo $row["1"]; ?></td> 
                  <td><?php echo $row1["4"]; ?></td>
                  <td><?php echo $row1["6"]; ?></td>
                  <td><?php echo $row1["8"]; ?></td>
                  <td><?php echo $row1["9"]; ?></td>
                   <td><?php echo $row["2"]; ?></td>
                    <td><?php echo $row["5"]; ?></td> 
                    <td><?php echo $row["9"]; ?></td> 
                    <td><?php echo $row["10"]; ?></td> 
                    <td><?php echo $row["6"]; ?></td> 
              </tr>
              <?php
             }
       }
                
            
       }
        
        ?>
    </body>
</html>
