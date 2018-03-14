<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include 'user_header.php';
$lid = $_SESSION["lid"];
if($lid=="")
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
      // include 'mysql_op.php';
       $e = new mysql_op();
       $query ="SELECT * FROM `profit_loss` WHERE pl > 0 ORDER BY pl DESC LIMIT 10";
       $result19 = mysql_query($query);
       if(mysql_affected_rows())
       {?>
             
        <h1 style="margin-top:50px " align ="center">Top Gainers</h1>
        <table id="customers"  style="margin-top:50px" align="center">
            <thead>
                <tr>
                    <th>Profile Picture</th>
                    <th>Name</th>
                    <th>Profit</th>
                </tr>
            </thead>
            
       <?php
                
       
       while($row=  mysql_fetch_array($result19))
       {
           $glid = $row["1"];
           $query1="SELECT `Name`, `Last_name` FROM `registration` WHERE `lid`= $glid";
           $result20= mysql_query($query1);
           if($row1 = mysql_fetch_array($result20))
           {
               $query2 ="SELECT `path` FROM `profile_phot` WHERE `lid`=$glid ";
               $result21=  mysql_query($query2);
               if(mysql_affected_rows())
               {
                   
               $rw=  mysql_fetch_array($result21);
               {
               ?>
            <tr>
                <td> <img src="<?php echo $rw["0"]; ?>" style="border-radius:55%" width="100" height="100"/> </td>
                                                                                   
                <td>  <?php echo $row1["0"]; echo" "; echo $row1["1"];?></td>
                <td>  <?php echo $row["2"];?></td>
            </tr>
      
        <?php
           }
                   
           }
           }
       }
       }
       ?>
        </table>
        <?php
        $query ="SELECT * FROM `profit_loss`  WHERE pl < 0 ORDER BY pl ASC LIMIT 10";
       $result19 = mysql_query($query);
        if(mysql_affected_rows())
       {?>
             
        <h1 style="margin-top:50px " align ="center">Top Loosers</h1>
        <table id="customers"  style="margin-top:50px" align="center">
            <thead>
                <tr>
                    <th>Profil Picture</th>
                    <th>Name</th>
                    <th>Loss</th>
                </tr>
            </thead>
            <tr>
       <?php
       while($row=  mysql_fetch_array($result19))
       {
           $glid = $row["1"];
           $query1="SELECT `Name`, `Last_name` FROM `registration` WHERE `lid`= $glid";
           $result20= mysql_query($query1);
           if($row1 = mysql_fetch_array($result20))
           {
                $query2 ="SELECT `path` FROM `profile_phot` WHERE `lid`=$glid ";
               $result21=  mysql_query($query2);
               if(mysql_affected_rows())
               {
                   
               $rw=  mysql_fetch_array($result21);
               {
               ?>
        
            <tr>
                 <td> <img src="<?php echo $rw["0"]; ?>" style="border-radius:55%" width="100" height="100"/> </td>
           
                <td>  <?php echo $row1["0"]; echo" "; echo $row1["1"];?></td>
                <td>  <?php echo substr($row["2"], 1);?></td>
            </tr>
        
            <?php
           }
       }
       ?>
           
            <?php
       }
       }
       }
       ?>
        </table>
        
    </body>
</html>
