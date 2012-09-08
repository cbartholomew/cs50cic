<?php
// configuration
require_once("../../includes/config.php");

// check if user is logged in
isLoggedIn();	
?>
<script>

$(document).ready(function(){
	/*
	 * Inventory array holds a list of objects. Just add a new object with these members.
	 */
	var references = [
		{ 
			fileName: "Arduino50",
			fileType: "Arduino Library",
			fileURL:  "code/Arduino50v1.zip",
			fileVersion: "1.0",
			fileInfo: "Arduino50 library is used to help check your answers in mission sets"
		},
		{ 
			fileName: "Arduino Language Reference",
			fileType: "Web Site",
			fileURL:  "http://arduino.cc/en/Reference/HomePage",
			fileVersion: "n/a",
			fileInfo: "Arduino language reference for all its library's methods."
		},
		{ 
			fileName: "CS50.net",
			fileType: "Web Site",
			fileURL:  "https://cs50.net",
			fileVersion: "n/a",
			fileInfo: "Your home, away from home!"
		}	
	]; 
	
	// this script will render the html needed to create the table
	var reference_html = '';
	$(references).each(function(index){
		
		reference_html += '<tr>';
		reference_html += '<td class="ui-widget-content"><a href="' + this.fileURL + '">' + this.fileName  + '</a></td>';	
		reference_html += '<td class="ui-widget-content">' + this.fileType + '</td>';
		reference_html += '<td class="ui-widget-content">' + this.fileVersion + '</td>';
		reference_html += '<td class="ui-widget-content">' + this.fileInfo + '</td>';
		reference_html += '</tr>';
		
	});

	// append html the tbody
	$("#reference_list").append(reference_html);
});
</script>


<div id='reference_info' class="text">
	<table>
	<thead>
	<th class='ui-widget-header'>Name</th>
	<th class='ui-widget-header'>Type</th>
	<th class='ui-widget-header'>Version</th>
	<th class='ui-widget-header'>Info</th>
	</thead>
	<tbody id='reference_list'></tbody>
	</table>
</div>