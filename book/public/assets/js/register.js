$('#register').validate({
    rules: {
        username: {
            required: {
                depends: function () {
                    $(this).val($.trim($(this).val()));
                    return true;
                }
            }
        },
        password: {
            required: {
                depends: function () {
                    $(this).val($.trim($(this).val()));
                    return true;
                }
            },
            minlength: 5
        },
        cpassword:
        {
            required: {
                depends: function () {
                    $(this).val($.trim($(this).val()));
                    return true;
                }
            },
            minlength: 5,
            equalTo: '#password'
        },
        email: {
            required: true,
            email: true
        },
        gender: {
            required: true
        }
    }, messages: {
        username: {
            required: "*Please enter username!",
        },

        password: {
            required: "*Please enter password!",
            minlength: "*Password must be of alteast 5 character!"
        },

        cpassword: {
            required: "*Please confirm your password!",
            minlength: "*Password must be of alteast 5 character!",
            equalTo: "*Password not matched!"

        },
        email: {
            required: "*Please enter your email id!",
            email: "*Please enter a valid  email id!"
        },
        gender: {
            required: "*please select gender"
        }


    }
});



// var check = $('input["name=hobbies[]"]');
// if (check.filter(':checked').length === 0) {
//     document.getElementsByName['hobbies'].innerHtml('please select value');
// }

// function check() {
//     var checkbox = document.getElementById("hobbies");
//     if (checkbox.checked == false) {
//         document.getElementById("lhobby").innerHTML("please select hobby");
//         return false;
//     } else {
//         document.getElementById('lhobby').innerHTML("");
//         return true;
//     }

// }