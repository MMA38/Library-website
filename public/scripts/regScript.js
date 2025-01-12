//Written by Manaf Akil.

let emailInput = document.querySelector("#email");
let loginInput = document.querySelector("#login");
let firstPasswordInput = document.getElementById("pass");
let secondPasswordInput = document.getElementById("pass2");
let termInput = document.querySelector("#terms");
let cityInput = document.querySelector("#city")
let provInput = document.querySelector("#prov")
let CountryInput = document.querySelector("#count")
let Street = document.querySelector("#str")
let PostalInput = document.querySelector("#Postal")
let phoneInput = document.querySelector("#phone")
// Create paragraphs to display the error and append it to the related elements
let emailError = document.createElement("p");
emailError.setAttribute("class", "warning");
document.querySelectorAll(".textfield")[0].append(emailError);

let userNameError = document.createElement("p");
userNameError.setAttribute("class", "warning");
document.querySelectorAll(".textfield")[1].append(userNameError);

let cityError = document.createElement("p");
cityError.setAttribute("class", "warning");
document.querySelectorAll(".divide")[0].append(cityError);

let provincError = document.createElement("p");
provincError.setAttribute("class", "warning");
document.querySelectorAll(".divide")[1].append(provincError);

let countryError = document.createElement("p");
countryError.setAttribute("class", "warning");
document.querySelectorAll(".divide")[2].append(countryError);

let streetError = document.createElement("p");
streetError.setAttribute("class", "warning");
document.querySelectorAll(".divide")[3].append(streetError);

let postalError = document.createElement("p");
postalError.setAttribute("class", "warning");
document.querySelectorAll(".divide")[4].append(postalError);

let phoneError = document.createElement("p");
phoneError.setAttribute("class", "warning");
document.querySelectorAll(".divide")[5].append(phoneError);

let passwordError = document.createElement("p");
passwordError.setAttribute("class", "warning");
document.querySelectorAll(".textfield")[3].append(passwordError);

let confirmPasswordError = document.createElement("p");
confirmPasswordError.setAttribute("class", "warning");
document.querySelectorAll(".textfield")[4].append(confirmPasswordError);

let termError = document.createElement("p");
termError.setAttribute("class", "warning");
document.querySelectorAll(".checkbox")[0].append(termError);

// Define error messages
let emailErrorMsg = "Email address shouldn't be empty with the format xyx@xyz.xyz";
let userNameErrorMsg = "Please complete this required field";
let cityErrorMsg = "City name shouldn't be empty and must contain only letters";
let provinceErrorMsg = "Province name shouldn't be empty and must contain only letters";
let countryErrorMsg = "Country name shouldn't be empty and must contain only letters";
let streetErrorMsg = "Street shouldn't be empty and must be a valid address";
let postalErrorMsg = "Postal code should be in the format A1A 1A1";
let phoneErrorMsg = "Phone number should be in the format (xxx) xxx-xxxx";
let passwordErrorMsg = "Please enter Strong password (contain uppercase, number, and symbol)";
let confirmPasswordErrorMsg = "Passwords do not match. Please re-type your passwords.";
let termsErrorMsg = "You must agree before submitting";
let defaultMsg = "";


// Method to validate email
function validateEmail() {
    console.log("Validating Email");
    let email = emailInput.value;
    let regexp = /\S+@\S+\.\S{2,}/;

    if (regexp.test(email)) {
        console.log("Email is valid");
        return defaultMsg;
    } else {
        console.log("Email is invalid");
        return emailErrorMsg;
    }
}

// Method to validate user name
function validateUserName() {
    console.log("Validating User Name");
    let name = loginInput.value;
    let regexp = /^[a-zA-Z]{1,29}$/; 

    if (regexp.test(name)) {
        loginInput.value = name.toLowerCase();
        console.log("User name is valid");
        return defaultMsg;
    } else {
        console.log("User name is invalid");
        return userNameErrorMsg;
    }
}
// Method to validate City
function validateCity() {
    console.log("Validating City");
    let city = cityInput.value;
    let regexp = /^[a-zA-Z\s]+$/;

    if (regexp.test(city)) {
        console.log("City is valid");
        return defaultMsg;
    } else {
        console.log("City is invalid");
        return cityErrorMsg;
    }
}

// Method to validate Province
function validateProvince() {
    console.log("Validating Province");
    let province = provInput.value;
    let regexp = /^[a-zA-Z\s]+$/;

    if (regexp.test(province)) {
        console.log("Province is valid");
        return defaultMsg;
    } else {
        console.log("Province is invalid");
        return provinceErrorMsg;
    }
}

