// OTP Focus Script Code
function move(e, p, c, n) {
    let length = document.getElementById(c).value.length;
    let maxlength = document.getElementById(c).getAttribute("maxlength");

    if (length == maxlength) {
        if (n !== "") {
            document.getElementById(n).focus();
        }
        else{
            document.getElementById("otpVerify").focus();
        }
    }

    if (e.key === "Backspace") {
        if (p !== "") {
            document.getElementById(p).focus();
        }
    }
}