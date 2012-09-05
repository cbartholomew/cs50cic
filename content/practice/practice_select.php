<?php
    require_once("../../includes/config.php");
	// check if user is logged in, if not redirect
	isLoggedIn();
?>
<script>
$(document).ready(function(){
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
		});

		$("#practice_info").load("content/help/practice_info.html");
	});
});
</script>
<div id="practice_info"></div>
<div class="select_pages"><ul id='practice_list'></ul></div>