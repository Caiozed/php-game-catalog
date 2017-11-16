<?php
    $WEBSITE_ENVIRONMENT = "Development";
    // detect the URL to determine if it's development or production
    if($_SERVER['HTTP_HOST'] == 'murmuring-taiga-89682.herokuapp.com') $WEBSITE_ENVIRONMENT = "Production";
    // value of variables will change depending on if Development vs Production
    if ($WEBSITE_ENVIRONMENT =="Development") {
        $host = "127.0.0.1";
        $user = "caiozed";
        $password = "";
        $database = "c9";
    	
    	define("APP_ENVIRONMENT", "Development");
    	define("APP_BASE_URL", "https://127.0.0.1");
    	error_reporting(E_ALL ^ E_NOTICE); // turn ON showing errors
    } else {
    	$cleardb_url 		= parse_url(getenv("CLEARDB_DATABASE_URL"));
    	$host				= $cleardb_url["host"];
    	$user 				= $cleardb_url["user"];
    	$password			= $cleardb_url["pass"];
    	$database 			= substr($cleardb_url["path"],1);
    	define("APP_ENVIRONMENT", "Production");
    	define("APP_BASE_URL", "https://murmuring-taiga-89682.herokuapp.com");
    	#error_reporting(0); // turn OFF showing errors
    	error_reporting(E_ALL ^ E_NOTICE); // turn ON showing errors			
    }
    $connection = mysqli_connect($host, $user, $password, $database) or die(mysqli_connect_error());
    mysqli_select_db($connection, $database);
?>