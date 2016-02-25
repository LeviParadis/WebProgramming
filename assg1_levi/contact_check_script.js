function onstartRun() {

	document.getElementById("sendButton").onclick = checkValues;
	function checkValues() {
		var text = "dialogPass";
		var element = [document.forms["forms"]["fullname"].value];
	    element.push(document.forms["forms"]["Email"].value);
		element.push(document.forms["forms"]["Phone Number"].value);
		element.push(document.forms["forms"]["Date"].value);
		element.push(document.forms["forms"]["Message"].value);

		for (var i = 0; i < 4; i++) {
			if (element[i] == null || element[i] == "") {
				text = "dialogFail";
			}
		}
		document.getElementById(text).showModal();
	}

}

window.onload = onstartRun;
