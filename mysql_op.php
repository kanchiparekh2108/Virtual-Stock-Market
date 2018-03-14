<?php

 error_reporting(E_ALL ^ E_DEPRECATED);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mysql_op
 *
 * @author acer
 */
class mysql_op {
    public function mysql_op () 
    {
          
          mysql_connect("localhost", "root", "");
        mysql_select_db("vsm");
      
       
       
    }
    //put your code here
}
?>
