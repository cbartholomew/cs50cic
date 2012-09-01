<?php
 
    // configuration
    require_once(dirname(__FILE__) . "/includes/config.php");


	function getLoggedOutHtml() {
		$html = "";
		$html .= "<div id='login_message' class='ui-state-error ui-corner-all'></div>";
		$html .= "<br>";
		$html .= "<button id='login' class='ui-button ui-button-text-only ui-widget ui-state-default ui-corner-all'>";
	   	$html .= "<span class='ui-button-text'>Login</span>";
		$html .= "</button>";
		
		return $html;
	}
	
	function getLoggedInHtml()
	{
			
		$html = "";
		$html .= "<div id='login_start' class='ui-widget-content ui-corner-all'>Welcome Agent " . htmlspecialchars($_SESSION["user"]["fullname"]) . "!</div>";
		$html .= "<br>";
		$html .= "<span id='nav'></span>";
		$html .= "</div>";
		$html .= "<div class='ui-helper-hidden'>";
		$html .= "<input type='hidden' id='fullname' value='" . htmlspecialchars($_SESSION["user"]["fullname"])  . "'/>";
		$html .= "<input type='hidden' id='ident' 	 value='" . htmlspecialchars($_SESSION["user"]["identity"])  . "'/>";
		$html .= "<input type='hidden' id='email' 	 value='" . htmlspecialchars($_SESSION["user"]["email"]) 	 . "'/>";
		$html .= "</div>";
		
		
		// create new user obj
		$u = new User($_SESSION["user"]);
		
		// get user info || insert into since he or she is new
		if(!$u->getUser())
			$u->insert();
		
		// render html
		return $html;
	}
	
	



?>
<!DOCTYPE html>
 
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width" name="viewport">
    <title>Arduino50</title>

	<link rel="stylesheet" href="css/dot-luv/jquery-ui-1.8.22.custom.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<script src="js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery-ui-1.8.22.custom.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/constants.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/mission_config.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/practice_config.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/User.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/item_list.js" type="text/javascript" charset="utf-8"></script>
	
	<script>
		$(document).ready(function(){
			
			function createConfig(){
				
				var userConfig = {
					 identity   : $("#ident").val(),
					 fullname   : $("#fullname").val(),
					 email      : $("#email").val()
				};

				return new User(userConfig);	
			}
									
			$("#login").button().click(function(){
					window.location = "login.php";
			});
			
			$("#logout").button().click(function(){
					window.location = "logout.php";		
			});
			
			$("#missions").button().click(function(){	
				$("#content").load("content/mission/mission_select.php", function(){   
					$("#nav").html("Mission Select");						
				});
			});
			
			$("#practice").button().click(function(){
				$("#content").load("content/practice/practice_select.php", function(){   
					$("#nav").html("Practice Select");						
				});
			});
			
			$("#submission").button().click(function(){
				$("#content").load("content/submission/submission.php", function(){   
					$("#nav").html("Submission");						
				});
			});
			
			$("#glossary").button().click(function(){
				console.log("ajax call goes here");
			});
			
			$("#help").button().click(function(){
				console.log("ajax call goes here");
			});
			
			$("#preferences").button().click(function(){
				console.log("ajax call goes here");
			});			

			$("#tools").buttonset();
			
			$("#login_message").html(MESSAGE_DICTIONARY["NO_LOGIN"].message);

		});
	</script>
  </head>
  <body>
	<h1 class="ui-widget-header ui-corner-all">Arduino50 { Sections }</h1>

	<div class="ui-widget-header ui-corner-all">
		<span id="tools">
			<input type="radio" id="missions" 	 name="tool" /><label for="missions">Missions</label>
			<input type="radio" id="practice" 	 name="tool" /><label for="practice">Practice</label>
			<input type="radio" id="submission"  name="tool" /><label for="submission">Submission</label>
			<input type="radio" id="glossary"  	 name="tool" /><label for="glossary">Glossary</label>
			<input type="radio" id="help"  	 	 name="tool" /><label for="help">Help</label>
			<input type="radio" id="preferences" name="tool" /><label for="preferences">Preferences</label>
			<input type="radio" id="logout"      name="tool" /><label for="logout">Logout</label>
		</span>
	</div>	
	<br>
	<br>
	<div class='ui-widget-content ui-corner-all'>
		<?php echo (isset($_SESSION["user"])) ? getLoggedInHtml() : getLoggedOutHtml() ?>
	</div>
	<br>
	<div class='ui-widget ui-corner-all' id='content'></div>
  </body>
</html>