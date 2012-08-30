<?php
 
    // URL that CS50 ID should ask users to trust; must be registered with CS50,
    // per the HOWTO at https://manual.cs50.net/ID; must be a prefix of RETURN_TO
    define("TRUST_ROOT", "https://cloud.cs50.net/~cbartholomew/cs50cic");
 
    // URL to which CS50 ID should return users; must be registered with CS50,
    // per the HOWTO at https://manual.cs50.net/ID
    define("RETURN_TO", "https://cloud.cs50.net/~cbartholomew/cs50cic/return_to.php");
 
    // CS50 Library; ideally, this should not be inside public_html (or DocumentRoot)
    //require_once(dirname(__FILE__) . "/cs50-lib/CS50/CS50.php"); // remember to move this
	require_once(dirname(__FILE__) . "/user.php");
	//require_once(dirname(__FILE__) . "/DAL.php");
	
    // ensure $_SESSION exists
    session_start();

	 	$_SESSION["user"]["fullname"] = "Christopher Milhomem Bartholomew";
		$_SESSION["user"]["identity"] = "https://id.cs50.net/a10d1de1cacbc180f7231d6fee9489d35c53ad05fc8fffbe92bcfcabab17b892";
		$_SESSION["user"]["email"]	  = "cbartholomew@gmail.com";

?>