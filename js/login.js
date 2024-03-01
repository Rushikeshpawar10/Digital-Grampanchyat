function toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
})

function checkPassword(str)
{
    var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    return re.test(str);
}

function validateRegistration(){
    
    if(document.getElementById('user-pass').value===document.getElementById('user-repeatpass').value)
    {
        if(document.getElementById('user-phone').value.toString().length==10)
        {
            if(checkPassword(document.getElementById('user-pass').value))
            {
                return true;
            }
            else
            {
                alert("Password Should Match Criteria\n 1. min 8 letter password\n 2. at least a symbol, upper and lower case letters and a number")
                return false;
            }
        }
        else
        {
            alert("Phone number should be 10 digit");
            return false;
        }
    }
    else
    {
        alert("password and repeat password should match");
        return false;
    }
}

function hidetoast(){
    $('#successtoast').css('display','none');
    $('#dangertoast').css('display','none');
}