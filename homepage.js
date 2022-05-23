
function myName() {
	var name = document.getElementById("name").value;
    name.trim(); //remove any whitespace from both ends of the string
    if(name.length > 0){ //make sure it is not empty
        //
        var regexp = /^[A-Za-z\s]+$/;
        if(regexp.test(name)){
            return true;
        }
        else{
            alert("Name entered in wrong format, please enter alphabet characters separated with a blankspace.");
            document.getElementById('name').value ='';
            return false;
            
        }
    }
    // alert("Please fill in your name.");
    return false;
}
function myEmail() {
	var email = document.getElementById("email").value;
    email.trim();
    if(email.length > 0){ //make sure it is not empty
        var regexp =  /^[\w.-]+@((\w+)|(\w+\.\w+)|(\w+\.\w+\.\w+))\.[A-Za-z]{2,3}$/;
        if(regexp.test(email)){
            return true;
        }
        else{
            alert("Email entered in wrong format.");
            document.getElementById('email').value ='';
            return false;
        }
    }
    // alert("Please fill in your email.");
    // document.getElementById('email').value ='';
    return false;
}
