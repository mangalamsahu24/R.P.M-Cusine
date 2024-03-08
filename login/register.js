$('#name').keyup(function() {
    $('span.error-keyup-2').remove();
    var inputVal = $(this).val();
    var characterReg = /^\s*[a-zA-Z,\s]+\s*$/;
    if (!characterReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-2" style="color:red;font-size: 13px;">No special characters and numbers allowed.</span>');
    }
});
$('#email').keyup(function() {
    $('span.error-keyup-7').remove();
    var inputVal = $(this).val();
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,8})?$/;
    if (!emailReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-7" style="color:red;font-size: 13px;">Invalid Email Format.</span>');
    }
});
$('#password').keyup(function() {
    $('span.error-keyup-8').remove();
    var inputVal = $(this).val();
    var emailReg = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    if (!emailReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-8" style="color:red;font-family: Merienda, sans-serif; font-weight: 2px;font-size: 13px;">Password you Entered is weak.</span>');
    }
});