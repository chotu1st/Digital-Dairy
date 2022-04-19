$(document).ready(function () {

    // var userid = "<?php echo $_SESSION['userid'] ?>";
    var userid = document.getElementById("userID").value;
    $.ajax({
        type: "GET",
        url: "Ajax_php/getCategory.php",
        dataType: "html",
        data: {        
                userid: userid
        },
        success: function (data) {
            $("#getCategory").html(data);

        }
    });
});