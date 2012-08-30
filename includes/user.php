<?php
/***********************************************************************
 * user.php
 * Author		: Christopher Bartholomew
 * Last Updated : 08/08/2012
 * Purpose		: Opens the user 
 **********************************************************************/

class User {
	
	public $fullname;
	public $identity;
	public $email;
	public $id;
	public $login_count;
	
	function __construct($user)
	{
		$this->fullname 	= $user["fullname"];
		$this->identity 	= $user["identity"];
		$this->email 	    = $user["email"];
		$this->id		    = 0;
		$this->login_count  = 0;
	}
		
	function getUser()
	{
		$sql 	   = "SELECT id FROM students WHERE identity = '$this->identity'";			
		$result    = mysql_query($sql) or die ();
		//check if the user has a cork_id - create user if none is there
	   
	 	if (mysql_num_rows($result) == 0) { return false; }
	    else 
   		{				
   			while($row = mysql_fetch_array($result))
   			{
   				$this->id = $row["id"];	
				$this->updateLoginTimeAndCount();
				break;
   			}	
   		}		
		
		return true;
	}
	
	/*	
	 * update_login_time_and_count()
	 * update the login count and time when people login
	 */
	function updateLoginTimeAndCount()
	{
		$date_time = date('Y-m-d H:i:s');
		
		// insert the user in the database	
		$sql = "UPDATE students set logindttm = ('$date_time'), logincount = logincount + 1 where id = ('$this->id')";	

		// run statement or die
		$result  = mysql_query($sql) or die ();

		// other than an error, there was a problem submitting the user
		return ($result == false) ? false : true;
	}
	
	function insert()
	{
		$date_time = date('Y-m-d H:i:s');
		
		// insert the user in the database	   	        
		$sql = "INSERT INTO students 	\n"
			. "( 						\n" 
			. "identity,  		 		\n" 
			. "fullname,  		 		\n"
			. "email,	  		 		\n"
			. "logincount,		 		\n"
			. "logindttm  		 		\n"
			. ") 		  		 		\n"
			. " VALUES 	  		 		\n"
			. "( 		  		 		\n"
			. "'$this->identity',		\n"
			. "'$this->fullname', 		\n" 
			. "'$this->email', 			\n" 
			. "'0',					 	\n" 
			. "'$date_time' 			\n" 
			. ")";
				
		// run statement or die
		$result = mysql_query($sql) or die ();
		
		// other than an error, there was a problem submitting the user
		if (!$result) 
			return false; 
		
		// get the newly assigned cork id. 
		$this->id = mysql_insert_id();
				
		// update user account
		$this->updateLoginTimeAndCount();
		
		return true;
	}
	
	function __destruct()
	 {
		$this->id;
	    $this->fullname;
		$this->identity;
		$this->email; 
		$this->id;		   
		$this->login_count;                 
	}
}




?>