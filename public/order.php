<?php
    require("../includes/controller.php"); 
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        $get_specials = CS50::query("SELECT * FROM all_items"); 
        $all_items = CS50::query("SELECT * FROM all_foods"); 
        $drinks = CS50::query("SELECT name,description,price,food_id FROM all_foods WHERE type=?", "Drink" );
        $all_carbs = CS50::query("SELECT name,description,price,food_id FROM all_foods WHERE type=?","Base"); 
        $all_proteins = CS50::query("SELECT name,description,price,food_id FROM all_foods WHERE type=?","Protein");
        $all_veggies = CS50::query("SELECT name,description,price,food_id FROM all_foods WHERE type=? ","Appetizers");
        render2("order_view.php",["all_specials"=>$get_specials, "all_items"=>$all_items, "all_carbs"=>$all_carbs,"all_proteins"=>$all_proteins
        , "all_veggies"=>$all_veggies,"drinks"=>$drinks]); 
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['submit'])){
            $array1 = [];
            $quantities1 = array(); 
            $array2 = []; 
            $quantities2 = array(); 

            if (!empty($_POST['order_id'])){
                $ordered_items = ''; 
                
                foreach($_POST['order_id'] as $selected){
                    $ordered_items .= $selected.'.'; 
                    $array1 += $_POST['order_id'];
                    $quantities1[$selected] = $_POST['QTY'.$selected]; 
                }
            
        
            }
            
            if (!empty($_POST['food_order_id'])){
                    $ordered_foods = ''; 
                    foreach($_POST['food_order_id'] as $selected){
                        $ordered_foods .= $selected.'.'; 
                        $array2 += $_POST['food_order_id']; 
                        $quantities2[$selected] = $_POST['QTYi'.$selected]; 
                        
                    }
                }
            
            $all_specials = CS50::query("SELECT * FROM all_items"); 
            $all_foods = CS50::query("SELECT * FROM all_foods");
            $drinks = CS50::query("SELECT name,description,price,food_id FROM all_foods WHERE type=?", "Drink" );
            $all_carbs = CS50::query("SELECT name,description,price,food_id FROM all_foods WHERE type=?","Carbohydrate"); 
            $all_proteins = CS50::query("SELECT name,description,price,food_id FROM all_foods WHERE type=?","Protein");
            $all_veggies = CS50::query("SELECT name,description,price,food_id FROM all_foods WHERE type=? ","Vegetable"); 
            render2("order_view_confirmation.php",["array1"=>$array1, "array2"=>$array2, "quantities1"=>$quantities1, "quantities2"=>$quantities2, "all_specials"=>$all_specials, "all_foods"=>$all_foods,
            "drinks"=>$drinks, "all_carbs"=>$all_carbs,"all_proteins"=>$all_proteins,"all_veggies"=>$all_veggies]); 
            
        }
        
            
    }
?>