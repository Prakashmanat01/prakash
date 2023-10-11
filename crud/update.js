
$('#update').validate({
    rules: {
        username: {
            required: {
                depends: function () {
                    $(this).val($.trim($(this).val()));
                    return true;
                }
            }
        },
        email: {
            required: true,
            email: true
        },
        dob: {
            required: true,
            date: true
        },
        mobile: {
            required: true,
            number: true,
            maxlength: 10
        }

    },
    messages: {
        username: {
            required: "*Please enter the username"
        },
        email: {
            required: "*Please enter the email address",
            email: "*Please enter a valid email"
        },
        dob: {
            required: "*Please enter date",
            dob: "*Please enter in correct format"
        },
        mobile: {
            required: "*Please enter mobile number",
            number: "*Please enter valid number",
            maxlength: "maximum 10 number only!!!"
        }
    }
});