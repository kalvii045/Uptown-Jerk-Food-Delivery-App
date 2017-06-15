<?php
    require("../includes/controller.php"); 
    
    $query1= CS50::query('INSERT INTO ordered_items(food_ids,deal_ids,first_name,last_name,address,Unit_numb,postal_code,email_addr,phone_numb) VALUES(?,?,?,?,?,?,?,?,?)', $_GET['foods2'], $_GET['deals2'],$_GET['first_name'], $_GET['last_name'],$_GET['address'],$_GET['unit_numb'],$_GET['postal_code'],
                $_GET['email_addr'],$_GET['phone_numb']); 
                
?>