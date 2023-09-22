

function confirmPassword() {
    const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");
    
    if(password.value !== confirmPassword.value){
        confirmPassword.setCustomValidity("Please check password!");
    } else {
        confirmPassword.setCustomValidity('');
    }
}

document.getElementById("s-btn").addEventListener('click', confirmPassword);


function togglePass() {
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirmPassword");
    if(password.type === "password"){
        password.type = "text";
        confirmPassword.type = "text";
    } else {
        password.type = "password";
        confirmPassword.type = "password";
    }
}

document.getElementById("togglePass").addEventListener('click', togglePass);