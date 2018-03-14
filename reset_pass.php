
<?php
session_start();
 
         
         if(!isset($_GET["uid"]))
         {
               ?>
                                               <script>
                                                 window.location="login.php";
                                                </script>
                        <?php
         }
 else {
 include_once 'header.php';
include_once 'navigation.php';
 include 'mysql_op.php';
 $a = new mysql_op();
?>

<html lang="en">
<head>
<title>Trade Market a Corporate Business Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trade Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
<!-- //js -->
<link href="//fonts.googleapis.com/css?family=Muli:300,300i,400,400i" rel="stylesheet">
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script type="text/javascript">
    function hello()
    {
        var un = document.getElementById("input-7").value;
        if(un==="")
        {
//              alert("hello");
            document.getElementById("un_ln").innerHTML="Please Enter Username";
            return false;
        }
       var i = un.length;
       if(i<8)
       {
           document.getElementById("un_ln").innerHTML ="Password should contain minimum 8 characters";
       }
       if(i>20)
       {
                      document.getElementById("un_ln").innerHTML ="Password should contain maximum 20 characters";

       }
        var pass = document.getElementById("input-8").value;
        if(pass==="")
        {
//              alert("hello");
            document.getElementById("un_ps").innerHTML="Please Enter Password";
            return false;
        }
        if(un!=pass)
        {
            document.getElementById("un_ps").innerHTML="Password does not match";
            return false; 
        }
    }
        function valid()
        {
            alert("hello");
             var un = document.getElementById("input-7").value;
       
       var i = un.length;
       if(i<8)
       {
           document.getElementById("un_ln").innerHTML ="Password should contain minimum 8 characters";
       }
       if(i>20)
       {
                      document.getElementById("un_ln").innerHTML ="Password should contain maximum 20 characters";

       }
        }
//        alert("hello");
    
    
</script>

    
    
</head>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
         
       
         $uid =$_GET["uid"];
         $_SESSION["uid"] = $uid;
        ?>
       	<div class="login">
		<div class="container">
			<h3>Enter New Password</h3>
                        <form  method="GET" action="pass_chng.php">
				<span>
                                    <input type="password" name="pass" id="input-7" onchange="valid()" placeholder="New Password">
					<label for="input-7">
                                            <span id="un_ln" style="color: red"> </span>
                                </label>
                                    <input type="password" name="con" id="input-8" placeholder="Confirm Password">
					<label for="input-7">
                                            <span id="un_ps" style="color: red"> </span>
                                </label>
				</span>
                            <span style="color: red" >
                            </span>
                        <div class="clearfix"> </div>
                            <input type="submit" value="Submit" name="reset" onclick="return hello()">
			</form>
			</div>
		</div>
    </div>
      
       <?php
         }
         
         ?>
    </body>
</html>

