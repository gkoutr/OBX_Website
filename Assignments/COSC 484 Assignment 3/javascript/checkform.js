function validate(){
	var myDay = new Date();
	var locMyDay = myDay.toLocaleDateString();
	
   
  
	if (username.value == "" && email.value == ""){
		alert("Username field is blank - please enter a username");
		document.getElementById("username").focus();
		document.getElementById("username").style.backgroundColor = "#FF0000";
        alert("email field is blank - please enter a password");
        document.getElementById("email").focus();
		document.getElementById("email").style.backgroundColor = "#FF0000";
		return false;
	}
    else if(password.value == ""){
        alert("Password is blank!");
        return false;
    }
    else if(dob.value == ""){
        alert("please enter dob");
    }
    
    else if(where.value == "Choose a country"){
        alert("You're living somewhere!");
    }
    
    
    
    else{
        alert("All Forms Filled out! on " + locMyDay);
        document.getElementById("username").style.backgroundColor = "#FFFFFF";
        return true;
    }
	

}


