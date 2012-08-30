function Render(missionObject){
	
	var mission = missionObject;
	
	function init() {
		
	}
	
	function getPage(){
		
	}
	
	this.getAssignment		= function(isHtml){
		return (isHtml == true) ? mission.assignment.html : mission.assignment.pdf;
	}
	
	this.setAssignment  	= function(val){
		mission.assignment = val;
	}
	
	this.getInventory 		= function(isHtml){
		return (isHtml == true) ? mission.inventory.html : mission.inventory.pdf;
	}
	
	this.setInventory   	= function(val){
		mission.inventory = val;
	}
	
	this.getSchematic 		= function(isHtml){
		return (isHtml == true) ? mission.schematic.html : mission.schematic.pdf;
	}
	
	this.setSchematic		= function(val){
		mission.schematic = val;
	}
	
	this.getInstructions 	= function(isHtml){
		return (isHtml == true) ? mission.instructions.html : mission.instructions.pdf;
	}
	
	this.setInstructions 	= function(val){
		mission.instructions = val;
	}
	
	this.getChallenges 		= function(isHtml){
		return (isHtml == true) ? mission.challenges.html : mission.challenges.pdf;
	}
	
	this.setChallenges		= function(val){
		mission.challenges = val
	}
	
	this.getFlavor 			= function(isHtml) {
		return (isHtml == true) ? mission.flavor.html : mission.flavor.pdf;
	}
	
	this.setFlavor			= function(val){
		mission.flavor = val;
	}
	
	
	
	
}