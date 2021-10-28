$(document).ready(function() {

    $("#country_name").change(function() {
        var country_name = $("select#country_name option:selected").val();

        $.ajax({
                url: "country_select.php",
                data: { user_data: country_name },
                method: "POST"
            })
            .done(function(data) {
                $("#country_code").html("<option value='" + data + "'>" + data + "</option>");
            })
            .fail(function(errorMessage) {
                alert(errorMessage);
                l
            });
    });


    $("#form").submit(function() {
        var data = 1;
        var user_name = $("input[name='name']").val();
        if (user_name == "") {
            $(".user_name_error").text("Please Enter Name").css("color", "red");
            data = 0;
        } else {
            $(".user_name_error").text("✓").css('color', 'green');
        }

        var country_name = $("select#country_name option:selected").val();

        if (country_name == 0) {
            $(".country_name_error").text('Please Select Your Country').css('color', 'red');
            data = 0;
        } else {
            $(".country_name_error").text('✓').css('color', 'green');
        }

        var country_code = $("#country_code option:selected").val();
        if (country_code == 0) {
            $(".country_code_error").text('Please Select Your Country code').css('color', 'red');
            data = 0;
        } else {
            $(".country_code_error").text('✓').css('color', 'green');
        }

        if (data == 0) {
            return false;
        }

    });
});