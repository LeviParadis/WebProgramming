$(document).ready(function(){
	$.get("https://baconipsum.com/api/?type=all-meat&paras=2&start-with-lorem=3&format=json",function(data,status){
		$("#index_body").html(data[0]);
	});
});
