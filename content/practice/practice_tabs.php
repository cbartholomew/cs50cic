<?
// configuration
require_once("../../includes/config.php");

?>
<script>
$(document).ready(function(){
	
    var id = <? echo $_GET["id"]; ?>
	
	var practiceObject = {};
	$(PRACTICE_CONFIG).each(function(index){
		if(this.id == id)
			practiceObject = this;
	});
 
	$("#nav").html("<a id='to_practice_select' href='#' >Practice Select</a>" + " > " + practiceObject.title);
	
	$("#to_practice_select").click(function(){
		$("#content").load("content/practice/practice_select.php", function(){   
			$("#nav").html("Practice Select");						
		});
	});
	
	  var html = "";
	
	  html += '<li><a href="content/practice/' + practiceObject.flavor.html          + '">Flavor</a></li>';
	  html += '<li><a href="content/practice/' + practiceObject.assignment.html      + '">Assignment</a></li>';
	  html += '<li><a href="content/practice/' + practiceObject.inventory.html       + '">Inventory</a></li>';
	  html += '<li><a href="content/practice/' + practiceObject.schematic.html       + '">Schematic</a></li>';
	  html += '<li><a href="content/practice/' + practiceObject.instructions.html    + '">Instructions</a></li>';
	  html += '<li><a href="content/practice/' + practiceObject.challenges.html      + '">Challenges</a></li>';
	  html += '<li><a href="content/practice/' + practiceObject.code.arduino_sketch  + '">Sketch</a></li>';

	  $("#assignmentList").append(html);
	  $("#assignmentContent").tabs();	

});
</script>
<div id="assignmentContent">
<ul id="assignmentList"></ul>
</div>