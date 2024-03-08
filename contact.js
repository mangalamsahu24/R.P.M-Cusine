$('#name').keyup(function() {
    $('span.error-keyup-2').remove();
    var inputVal = $(this).val();
    var characterReg = /^\s*[a-zA-Z,\s]+\s*$/;
    if (!characterReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-2" style="color:red">No special characters and numbers allowed.</span>');
    }
});
$('#email').keyup(function() {
    $('span.error-keyup-7').remove();
    var inputVal = $(this).val();
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,8})?$/;
    if (!emailReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-7" style="color:red">Invalid Email Format.</span>');
    }
});
$('#subject').keyup(function() {
    $('span.error-keyup-2').remove();
    var inputVal = $(this).val();
    var characterReg = /^\s*[a-zA-Z,\s]+\s*$/;
    if (!characterReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-2" style="color:red">No special characters and numbers allowed.</span>');
    }
});
$('#message').keyup(function() {
    $('span.error-keyup-2').remove();
    var inputVal = $(this).val();
    var characterReg = /^\s*[a-zA-Z0-9,\s]+\s*$/;
    if (!characterReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-2" style="color:red">No special characters allowed.</span>');
    }
});