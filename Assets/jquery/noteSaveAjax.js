$(document).ready(function() {

    $("#noteSave").click(function() {

        var noteDate = $("#noteDate").val();
        var category = $("#getCategory").val();
        var noteTitle = $("#noteTitle").val();        
        var noteText = $("#noteText").val();

        var userid = document.getElementById("userID").value;
        
        console.log("ajax works");            
       

        if (noteDate == '' || category == '' || noteTitle == '' || noteText == '') {
            alert("Please fill ( Date , Category , Title , Note Text ! )");
            return false;
        }
        else{
            document.getElementById("noteSavingForm").reset();
            }

        $.ajax({
            type: "POST",
            url: "Ajax_php/noteSave.php",
            data: {
                noteDate: noteDate,
                category: category,
                noteTitle:noteTitle,
                noteText:noteText,
                userid:userid
            },
            cache: false,
            success: function(data) {
                // alert("Note Saved Successfully");            
                console.log(data);

                var userid = document.getElementById("userID").value;
                var status = 1;
                
                $.ajax({
                    type: "GET",
                    url: "Ajax_php/getNotes.php",
                    dataType: "html",
                    data: {        
                            userid: userid,
                            status:status
                    },
                    success: function (data) {
                        $("#getAllNote").html(data);           
        
                    }
                });

                
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
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        });

    });

});