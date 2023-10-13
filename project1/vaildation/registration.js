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

        // dob: {
        //     required: true,
        //     dateISO: true
        // },
        gender: {
            required: true
        },
        mobile: {
            required: true,
            number: true,
            maxlength: 10
        },
        address: {
            required: true
        },
        'hobbies[]': {
            required: true,
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
        // dob: {
        //     required: "*Please enter your date of birth!",
        //     dateISO: "*Please enter in format of YYYY-MM-DD"
        // },
        gender: {
            required: "*Please select your gender!",
        },
        mobile: {
            required: "*Please enter your mobile number!",
            number: "*Please enter valid number",
            maxlength: " 10 digits only!"
        },
        address: {
            required: "*Please enter your address"
        },

        'hobbies[]': {
            required: "*Please enter your hobbies",

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