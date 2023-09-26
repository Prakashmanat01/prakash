//registervalid();
var user = document.getElementById("username");

var pass = document.getElementById("password");
var cpass = document.getElementById("cpassword");
var mail = document.getElementById("email");
var gend = document.getElementsByName("gender");
var edu = document.getElementsByName("education");

var image = document.getElementById("uploadimage");
var imgtypes = ['image/png', 'image/jpg', 'image/jpeg'];

var identity = document.getElementById("uploadpdf");
var idtypes = ['application/pdf'];

var birth = document.getElementById("dob");
var address = document.getElementById("add");

var year = document.getElementById("yearadd");
var month = document.getElementById("monthadd");
var days = document.getElementById("dayadd");

user.addEventListener('textInput', userchange);
pass.addEventListener('input', passchange);
cpass.addEventListener('input', cpasschange);
mail.addEventListener('textInput', mailchange);

for (i of gend) {
    i.addEventListener('input', gendchange);
}

for (j of edu) {
    j.addEventListener('input', educhange);
}

image.addEventListener('input', imagechange);

identity.addEventListener('input', identitychange);

birth.addEventListener('input', birthchange);

address.addEventListener('input', addchange);


year.addEventListener('change', yearchange);
month.addEventListener('input', yearchange);
days.addEventListener('input', yearchange);
var error = 0;

function registervalid() {
    //username
    if (user.value.trim() == "") {
        username.style.border = "solid 1px brown";
        document.getElementById("uname").innerHTML = "* Please enter username!";
        error = 1;
    }
    else if (user.value.trim().length < 5) {
        username.style.border = "solid 1px brown";
        document.getElementById("uname").innerHTML = "* Username too shot atleast 5 character!";
        error = 1;
    }
    else {
        //username.style.border = "solid 1px #2ecc71";
        document.getElementById("uname").innerHTML = "";
    }
    //password
    if (pass.value.trim() == "") {
        password.style.border = "solid 1px brown";
        document.getElementById("pwd").in7erHTML = "* Please enter a password!"
        error = 1;
    }
    else if (pass.value.trim().length < 6) {
        password.style.border = "solid 1px brown";
        document.getElementById("pwd").innerHTML = "* Password too short atleast 6 character!";
        error = 1;
    }
    else {
        document.getElementById("pwd").innerHTML = "";
    }
    //cpassword
    if (cpass.value.trim() == "") {
        cpassword.style.border = "solid 1px brown";
        document.getElementById("cpwd").innerHTML = "* Please confirm your password!";
        error = 1;
    }
    else if (cpass.value.trim() != pass.value) {
        cpassword.style.border = "solid 1px brown";
        document.getElementById("cpwd").innerHTML = "* Password didn't match Please retry!";
        error = 1;
    }
    else {
        document.getElementById("cpwd").innerHTML = "";
    }
    //email
    if (mail.value.trim() == "") {
        email.style.border = "solid 1px brown";
        document.getElementById("emails").innerHTML = "* Please enter email address!";
        error = 1;

    }
    else {
        document.getElementById("emails").innerHTML = "";
    }
    //gender
    if (!gend[0].checked && !gend[1].checked && !gend[2].checked) {
        document.getElementById("genders").innerHTML = "* Please select gender!";
        error = 1;

    }
    else {
        document.getElementById("genders").innerHTML = "";

    }
    //education
    if (!edu[0].checked && !edu[1].checked && !edu[2].checked && !edu[3].checked) {
        document.getElementById("educ").innerHTML = "* Please select your Qualifications!";
        error = 1;
    }
    else {
        document.getElementById("educ").innerHTML = "";

    }
    //image upload
    if (!image.files[0]) {
        uploadimage.style.border = "solid 1px brown";
        document.getElementById("uimage").innerHTML = "* Please upload a image!";
        error = 1;
    }
    else if (!imgtypes.includes(image.files[0].type)) {
        uploadimage.style.border = "solid 1px brown";
        document.getElementById("uimage").innerHTML = "* Please upload in form of jpg,jpeg,png!";
        error = 1;
    }
    else {
        document.getElementById("uimage").innerHTML = "";
    }
    //pdf upload

    if (!identity.files[0]) {
        uploadpdf.style.border = "solid 1px brown";
        document.getElementById("uid").innerHTML = "* Please upload aadhar card!";
        error = 1;
    }
    else if (!idtypes.includes(identity.files[0].type)) {
        uploadpdf.style.border = "solid 1px brown";
        document.getElementById("uid").innerHTML = "*Please upload in pdf format only!";
        error = 1;
    }
    else {
        document.getElementById("uid").innerHTML = "";
    }
    //DOB
    if (birth.value == "") {
        dob.style.border = "solid 1px brown";
        document.getElementById("date").innerHTML = "* Please select your birthdate!";
        error = 1;
    }
    else {
        document.getElementById("date").innerHTML = "";
    }
    //address
    if (address.value.trim() == "") {
        add.style.border = "solid 1px brown";
        document.getElementById("uaddress").innerHTML = "* Please enter your residental address!";
        error = 1;
    }
    else {
        document.getElementById("uaddress").innerHTML = "";
    }
    // staying    
    if (year.value == "" || month.value == "" || days.value == "") {
        document.getElementById("year").innerHTML = "* Please select all the duration (day,month,year)!";
        error = 1;
    }
    else {
        document.getElementById("year").innerHTML = "";
    }
    // alert(error)
    if (error == 0) {
        alert("Thank you for Registration");
        return true;
    }

    return false;
}


function mypassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    var y = document.getElementById("cpassword");
    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }
}

function userchange() {
    if (user.value.trim().length >= 4) {
        username.style.border = "solid 1px #2ecc71";
        document.getElementById("uname").innerHTML = "";
        error = 0;
        return true;
    }
}
function passchange() {
    if (pass.value.trim().length >= 6) {
        password.style.border = "solid 1px #2ecc71";
        document.getElementById("pwd").innerHTML = "";
        error = 0;
        return true;
    }

}
function cpasschange() {
    if (cpass.value.trim() == pass.value) {
        cpassword.style.border = "solid 1px #2ecc71";
        document.getElementById("cpwd").innerHTML = "";
        error = 0;
        return true;

    }

}
function mailchange() {
    if (mail.value.trim() != "") {
        email.style.border = "solid 1px #2ecc71";
        document.getElementById("emails").innerHTML = "";
        error = 0;
        return true;

    }
}
function birthchange() {
    if (birth.value != "") {
        dob.style.border = "solid 1px #2ecc71";
        document.getElementById("date").innerHTML = "";
        error = 0;
        return true;


    }

}

function addchange() {
    if (address.value.trim() != "") {
        add.style.border = "solid 1px #2ecc71";
        document.getElementById("uaddress").innerHTML = "";
        error = 0;
        return true;

    }

}
function gendchange() {
    if (gend[0].checked || gend[1].checked || gend[2].checked) {
        document.getElementById("genders").innerHTML = "";
        error = 0;
        return true;

    }
}
function educhange() {
    if (edu[0].checked || edu[1].checked || edu[2].checked || edu[3].checked) {
        document.getElementById("educ").innerHTML = "";
        error = 0;
        return true;

    }
}

function yearchange() {
    if (year.value != "" || month.value != "" || days.value != "") {
        document.getElementById("year").innerHTML = "";
        error = 0;
        return true;

    }

}

function imagechange() {
    var size = parseFloat(image.files[0].size);
    var Sizekb = 100;
    var maxsize = 100 * 1024;
    if (size > maxsize) {
        document.getElementById("uimage").innerHTML = "maximum 100 kb allowed";
        error = 1;
        return false;
    }
    if (imgtypes.includes(image.files[0].type)) {
        uploadimage.style.border = "solid 1px #2ecc71";
        document.getElementById("uimage").innerHTML = "";
        error = 0;
        return true;
    }
}
function identitychange() {
    if (idtypes.includes(identity.files[0].type)) {
        uploadpdf.style.border = "solid 1px #2ecc71";
        document.getElementById("uid").innerHTML = "";
        error = 0;
        return true;
    }
}