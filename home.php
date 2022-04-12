<?php
    include('include/security.php');
    include('include/header.php');        
?>

<!-- Navbar Code Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
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
                        <img src="./Assets/img/jyoti.jpg" alt="User-DP" /> <?php echo $_SESSION['name']; ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end"
                        aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form method="Post" action="Ajax_Php/logout.php">
                                <input class="dropdown-item" type="submit" value="Logout Me" name="logout">
                            </form>

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
                role="tab" aria-controls="profile" aria-selected="false">Create Note</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="noteView-tab" data-bs-toggle="tab" data-bs-target="#noteView" type="button"
                role="tab" aria-controls="noteView" aria-selected="false">Your Notes</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="false">Edit Notes</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="homeTab-view">
                <div class="homeTab-view-userdp">
                    <img src="<?php echo $_SESSION['dp']; ?>" alt="User Dp">
                </div>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>

                <div class="homeTab-view-userdetails">
                    <h1><?php echo $_SESSION['name']; ?></h1>
                    <h5><?php echo $_SESSION['sex']; ?></h5>
                    <h5><?php echo $_SESSION['email']; ?></h5>
                    <h5><?php echo $_SESSION['contact']; ?></h5>
                </div>
                <div class="homeTab-view-dashboard">
                    <div class="totalnotes">

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="noteTab-view">
                <div class="noteTab-view-left">
                    <form action="">
                        <div class="mb-3">
                            <!-- <label for="noteDate" class="form-label">Date</label> -->
                            <input placeholder="Write this note of date ?" class="form-control" id="noteDate"
                                type="text" onfocus="(this.type='date')" required>
                        </div>
                        <div class="mb-3">
                            <!-- <label for="exampleFormControlInput1" class="form-label">Category</label> -->
                            <select class="form-select" aria-label="Default select example" required>
                                <option disabled selected>What you want to write ☻</option>
                                <option value="1">Personal</option>
                                <option value="2">Office</option>
                                <option value="3">Love Life</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <!-- <label for="noteDate" class="form-label">Date</label> -->
                            <input type="text" class="form-control" placeholder="What's your note title" maxlength="25"
                                minlenght="3" id="noteTitle" required>
                        </div>
                        <div class="mb-3">
                            <!-- <label for="exampleFormControlTextarea1" class="form-label">Write Note here</label> -->
                            <textarea class="form-control" placeholder="Write your note here ..."
                                id="exampleFormControlTextarea1" rows="3" required></textarea>
                            <p class="noteMSg">Note:- Write your note under 1000 Words</p>
                        </div>
                        <div class="savebtn my-4">
                            <!-- <button type="button" class="btn btn-outline-info">Save it</button> -->
                            <input type="submit" class="btn btn-outline-info" value="Save it">
                        </div>

                    </form>

                </div>
                <div class="noteTab-view-right">
                    <div class="table-responsive card">
                        <table class="table table-striped m-0">
                            <thead>
                                <tr>

                                    <th scope="col">Title</th>
                                    <th scope="col">Note</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Date Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Its all about learing</td>
                                    <td>Aj maine bahut kuch sikh logo se kaise baat krna and all</td>
                                    <td>Personal</td>
                                    <td>08 Mar 2022 07:05 PM</td>
                                </tr>
                                <tr>
                                    <td>Love at first sight</td>
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

        <div class="tab-pane fade" id="noteView" role="tabpanel" aria-labelledby="noteView-tab">
            <div class="table-responsive card">
                <table class="table table-dark table-hover mb-0">
                    <thead>
                        <tr>

                            <th scope="col">Title</th>
                            <th scope="col">Note</th>
                            <th scope="col">Category</th>
                            <th scope="col">Date Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Its all about learing</td>
                            <td>Aj maine bahut kuch sikh logo se kaise baat krna and all</td>
                            <td>Personal</td>
                            <td>08 Mar 2022 07:05 PM</td>
                        </tr>
                        <tr>
                            <td>Love at first sight</td>
                            <td>Pallavi Propose ki but mnn hote huye bhi mana kridya maine</td>
                            <td>Love Life</td>
                            <td>07 Mar 2022 01:05 PM</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="adminTab-view">
                <div class="adminTab-view-top">
                    <form action="">

                        <input type="text" id="newCategory" class="form-control"
                            placeholder="Write new category here to add it" maxlength="20" minlenght="3" id="noteTitle"
                            required>

                        <input type="submit" class="btn btn-outline-success" onClick="alertMsg()" value="Add Category">


                    </form>
                </div>

                <div class="adminTab-view-bottom">
                    <div class="table-responsive card">
                        <table class="table m-0">
                            <thead>
                                <tr>

                                    <th scope="col">Title</th>
                                    <th scope="col">Note</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Date Time</th>
                                    <th scope="col" class="text-center">Update</th>
                                    <th scope="col" class="text-center">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" value="Its all about learing"
                                            maxlength="25" minlenght="3">
                                    </td>
                                    <td>

                                        <textarea class="form-control" placeholder="Write your note here ..."
                                            id="exampleFormControlTextarea1" onfocus="(this.rows='4')"
                                            onfocusout="(this.rows='1')" rows="1"
                                            column="4">Aj maine bahut kuch sikh logo se kaise baat krna and all</textarea>

                                    </td>
                                    <td>
                                        <select class="form-select">
                                            <option selected value="1">Personal</option>
                                            <option value="2">Office</option>
                                            <option value="3">Love Life</option>
                                        </select>
                                    </td>
                                    <td class="py-3">08 Mar 2022 07:05 PM</td>
                                    <td class="text-center"><img src="Assets/icon/update.png" id="updateBtn" alt="del"
                                            width="40px" height="auto"></td>
                                    <td class="text-center"><img src="Assets/icon/delete.png" id="deleteBtn" alt="del"
                                            width="40px" height="auto"></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
function alertMsg() {

    var category = document.getElementById("newCategory").value;
    var userid = "<?php echo $_SESSION['userid'] ?>";

    alert(userid + " = " + category);
}
</script>
<?php
    include('include/footer.php');   
?>