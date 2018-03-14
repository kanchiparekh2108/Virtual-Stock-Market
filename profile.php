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
    
    function ph()
    {
     var path = document.getElementById("file").value;
     var url = "se_phot.php?path="+path;
     xml = new XMLHttpRequest();
     xml.open("GET",url,true);
     xml.send();
     xml.onreadystatechange()=function ()
     {
         if(this.readyState==4)
         {
             
         }
     }
     
     
    }
    </script>
    </head>
        <?php
      
        //include 'mysql_op.php';
         $c = new mysql_op();
       
       if(isset($_POST["up_dp"]))
       {
          // $lid=$_SESSION["lid"];
            $query1 = "SELECT `path` FROM `profile_phot` WHERE `lid`=$lid";
        $result2 = mysql_query($query1);
        if($row=  mysql_fetch_array($result2))
        {
            $p=$row["0"];
            if($p!="images/download.jpg")
            {
            
                      unlink($row["0"]);
            }
            
        }
        $tmp =$_FILES["dp"]["tmp_name"];
        $name = $_FILES["dp"]["name"];
        $type = $_FILES["dp"]["type"];
        
       if($type=="image/jpeg")
       {
        
        $path ="profile_photo/$name$lid.jpg";
       }
       else if($type=="image/png")
       {
             $path ="profile_photo/$lid$name.png";
       }
        
        move_uploaded_file($tmp,$path);
        $query2 ="UPDATE `profile_phot` SET `path`='$path' WHERE `lid`=$lid";
        //echo $query2;
       $result2 = mysql_query($query2);
      if($result2 > 0)
          
      {
          
        // echo 'sucess';
          ?>
    
   <script>
       window.location="profile.php";
    </script>
    <?php
          
      }
 else {
          
 
     echo"try again";
 
           
       }
       }
        if(isset($_GET["btn_upd"]))
        {
            $n = $_GET["f_name"];
            $l = $_GET["l_name"];
            $u = $_GET["u_name"];
            $p = $_GET["ph"];
                
            ?>
             <form>
        <table id="customers" align="center" style=" margin-top: 50px;">
            <tr> <td> First Name</td><td><input type="text" name="fname"  style="border-width:0;"value="<?php echo $n ?>"  /></td></tr>
            <tr> <td> Last Name</td><td><input type="text" name="lname"   style="border-width:0; background-color:#f2f2f2;" value="<?php echo $l;?>"  /></td></tr>
            <tr> <td> Phone</td><td><input type="text" name="phone"   style="border-width:0; background-color:#f2f2f2;" value="<?php echo $p;?>"/></td></tr>
            <tr> <td colspan="2"> <input type="submit" value="Save" name="btn_save" /></td></tr>
            
            
            
         </table>
        
            </form>
            <?php
            
            
        }
        if(isset($_GET["btn_save"]))
            {
             
                $na = $_GET["fname"];
                $ln=$_GET["lname"];
                $pho = $_GET["phone"];
               
                $query4 = "UPDATE `registration` SET `Name`='$na',`Last_name`='$ln',`Phone`='$pho' WHERE `lid`='$lid'";
                // echo $query4;
                $result = mysql_query($query4);
                if($result>0)
                {
                    
                    ?>
                   
                    <script>
  
                          window.location="profile.php";
                          
                    </script>
               
                 <?php
//                    header('Location:profile.php');
                    
                }
             else {
                        echo"Error in updating profile.Please try again.";
                  }
//                    
            }
        if(!isset($_GET["btn_upd"]))
            
        {
            if(!isset($_GET["btn_save"]))
            {
       $a = new mysql_op();
       $query ="SELECT `Name`, `Last_name`, `Phone`,`Email` FROM `login`,`registration` WHERE registration.lid = $lid AND login.lid= $lid"; 
      $result3 = mysql_query($query);
      if($row = mysql_fetch_array($result3))
      {
         
         ?>
                    <div>
                        <form name="file"  method="POST" enctype="multipart/form-data">
                            </br>
                            
                            <center>  
                                
                         <?php
                         
                         
                                $query5 = "SELECT `pr_id`, `lid`, `path` FROM `profile_phot` WHERE `lid` = $lid";
                                $result4 = mysql_query($query5);
                                if($rw=  mysql_fetch_array($result4))
                                {
                                    $path = $rw["2"];
                                }
                        
                            
                                ?>
                                <img src="<?php echo $path;?>" width="300" style="border-radius:55%" height="300" alt="download"/>

                                </br> <label for="file-upload" class="custom-file-upload">
                                                <i class="fa fa-cloud-upload"></i> Select Photo
                                        </label>
                                <input id="file-upload" type="file"  name="dp" style="display: none;"/>    
                                <input type="submit" value="Update" id="up_ph" name="up_dp" style=" background-color: #39bd00;
    border: none;
    color: white;
    padding: 4px 16px;
    margin-top: 15px;"/></center>
                        
                        </form>
                        
                        
                    </div>
            <form>
        <table id="customers" align="center" style=" margin-top: 50px;">
            <tr> <td> First Name</td><td><input type="text" name="f_name"  style="border-width:0;"value="<?php echo $row["Name"];?>" readonly="readonly" /></td></tr>
            <tr> <td> Last Name</td><td><input type="text" name="l_name"   style="border-width:0; background-color:#f2f2f2;" value="<?php echo $row["Last_name"];?>" readonly="readonly" /></td></tr>
            <tr> <td> Username</td><td><input type="text" name="u_name"  style="border-width:0;"  size="100"value="<?php echo $row["Email"];?>" readonly="readonly" /></td></tr>
            <tr> <td> Phone</td><td><input type="text" name="ph"   style="border-width:0; background-color:#f2f2f2;" value="<?php echo $row["Phone"];?>" readonly="readonly" /></td></tr>
            
            <tr> <td colspan="2"> <input type="submit" value="Update Profile" name="btn_upd" /></td></tr>
            
            
            
        </table>
        
            </form>
        
        
        <?php
          
      }
       
        }
        }
        
       ?>

    </body>
</html>

