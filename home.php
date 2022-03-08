<?php
    include('include/header.php');   
?>
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

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <span class="ms-auto">
                <div class="dropdown">
                    <button class="dp-btn dropdown-toggle" type="button" id="dropdownMenuButton2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./Assets/img/jyoti.jpg" alt="User-DP" /> Anmol Ji
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end"
                        aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </span>
        </div>
    </div>
</nav>

<!-- Navbar Code  End -->


<div class="container playground p-5">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">Note</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="money-tab" data-bs-toggle="tab" data-bs-target="#money" type="button"
                role="tab" aria-controls="money" aria-selected="false">Money Record</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="false">Admin</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">1</div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="noteTab-view">
                <div class="noteTab-view-left">
                <div class="mb-3">
                        <label for="noteDate" class="form-label">Date</label>
                        <input type="date" class="form-control" id="noteDate">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Category</label>
                        <select class="form-select" aria-label="Default select example">
                            <option disabled selected>What you want to write ☻</option>
                            <option value="1">Personal</option>
                            <option value="2">Office</option>
                            <option value="3">Love Life</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Write Note here</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                </div>
                <div class="noteTab-view-right">
                    <div class="table-responsive card">
                        <table class="table table-info table-striped m-0">
                            <thead>
                                <tr>
                                    
                                    <th scope="col">Note</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Date Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   
                                    <td>Aj maine bahut kuch sikh logo se kaise baat krna and all</td>
                                    <td>Personal</td>
                                    <td>08 Mar 2022 07:05 PM</td>
                                </tr>
                                <tr>
                                    
                                    <td>Pallavi Propose ki but mnn hote huye bhi mana kridya maine</td>
                                    <td>Love Life</td>
                                    <td>07 Mar 2022 01:05 PM</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="money" role="tabpanel" aria-labelledby="money-tab">3</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">4</div>
    </div>

</div>


<?php
    include('include/footer.php');   
?>