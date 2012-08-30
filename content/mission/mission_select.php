<?php
    require_once("../../includes/config.php");
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
		
	});
</script>
<div><ul id='mission_list'></ul></div>