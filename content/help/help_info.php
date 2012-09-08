<?php 
require_once("../../includes/config.php");
// check if user is logged in, if not redirect
isLoggedIn();
?>

<script>
	var CONTACTS = [	
		{
			contactDesc	: "Teaching Fellow", 
			contactName	: "Christopher Bartholomew",
			contactEmail: "cbartholomew@fas.harvard.edu",
			contactPhone: "774.452.4478",
			contactSkype: "cbartholomew.hes",
			contactWeb  : "",
		},
		{
			contactDesc	: "Teaching Heads", 
			contactName	: "Rob, Tommy, and Nate",
			contactEmail: "heads@cs.50.net",
			contactPhone: "",
			contactSkype: "",
			contactWeb  : "<a href='https://apps.cs50.net/discuss'>https://cs50.net</a>",
		},
		{
			contactDesc	: "CS50 Discuss", 
			contactName	: "",
			contactEmail: "",
			contactPhone: "",
			contactSkype: "",
			contactWeb  : "<a href='https://apps.cs50.net/discuss'>https://apps.cs50.net/discuss</a>",
		},
		{
			contactDesc	: "Arduino Web Forum", 
			contactName	: "",
			contactEmail: "",
			contactPhone: "",
			contactSkype: "",
			contactWeb  : "<a href='http://arduino.cc/forum/'>http://arduino.cc/forum/</a>",
		}
	];
	
	var contactHtml = "";
	$(CONTACTS).each(function(){
		contactHtml += '<tr>';                                                 
		contactHtml += '<td class="ui-widget-content">' + this. contactDesc  + '</td>';
		contactHtml += '<td class="ui-widget-content">' + this. contactName  + '</td>';
		contactHtml += '<td class="ui-widget-content">' + this. contactEmail + '</td>';
		contactHtml += '<td class="ui-widget-content">' + this. contactPhone + '</td>';
		contactHtml += '<td class="ui-widget-content">' + this. contactSkype + '</td>';
		contactHtml += '<td class="ui-widget-content">' + this. contactWeb   + '</td>';
		contactHtml += '</tr>';                                              
	});
	
	$("#contact_list").append(contactHtml);
	
</script>
<div id="help_info">
	<div class="ui-widget-content text">
		Important Contacts	
		<br>
		<br>
		<table>
		<thead>
			<th class="ui-widget-header">Description</th>
			<th class="ui-widget-header">Name</th>
			<th class="ui-widget-header">Email</th>
			<th class="ui-widget-header">Phone</th>
			<th class="ui-widget-header">Skype</th>
			<th class="ui-widget-header">Web</th>
		</thead>
		<tbody id="contact_list"></tbody>
		</table>	
	</div>
	<br>
	<br
	<br>
	<div class="ui-widget-content text">FAQ: Soon...</div>
</div>