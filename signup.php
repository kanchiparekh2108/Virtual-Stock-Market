
<?php
session_start();
?>

<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
 <?php
                         error_reporting(E_ALL ^ E_DEPRECATED);
                        if(isset($_POST["btn_submit"]))
                        {
                           // echo "btn_Click";
                           
//                            echo 'hellp';
  
                            $name=$_POST["name"];
                             $lname=$_POST["lname"];
                              $pass=$_POST["pass"];
                              $epass = md5($pass);
                                    $cpass=$_POST["cpass"];
                                   
                                    $phone=$_POST["phone"];
                                    
                                    $email=$_POST["email"];
                                  
                                        mysql_connect("localhost", "root");
                                         mysql_select_db("vsm");
                                         
                                        
                                         $query1="INSERT INTO `login`(`Email`, `Password`,`role`) VALUES ('$email','$epass','user') ";
                                         $res_log=mysql_query($query1);
                                         $lid=mysql_insert_id();
                                         $_SESSION["lid"]=$lid;
                                         echo $_SESSION["lid"];
                                        
                                         if($res_log>0)
                                         {
                                             $query=" INSERT INTO `registration`(`Name`, `Last_name`,`Phone`,`lid`) VALUES ('$name','$lname','$phone','$lid')";
                                            // echo $query;
                                             $res_1=mysql_query($query);
                                             
                                             if($res_1>0)
                                             {
                                                
                                                
                                                 $query3=" INSERT INTO `Virtual Money`(`v_id`, `L_id`, `Balance`) VALUES (NULL,$lid,100000)";
                                                
                                                $result8= mysql_query($query3);
                                                 //echo $query3;
                                                if($result8>0)
                                                {
                                                    $query8="INSERT INTO `profit_loss`(`pid`, `lid`, `pl`) VALUES (NULL,$lid,0)";
                                                  $result9 =  mysql_query($query8);
                                                  if($result9>0)
                                                  {
                                                      $query=" INSERT INTO `Profile_phot`(`pr_id`, `lid`, `path`) VALUES (NULL,$lid,'images/download.jpg')";
                                                      mysql_query($query);
                                                  }
                                                    
                                                    
                                                }
                                                
                                                 ?>
                                               <script>
                                                 window.location="Welcome.php";
                                                </script>
                        <?php
                                             
                
                                             }
                                            
                                                 
                                                 
                                             }
                                             else
                                             {
                                                $msg ="Registration failed please try gain.";
                                                 header("Location:signup.php?msg={$msg}");
                                              
                                              
                                             }
                                             
                                             
                                         }
                                         
                                         
                                         
                                    
                                    
                                    
                                    
                                    
                                    
                        
                       
                        ?>
