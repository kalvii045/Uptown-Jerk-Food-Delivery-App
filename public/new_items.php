<?php

    require("../includes/controller.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
    
    render('new_items_view.php',[]);
    } 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST['food_name'])) {
            if (empty($_POST['food_name']) || empty($_POST['descname']) || empty($_POST['price'])){
                render("new_items_view.php", ["message" => "Error: Fill in missing boxes!"]);
                exit; 
            }
            $save_names = CS50::query('INSERT INTO all_foods(name,type,description,price) VALUES(?,?,?,?)',$_POST['food_name'],$_POST['food_type'],$_POST['descname'],
            $_POST['price']); 
            render("new_items_view.php",['message'=>'New Item Added!']); } 
        
        if (isset($_POST['food_deal'])) {
            if (empty($_POST['food_deal']) || empty($_POST['descname1']) || empty($_POST['price1'])){
                render("new_items_view.php", ["message1"=>"Error: Fill in missing values!"]); 
                exit; 
            }
            $all_items = $_POST['item'];
            $whole_string = '';
            for ($i=0;$i < sizeof($all_items);$i++){
                $whole_string .= $all_items[$i].'.'  ; 
            }
            
            $save_items = CS50::query('INSERT INTO all_items(item_name,description,items,regular_price,numb_drinks) VALUES(?,?,?,?,?)', $_POST['food_deal'],$_POST['descname1'],$whole_string,$_POST['price1'], $_POST['numb_drinks']); 
            
            render("new_items_view.php", ['message1'=>"Specials added!"]); 
        }
    }
?>