<?php
    require_once("../../includes/config.php");
	// check if user is logged in, if not redirect
	isLoggedIn();	
?>
<script>
	$(function() {
		$("#mission_list").selectable({
			selected: function(event, ui) { 
				$("#content").load("content/mission/mission_tabs.php?id=" + ui.selected.id);
			}
		});
			
		$(MISSION_CONFIG).each(function(index){		
			$('#mission_list').append("<li id='" + this.id + "' class='ui-state-default ui-corner-all' >" + this.title + "</li>");		
		});
	
		$("li").hover(
		  function () {
		    $(this).addClass('ui-state-hover');
		  }, 
		  function () {
		    $(this).removeClass('ui-state-hover');
		  }
		);
		
		$("#mission_info").load("content/help/mission_info.html");
		
	});
</script>
<div id="mission_info"></div>
<div class="select_pages"><ul id='mission_list'></ul></div>