<?php 
include_once 'header.php';
include_once 'navigation.php';?>
<html lang="en">
<head>
<title>Trade Market a Corporate Business Category Flat Bootstrap Responsive Website Template | Sign Up :: w3layouts</title>
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
//    function validate()
//    {
//        alert("Call");
//        var ph = document.getElementById("input-12").value;
//       var i = ph.length;
//       alert(i);
//       return false;
//       
//    }
    </script>
    <script type="text/javascript">
    function validate()
    {
        var num = document.getElementById("input-7").value;
        if( num=="")
        {
             document.getElementById("abc").innerHTML= "Please Enter User Name";
             return false;
        }
       
          var lnm = document.getElementById("input-8").value;
        if( lnm=="")
        {
             document.getElementById("sp_ln").innerHTML= "Please Enter Last Name";
             return false;
        }
          var email = document.getElementById("input-9").value;
        if( email=="")
        {
             document.getElementById("sp_em").innerHTML= "Please Enter Email";
             return false;
        }
         var ph = document.getElementById("input-12").value;
        
        if(ph=="")
        {
            //alert("hello");
             document.getElementById("sp_ph").innerHTML= "Please Enter Phone Number";
                return false;
        }  
        else if(ph.length!==10)
        {
           // alert(ph.length)
             document.getElementById("sp_ph").innerHTML= "Please Enter Valid Phone Number";
                    return false;
        } 
          var pass = document.getElementById("input-10").value;
        if( pass=="")
        {
             document.getElementById("sp_ps").innerHTML= "Please Enter Password";
             return false;
        }
          var cpass = document.getElementById("input-11").value;
         
        if(cpass=="")
        {
             document.getElementById("sp_cp").innerHTML= "Please Confirm the Password";
             return false;
        }
        if(cpass !== pass)
        {
            document.getElementById("sp_cp").innerHTML= "Password does not match.";
             return false;
        }
        return true;
        
    }
     function em()
             {
                var email = document.getElementById("input-9").value;
                url = "email.php?email="+email
                 xml = new XMLHttpRequest();
                xml.onreadystatechange = function ()
                {
                    if(this.readyState==4)
                    {
                      document.getElementById("sp_em").innerHTML = xml.responseText;
                    }
                }
           
                xml.open("GET",url,true);
                xml.send();
                 if(email!="")
                {
                    document.getElementById("sp_em").innerHTML ="";
                    return true;
                }
              }
            function pas()
            {
                var pwd = document.getElementById("input-10").value;
                var i = pwd.length;
                if(pwd!="")
                {
                      document.getElementById("sp_ps").innerHTML =" ";
                }
                if(i<8)
                {
                     document.getElementById("sp_ps").innerHTML ="Password should contain minimum 8 characters";
                }
                if(i>20)
                {
                     document.getElementById("sp_ps").innerHTML ="Password should contain maximum 20 characters";
                }
            }
            function val()
             {
                var num = document.getElementById("input-7").value;
                      if( num!="")
                {
                     document.getElementById("abc").innerHTML= "";

                }
                var lnm = document.getElementById("input-8").value;
                if( lnm!="")
                {
                     document.getElementById("sp_ln").innerHTML= "";

                }
                 var ph = document.getElementById("input-12").value;
                  if(ph!="")
                {
                    //alert("hello");
                     document.getElementById("sp_ph").innerHTML= "";
                     return true;
                }  
              }
              function vali()
              {
                  
                  var num = document.getElementById("input-7").value;
                  if( num=="")
                {
             document.getElementById("abc").innerHTML= "Please Enter User Name";
             return false;
                 }
                 
                 
              }
              
              function vali1()
              {
                    var num = document.getElementById("input-7").value;
                  if( num=="")
                {
             document.getElementById("abc").innerHTML= "Please Enter User Name";
             return false;
                 }
                     var lnm = document.getElementById("input-8").value;
        if( lnm=="")
        {
             document.getElementById("sp_ln").innerHTML= "Please Enter Last Name";
             return false;
        }
              }
              function vali2()
              {
                    var num = document.getElementById("input-7").value;
                  if( num=="")
                {
             document.getElementById("abc").innerHTML= "Please Enter User Name";
             return false;
                 }
                     var lnm = document.getElementById("input-8").value;
        if( lnm=="")
        {
             document.getElementById("sp_ln").innerHTML= "Please Enter Last Name";
             return false;
        }
         if( email=="")
        {
             document.getElementById("sp_em").innerHTML= "Please Enter Email";
             return false;
        }
              }
              
              function vali3()
              {
                    var num = document.getElementById("input-7").value;
                  if( num=="")
                {
             document.getElementById("abc").innerHTML= "Please Enter User Name";
             return false;
                 }
                     var lnm = document.getElementById("input-8").value;
        if( lnm=="")
        {
             document.getElementById("sp_ln").innerHTML= "Please Enter Last Name";
             return false;
        }
         if( email=="")
        {
             document.getElementById("sp_em").innerHTML= "Please Enter Email";
             return false;
        }
          var ph = document.getElementById("input-12").value; 
        if(ph=="")
        {
            //alert("hello");
             document.getElementById("sp_ph").innerHTML= "Please Enter Phone Number";
                return false;
        }  
              }
              
         function vali4()
         {
                var num = document.getElementById("input-7").value;
                  if( num=="")
                {
                     document.getElementById("abc").innerHTML= "Please Enter User Name";
                   return false;
                 }
                    var lnm = document.getElementById("input-8").value;
                  if( lnm=="")
                  {
                       document.getElementById("sp_ln").innerHTML= "Please Enter Last Name";
                       return false;
                  }
                   var email = document.getElementById("input-9").value;
                   if( email=="")
                  {
                       document.getElementById("sp_em").innerHTML= "Please Enter Email";
                       return false;
                  }
                    var ph = document.getElementById("input-12").value; 
                  if(ph=="")
                  {
                      //alert("hello");
                       document.getElementById("sp_ph").innerHTML= "Please Enter Phone Number";
                          return false;
                  }  
                   var pass = document.getElementById("input-10").value;
                  if( pass=="")
                  {
                       document.getElementById("sp_ps").innerHTML= "Please Enter Password";
                       return false;
                  }

         }
    
    
    </script>

