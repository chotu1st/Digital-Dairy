 // Email Field Validation 

 function ValidateEmail(email) {

    let errorMsg = document.getElementById("errorEmail");
    let errorMsg2 = document.getElementById("errorEmail2");

    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (email.match(validRegex) && email != "") {

        errorMsg.style.color = "Green";
        errorMsg.innerHTML = "Valid Email Bro";

        errorMsg2.style.color = "Green";
        errorMsg2.innerHTML = "Valid Email Bro";
        //console.log("Valid email");
        document.getElementById("password").disabled = false;
        document.getElementById("bulb-icon").style.pointerEvents = "unset";

        document.getElementById("password2").disabled = false;
        document.getElementById("bulb-icon2").style.pointerEvents = "unset";
        
        return true;

    } else {

        errorMsg.style.color = "Red";
        errorMsg.innerHTML = "Invalid Email h bahi !";

        errorMsg2.style.color = "Red";
        errorMsg2.innerHTML = "Invalid Email h bahi !";

        document.getElementById("password").disabled = true;
        document.getElementById("bulb-icon").style.pointerEvents = "none";

        document.getElementById("password2").disabled = true;
        document.getElementById("bulb-icon2").style.pointerEvents = "none";
       // console.log("InValid email !!!!!!!!!!!!!");

        return false;
    }

}