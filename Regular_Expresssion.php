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
        <script type="text/javascript">
            function Validate()
            {

                var reg = "/^[a-zA-Z]*$/";
                 var nm= document.getElementById("n1").value;
                if(!reg.match(nm))
                {
                    alert("Not Valid");
                    return false;
                }
                else
                {
                    alert("Valid");
                    return false;
                }
       
               return true;
            }
        </script>
    </head>
    <body>
        <form>
            name: <input type="text" name="nm" pattern="[A-Z]{1},[@]" id="n1" title="Enter Charcter Between a to z only" required=""><br/>
            <input type="submit" value="Login" name="btn_submit" />
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
