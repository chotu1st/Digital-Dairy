$(document).ready(function() {

    $("#loginbtn").click(function() {

       
        var email = $("#email").val();        
        var password = $("#password").val();
        var status = "userCheck";
        // console.log("ajax works");       
        
       
       

        if (email == '' || password == '') {
            alert("Please fill ( Email and Password)");
            return false;
        }
        else{
            document.getElementById("formLogin").reset();
            document.getElementById("formOTP").reset();
        }

        $.ajax({
            type: "POST",
            url: "Ajax_php/login.php",
            data: {        
                status:status,       
                email: email,              
                password: password
            },
            cache: false,
            success: function(data) {
                // alert(data);
            

                var digits = '0123456789';
                let OTP = '';
                for (let i = 0; i < 4; i++) {
                    OTP += digits[Math.floor(Math.random() * 10)];
                }

                localStorage.setItem("newOTP", OTP);
                console.log(OTP);
                // console.log(data);
                if(data != "loginFailed")
                {
                    localStorage.setItem("email", email);
                    // alert(email);
                }
                
                
            

            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        });

    });

});