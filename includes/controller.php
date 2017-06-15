<?php

    ini_set("display_errors", true);
    error_reporting(E_ALL);



    // CS50 Library
    require("../vendor/library50-php-5/CS50/CS50.php");
    CS50::init("../config.json");

    // enable sessions
    session_start();
    
    function render($file_view, $parameters=[]) {
        if (file_exists("../views/{$file_view}")){
            extract($parameters); 
            require("../views/{$file_view}"); 
        }
    }
    
    function render2($file_view, $parameters=[]){
        if (file_exists("../views/{$file_view}")) {
            extract($parameters); 
            
            require("../views/main_head.php"); 
            require("../views/{$file_view}"); 
        }
    }
    function render3($file_view, $parameters=[]){
        if (file_exists("../views/{$file_view}")) {
            extract($parameters); 
            
            require("../views/new_page_head.php"); 
            require("../views/{$file_view}"); 
        }
    }
    
    function login_apologize($message=[]){
        extract($message); 
        require("../views/main_head.php"); 
        require("../views/main_page.php"); 
    }
    
    function register_apologize($register_message=[]){
        extract($register_message);
        require("../views/main_head.php"); 
        require("../views/main_page.php"); 
    }
    
    function logout()
    {
        // unset any session variables
        $_SESSION = [];

        // expire cookie
        if (!empty($_COOKIE[session_name()]))
        {
            setcookie(session_name(), "", time() - 42000);
        }

        // destroy session
        session_destroy();
    }
    
    function redirect($location)
    {
        if (headers_sent($file, $line))
        {
            trigger_error("HTTP headers already sent at {$file}:{$line}", E_USER_ERROR);
        }
        header("Location: {$location}");
        exit;
    }
    
?>