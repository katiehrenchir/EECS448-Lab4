function checkForm(){


	 var mouseQ = document.getElementById('mousequant').value;
	 var catnipQ = document.getElementById('catnipquant').value;
	 var sweaterQ = document.getElementById('sweaterquant').value;

	 var shipping = document.getElementsByName('shipping');
	 var username = document.getElementById('un').value;
	 var password = document.getElementById('ps').value;


	checkItemQuants(mouseQ, catnipQ, sweaterQ, true);
	checkShipping(shipping, true);
	checkUsername(username, true);
	checkPassword(password, true);
	if ( !checkItemQuants(mouseQ, catnipQ, sweaterQ, false) || 
			!checkShipping(shipping, false) ||
			!checkUsername(username, false) ||
			!checkPassword(password, false) ) { 

		return false
	} else { return true; }
}

function checkItemQuants(mouse, catnip, sweater, print){
	var problem = false;
	if(mouse < 0 ) {
		if(print) { alert("Mouse toy quantity cannot be less than zero"); }
		problem = true;
	}
	if(catnip< 0) {
		if(print) { alert("Catnip quantity cannot be less than zero"); }
		problem = true;
	}
	if(sweater <0){
		if(print) { alert("Sweater quantity cannot be less than zero"); }
		problem = true;
	}

	if(problem){
		return false;
	} else { return true; }

}

function checkShipping(shipping, print){

	var checked = false;
	for(var i=0; i<3; i++) {
		if (shipping[i].checked) {
		    checked =true;
		} 
	}
	if(checked == false){
			if(print) { alert("Please select a shipping option."); }
			return false;
	} else {return true; }

}

function checkUsername(username, print){

	var problem = false;
	if(username ==""){
		if(print) { alert("Username field must not be empty."); }
		problem = true;
	}
	if(!(username.includes("@")  )){
		if(print) { alert("Please enter a valid username"); }
		problem = true;
	}

	if(problem) { return false } else {return true; }

}

function checkPassword(password, print)
{
	if(password ==""){
		if(print) { alert("Password field must not be empty."); }
		return false;
	} else { return true; }

}
