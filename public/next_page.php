<?php
    require("../includes/controller.php"); 
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $deals =''; 
        $foods='';
        
        if (isset($_POST['deal_chosen_name'])) {
        $deals_chosen = $_POST['deal_chosen_name'];
        foreach($deals_chosen as $deal_chosen){
            $deals .= $deal_chosen.'.'; 
            }
        }
        if (isset($_POST['food_chosen_name'])){
         $foods_chosen = $_POST['food_chosen_name']; 
            foreach($foods_chosen as $food_chosen){
                $foods .= $food_chosen.'.';
            }
        }    
        render2("next_page_view.php",["foods"=>$foods, "deals"=>$deals]);
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    
            $get_specials = CS50::query("SELECT * FROM all_items"); 
        $all_items = CS50::query("SELECT * FROM all_foods"); 
        $drinks = CS50::query("SELECT name,description,price,food_id FROM all_foods WHERE type=?", "Drink" );
        $all_carbs = CS50::query("SELECT name,description,price,food_id FROM all_foods WHERE type=?","Carbohydrate"); 
        $all_proteins = CS50::query("SELECT name,description,price,food_id FROM all_foods WHERE type=?","Protein");
        $all_veggies = CS50::query("SELECT name,description,price,food_id FROM all_foods WHERE type=? ","Vegetable");
        render2("order_view.php",["all_specials"=>$get_specials, "all_items"=>$all_items, "all_carbs"=>$all_carbs,"all_proteins"=>$all_proteins
        , "all_veggies"=>$all_veggies,"drinks"=>$drinks]); 
        
    }
?>