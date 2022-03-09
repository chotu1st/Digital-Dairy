<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <script src="./Assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./Assets/js/EmailValidator.js"></script>
    <script src="./Assets/js/ShowPassword.js"></script>
    <script src="./Assets/js/OTPfocus.js"></script>
    <script src="./Assets/js/Captcha.js"></script>
    <script src="./Assets/js/uploadImgPreview.js"></script>
    <script src="./Assets/jquery/signupAjax.js"></script>
    <script src="./Assets/jquery/loginAjax.js"></script>
    <script src="./Assets/js/otpVerify.js"></script>


    <script>
   
   
    function resetForm(id){
        
        if(id === "closeLogin"){
            document.getElementById("formLogin").reset();
        }

        if(id === "closeSignup"){
            document.getElementById("formSignUp").reset();
        }
    }

   
    </script>
</body>

</html>