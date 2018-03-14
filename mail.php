
<html>
     <head>
        <meta charset="UTF-8">
        <title></title>
        <html lang="en">
<head>
<title>Trade Market a Corporate Business Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
<link class="include" rel="stylesheet" type="text/css" href="css/jquery.jqplot.css" />
<!-- calender -->
<link type="text/css" href="css/jquery.simple-dtpicker.css" rel="stylesheet" />
<!-- //calender -->
<!-- different-chart-bar -->
<link rel="stylesheet" href="css/chart.min.css">
<!-- //different-chart-bar -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
<!-- js -->
<!-- pop-up -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- left-chart -->
<script src="js/jquery.flot.min.js" type="text/javascript"></script> 
<script src="js/jquery.flot.animator.min.js" type="text/javascript"></script>
<!-- //left-chart -->
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
<!-- start-smoth-scrolling -->
</head>
	
    </head>
    <body>
       
        <div class="header">
		<div class="w3ls_header_top">
			<div class="container">
				<div class="w3l_header_left">
					<ul class="w3layouts_header">
						<li class="w3layouts_header_list">
							<ul>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Language<span class="caret"></span></a>
									<div class="mega-dropdown-menu">
										<ul class="dropdown-menu w3_dropdown">
											<li><a href="#">English</a></li> 
											<li><a href="#">Hindi</a></li>
										</ul>              
									</div>	
								</li>
								<li>
									<i>|</i>
								</li>
							</ul>
						</li>
						<li class="w3layouts_header_list">
                                                    <a href="login.php">Login To Trade</a><i>|</i>
						</li>
						<li class="w3layouts_header_list">
                                                    <a href="faq.php">FAQ</a><i>|</i>
						</li>
						<li class="w3layouts_header_list">
                                                    <a href="contact.php">Contact Us</a>
						</li>
					</ul>
				</div>
				<div class="w3l_header_right">
					<h2><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+(000) 123 456 678</h2>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="w3ls_header_middle">
			<div class="container">
				<div class="agileits_logo">
                                    <h1><a href="index.php"><span>Trade</span> Market<i>Trade anytime anywhere</i></a></h1>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
    <



<?php
 require_once 'maillib/class.pop3.php';
        require_once 'maillib/class.smtp.php';
        require_once 'maillib/class.phpmailer.php';
 include 'mysql_op.php';
 $a = new mysql_op();
if(isset($_GET["email"]))
{
    $email = $_GET["email"];
    $query = "SELECT `lid`, `Email`, `Password`, `role` FROM `login` WHERE `Email`='$email'";
    $result = mysql_query($query);
    if($row=  mysql_fetch_array($result))
    {
        $lid = $row["0"];
    }
    $mail =  new PHPMailer();
    $mail->isSMTP();
    $mail->Host="localhost";
    $mail->SMTPDebug=0;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure ="ssl"; 
    $mail->Host="smtp.gmail.com";
    $mail->Port=465;
    $mail->Username="kanchiparekh2108@gmail.com";
    $mail->Password="K_9925009103";
    $body="click here <a href='http://localhost/VSM_project/reset_pass.php?uid=$lid'>link</a> to reset your password";
    $mail->SetFrom('kanchiparekh2108@gmail.com');



$mail->Subject = "Password Reset Link";



$mail->MsgHTML($body);

$address = "kanchi.princesss@gmail.com";
$mail->AddAddress($email);
    
    if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
}
else {
    ?> <h1 align="center" style="margin-top:200px; color: orangered "> Reset Link is sent to your email Id. Please reset your password using that link</h1> <?php
}
    
    
}




?>

    </body>
</html>