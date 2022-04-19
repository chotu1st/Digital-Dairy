$(document).ready(function() {

    $("#newCategoryAdd").click(function() {

        var category = $("#newCategory").val();
        var userid = document.getElementById("userID").value;
                
       

        if (category == '') {
            alert("Please fill Category )");
            return false;
        }
        else{
            document.getElementById("addCategory").reset();           
        }

        $.ajax({
            type: "POST",
            url: "Ajax_php/addNewCategory.php",
            data: {
                category: category,
                userid: userid                
            },
            cache: false,
            success: function(data) {
                alert(data);


                
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
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        });

        

    });

});