<?php
    require("../includes/controller.php"); 
    
    $delete_query = CS50::query("DELETE FROM ordered_items WHERE id=?", $_GET['button1']); 
?>