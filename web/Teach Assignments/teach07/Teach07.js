function validateDetails() {
    var password = document.getElementsByName('userlogin_pass')[0];
    var password2 = document.getElementsByName('userlogin_pass2')[0];
    
    if (password.value != password2.value)
    {
        document.getElementsByClassName('asterisk')[0].innerHTML='*';
        document.getElementsByClassName('asterisk')[1].innerHTML='*';
        document.getElementById('message').innerHTML='Passwords do not match';
        
        return false;
    }
    
    if(password.value.length < 7 || /\d/.test(password.value))
    {
        document.getElementById('message').innerHTML='Password must contain at least 7 characters and a number';
        
        return false;
    }
    
    
    
    return true;
}