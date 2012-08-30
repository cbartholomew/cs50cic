<?php
    require_once("../../includes/config.php");
?>
<script>
	$(function() {
		$("#practice_list").selectable({
			selected: function(event, ui) { 
				$("#content").load("content/practice/practice_tabs.php?id=" + ui.selected.id);
			}
		});
			
		$(PRACTICE_CONFIG).each(function(index){		
			$('#practice_list').append("<li id='" + this.id + "' class='ui-state-default ui-corner-all' >" + this.title + "</li>");		
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
<div><ul id='practice_list'></ul></div>