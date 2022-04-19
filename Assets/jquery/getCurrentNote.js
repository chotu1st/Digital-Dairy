$(document).ready(function () {

    var userid = document.getElementById("userID").value;
    var status = 3;
    $.ajax({
        type: "GET",
        url: "Ajax_php/getNotes.php",
        dataType: "html",
        data: {        
                userid: userid,
                status:status
        },
        success: function (data) {
            $("#getCurrentNote").html(data);
           

        }
    });

});