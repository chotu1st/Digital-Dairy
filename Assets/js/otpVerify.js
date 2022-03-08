function otpverify() {

    let val1 = document.getElementById("value1").value;
    let val2 = document.getElementById("value2").value;
    let val3 = document.getElementById("value3").value;
    let val4 = document.getElementById("value4").value;

    let vals1 = document.getElementById("val1").value;
    let vals2 = document.getElementById("val2").value;
    let vals3 = document.getElementById("val3").value;
    let vals4 = document.getElementById("val4").value;
    
    let getOtp = val1+val2+val3+val4; 
    let getOtp2 = vals1+vals2+vals3+vals4;    

    var newotp = localStorage.getItem("newOTP");
    var newotp2 = localStorage.getItem("newOTP");

    if (getOtp === newotp) {
        alert("OTP Verified");
        localStorage.removeItem("newOTP");
    } else {
        alert("OTP Not Verified !!!!!!!");

    }

    if (getOtp2 === newotp2) {
        alert("OTP Verified");
        localStorage.removeItem("newOTP");
    } else {
        alert("OTP Not Verified !!!!!!!");

    }
}