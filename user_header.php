

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
<script>
            function hello()
                    {
                      
                    var a =document.getElementById("fi").value;
                    if(a==="")
                    {
                      document.getElementById("sp").innerHTML=" ";
                      return false;
                    }
                    else
                    {
                        var url = "search.php?name="+a;
                       var xml = new XMLHttpRequest();
                       xml.open("GET",url,true);
                       xml.send();
                       xml.onreadystatechange = function ()
                       {
                           if(this.readyState==4)
                           {
                               document.getElementById("sp").innerHTML= xml.responseText;
                           }
                       }
                    
                     
                    }
                }
        </script>
</head>
	
    
     <html lang="en">
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
                                                    <a href="logout.php">Logout</a><i>|</i>
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
                                    <h1><a href="Welcome.php"><span>Trade</span> Market<i>Trade anytime anywhere</i></a></h1>
				</div>
                            <div class="agileits_search">
					<form method="post">
						<input name="Search" type="text" placeholder="Search" id="fi"  oninput= "hello()" required="">
                                                <input type="submit" value="Search">
                                    <span style="margin-left:300px; margin-top:0px;" id="sp"></span>
						
					</form>
<!--                                       <span style="margin-left:300px; margin-top:0px;  " id="sp"></span>-->
				</div>
                            
                            <div class="clearfix">
                            </div>
                          
                           
                            <?php
                              include 'mysql_op.php';
                                $b = new mysql_op();
                            $lid= $_SESSION["lid"];
                            $query = "SELECT `pr_id`, `lid`, `path` FROM `profile_phot` WHERE `lid` = $lid";
                            $result = mysql_query($query);
                            if($row=  mysql_fetch_array($result))
                            {
                                
                            
                            
                            
                            ?>
                        </h3>  <a href ="Welcome.php"><img src="<?php echo $row["2"];} ?>" width="75" height="75"  style="margin-left:1000px; border-radius:55% "/></a>
                              <?php
                              
                            $query2 = " SELECT `Name`, `Last_name` FROM `registration` WHERE `lid`= $lid"; 

                                           $result4 = mysql_query($query2);
                                           
                                           if($rw=  mysql_fetch_array($result4))
                                           


?>
                             <h3 style="margin-left:950px; color:orangered "><?php echo $rw["Name"];echo" ";echo $rw["Last_name"]; ?></h3>
			</div>
		
               
                </div>
	
        </div>
    

  <title> Trade Market a Corporate Business Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
        <div class="trade_navigation">
		<div class="container">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<nav class="wthree_nav">
						<ul class="nav navbar-nav nav_1">
                                                    <li><a href="Welcome.php">Home</a></li>
                                                   <li><a href="profile.php">Profile</a></li>
                                                    <li><a href="Shares.php">Shares</a></li>
                                                    <li><a href="my_shares.php">My Shares</a></li>
                                                     <li><a href="view_wishlist.php">Wishlist</a></li>
                                                    <li><a href="portfolio.php">Portfolio</a></li>
							<li>
                                                            <a href="Top_gainer.php">Analysis</a>
							</li>
                                                        <li>
                                                            <a href="buy_money.php">Buy Virtual Money</a>
							</li>
                                                        
                                                        
							
							
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
        <div class="banner-bottom">
		<div class="panel panel-default agile_panel">
			<div class="panel-body agile_panel_body">
				<ul class="demo1">
					<li class="news-item">
						<table class="w3_table_trade">
							<tr>
								<td class="w3_agileits_td demo1_w3_table_trade">
									<table class="agileits_w3layouts_table">
										<tr>
											<td style="color:#01A9CE;text-transform:uppercase;">NIFTY 50</td>
										</tr>
										<tr>
											<td>8,638.23<i><span class="caret"></span>-8.35(-0.10%)</i></td>
										</tr>
									</table>
								</td>
								<td class="demo1_w3_table_trade">
									<table class="agileits_w3layouts_table">
										<tr>
											<td style="color:#01A9CE;text-transform:uppercase;">SILVER</td>
										</tr>
										<tr>
											<td>46,343.56<i><span class="caret"></span>-186.00(-0.40%)</i></td>
										</tr>
									</table>
								</td>
								<td class="demo1_w3_table_trade">
									<table class="agileits_w3layouts_table">
										<tr>
											<td style="color:#01A9CE;">Dollar-Rupee</td>
										</tr>
										<tr>
											<td>66.8650<i class="wthree_i"><span class="caret caret1"></span>0.00(0.00%)</i></td>
										</tr>
									</table>
								</td>
								<td class="demo1_w3_table_trade">
									<table class="agileits_w3layouts_table">
										<tr>
											<td style="color:#01A9CE;text-transform:uppercase;">CRUDEOIL</td>
										</tr>
										<tr>
											<td>3,097.00<i><span class="caret"></span>-7.00(-0.23%)</i></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</li>
					<li class="news-item">
						<table class="w3_table_trade">
							<tr>
								<td class="w3_agileits_td demo1_w3_table_trade">
									<table class="agileits_w3layouts_table">
										<tr>
											<td style="color:#01A9CE;text-transform:uppercase;">gold</td>
										</tr>
										<tr>
											<td>31,350.23<i><span class="caret"></span>-117.00(-0.37%)</i></td>
										</tr>
									</table>
								</td>
								<td class="demo1_w3_table_trade">
									<table class="agileits_w3layouts_table">
										<tr>
											<td style="color:#01A9CE;text-transform:uppercase;">ftsc</td>
										</tr>
										<tr>
											<td>6.887.93<i><span class="caret"></span>-5.99(-0.09%)</i></td>
										</tr>
									</table>
								</td>
								<td class="demo1_w3_table_trade">
									<table class="agileits_w3layouts_table">
										<tr>
											<td style="color:#01A9CE;text-transform:uppercase;">cac</td>
										</tr>
										<tr>
											<td>4,436.70<i><span class="caret"></span>-23.00(0.54%)</i></td>
										</tr>
									</table>
								</td>
								<td class="demo1_w3_table_trade">
									<table class="agileits_w3layouts_table">
										<tr>
											<td style="color:#01A9CE;text-transform:uppercase;">dax</td>
										</tr>
										<tr>
											<td>10,596.00<i><span class="caret"></span>-79.89(-0.75%)</i></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</li>
					<li class="news-item">
						<table class="w3_table_trade">
							<tr>
								<td class="w3_agileits_td demo1_w3_table_trade">
									<table class="agileits_w3layouts_table">
										<tr>
											<td style="color:#01A9CE;text-transform:uppercase;">sensex</td>
										</tr>
										<tr>
											<td>2,7993.64<i><span class="caret"></span>-66.59(-0.24%)</i></td>
										</tr>
									</table>
								</td>
								<td class="demo1_w3_table_trade">
									<table class="agileits_w3layouts_table">
										<tr>
											<td style="color:#01A9CE;text-transform:uppercase;">nhai</td>
										</tr>
										<tr>
											<td>1,256.00<i style="color:#00AA00"><span class="caret caret1"></span>16.20(1.31%)</i></td>
										</tr>
									</table>
								</td>
								<td class="demo1_w3_table_trade">
									<table class="agileits_w3layouts_table">
										<tr>
											<td style="color:#01A9CE;">Euro-Rupee</td>
										</tr>
										<tr>
											<td>75.42<i class="wthree_i"><span class="caret caret1"></span>0.03(0.04%)</i></td>
										</tr>
									</table>
								</td>
								<td class="demo1_w3_table_trade">
									<table class="agileits_w3layouts_table">
										<tr>
											<td style="color:#01A9CE;text-transform:uppercase;">iifl</td>
										</tr>
										<tr>
											<td>1,006.51<i><span class="caret"></span>-1.25(-0.12%)</i></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>							
					</li>
				</ul>
			</div>
		<div class="panel-footer"> </div>
		</div>
		<script type="text/javascript">
			$(function () {
				$(".demo1").bootstrapNews({
					newsPerPage: 1,
					autoplay: true,
					pauseOnHover:true,
					direction: 'up',
					newsTickerInterval: 3000,
					onToDo: function () {
						//console.log(this);
					}
				});
				
				$(".demo2").bootstrapNews({
					newsPerPage: 3,
					autoplay: true,
					pauseOnHover: true,
					navigation: false,
					direction: 'up',
					newsTickerInterval: 2500,
					onToDo: function () {
						//console.log(this);
					}
				});
			});
		</script>
		<script src="js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
		<div class='agileinfo_marquee'>
			<div data-speed="10" class="marquee">
				<ul>
					<li><a href="single.html">NPAs of associate banks to weigh on SBI: Religare Capital<span>\</span></a></li>
					<li><a href="single.html">Julius Baer analyst sees opportunities in despised China market</a></li>
				</ul>
			</div>
		</div>
	</div>

    </body>
</html>



