<?php
// configuration
require_once("../../includes/config.php");

// check if user is logged in
isLoggedIn();	
?>
<script>
$(document).ready(function(){
	$(function(){		
				
		// sort the dictionary for the heck of it. 
		GLOSSARY.sort(function(a,b){
		  	var aTerm = a.termName.toLowerCase();
			var bTerm = b.termName.toLowerCase(); 		 
			return ((aTerm < bTerm) ? -1 : ((aTerm > bTerm) ? 1 : 0));
		});	
		
		// recurse through each object
		var html = '';
		$(GLOSSARY).each(function(){	
			html += '<h3><a href="#">' + this.termName + '</a></h3>';
			html += '<div class="text">';
			html +=  this.termDescription + '<br><br>';
			html += '<img class="ui-corner-all" src="'+ this.termImage +'" height="200px" /><br><br>';
			html += 'References<br><br>'
			html += '<table>';
			html += '<thead>';
			html += '<th class="ui-widget-header">Source</th>';
			html += '<th class="ui-widget-header">URL</th>';
			html += '<tbody>';
			
			// provide a table with refernce links
			for(var i=0,n=this.termReferences.length;i<n;i++) {
				html += '<tr>';
				html += '<td class="ui-widget-content">' + this.termReferences[i].source + '</td>';
				html += '<td class="ui-widget-content">' + this.termReferences[i].url	 + '</td>';
				html += '</tr>';
			}	
			
			html += '</tbody>';
			html += '</thead>';
			html += '</table>';	
			html += '</div>';	
		});
		
		// append the html
		$("#glossary_items").append(html);
		
		// create glossary accord because it's 11pm, and i'm too tired to create a nice indexed web page
		$("#glossary_items").accordion({collapsible: true, active: false});
	});	
});
</script>
<div id="glossary_items"></div>