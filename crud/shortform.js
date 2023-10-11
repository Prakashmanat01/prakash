
$('#shortform').validate({
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
        dob: {
            required: true,
            dateISO: true
        },
        gender: {
            required: true
        },
        mobile: {
            required: true,
            number: true,
            maxlength: 10
        },
        myfile: {
            required: true,
            accept: "image/png,image/jpg,image/jpeg"
        },
        edu: {
            required: true
        },
        mydoc: {
            required: true,
            accept: "application/pdf"

        }


    }, messages: {
        username: {
            required: "*Please enter username!",
        },

        password: {
            required: "*Please enter password!",
            minlength: "password must be of alteast 5 character!"
        },

        cpassword: {
            required: "*Please confirm your password!",
            minlength: "password must be of alteast 5 character!",
            equalTo: "*Password not matched!"

        },
        email: {
            required: "*Please enter your email id!",
            email: "please enter a valid  email id!"
        },
        dob: {
            required: "*Please enter your date of birth!",
            dateISO: "*Please enter in format of YYYY-MM-DD"
        },
        gender: {
            required: "*Please select your gender!"
        },
        mobile: {
            required: "*please enter your mobile number!",
            number: "Please enter valid number",
            maxlength: " 10 digits only!"
        },
        myfile: {
            required: "please upload file",
            accept: "only jpeg png jpg",


        },
        edu: {
            required: "please select your qualification"

        },

        mydoc: {
            required: "*Please upload your identity!",
            accept: "*Only Pdf format allowed!"
        }
    }

});

// $(document).ready(function () {
//     $('#check').click(function () {
//         $('#d').text(function () {

//             var ftypes = ['application/pdf'];
//             if ($('#doc') != "") {
//                 return 'verified';
//             }

//         });
//     });
// });
var error = 0;
;
function valid() {
    var documentss = document.getElementById("doc");
    var ftypes = ['application/pdf'];

    if (ftypes.includes(documentss.files[0].type)) {
        document.getElementById("d").innerHTML = "verified";
        error = 0;
    } if (error == 0) {
        return true;
    }
    return false;
}
function submit() {
    if (error = 0) {
        $("#submit").click(function () {
            alert("Thabkyou!! for registration now login your self");
            return true;
        });
    } return false
}
function validimage() {
    var images = document.getElementById("uploadimage");
    var ftypes = ['image/png', 'image/jpg', 'image/jpeg'];

    if (ftypes.includes(images.files[0].type)) {
        document.getElementById("uimage").innerHTML = "verified";
        error = 0;
    } if (error == 0) {
        return true;
    }
    return false;
}












































/*var user = document.getElementById("username");
var pwd = document.getElementById("password");
var cpwd = document.getElementById("cpassword");
var gend = document.getElementsByName("gender");
var image = document.getElementById("uploadimage");
var imaegtypes = ['image/png', 'image.jpg', 'image/jpeg'];
//var sizes = parseFloat(image.files[0].size);



user.addEventListener('input', uchange);
pwd.addEventListener('input', pchange);
cpwd.addEventListener('input', cpchange);

for (i of gend) {
    i.addEventListener('input', gchange);
}
image.addEventListener('input', ichange);
function shortform() {

    //username
    if (user.value.trim() == "") {
        document.getElementById("uname").innerHTML = "*please enter user name!";
        error = 1;
    }
    else if (user.value.trim().length <= 4) {
        document.getElementById("uname").innerHTML = "*atleast username must have 5 character";
        error = 1;
    }
    else {
        document.getElementById("uname").innerHTML = "";
    }
    //password
    if (pwd.value.trim() == "") {
        document.getElementById("upass").innerHTML = "*please enter password";
        error = 1;
    }
    else if (pwd.value.trim().length <= 5) {
        document.getElementById("upass").innerHTML = "*password must contain minimum 6 character";
        error = 1;
    }
    else {
        document.getElementById("upass").innerHTML = "";
    }
    //confirm password
    if (cpwd.value.trim() == "") {
        document.getElementById("ucpass").innerHTML = "*please confirm your password!";
        error = 1;
    }
    else if (cpwd.value.trim() != pwd.value) {
        document.getElementById("ucpass").innerHTML = "password didn't matched";
        error = 1
    }
    else {
        document.getElementById("ucpass").innerHTML = "";
    }
    //gender
    if (!gend[0].checked || !gend[1].checked) {
        document.getElementById("ugender").innerHTML = "*please select your gender";
        error = 1;
    }
    //imageupload
    if (!image.files[0]) {
        document.getElementById("uimage").innerHTML = "*please upload a image";
        error = 1;
    }
    else if (!imaegtypes.includes(image.files[0].type)) {
        document.getElementById("uimage").innerHTML = "*please upload jpg/png/jpeg type image only";
        error = 1;
    }




    if (error == 0) {
        alert("Thankyou for registration");
        return true;
    }
    return false;
}

function uchange() {
    if (user.value.trim().length > 4) {
        document.getElementById("uname").innerHTML = "";
        error = 0;
        return true;
    }
}
function pchange() {
    if (pwd.value.trim().length > 5) {
        document.getElementById("upass").innerHTML = "";
        error = 0;
        return true;
    }
}
function cpchange() {
    if (cpwd.value.trim() == pwd.value) {
        document.getElementById("ucpass").innerHTML = "";
        error = 0;
        return true;
    }
}
function gchange() {
    if (gend[0].checked || gend[1].checked) {
        document.getElementById("ugender").innerHTML = "";
        error = 0;
        return true;
    }
}
function ichange() {
    var size = parseFloat(image.files[0].size);
    var SizeKB = 100;
    var maxSize = SizeKB * 1024;
    if (size > maxSize) {
        document.getElementById("uimage").innerText = "Max file size 100KB allowed.";
        error = 1;
        return false;
    }
    if (imaegtypes.includes(image.files[0].type)) {
        document.getElementById("uimage").innerHTML = "";
        error = 0;
        return true;
    }

}*/