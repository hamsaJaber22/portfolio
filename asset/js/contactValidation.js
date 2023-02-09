function sendContact() {
    var valid;
    valid = validateContact();
    if (valid) {
        jQuery.ajax({
            url: "./contact_mail.php",
            data: 'userName=' + $("#userName").val()
                + '&userEmail=' + $("#userEmail").val()
                + '&userNumber=' + $("#userNumber").val()
                + '&subject=' + $("#subject").val()
                + '&message=' + $("#message").val(),

            type: "POST",
            success: function (data) {
                $("#mail-status").html(data);
            },
            error: function () { }
        });
    }
}
// /^[a-zA-Z]+ [a-zA-Z]+$/
function validateContact() {
    var valid = true;
    $(".demoInputBox").css('background-color', '');
    $(".info").html('');

    if (!$("#userName").val()) {
        $("#info").html("name is required");
        $("#userName").css('background-color', '#FFFFDF');
        valid = false;
    } else
    if (!$("#userName").val().match(/^([A-Za-z]{2,10})?$/)) {
        $("#info").html("name is invalid");
        $("#userName").css('background-color', '#FFFFDF');
        valid = false;
    }

    if (!$("#userEmail").val()) {
        $("#info").html("Email is required");
        $("#userEmail").css('background-color', '#FFFFDF');
        valid = false;
    } else
        if (!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#info").html("email is invalid");
            $("#userEmail").css('background-color', '#FFFFDF');
            valid = false;
        }

    if (!$("#userNumber").val()) {
        $("#info").html("Phone number is required");
        $("#userNumber").css('background-color', '#FFFFDF');
        valid = false;
    } else
        if (!$("#userNumber").val().match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/)) {
            $("#info").html("phone number is invalid");
            $("#userNumber").css('background-color', '#FFFFDF');
            valid = false;
        }
    return valid;
}