$(document).ready(function() {

    $("#signupbtn").click(function() {

        var name = $("#name").val();
        var email = $("#email2").val();
        var age = $("#age").val();
        var sex = $("input[name='sex']").val();
        var purpose = $("#purpose").val();
        var contact = $("#contact").val();
        var password = $("#password2").val();
        console.log("ajax works");            
       

        if (name == '' || email == '' || contact == '' || password == '') {
            alert("Please fill ( Name Email Conatct Password )");
            return false;
        }
        else{
            document.getElementById("formSignUp").reset();
            document.getElementById("formOTP2").reset();
        }

        $.ajax({
            type: "POST",
            url: "Ajax_php/signup.php",
            data: {
                name: name,
                email: email,
                age:age,
                sex:sex,
                purpose:purpose,
                contact:contact,
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
                console.log(data);
                
            

            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        });

    });

});