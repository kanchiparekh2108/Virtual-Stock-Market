
<?php
 include_once 'header.php';
include_once 'navigation.php';
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
        
  
       
      
//        alert("hello");
    }
    function check()
    {
      //  alert("heello");
         var un = document.getElementById("input-7").value;
           xml = new XMLHttpRequest();
       url ="forgot_email.php?email="+un;
      
       xml.onreadystatechange = function()
       {
           if(this.readyState==4)
           {
                
                if(xml.responseText=="This username does not exists")
                {
                 document.getElementById("un_ln").innerHTML=xml.responseText; 
                document.getElementById("btn").disabled= true;
                return false;
                   
                }
                else
                {
                    document.getElementById("un_ln").innerHTML="";
                    document.getElementById("btn").disabled=false;
                }
           }
       }
        xml.open("GET",url,true);
       xml.send();
         
    }
    
</script>

    
    
</head>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       	<div class="login">
		<div class="container">
			<h3>Enter Your Username</h3>
                        <form  method="GET" action="mail.php">
				<span>
                                    <input type="text" name="email" id="input-7"   onchange="check()" placeholder="email">
					<label for="input-7">
                                            <span id="un_ln" style="color: red"> </span>
                                </label>
				</span>
                            <span style="color: red" >
                            </span>
                        <div class="clearfix"> </div>
                        <input type="submit" value="Submit" name="reset" id="btn" onclick="return hello()">
			</form>
			</div>
		</div>
    </div>
      
        <?php
            if(isset($_GET["reset"]))
            {
                        include'mysql_op.php';
                        require_once 'maillib/class.pop3.php';
                        require_once 'maillib/class.smtp.php';
                        require_once 'maillib/class.phpmailer.php';
                        $email = new PHPMailer();
                        $email->isSMTP();
                        $email->Host = "localhost";
                        $email->SMTPDebug=0;
                        $email->SMTPAuth=true;
          }
        ?>
    </body>
</html>
