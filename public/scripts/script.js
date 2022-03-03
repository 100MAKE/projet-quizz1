var form = document.querySelector('form');
var emailErrorDisplay = document.getElementById('email-error-msg');
var passwordErrorDisplay = document.getElementById('password-error-msg');
var emailField = document.querySelector('input[name=email]');
var passwordField = document.querySelector('input[name=password]');


function setString(field) {
    var fieldName = field.name;
    return fieldName.substring(0, 1).toUpperCase() + fieldName.substring(1, fieldName.length);
}

function checkEmail(value) {
    if (value == "") {
        return setString(emailField) + " obligatoire";
    } else {
        const re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        if (value.match(re)) {
            return "";
        } else {
            return setString(emailField) + " invalide";
        }
    }
}

function checkPassword(value) {
    if (value == "") {
        return setString(passwordField) + " obligatoire";
    } else {
        return "";
    }
}

form.addEventListener('submit', (e) => {
    var emailErrorMsg = checkEmail(emailField.value);
    if (emailErrorMsg != "") {
        emailErrorDisplay.innerText = emailErrorMsg;
        emailErrorDisplay.style.visibility = "visible";
        e.preventDefault();
    }
    var passwordErrorMsg = checkPassword(passwordField.value);
    if (passwordErrorMsg != "") {
        console.log(passwordField.value);
        passwordErrorDisplay.innerText = passwordErrorMsg;
        passwordErrorDisplay.style.visibility = "visible";
        e.preventDefault();
    }
})