function validate(){
    var pass = document.getElementById("pass").value;
    var error = document.getElementById("error");
    var uname = document.getElementById("uname").value;
    
    
    
    if (uname.length == 0) {
        error.textContent = "Username cannot be empty.";
        return false;
    }else if (pass.length == 0) {
        error.textContent = "Password cannot be empty.";
        return false;
    }else{
        error.textContent = " ";
        return true;
    }
}