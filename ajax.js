$(document).ready(function(){
    $("#myForm").submit(function(e){
        e.preventDefault();

        // Validate the form
        var name = $("#name").val();
        var email = $("#email").val();
        var comments = $("#comments").val();
        var isValid = true;

        if (name === "") {
            $("#nameError").text("Name is required");
            console.log("Name error");
            isValid = false;
        } else {
            $("#nameError").text("");
        }

        if (email === "") {
            $("#emailError").text("Email is required");
            console.log("Email error");
            isValid = false;
        } else {
            $("#emailError").text("");
        }

        if (comments === "") {
            $("#commentsError").text("Comments are required");
            console.log("Comments error");
            isValid = false;
        } else {
            $("#commentsError").text("");
        }

        if (!isValid) {
            return;
        }

        var date = new Date();
        var day = String(date.getDate()).padStart(2, '0');
        var month = String(date.getMonth() + 1).padStart(2, '0');
        var year = date.getFullYear();
        $("#time").val(year + '-' + month + '-' + day);

        $.post("insert.php", $(this).serialize(), function(data){
            console.log(data);
            loadRecords($("#filter").val());
        });
    });

    $("#filter").change(function() {
        loadRecords($(this).val());
    });

    function loadRecords(filter) {
        $.get("select.php", { filter: filter }, function(data){
            $("#records").html(data);
        });
    }

    loadRecords($("#filter").val());
});
