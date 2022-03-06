<?php
    include('include/connection.php');   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Assets/icon/DD-ico.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Mail Style Css -->
    <link rel="stylesheet" href="Assets/css/style.css">

    <title>Digital Dairy</title>
</head>

<body>

    <!-- Navbar Code Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="Assets/icon/Digital-Diary.png" class="brand-logo" alt="Digital-Diary">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="float-end d-flex">
                <a class="nav-link btn-signin" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Sign
                    In</a>
                <a class="nav-link btn-signin white" data-bs-toggle="modal" href="#signUP" role="button" href="#">Sign
                    Up</a>
            </span>
        </div>
        </div>
    </nav>

    <!-- Navbar Code  End -->

    <!-- Body Start -->
    <div class="Main-body container-fluid">
        <div class="text-center">
            <h1 class="text-primary">Welcome to Digital Dairy</h1>
            <h6 class="text-success">Here you can Save your personal Records and Access it from any where ...</h6>
        </div>

    </div>

    <!-- Body End -->

    <!-- --------------------------Sign in Modal --------------------------------------------->

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Sign In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-0">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" onkeyup="ValidateEmail(this.value)"
                            placeholder="doremon@mitstudent.co.in" required>
                        <span id="errorEmail"></span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Dv@xxx*******"
                            minlength="5" maxlength="10" disabled required>
                        <span class="bulb-icon" id="bulb-icon" onclick="showPassword()">
                            <img src="./Assets/Img/bulb-offpng.png" class="offBulb" id="off" alt="">
                            <img src="./Assets/Img/bulb-on.png" class="onBulb" id="on" alt="">
                        </span>
                    </div>
                    <div class="mb-3">
                        <div id="captchaBackground">
                            <canvas id="captcha">captcha text</canvas>
                            <input id="textBox" onkeyup="CaptchaCheck()" type="text" name="text">
                            <div id="buttons">
                                <button id="refreshButton" type="submit">
                                    <img src="./Assets/icon/reload.png" alt="">
                                </button>
                            </div>
                            <span id="output"></span>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Open second modal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">OTP Verification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="otp">
                        <input type="number" class="otp-box" id="value1"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            maxlength="1" onkeyup="move(event, '', 'value1','value2')">
                        <input type="number" class="otp-box" id="value2"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            maxlength="1" onkeyup="move(event, 'value1', 'value2','value3')">
                        <input type="number" class="otp-box" id="value3"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            maxlength="1" onkeyup="move(event, 'value2', 'value3','value4')">
                        <input type="number" class="otp-box" id="value4"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            maxlength="1" min="1" onkeyup="move(event, 'value3', 'value4','')">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Back to first</button>
                </div>
            </div>
        </div>
    </div>
    <!-- --------------------------Sign in Modal End --------------------------------------------->

    <!-- --------------------------Sign Up Modal  Start------------------------------------------->
    <div class="modal fade" id="signUP" aria-hidden="true" aria-labelledby="signUPLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signUPLabel">Sign Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="code.php" method="POST">
                        <div class="preview">
                            <img id="file-ip-1-preview" width="150px" height="150px">
                        </div>
                        <!-- <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);"> -->

                        <div class="upload-btn-wrapper" id="upload-btn-wrapper">
                            <button class="btns" id="btns"><img src="Assets/icon/dpUpload.png" alt="+"></button>
                            <input type="file" name="upload" id="file-ip-1" accept="image/*"
                                onchange="showPreview(event);" />
                        </div>


                        <div class="mb-0">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Ex -Kavita, Pallavi" required>
                        </div>
                        <div class="mb-0">
                            <label for="" class="form-label">Gender</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio1"
                                        value="Male">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio2"
                                        value="Female">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio3"
                                        value="Other">
                                    <label class="form-check-label" for="inlineRadio3">Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-0">
                            <label for="" class="form-label">Age Group</label>
                            <select class="form-select" name="age" aria-label="Default select example">
                                <option disabled selected>Select Your Age Group</option>
                                <option value="0-17">Below than 18 Years</option>
                                <option value="18-24">Between 18 to 25 Years</option>
                                <option value="25-34">Between 25 to 35 Years</option>
                                <option value="35-100">Above 35 Years</option>
                            </select>
                        </div>
                        <div class="mb-0">
                            <label for="" class="form-label">Purpose</label>
                            <select class="form-select" name="purpose" aria-label="Default select example">
                                <option disabled selected>Select Your Age Group</option>
                                <option value="personal">Personal</option>
                                <option value="office">Office</option>
                            </select>
                        </div>
                        <div class="mb-0">
                            <label for="" class="form-label">Contact</label>
                            <input type="number" class="form-control" id="contact" name="contact" minlength="10"
                                maxlength="10" placeholder="9111525164" required>
                        </div>
                        <div class="mb-0">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" onkeyup="ValidateEmail(this.value)"
                                placeholder="doremon@mitstudent.co.in" required>
                            <span id="errorEmail"></span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Dv@xxx*******"
                                minlength="5" maxlength="10" name="password" disabled required>
                            <span class="bulb-icon" id="bulb-icon" onclick="showPassword()">
                                <img src="./Assets/Img/bulb-offpng.png" class="offBulb" id="off" alt="">
                                <img src="./Assets/Img/bulb-on.png" class="onBulb" id="on" alt="">
                            </span>
                        </div>

                        <input type="submit" name="register" value="Save">
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#signUP2" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Open second modal</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="signUP2" aria-hidden="true" aria-labelledby="signUPLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signUPLabel2">Email and Phone Verification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Hide this modal and show the first with the button below.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#signUP" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Back to first</button>
                </div>
            </div>
        </div>
    </div>

    <!-- -------------------------Sign Up Modal  End------------------------------------------->
    <!-- Modal for Sign In  End-->
    <script src="./Assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./Assets/js/EmailValidator.js"></script>
    <script src="./Assets/js/ShowPassword.js"></script>
    <script src="./Assets/js/OTPfocus.js"></script>
    <script src="./Assets/js/Captcha.js"></script>


    <script>
    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");

            let uploadBtn = document.getElementById("btns");
            let wrapper = document.getElementById("upload-btn-wrapper");

            preview.src = src;
            preview.style.display = "block";

            
                uploadBtn.style.position = "absolute";
                uploadBtn.style.zIndex = "99";
                uploadBtn.style.transform = "translate(3em,-2.5em)";
                uploadBtn.style.boxShadow = "0px 0px 14px rgba(0, 0, 0, 0.38)";

                wrapper.style.position = "unset";
            


        }
    }
    </script>
</body>

</html>