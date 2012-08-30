<?
// configuration
require_once("../../includes/config.php");

?>
<script>
$(document).ready(function(){
	
    var id = <? echo $_GET["id"]; ?>
	
	var missionObject = {};
	$(MISSION_CONFIG).each(function(index){
		if(this.id == id)
			missionObject = this;
	});
 
	$("#nav").html("<a id='to_mission_select' href='#' >Mission Select</a>" + " > " + missionObject.title);
	
	$("#to_mission_select").click(function(){
		$("#content").load("content/mission/mission_select.php", function(){   
			$("#nav").html("Mission Select");						
		});
	});
	
	  var html = "";
	
	  html += '<li><a href="content/mission/' + missionObject.flavor.html          + '">Flavor</a></li>';
	  html += '<li><a href="content/mission/' + missionObject.assignment.html      + '">Assignment</a></li>';
	  html += '<li><a href="content/mission/' + missionObject.inventory.html       + '">Inventory</a></li>';
	  html += '<li><a href="content/mission/' + missionObject.schematic.html       + '">Schematic</a></li>';
	  html += '<li><a href="content/mission/' + missionObject.instructions.html    + '">Instructions</a></li>';
	  html += '<li><a href="content/mission/' + missionObject.challenges.html      + '">Challenges</a></li>';
	  html += '<li><a href="content/mission/' + missionObject.code.arduino_sketch  + '">Sketch</a></li>';

	  $("#assignmentList").append(html);
	  $("#assignmentContent").tabs();	

});
</script>
<div id="assignmentContent">
<ul id="assignmentList"></ul>
</div>