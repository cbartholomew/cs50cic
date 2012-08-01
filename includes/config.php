<?php
 
    // URL that CS50 ID should ask users to trust; must be registered with CS50,
    // per the HOWTO at https://manual.cs50.net/ID; must be a prefix of RETURN_TO
    define("TRUST_ROOT", "https://cloud.cs50.net/~cbartholomew/cs50cic");
 
    // URL to which CS50 ID should return users; must be registered with CS50,
    // per the HOWTO at https://manual.cs50.net/ID
    define("RETURN_TO", "https://cloud.cs50.net/~cbartholomew/cs50cic/return_to.php");
 
    // CS50 Library; ideally, this should not be inside public_html (or DocumentRoot)
    require_once(dirname(__FILE__) . "/cs50-lib/CS50/CS50.php");
 
    // ensure $_SESSION exists
    session_start();
 
?>