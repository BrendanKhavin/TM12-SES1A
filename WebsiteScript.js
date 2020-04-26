//JAVASCRIPT FILE FOR THE WHOLE WEBSITE

//changing the top navigation bar into a toggle menu if the window size is too small
function navbarResize() {
	var x = document.getElementById("nav");
	if (x.className === "navigation") {
		x.className += " responsive";
	} else {
		x.className = "navigation";
	}
}

//form validation for login


//cancel button in login

//remember me function for login


//form validation for enquiry


//form validation for sign up



//form validation for enquiry + check that email is valid for forgot password 