<!-- start-smoth-scrolling -->
</head>
	
<body>
    <span id="span"></span>

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
<!-- //banner-bottom -->




<!-- register -->
	<div class="login">
		<div class="container">
                    <?php 
                    if(isset($_GET["msg"]))
                    {
                        ?>
                    <h3>Registration Failed Please Try again</h3>
                    <?php
                    }
                            
                            
                    else
                    {
                        ?>
                    
			<h3>Register Now</h3>
                        <?php
                    }?>
                        <form method="post">
				<span >
                                    <input  name="name" type="text" id="input-7"  placeholder="First Name" onchange="return val()"><br>
					
                                    <span id="abc" style="color: red"></span>
				</span>
				<span>
                                    <input  name="lname" type="text" id="input-8" placeholder="Last Name" onchange="return val()" onclick="return vali4()"></br>
                                     <span id="sp_ln" style="color: red"></span>
					
				</span>
				<span>
                                    <input  name="email" type="email" id="input-9" placeholder="Email Adress" onchange="return em()" onclick="return vali4()"></br>
					 <span id="sp_em" style="color: red"></span>
				</span>
                            <span>
                                <input name="phone" type="number"  id="input-12" placeholder="Phone" onchange="return val()" onclick="return vali4()"></br>
                                     <span id="sp_ph" style="color: red"></span>
                            </span>
				<span>
                                    <input  name="pass" type="password" id="input-10"  placeholder="Password" onchange="return pas()" onclick="vali4()"></br>
				 <span id="sp_ps" style="color: red"></span>
				</span>
				<span>
                                    <input  name="cpass" type="password" id="input-11"  placeholder="Confirm Password" onclick="vali4()"></br>
                                     <span id="sp_cp" style="color: red"></span>
                                   
				</span>
                            <input type="submit" value="Submit" name="btn_submit" onclick="return validate()">
                            <!--<input type="button" value="Reg" onclick="return validate()">-->
			</form>
                       
			<div class="w3l_login_form_bottom">
				<h4>(Or)<span>Share With</span></h4>
				<div class="agileits_social_icons">
					<ul> 
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span class="text">Facebook</span></a></li>
						<li class="w3ls_w3_twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span class="text">Twitter</span></a></li>
						<div class="clearfix"> </div>
					</ul> 
				</div>
			</div>
			<div class="w3l_login_form_bottom1">
				<a href="index.html">Go Back To Home</a>
			</div>
		</div>
	</div>
<!-- //register -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<ul class="agileits_w3layouts_footer_info">
				<li><a href="index.html">Home</a><i>|</i></li>
				<li><a href="news.html">Markets</a><i>|</i></li>
				<li><a href="funds.html">mutual funds</a><i>|</i></li>
				<li><a href="commodities.html">commodities</a><i>|</i></li>
				<li><a href="portfolio.html">portfolio</a><i>|</i></li>
				<li><a href="about.html">About Us</a><i>|</i></li>
				<li><a href="ipo.html">IPO</a><i>|</i></li>
				<li><a href="sitemap.html">sitemap</a></li>
			</ul>
			<p>© 2016 Trade Market. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
<!-- //footer -->
<!-- stacked-graph -->
	<script type="text/javascript" src="js/raphael.js"></script>
    <script type="text/javascript" src="js/jquery.enumerable.js"></script>
    <script type="text/javascript" src="js/jquery.tufte-graph.js"></script>
	 <script type="text/javascript">
      $(document).ready(function () {

        jQuery('#stacked-graph').tufteBar({
          data: [
            [[1.5, 1.0, 0.51], {label: '2013'}],
            [[2.0, 1.03, 0.6], {label: '2014'}],
            [[2.4, 0.9,  2.0], {label: '2015'}],
            [[1.5, 2.6, 0.45], {label: '2016'}]
          ],
          barLabel:  function(index) {
            amount = ($(this[0]).sum() * 10000).toFixed(0);
            return '$' + $.tufteBar.formatNumber(amount);
          },
          axisLabel: function(index) { return this[1].label },
          legend: {
            data: ["Finance", "Metal", "Telecom"]
          }
        });
      });
    </script>
<!-- //stacked-graph -->
<!-- script for marque -->
	<script>
	  $('.marquee').marquee({
		gap: 100,
		delayBeforeStart: 0,
		direction: 'left',
		duplicated: true,
		pauseOnHover: true
	});
	</script>
	
<!-- //script for marque -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

        
    </body>
</html>
