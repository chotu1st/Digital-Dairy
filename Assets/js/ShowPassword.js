 // Password Show-Hide code

 function showPassword() {
    var x = document.getElementById("password");
    var offbulb = document.getElementById("off");
    var onbulb = document.getElementById("on");

    var x2 = document.getElementById("password2");
    var offbulb2 = document.getElementById("off2");
    var onbulb2 = document.getElementById("on2");;


    if (x.type === "password") {

        x.type = "text";
        offbulb.style.display = "none";
        onbulb.style.display = "block";

        x2.type = "text";
        offbulb2.style.display = "none";
        onbulb2.style.display = "block";


    } else {
        x.type = "password";
        offbulb.style.display = "block";
        onbulb.style.display = "none";

        x2.type = "password";
        offbulb2.style.display = "block";
        onbulb2.style.display = "none";
    }
}