// Method to validate Country
function validateCountry() {
    console.log("Validating Country");
    let country = CountryInput.value;
    let regexp = /^[a-zA-Z\s]+$/;

    if (regexp.test(country)) {
        console.log("Country is valid");
        return defaultMsg;
    } else {
        console.log("Country is invalid");
        return countryErrorMsg;
    }
}

// Method to validate Street
function validateStreet() {
    console.log("Validating Street");
    let street = Street.value;
    let regexp = /^[a-zA-Z0-9\s,.-]+$/;

    if (regexp.test(street)) {
        console.log("Street is valid");
        return defaultMsg;
    } else {
        console.log("Street is invalid");
        return streetErrorMsg;
    }
}

// Method to validate Postal Code
function validatePostal() {
    console.log("Validating Postal Code");
    let postal = PostalInput.value;
    let regexp = /^[A-Z]\d[A-Z] \d[A-Z]\d$/;  /*Database course lab6b*/

    if (regexp.test(postal)) {
        console.log("Postal Code is valid");
        return defaultMsg;
    } else {
        console.log("Postal Code is invalid");
        return postalErrorMsg;
    }
}

// Method to validate Phone Number
function validatePhone() {
    console.log("Validating Phone Number");
    let phone = phoneInput.value;
    let regexp = /^\(\d{3}\) \d{3}-\d{4}$/; /*Database course lab6b*/

    if (regexp.test(phone)) {
        console.log("Phone Number is valid");
        return defaultMsg;
    } else {
        console.log("Phone Number is invalid");
        return phoneErrorMsg;
    }
}

// Method to validate password
function validatePassword() {
    console.log("Validating Password");
    let password = firstPasswordInput.value;
    /*JavaScript Program to Validate Password using Regular Expressions
    https://www.geeksforgeeks.org/javascript-program-to-validate-password-using-regular-expressions/*/ 
    let regexp = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/;  

    if (regexp.test(password)) {
        console.log("Password is valid");
        return defaultMsg;
    } else {
        console.log("Password is invalid");
        return passwordErrorMsg;
    }
}

// Method to validate confirm password
function validateConfirmPassword() {
    console.log("Validating Confirm Password");
    let password = firstPasswordInput.value;
    let confirmPassword = secondPasswordInput.value;

    if (password === "" || confirmPassword === "") {
        console.log("Passwords cannot be blank.");
        return "Passwords cannot be blank.";
    }

    if (confirmPassword === password) {
        console.log("Passwords match");
        return defaultMsg;
    } else {
        console.log("Passwords do not match");
        return confirmPasswordErrorMsg;
    }
}

// Method to validate the terms
function validateTerms() {
    console.log("Validating Terms");
    if (termInput.checked) {
        console.log("Terms are accepted");
        return defaultMsg;
    } else {
        console.log("Terms are not accepted");
        return termsErrorMsg;
    }
}

// Event handler for submit event
function validate() {
    console.log("Form Submitted");
    let valid = true;

    let emailValidation = validateEmail();
    if (emailValidation !== defaultMsg) {
        emailError.textContent = emailValidation;
        valid = false;
    } else {
        emailError.textContent = "";
    }

    let userNameValidation = validateUserName();
    if (userNameValidation !== defaultMsg) {
        userNameError.textContent = userNameValidation;
        valid = false;
    } else {
        userNameError.textContent = "";
    }

    let cityValidation = validateCity();
    if (cityValidation !== defaultMsg) {
        cityError.textContent = cityValidation;
        valid = false;
    } else {
        cityError.textContent = "";
    }

    let provinceValidation = validateProvince();
    if (provinceValidation !== defaultMsg) {
        provincError.textContent = provinceValidation;
        valid = false;
    } else {
        provincError.textContent = "";
    }

    let countryValidation = validateCountry();
    if (countryValidation !== defaultMsg) {
        countryError.textContent = countryValidation;
        valid = false;
    } else {
        countryError.textContent = "";
    }

    let streetValidation = validateStreet();
    if (streetValidation !== defaultMsg) {
        streetError.textContent = streetValidation;
        valid = false;
    } else {
        streetError.textContent = "";
    }

    let postalValidation = validatePostal();
    if (postalValidation !== defaultMsg) {
        postalError.textContent = postalValidation;
        valid = false;
    } else {
        postalError.textContent = "";
    }

    let phoneValidation = validatePhone();
    if (phoneValidation !== defaultMsg) {
        phoneError.textContent = phoneValidation;
        valid = false;
    } else {
        phoneError.textContent = "";
    }

    let passwordValidation = validatePassword();
    if (passwordValidation !== defaultMsg) {
        passwordError.textContent = passwordValidation;
        valid = false;
    } else {
        passwordError.textContent = "";
    }

    let secondPasswordValidation = validateConfirmPassword();
    if (secondPasswordValidation !== defaultMsg) {
        confirmPasswordError.textContent = secondPasswordValidation;
        valid = false;
    } else {
        confirmPasswordError.textContent = "";
    }

    let termsValidation = validateTerms();
    if (termsValidation !== defaultMsg) {
        termError.textContent = termsValidation;
        valid = false;
    } else {
        termError.textContent = "";
    }

    return valid;
}


