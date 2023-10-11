$("#login").validate({


    rules: {
        user: {
            required: {
                depends: function () {
                    $(this).val($.trim($(this).val()));
                    return true;
                }
            }
        },
        pass: {
            required: {
                depends: function () {
                    $(this).val($.trim($(this).val()));
                    return true;
                }
            },
            minlength: 5
        }

    },
    messages: {
        user: {
            required: " * please enter the username"
        },
        pass: {
            required: " * please enter the passowrd"
        }


    }

});