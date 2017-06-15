<?php
    require("../includes/controller.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["username"])){
            login_apologize(["message"=>"You must provide a username"]); 
            exit; 
        }
        
        if(empty($_POST["password"])) {
            login_apologize(["message"=>"Please provide your password"]);
            exit; 
        }
        
        $rows = CS50::query("SELECT * FROM jerk_users WHERE user_name = ?", $_POST["username"]);

        if (count($rows) != 1) {
            login_apologize(["message"=>"Invalid username or password"]); 
        }
        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (password_verify($_POST["password"], $row["pass_hash"]))
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];

                redirect("backend.php"); 
            }
            else{
                login_apologize(["message"=>"Invalid username or password"]); 
            }
        }
    } 
    
?>