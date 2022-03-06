<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/Assets/icon/DD-ico.png" type="image/png">
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
        <img src="/Assets/icon/Digital-Diary.png" class="brand-logo" alt="Digital-Diary">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <span class="float-end d-flex">
        <a class="nav-link btn-signin" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModalToggle"
          href="#">Sign In</a>
        <a class="nav-link btn-signin white " aria-current="page" data-bs-toggle="modal"
          data-bs-target="#exampleModalToggle2" href="#">Sign Up</a>
      </span>
    </div>
    </div>
  </nav>

  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
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
            <input type="password" class="form-control" id="password" placeholder="Dv@xxx*******" minlength="5"
              maxlength="10" disabled required>
            <span class="bulb-icon" id="bulb-icon" onclick="showPassword()">
              <img src="/Assets/Img/bulb-offpng.png" class="offBulb" id="off" alt="">
              <img src="/Assets/Img/bulb-on.png" class="onBulb" id="on" alt="">
            </span>
          </div>
          <div class="mb-3">
            <div id="captchaBackground">
              <canvas id="captcha">captcha text</canvas>
              <input id="textBox" onkeyup="CaptchaCheck()" type="text" name="text">
              <div id="buttons">
                <button id="refreshButton" type="submit">
                  <img src="/Assets/icon/reload.png" alt="">
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
          <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="preview">
            <img id="file-ip-1-preview" width="250px" height="auto">
          </div>
          <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
            data-bs-dismiss="modal">Back to first</button>
        </div>
      </div>
    </div>
  </div>
  <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>

  <!-- Navbar Code  End -->

  <!-- Body Start -->
  <!-- <div class="Main-body container-fluid">
        <div class="text-center">
            <h1 class="text-primary">Welcome to Digital Dairy</h1>
            <h6 class="text-success">Here you can Save your personal Records and Access it from any where ...</h6>
        </div>

    </div> -->

  <!-- Body End -->




  <script src="Assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/Assets/js/EmailValidator.js"></script>
  <script src="/Assets/js/ShowPassword.js"></script>
  <script src="/Assets/js/OTPfocus.js"></script>
  <script src="/Assets/js/Captcha.js"></script>


  <script>

    function showPreview(event) {
      if (event.target.files.length > 0) {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-1-preview");
        preview.src = src;
        preview.style.display = "block";
      }
    }


  </script>
</body>

</html>