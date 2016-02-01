function onstartRun() {

$.ajax({
	url: "https://randomuser.me/api/",
	dataType: "json",
	
	success: function(results){
		console.log(results);
	}
});	
 
	
}
window.onload = onstartRun;

