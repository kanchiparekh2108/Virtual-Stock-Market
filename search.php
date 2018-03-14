

<html>
    <head>
          <style>
#customerss {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 20%;
    
}

#customerss li, #customerss ul {
    border: 1px solid #ddd;
    padding: 8px;
     text-align: left;
     
}

#customerss li:nth-child(even){background-color: #f2f2f2;
 text-align: left;}

#customerss li:hover {background-color: #ddd;
 text-align: left;}

#customerss ul {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<script>
            function hello()
            {
                alert("hii");
            }
</script>
    </head>
    <body>
<?php
include'mysql_op.php';
 $a = new mysql_op();
$name = $_GET["name"];
$query="SELECT `s_id`,`name` FROM `sharedetail` WHERE `name` LIKE '$name%' LIMIT 4";
$result=  mysql_query($query);
if(mysql_affected_rows())
{
  ?>
        <ul  id="customerss"  style="    list-style: none;
    margin-top: 0px;
    position: absolute;
    /*margin-top: -23px;*/
    width: 24%;
    z-index: 9999;    top: 90px; ">
<?php

while($row=  mysql_fetch_array($result))
{ 
    $sid =$row["s_id"];
    ?>
    <li onclick=" window.location='hello.php?sid=<?php echo $sid;?>'"><?php echo $row["name"];?></li>
 <?php
 
}
}

?>
        </ul>
    </body>
</html>