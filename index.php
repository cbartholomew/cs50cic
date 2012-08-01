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
	
	function getLoggedInHtml() {
		$html = "";
		$html .= "<div id='login_start' class='ui-widget-content ui-corner-all'>Welcome Agent " . htmlspecialchars($_SESSION["user"]["fullname"]) . "!</div>";
		$html .= "<br>";
		$html .= "</div>";
		
		return $html;
	}
?>
<!DOCTYPE html>
 
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width" name="viewport">
    <title>CS50CIC</title>

	<link rel="stylesheet" href="css/dot-luv/jquery-ui-1.8.22.custom.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<script src="js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery-ui-1.8.22.custom.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/constants.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/storyboard.js" type="text/javascript" charset="utf-8"></script>
	
	<script>
		$(document).ready(function(){

			$("#login").button().click(function(){
					window.location = "login.php";
			});
			
			$("#logout").button().click(function(){
					window.location = "logout.php";		
			});
			
			$("#assignments").button().click(function(){
				console.log("ajax call goes here");
			});
			
			$("#submission").button().click(function(){
				console.log("ajax call goes here");
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
	<h1 class="ui-widget-header ui-corner-all">CS50 Counter Intelligence Center</h1>
	<div class="ui-widget-header ui-corner-all">
		<span id="tools">
			<input type="radio" id="assignments" name="tool" /><label for="assignments">Assignments</label>
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