//Written by Manaf Akil.

let defaultMsg = "";
const emailOrPhone = document.getElementById('emailOrPhone');
const emailOrPhoneError = document.getElementById('emailOrPhoneError');
const passwordInput = document.getElementById('password');
const passwordError = document.getElementById('passwordError');

// Method to validate email or phone number
function validateEmailOrPhone() {
    let emailOrPhoneValue = emailOrPhone.value;
    /*W3school JavaScript RegExp Reference https://www.w3schools.com/jsref/jsref_obj_regexp.asp*/ 
    let regexp = /\S+@\S+\.\S{2,}/; 

    if (regexp.test(emailOrPhoneValue)) {
        return defaultMsg;
    } else {
        emailOrPhoneError.textContent = "Please enter a valid email";
        return "Please enter a valid email";
    }
}

// Method to go to step 2
function goToStep2() {
    let emailOrPhoneValue = emailOrPhone.value;
    
    if (emailOrPhoneValue === "") {
        emailOrPhoneError.textContent = "Please enter your email";
    } else {
        let emailOrPValidation = validateEmailOrPhone();
        if (emailOrPValidation === defaultMsg) {
            emailOrPhoneError.textContent = "";
            
            // Copy the value of the email or phone to the hidden input field for the next step
            document.getElementById('emailHidden').value = emailOrPhoneValue;
            console.log("$$$$$$$$$$$$$$$$$$");
            /*Stack overflow toggle show/hide div with button?
            https://stackoverflow.com/questions/4528085/toggle-show-hide-div-with-button*/
            // Toggle show/hide div
            document.getElementById('step1').style.display = 'none';  
            document.getElementById('step2').style.display = 'flex';

        }
        console.log("YYYYYYY");
    }
}


// Method to validate password
function validatePassword() {
    let passwordValue = passwordInput.value;
    let regexp = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/; 

    if (regexp.test(passwordValue)) {
        console.log("Password is valid");
        return defaultMsg;
    } else {
        console.log("Password is invalid");
        passwordError.textContent = "Your password is incorrect. Please re-enter your password.";
        return "Your password is incorrect. Please re-enter your password.";
    }
}

// Event handler for submit event
function validate() {
    let valid = true;

    let emailOrPValidation = validateEmailOrPhone();
    if (emailOrPValidation !== defaultMsg) {
        emailOrPhoneError.textContent = emailOrPValidation;
        valid = false;
    } else {
        emailOrPhoneError.textContent = defaultMsg;
    }

    let passwordValidation = validatePassword();
    if (passwordValidation !== defaultMsg) {
        passwordError.textContent = passwordValidation;
        valid = false;
    } else {
        passwordError.textContent = defaultMsg;
    }

    return valid;
}

document.getElementById('formStep2').addEventListener('submit', function(event) {
    if (!validate()) {
        event.preventDefault();
    } else {
        alert("Form submitted successfully!");
    }
});

// Add event listener to the email or phone input
emailOrPhone.addEventListener("blur", () => {
    let emailOrPValidation = validateEmailOrPhone();
    if (emailOrPValidation === defaultMsg) {
        emailOrPhoneError.textContent = defaultMsg;
    } else {
        emailOrPhoneError.textContent = emailOrPValidation;
    }
});

// Add event listener to the password input
passwordInput.addEventListener("blur", () => {
    console.log("Password Input Lost Focus");
    let passwordValidation = validatePassword();
    if (passwordValidation === defaultMsg) {
        passwordError.textContent = defaultMsg;
    } else {
        passwordError.textContent = passwordValidation;
    }
});
