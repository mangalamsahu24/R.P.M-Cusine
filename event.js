$('#firstname').keyup(function() {
    $('span.error-keyup-2').remove();
    var inputVal = $(this).val();
    var characterReg = /^\s*[a-zA-Z,\s]+\s*$/;
    if (!characterReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-2" style="color:red">No special characters and numbers allowed.</span>');
    }
});
$('#lastname').keyup(function() {
    $('span.error-keyup-2').remove();
    var inputVal = $(this).val();
    var characterReg = /^\s*[a-zA-Z,\s]+\s*$/;
    if (!characterReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-2" style="color:red">No special characters and numbers allowed.</span>');
    }
});
$('#evento').keyup(function() {
    $('span.error-keyup-2').remove();
    var inputVal = $(this).val();
    var characterReg = /^\s*[a-zA-Z,\s]+\s*$/;
    if (!characterReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-2" style="color:red">No special characters and numbers allowed.</span>');
    }
});
$('#street').keyup(function() {
    $('span.error-keyup-2').remove();
    var inputVal = $(this).val();
    var characterReg = /^\s*[a-zA-Z,\s]+\s*$/;
    if (!characterReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-2" style="color:red">No special characters and numbers allowed.</span>');
    }
});
$('#address').keyup(function() {
    $('span.error-keyup-2').remove();
    var inputVal = $(this).val();
    var characterReg = /^\s*[a-zA-Z,\s]+\s*$/;
    if (!characterReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-2" style="color:red">No special characters and numbers allowed.</span>');
    }
});
$('#landmark').keyup(function() {
    $('span.error-keyup-2').remove();
    var inputVal = $(this).val();
    var characterReg = /^\s*[a-zA-Z,\s]+\s*$/;
    if (!characterReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-2" style="color:red">No special characters and numbers allowed.</span>');
    }
});
$('#city').keyup(function() {
    $('span.error-keyup-2').remove();
    var inputVal = $(this).val();
    var characterReg = /^\s*[a-zA-Z,\s]+\s*$/;
    if (!characterReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-2" style="color:red">No special characters and numbers allowed.</span>');
    }
});
$('#state').keyup(function() {
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
$('#mobile').keyup(function() {
    $('span.error-keyup-1').remove();
    var inputVal = $(this).val();
    var emailReg = /^[1-9][0-9]\d{9}$/;
    if (!emailReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-1" style="color:red">Please enter a valid 10 digit mobile number</span>');
    }
});
$('#people').keyup(function() {
    $('span.error-keyup-1').remove();
    var inputVal = $(this).val();
    var emailReg = /^[1-9]\d{1}$/;
    if (!emailReg.test(inputVal)) {
        $(this).after('<span class="error error-keyup-1" style="color:red">Please enter a valid number</span>');
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