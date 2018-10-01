var lock = {
    'e_': ''
}
$(document).ready(function() {
    
    $('#inputEmail').blur(function(){
        var input     = $(this);
        var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        if (testEmail.test(input.val())){
            validInp(input);
            lock.e_ = 1;
        }else{
            invalidInp(input);
            lock.e_ = 0;
        }    
    });

});

function submit(){
    var pw   = $('#inputPassword');
    var eml  = $('#inputEmail');
    var form = $('#Login');
    if(pw.val() != undefined && lock.e_ != 0){
        form.submit();
    }else{
        invalidInp(eml);
        invalidInp(pw);
    }    
}

function validInp(inp){
    inp.css({
        'border': 'green',
        'border-style': 'solid', 
        'border-width': '1px',
        'color': ''});  
}

function invalidInp(inp){
    inp.css({
        'border': 'red',
        'border-style': 'solid', 
        'border-width': '1px', 
        'color': 'red'});
}

function play(){
    $('#wrap').css('top', '');
    $('#wrap').animate({top:"-100%"}, 15000, play);
}
