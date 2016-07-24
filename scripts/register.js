$(document).ready(function(){
	var minLength = 6;
	var passGood = false; //Global variable that tells us if the passwords match.
	var emailGood = false;
	var userGood = false;
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
	}
	$("#forms").keyup(passCheck).submit(function(){$("[name = 'submit']").click()});
	$("[name = 'submit'").click(function(e) {
		e.preventDefault();
		check_email();
		check_pass();
		check_user();
		if (userGood && passGood && emailGood) {
			return true;
		}
	})
});