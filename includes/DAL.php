<?php

/***********************************************************************
 * DAL.php
 * Author		: Christopher Bartholomew
 * Last Updated : 12/08/2011
 * Purpose		: Opens connection to MySQL server & Loads additional helpers
 * seperated this because some of the calls don't require authentication
 **********************************************************************/
 // 
 // define("DB_NAME", 	   "cs50cicdb");
 // define("DB_SERVER",   "50.63.233.113");
 // define("DB_USERNAME", "cs50cicdb");
 // define("DB_PASSWORD", "C250C1Cc250c1c!");

define("DB_NAME", 	   "cs50cic");
define("DB_SERVER",    "localhost");
define("DB_USERNAME",  "root");
define("DB_PASSWORD",  "root");

// connect to database server
if (($connection = @mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD)) === false)
    echo "Could not connect to database server.";

// select database
if (@mysql_select_db(DB_NAME, $connection) === false)
    echo "Could not select database (" . DB_NAME . ").";

function close_connection()
{
	mysql_close($connection);
}

?>