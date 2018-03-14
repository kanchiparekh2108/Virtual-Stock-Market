<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include 'logout_header.php';
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
<script type="text/javascript">
    function qnt()
    {
        //alert("hello");
        var qnty = document.getElementById("qty").value;
        var current = document.getElementById("cqt").value;
        if(qnty==="")
        {
            document.getElementById("qty1").innerHTML ="Please Enter quantity";
            return false;
        }
        // alert("hello");
        
        else if(+current < +qnty)
        {
            
            
                document.getElementById("qty1").innerHTML ="Insufficient Quanity";
            return false;
        }
    }
        
    
    </script>
    </head>
    <body>
        <?php
        include 'mysql_op.php';
       
      
        
        $e = new mysql_op();
        if(isset($_GET["bid"]))
        {
            $quantity = $_GET["qt"];
         $bid = $_GET["bid"];
         $_SESSION["bid"]= $bid;
        $query ="SELECT `b_id`, `s_id`, `l_id`, `Share Name`, `Share_price`, `quantity`, `cost`, `date`, `time` FROM `buy_shares` WHERE `b_id`='$bid'";
        
        $result9 = mysql_query($query);
        if($row= mysql_fetch_array($result9))
        {
           $_SESSION["qty"] = $row["5"];
           
            $sid=$row["1"];
            $_SESSION["sid"]= $sid;
            $query1="SELECT  `price` FROM `sharedetail` WHERE `s_id`='$sid'";
            $result10 = mysql_query($query1);
            if($row1=  mysql_fetch_array($result10))
            {
                $sprice = $row1["0"];
            }
            ?>
        <div>
         <form>
             
        <table id="customers" align="center" style=" margin-top: 50px;">
        <tr> <td>Name</td><td><input type="text" size="25" style="border-width:0;" name="s_name" value="  <?php echo $row["3"];?>"  readonly=""/></td></tr>
           <tr> <td>Buy Price</td><td><input type="text" size="25" name="bprice"style="border-width:0; background-color:#f2f2f2; " value="<?php echo $row["4"];?>" readonly=""/></td></tr>
           <tr> <td>Current Price</td><td><input type="text" size="25"name="cprice"style="border-width:0;  " value="<?php echo $sprice;?>" readonly=""/></td></tr>
           <tr> <td> Bought on</td><td><input type="text" size="25" style="border-width:0; background-color:#f2f2f2;" name="date" value="<?php echo $row["7"];?>" readonly=""/></td></tr>
           <tr>   <td>Bought at</td><td><input type="text" size="25" style="border-width:0;"name="time" value="<?php echo $row["8"];?>" readonly="" /></td></tr>
           <tr> <td> Current Quantity</td><td><input type="text"  id="cqt" size="25" style="border-width:0; background-color:#f2f2f2;"name="current" value="<?php echo $quantity;?>" readonly=""/></td></tr>
           <tr>  <td> Quantity</td><td> <input type="text" id="qty" placeholder="Please Enter quantity" name="squantity" style="border-width:0;"value="" /> </br><span id="qty1" style="color: red"> </span>  </td></tr>
           <tr>     <td colspan="2"> <input type="submit" onclick="return qnt()" value="Sell" name="btn_sell" style=" background-color:#ff5000; height: 50px; width: 75px; color: white"/> </td></tr>
        
        </table>
         </form>
</div>        
        
        <?php
            
        }   
        }
        
        if(isset($_GET["btn_sell"]))
        {
            $quantity = $_SESSION["qty"];
         
            $qty = $_GET["squantity"];
            if($qty <= $quantity)
            {
           $s_name = $_GET["s_name"];
           $bprice = $_GET["bprice"];
           $cprice = $_GET["cprice"];
          
           //$qty = $_GET["squantity"];
           $cost = $cprice * $qty;
           $bcost = $bprice * $qty;
          date_default_timezone_set("Asia/Kolkata");
           $Date= date("jS \of F Y");
           $time = date("H:i:s");
              ?>
         <form>
        <table id="customers" align="center" style=" margin-top: 50px;">
        <tr> <td>Name</td><td><input type="text" size="25"style="border-width:0;" name="s_name" value="  <?php echo $s_name;?>"  readonly=""/></td></tr>
           <tr> <td>Buy Price</td><td><input type="text" size="25"name="bprice"style="border-width:0; background-color:#f2f2f2; " value="<?php echo $bprice;?>" readonly=""/></td></tr>
           <tr> <td>Current Price</td><td><input type="text" size="25"name="cprice"style="border-width:0;  " value="<?php echo $cprice;?>" readonly=""/></td></tr>
           <tr> <td> Date</td><td><input type="text" size="25" style="border-width:0; background-color:#f2f2f2;"name="date" value="<?php echo $Date;?>" readonly=""/></td></tr>
           <tr>   <td>Time</td><td><input type="text" size="25"style="border-width:0;"name="time" value="<?php echo $time;?>" readonly="" /></td></tr>
           <tr>  <td> Quantity</td><td> <input type="text"  readonly="" name="squantity" style="border-width:0;background-color:#f2f2f2;"value="<?php echo $qty;?>" /> </td></tr>
            <tr>  <td> Cost</td><td> <input type="text"  readonly="" name="cost" style="border-width:0;"value="<?php echo $cost;?>" /> </td></tr>
            <tr>  <td> Profit/Loss</td><td> <input type="text"  readonly="" name="P/l" size="35"; style="border-width:0;background-color:#f2f2f2;"
                                                   value="<?php 
                                             if( $bcost > $cost)
                                              {
                                              $loss = $bcost - $cost;
                                              echo"Loss ="; echo $loss;
                                               $query18="SELECT  `pl` FROM `profit_loss` WHERE `lid`= $lid";
                                               $result18 = mysql_query($query18);
                                               if($row1=  mysql_fetch_array($result18))
                                               {
                                                   $pl=$row1["pl"];
                                                   $l = $pl-$loss;
                                                   $query=" UPDATE `profit_loss` SET `pl`=$l WHERE `lid` = $lid";
                                                   mysql_query($query);
                                               }
                                              }  
           
                                               else if( $bcost < $cost)
                                              {
                                            $profit = $cost - $bcost;
                                            echo "Profit ="; echo $profit;
                                            $query18="SELECT  `pl` FROM `profit_loss` WHERE `lid`= $lid";
                                               $result18 = mysql_query($query18);
                                               if($row1=  mysql_fetch_array($result18))
                                               {
                                                   $pl=$row1["pl"];
                                                   $p = $pl+$profit;
                                                   $query=" UPDATE `profit_loss` SET `pl`=$p WHERE `lid` = $lid";
                                                   mysql_query($query);
                                               }
                                               }
                                               else
                                               {
                                                   echo "No Profit. No loss";
                                               }
?>" /> </td></tr>
         <tr>     <td colspan="2"> <input type="submit" value="confirm" name="btn_cf" style=" background-color:#ff5000; height: 50px; width: 75px; color: white"/> </td></tr>
        </table>
         </form>
        
        
        
        <?php 
            }
            else
            {
                header('Location:my_shares.php');
            }
            
        }
        if(isset($_GET["btn_cf"]))
        {
            $sesid = $_SESSION["sid"];
            
            $ubid = $_SESSION["bid"];
             $oquantity = $_SESSION["qty"];
             $name = $_GET["s_name"];
             $price = $_GET["cprice"];
            $r = new mysql_op();
            $query = "SELECT  `Balance` FROM `virtual money` WHERE `L_id` = '$lid'";
            $sqty = $_GET["squantity"];
           $pl = $_GET["P/l"];
            $result11 = mysql_query($query);
             $sdate= $_GET["date"];
             //echo $sdate;
           
           $stime = $_GET["time"];
           $b_price = $_GET["bprice"];
            if($row2 = mysql_fetch_array($result11))
            {
                $balance =  $row2[0];
            }
           $cp = $_GET["cost"];
          
           $newbal = $balance + $cp;
           
           
           $query2 = "UPDATE `virtual money` SET `Balance`='$newbal'";
           $result12 = mysql_query($query2);
           if($result12 > 0)
           {
//               if($oquantity==$sqty)
//               {
//                  
//                   
//                   $query5= "INSERT INTO `sell_shares`(`seid`, `Name`, `Price`,`b_price`, `cost`, `quantity`,`P/l`,`lid`, `sid`,`Date`,`Time`) VALUES (NULL,'$name','$price','$ubid',$cp','$sqty','$pl','$lid','$sesid','$sdate','$stime')";
//                  
//                   mysql_query($query5);
//                 
//                   $query3="DELETE FROM `buy_shares` WHERE `b_id` = '$ubid'";
//                   $result14 = mysql_query($query3);
//                   if($result14 >0)
//                   {
//                    
//        
//<!--                      <script>
//                    window.location="my_shares.php";
//                       </script>-->
                   
//                   }
//                else {
//                         header('Location:my_shares.php?msg= Transaction Failed. Please try again.');
//                    }
//               }
//               else
//               {
                   $quant = $oquantity - $sqty;
                    
                   $query6= "INSERT INTO `sell_shares`(`seid`, `Name`, `Price`, `b_price`,`cost`, `quantity`,`P/l`,`lid`, `sid`,`Date`,`Time`) VALUES (NULL,'$name','$price','$ubid','$cp','$sqty','$pl','$lid','$sesid','$sdate','$stime')";
                    //echo $query6;
                   mysql_query($query6);
                  
                   $query4="UPDATE `buy_shares` SET `quantity`='$quant' WHERE `b_id`='$ubid'";
                   
                   $result13 = mysql_query($query4);
                   if($result13 >0)
                    {?>
        
                      <script>
                       window.location="my_shares.php";
                       </script>
                   <?php
                       }
                       else
           {
                ?>
                       <script>
                           var r = "transaction failed";
                           window.location="myshaer.php?msg='transaction failed'"
                           </script>
                       <?php
                
               }
           }
           
           }
           
           
        
      
        ?>
    </body>
</html>
