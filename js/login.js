function onChangeCPF() {
    toggleButtonsDisable();
    toggleEmailErrors();
}

function onChangeCNPJ() {
    toggleButtonsDisable();
    togglePasswordErrors();
} 

function toggleAccount() {
    const conta2 = document.getElementById("conta").value;
    if (conta2 == 'CPF') {
        document.getElementById("CPF").style.display = "none";
    } else {
        document.getElementById("CPF").style.display = "none";
    }

    const conta3 = document.getElementById("conta").value;
    if (conta3 == 'CNPJ') {
        document.getElementById("CNPJ").style.display = "none";
    } else {
        document.getElementById("CNPJ").style.display = "none";
    }
    
    
    // if (validateEmail(email)) {
    //     document.getElementById("email-invalid-error").style.display = "none";
    // } else {
    //     document.getElementById("email-invalid-error").style.display = "block";
    // }
}

function togglePasswordErrors() {
    const password = document.getElementById("senha").value;
    if (!password) {
       document.getElementById("password-required-error").style.display = "block";
    } else {
       document.getElementById("password-required-error").style.display = "none";
    }
}

function toggleButtonsDisable() {
    const emailValid = isEmailValid();
    document.getElementById("recover-password-button").disabled = !emailValid;

    const passwordValid = isPasswordValid();
    document.getElementById("login-button").disabled = !emailValid || !passwordValid;
}

function isEmailValid() {
    const email = document.getElementById("email").value;
    if (!email) {
        return false;
    }
    return validateEmail(email);
}

function isPasswordValid() {
    const password = document.getElementById("senha").value;
    if (!password) {
        return false;
    }
    return true;
}

function validateEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}