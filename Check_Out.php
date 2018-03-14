<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        if(isset($_GET["name"]))
        {
            $nm=$_GET["name"];
            $amy=$_GET["amout"];
//            exit();
            
            ?>
            <form id = "paypal_checkout" action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post">


    <input name = "cmd" value = "_cart" type = "hidden"><!-- for more then one items -->
    <input name = "upload" value = "1" type = "hidden">
  <!--  <input name = "no_note" value = "0" type = "hidden">
    <input name = "bn" value = "PP-BuyNowBF" type = "hidden">
    <input name = "tax" value = "0" type = "hidden"> -->
    <input name = "rm" value = "2" type = "hidden">

    <!--<input name = "business" value = "mauleshpatel403-facilitator@gmail.com" type = "hidden">-->
    <input name = "business" value = "shahparth95.it-facilitator@gmail.com" type = "hidden">
    
    <input name = "handling_cart" value = "0" type = "hidden">
    <input name = "currency_code" value = "USD" type = "hidden">
    <input name = "lc" value = "GB" type = "hidden">
    <input name = "return" value = "http://localhost/PayPalDemo/Succes.php" type = "hidden"><!-- after succesfulll transaction -->
    <input name = "cbt" value = "Return to My Site" type = "hidden">
    <input name = "cancel_return" value = "http://localhost/PayPalDemo/Cancel.php" type = "hidden"><!-- cancel transaction  -->
    <input name = "custom" value = "" type = "hidden">

    <div id = "item_1" class = "itemwrap">
        <input name = "item_name_1" value = "<?php echo $nm;?>" type = "hidden"> 
        
        <!--1st item  details-->  
        <input name = "quantity_1" value = "1" type = "hidden">
        <input name = "amount_1" value = "<?php echo $amy;?>" type = "hidden">
        <input name = "shipping_1" value = "0" type = "hidden">
    </div>
   
    <input id = "ppcheckoutbtn" style="visibility: hidden" value = "Checkout" class = "button" type = "submit">
</form>
        
<?php
$a=1;
//exit();
    if($a>0)
    {
//    ?>
    <script type="text/javascript">
    
    document.forms["paypal_checkout"].submit();
    </script>
    <?php
  }
        }
        ?>
    </body>
</html>
