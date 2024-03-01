console.log("Validations Loaded");

function validateForm(){
    var f=0;
    var date=document.getElementById('birthdoe'); 
    var phone=document.getElementById('user-phone');
    if(!(validateName()))
    {
        f=1;
    }

    if(!(ValidateEmail(document.getElementById('user-email').value.toString())))
    {
        f=1;
    }
    
    if(date)
    {
        if(!(validateDate(date.value)))
        {
            f=1;
        }
    }

    if(!(validatePhone(phone.value.toString())))
    {
        f=1;
    }

    if(f==0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function ValidateEmail(mail) 
{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
    {
        return true;
    }
    else
    {
        alert("You have entered an invalid email address!")
        return false;
    }
}

function validateName()
{
    console.log("Called");
    var letters = /^[a-zA-Z ]*$/;
    var names=document.getElementsByClassName('user-name');

    for(var i=0;i<names.length;i++)
    {
        console.log(names[i].value);
        if(!(names[i].value.toString().match(letters)))
        {
            console.log("called");
            alert('Name Fields Should only contain alphabets');
            return false;
        }
    }
    return true;
}

function validateDate(date)
{
    var datereg= /(([0-2][0-9])|([3][0-1]))\/(([0][0-9])|([1][0-2]))\/[1-9][0-9][0-9][0-9]/;

    if(datereg.test(date))
    {
        return true;
    }
    else
    {
        alert("Date Should Match Format DD/MM/YYYY");
        return false;
    }
}

function validatePhone(phone)
{
    if(phone.length==10)
    {
        return true;
    }
    else
    {
        alert("Phone Number should contain 10 digits");
        return false;
    }
}
