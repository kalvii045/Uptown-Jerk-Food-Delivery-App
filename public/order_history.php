<?php
    require("../includes/controller.php");
    
    if ($_SERVER['REQUEST_METHOD'] == "GET"){
        
        $all_order = CS50::query("SELECT * FROM ordered_items");
        
        render("order_history_view.php",['all_order'=>$all_order]); 
    }
?>