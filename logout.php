<?php
        session_start();
        if(isset($_SESSION["lid"]))
        {
            unset($_SESSION["lid"]);
            header('Location:index.php');
        }
?>