// Event listener to empty the text inside the paragraphs when reset
function resetFormError() {
    console.log("Form Reset");
    emailError.textContent = defaultMsg;
    userNameError.textContent = defaultMsg;
    cityError.textContent = defaultMsg;
    provincError.textContent = defaultMsg;
    countryError.textContent = defaultMsg;
    streetError.textContent = defaultMsg;
    postalError.textContent = defaultMsg;
    phoneError.textContent = defaultMsg;
    passwordError.textContent = defaultMsg;
    confirmPasswordError.textContent = defaultMsg;
    termError.textContent = defaultMsg;
}


document.querySelector("form").addEventListener("reset", resetFormError);

// Add event listener to the email input
emailInput.addEventListener("blur", () => {
    console.log("Email Input Lost Focus");
    let emailValidation = validateEmail();
    if (emailValidation === defaultMsg) {
        emailError.textContent = defaultMsg;
    } else {
        emailError.textContent = emailValidation;
    }
});

// Add event listener to the user name input
loginInput.addEventListener("blur", () => {
    console.log("User Name Input Lost Focus");
    let userNameValidation = validateUserName();
    if (userNameValidation === defaultMsg) {
        userNameError.textContent = defaultMsg;
    } else {
        userNameError.textContent = userNameValidation;
    }
});

// Add event listener to the city input
cityInput.addEventListener("blur", () => {
    console.log("City Input Lost Focus");
    let cityValidation = validateCity();
    if (cityValidation === defaultMsg) {
        cityError.textContent = defaultMsg;
    } else {
        cityError.textContent = cityValidation;
    }
});

// Add event listener to the province input
provInput.addEventListener("blur", () => {
    console.log("Province Input Lost Focus");
    let provinceValidation = validateProvince();
    if (provinceValidation === defaultMsg) {
        provincError.textContent = defaultMsg;
    } else {
        provincError.textContent = provinceValidation;
    }
});


// Add event listener to the country input
CountryInput.addEventListener("blur", () => {
    console.log("Country Input Lost Focus");
    let countryValidation = validateCountry();
    if (countryValidation === defaultMsg) {
        countryError.textContent = defaultMsg;
    } else {
        countryError.textContent = countryValidation;
    }
});

// Add event listener to the street input
Street.addEventListener("blur", () => {
    console.log("Street Input Lost Focus");
    let streetValidation = validateStreet();
    if (streetValidation === defaultMsg) {
        streetError.textContent = defaultMsg;
    } else {
        streetError.textContent = streetValidation;
    }
});

// Add event listener to the postal input
PostalInput.addEventListener("blur", () => {
    console.log("Postal Input Lost Focus");
    let postalValidation = validatePostal();
    if (postalValidation === defaultMsg) {
        postalError.textContent = defaultMsg;
    } else {
        postalError.textContent = postalValidation;
    }
});

// Add event listener to the phone input
phoneInput.addEventListener("blur", () => {
    console.log("Phone Input Lost Focus");
    let phoneValidation = validatePhone();
    if (phoneValidation === defaultMsg) {
        phoneError.textContent = defaultMsg;
    } else {
        phoneError.textContent = phoneValidation;
    }
});

// Add event listener to the password
firstPasswordInput.addEventListener("blur", () => {
    console.log("Password Input Lost Focus");
    let passwordValidation = validatePassword();
    if (passwordValidation === defaultMsg) {
        passwordError.textContent = defaultMsg;
    } else {
        passwordError.textContent = passwordValidation;
    }
});

// Add event listener to the confirm password
secondPasswordInput.addEventListener("blur", () => {
    console.log("Confirm Password Input Lost Focus");
    let confirmPasswordValidation = validateConfirmPassword();
    if (confirmPasswordValidation === defaultMsg) {
        confirmPasswordError.textContent = defaultMsg;
    } else {
        confirmPasswordError.textContent = confirmPasswordValidation;
    }
});

// Add event listener to the terms checkbox
termInput.addEventListener("change", function () {
    if (this.checked) {
        termError.textContent = defaultMsg;
    }
});
