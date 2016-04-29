function validate() {
    var myDay = new Date();
    var locMyDay = myDay.toLocaleDateString();

    var username = document.forms["Form"]["username"].value;
    var password = document.forms["Form"]["password"].value;
    var email = document.forms["Form"]["email"].value;
    var dob = document.forms["Form"]["dob"].value;
    var where = document.forms["Form"]["where"].value;
    var residentYes = document.forms["Form"]["residentYes"].value;
    var residentNo = document.forms["Form"]["residentNo"].value;


    if (username == "" || password == "" || email == "" || dob == "" || where == "Choose a country" || residentYes == null
        || residentNo == null) {
        alert("Please fill out all required fields");
        document.getElementById("username").focus();
        document.getElementById("username").style.backgroundColor = "#FF0000";
        document.getElementById("password").focus();
        document.getElementById("password").style.backgroundColor = "#FF0000";
        document.getElementById("dob").focus();
        document.getElementById("dob").style.backgroundColor = "#FF0000";
        document.getElementById("email").focus();
        document.getElementById("email").style.backgroundColor = "#FF0000";
        document.getElementById("where").focus();
        document.getElementById("where").style.backgroundColor = "#FF0000";
        document.getElementById("residentYes").focus();
        document.getElementById("residentYes").style.backgroundColor = "#FF0000";
        document.getElementById("residentNo").focus();
        document.getElementById("residentNo").style.backgroundColor = "#FF0000";
        return false;
    }
    else {
        alert("All forms filled out!");
        return true;
    }

}








