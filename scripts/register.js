$(document).ready(function(){
	var minLength = 6;
	var currentlySame = true;
	function passCheck() {
		// Return a boolean that represents the correctness of passwords. Do they match and meet spec?
		var pass1 = $("[name = 'pass1']");
		var pass2 = $("[name = 'pass2']");
		if (pass1.val() != pass2.val()) {
			$("#password_checker").show();
			currentlySame = false;
		} else { 
			$("#password_checker").hide();
			currentlySame = true;
		}
		console.log(currentlySame);
	}
	function onSubmitPass(e) {
		// Event handler that checks passwords
		e.preventDefault();
		var pass1 = $("[name = 'pass1']");
		var pass2 = $("[name = 'pass2']");
		if (pass1.length != 6) {
			return false;
		}
	}
	$("#forms").keyup(passCheck);
	$("#forms").submit(onSubmitPass);
});