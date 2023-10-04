var n = 40;
var c = 1;
var a = 1;
$('#usubmit').click(function () {

    var number = parseInt($("#uinput").val());
    if (number === n) {
        $("#answer").text("correct guess");

    } else if (number < n) {
        $("#answer").text("number is smaller");
        a = c++;

    } else if (number > n) {
        $("#answer").text("number is bigger");
        a = c++;

    }
    $("#count").text(a);

});
