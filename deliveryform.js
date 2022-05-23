function validateName(){
    var name = document.getElementById("name").value;
    name.trim(); //remove any whitespace from both ends of the string
    if(name.length > 0){ //make sure it is not empty
	   var regexp = /^[A-Za-z\s]+$/;
	   // start of string
	   // [A-Za-z\s] any word character contains A-Z, a-z, and a space
	   //+ 1 or more of the above
	   // $ - end of string
        if(regexp.test(name)){
            return true;
        }
        else{
            alert("Name entered in wrong format");
			document.getElementById('name').value = '';
			//document.getElementById('name').innerHTML = ;
            return false;
        }
    }
   // alert("Please fill in your name.");
    return false;
}
function validateEmail(){
    var email = document.getElementById("email").value;
    email.trim();
    if(email.length > 0){ //make sure it is not empty
	    var regexp = /^([\w.-])+@+([\w]+\.){0,3}([A-Za-z]){2,3}$/;
		// ^ ([\w.-]) - ^ start of string, with wany word character that contains A-Z, a-z, 0-9, ., -, 
		// followed by @
		// then ([\w]+\.){1,3} - any word character followed by '.' , 1 to 3 of such address extensions
		// ([A-Za-z]){2,3}$ - $ end of string, with 2 or characters
        if(regexp.test(email)){
            return true;
        }
        else{
            alert("Email entered in wrong format.");
			document.getElementById('email').value = '';
            return false;
        }
    }
   // alert("Please fill in your email.");
    return false;
}

function validatePostal(){
    var postalcode = document.getElementById("postalcode").value;
    
    if(postalcode.length > 0){ //make sure it is not empty
	    var regexp = /^\d{6}$/;
		
        if(regexp.test(postalcode)){
            return true;
        }
        else{
            alert("Postal code entered in wrong format. Please enter exactly 6 digits only.");
			document.getElementById('postalcode').value = '';
            return false;
        }
    }
   // alert("Please fill in your email.");
    return false;
}

