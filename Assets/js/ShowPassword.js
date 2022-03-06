 // Password Show-Hide code

 function showPassword() {
    var x = document.getElementById("password");
    var offbulb = document.getElementById("off");
    var onbulb = document.getElementById("on");;


    if (x.type === "password") {

        x.type = "text";
        offbulb.style.display = "none";
        onbulb.style.display = "block";

    } else {
        x.type = "password";
        offbulb.style.display = "block";
        onbulb.style.display = "none";
    }
}
