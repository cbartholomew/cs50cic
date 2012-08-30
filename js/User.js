function User(userConfig) {
	
	var identity 		= userConfig.identity;
	var fullname 		= userConfig.fullname;
	var email    		= userConfig.email;
	var loggedInCount 	= 0;

	function init(){
			getLoginAmount();
			getCurrentMission();
	}
	
	function getLoginAmount(){
		
	}
	
	function getCurrentMission() {
			
	}
	
	this.setIdentity = function(val){
		identity = val;
	}
	
	this.getIdentity = function() {
		return identity;
	}
	
	this.setFullname = function(val) {
		fullname = val;
	}
	
	this.getFullname = function() {
		return fullname;
	}
	
	this.setEmail = function(val){
		email = val;
	}
	
	this.getEmail = function(){
		return email;
	}
	
	init();
}