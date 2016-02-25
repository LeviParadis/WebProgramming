function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

$(document).ready(function(){
	var text;
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.open( "GET", "https://randomuser.me/api/", false);
	xmlHttp.send( null );
	var text = xmlHttp.responseText;
	
	var obj = JSON.parse(text);
	
	$(".line1").text(obj.results[0].user.name.title + ". " + obj.results[0].user.name.first + " " + obj.results[0].user.name.last);
	$(".line2").text(obj.results[0].user.username);
	$(".contact").html(obj.results[0].user.email + "<br>" +
					   obj.results[0].user.location.city + ", " + obj.results[0].user.location.state + "<br>" + 
					   obj.results[0].user.phone);
	$(".logo").css("background" , "transparent url("+ obj.results[0].user.picture.medium +")no-repeat center");
	
	google.maps.event.addDomListener(window, 'load', initialize);
});