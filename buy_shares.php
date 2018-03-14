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

<script>
           function qt()
           {
              // alert("hello");
            var q = document.getElementById("qty").value;
              // alert(q);
               if(q==="")
               {
                   document.getElementById("qty1").innerHTML="Pleae enter quantity";
                   return false;
               }
              var balance = document.getElementById("bal").value;
              //alert(balance);
              var sprice = document.getElementById("price").value;
              //alert(sprice);
              var cost = sprice*q;
             // alert(cost);
              if(+cost > +balance)
              {
                  document.getElementById("qty1").innerHTML="Insufficient balance to buy "+q+" shares.";
                  return false;
              }
               
              
               
              
           }

</script>
    </head>
        <div style=" height:1000px;">
        <?php
        include 'mysql_op.php';
       
        $lid =  $_SESSION["lid"];
        if ($lid=="")
        {
            
                                             ?>
<script>
    window.location="login.php";
</script>
<?php
        }
        else
        {
          if(!isset($_GET["btn_buy"]))
          {
              if(!isset($_GET["btn_confirm"]))
              {
              $cd = new mysql_op();
              
           //$cd->mysql_op();
            
//        error_reporting(E_ALL ^ E_DEPRECATED);
//        mysql_connect("localhost", "root","");
//        mysql_select_db("vsm");
        
        
//        echo $lid;
        $sid=$_GET["sid"];
        $_SESSION["sid"]=$sid;
        $query="SELECT * FROM `sharedetail` WHERE `s_id`=$sid";
        
       $result2= mysql_query($query);
        if($row= mysql_fetch_array($result2))
        {
//            $query4 = "SELECT  `Balance` FROM `virtual money` WHERE `L_id` = $lid ";
//           
//            $result15 = mysql_query($query4);
//            if($row1 =  mysql_fetch_array($result15))
//            {
//                echo $row1[0];
//            }
           ?>
            <form>
        <table id="customers" align="center" style=" margin-top: 50px;">
            <tr> <td>Symbol</td><td><input type="text" size="25"style="border-width:0;" name="s_name" value="  <?php echo $row["1"];?>"  readonly=""/></td></tr>
           <tr> <td>Name</td><td><input type="text" size="25"name="name"style="border-width:0; background-color:#f2f2f2; " value="<?php echo $row["2"];?>" readonly=""/></td></tr>
           <tr> <td> Share Price</td><td><input type="text" size="25"  id="price" style="border-width:0;"name="s_price" value="<?php echo $row["3"];?>" readonly=""/></td></tr>
           <tr>   <td>Previous Open</td><td><input type="text" size="25"style="border-width:0;background-color:#f2f2f2;"name="p_open" value="<?php echo $row["4"];?>" readonly="" /></td></tr>
     <tr>   <td>Previous Close</td><td><input type="text" size="25"style="border-width:0;" name="p_close" value="<?php echo $row["5"];?>" readonly="" /></td>  </tr>
     <tr> <td>Low</td><td><input type="text" name="low" size="25"style="border-width:0;background-color:#f2f2f2;"value="<?php echo $row["6"];?>" readonly="" /></td></tr>
      <tr>  <td>High</td><td><input type="text"size="25" name="high"style="border-width:0;" value="<?php echo $row["7"];?>" readonly="" /></td> </tr>
      <tr>  <td>Change</td><td><input type="text"size="25" name="change"style="border-width:0;background-color:#f2f2f2;" value="<?php echo $row["8"];?>" readonly="" /> </td></tr>
      <tr>  <td>Change in Percentage</td><td><input type="text" size="25" name="change_per"style="border-width:0;" value="<?php echo $row["9"];?>" readonly="" /></td></tr>
      <tr>  <td>Current Balance</td><td><input type="text"size="25"  id="bal" name="c_bal"style="border-width:0;background-color:#f2f2f2;" value="<?php  $query4 = "SELECT  `Balance` FROM `virtual money` WHERE `L_id` = $lid ";
           
                                                                                                                                                    $result15 = mysql_query($query4);
                                                                                                                                                      if($row1 =  mysql_fetch_array($result15))
                                                                                                                                                      {
                                                                                                                                                          echo $row1[0];
                                                                                                                                                      }?>" readonly="" /> </td></tr>
      <tr>  <td> Quantity</td><td> <input type="text" id="qty" placeholder="Please Enter quantity" name="quantity" style="border-width:0;"value="" /></br>  <span id="qty1" style="color: red"> </span> </td></tr>
     
      
      <tr>     <td colspan="2"> <input type="submit" onclick="return qt()" value="Buy" name="btn_buy" style=" background-color:#ff5000; height: 50px; width: 75px; color: white"/> </td></tr>
              </table>
             </br>
            </form>
       
        <?php   
        }
          }   
          }
        if(isset($_GET["btn_buy"]))  
        {
     
        $Name=$_GET["name"];
        $Price=$_GET["s_price"];
        $Quantity=$_GET["quantity"];
        $Cost=$Price*$Quantity;
        
        $ab = new mysql_op();
        $query="SELECT `Balance` FROM `virtual money` WHERE `L_id`='$lid'";
        $result5=  mysql_query($query);
        if($row=  mysql_fetch_array($result5))
        {
            $balance=$row["Balance"];
            $_SESSION["bal"]=$balance;
            
        }
        if($balance>=$Cost)
        {
            ?>
            <form>
        <table id="customers" align="center" style=" margin-top: 50px;">
           
           <tr> <td>Name</td><td><input type="text" size="25"name="oname"style="border-width:0; " value="<?php echo $Name;?>" readonly=""/></td></tr>
           <tr> <td> Share Price</td><td><input type="text" size="25" style="border-width:0; background-color:#f2f2f2; "name="os_price" value="<?php echo $Price;?>" readonly=""/></td></tr>
      <tr>  <td> Quantity</td><td> <input type="text" name="oquantity" style="border-width:0;"value="<?php echo $Quantity;?>" readonly="" /> </td></tr>
      <tr>  <td> Cost</td><td> <input type="text" name="ocost" style="border-width:0; background-color:#f2f2f2; "value="<?php echo $Cost;?>" readonly="" /> </td></tr>
      <tr>     <td colspan="2"> <input type="submit" value="Confirm" name="btn_confirm" style=" background-color:#ff5000; height: 50px; width: 75px; color: white"/> </td></tr>
              </table>
             </br>
            </form>
       
        <?php    
       
        }
        
        }
        
         if(isset($_GET["btn_confirm"]))
        {
         $sid=$_SESSION["sid"];
         $lid=$_SESSION['lid'];
         date_default_timezone_set("Asia/Kolkata");
         $time= date( "H:i:s");
         $date= date("jS \of F Y");
         $pr=$_GET["os_price" ];
         $qt=$_GET["oquantity"];
         $cost=$_GET["ocost"];
         $nm=$_GET["oname"];
         
         $db=new mysql_op();
         
         $query="INSERT INTO `buy_shares`(`b_id`, `s_id`, `l_id`, `Share Name`, `Share_price`, `quantity`,`oquantity`, `cost`, `date`, `time`) VALUES (NULL,'$sid','$lid','$nm','$pr','$qt','$qt','$cost','$date','$time')";
         echo $query;
         $result6=  mysql_query($query);
         if($result6>0)
         {
             $bal=$_SESSION["bal"];
             $newbalance=$bal-$cost;
             $query="UPDATE `virtual money` SET `Balance`='$newbalance' WHERE `L_id`='$lid'";
             $result7=  mysql_query($query);
             if($result7>0)
             {
                ?>
            <script>
                    window.location="my_shares.php";
            </script>
            <?php
             }
             else
             {
                 echo "Transaction failed!!";
             }
         }
        }
         }
      
       
        
    
        
        ?>
    </div>
    </body>
</html>
