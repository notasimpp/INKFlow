function validate() {
    var uname = document.getElementById("uname").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var pass2 = document.getElementById("pass2").value;
    var error = document.getElementById("error");
    
    if (uname.length == 0) {
        error.textContent = "Username cannot be empty.";
        return false;
    }else if (email.length ==0){
        error.textContent = "Email cannot be empty.";
        return false;
    }else if (pass.length == 0) {
        error.textContent = "Password cannot be empty.";
        return false;
    }else if (pass2.length ==0){
        error.textContent = "Password cannot be empty.";
        return false;
    }else if ( pass != pass2){
        error.textContent = "Password and Cofirm Password should match.";
        return false;
    }else{
        error.textContent = "Form submitted sucessfully.";
        return true;
    }

    }