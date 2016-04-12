var contactForm = document.querySelector("#contact-form");

document.addEventListener("DOMContentLoaded", function() {
    
    if (contactForm === null || contactForm.tagName.toUpperCase() !== 'FORM') {
        throw new Error("There should be FORM here as the first parameter. Instead, I got " + formElement.tagName + ". Gutted.");
    }
	
    contactForm.noValidate = true;
    
    contactForm.addEventListener('submit', function(event) {
        if (validateForm(contactForm) === false) {
            event.preventDefault();
        }
    });
});

function validateForm(formElement) {
    var isError = false;
    var elements = formElement.elements;
    for (var i = 0; i < elements.length; i += 1) {
        var isValid = hasDataFail(elements[i]);
        if (!isValid) {
            isError = true;
        }
    }
    return !isError;
}


//Has data failed? -----------------------------------------------------------------------------

function hasDataFail(field) {
    var errorMsg = "";
    var errorSpan = document.querySelector("#" + field.name + "-error");



    // email check ------------------------------------------------------------------------------------

    if (field.type === "email" && !isEmail(field.value)) {
        errorMsg = "please enter a valid email";
    }

    // Min length check----------------------------------------------------------------------

    if (field.minLength > 0 && field.value.length < field.minLength) {
        errorMsg = "Must be " + field.minLength + " or more characters long.";
    }


    // Is this field required---------------------------------------------------------------------

    if (field.required && field.value.trim() === "") {
        errorMsg = "This field is required";
    }

    if (errorSpan !== null) {
        if (errorMsg !== "") {
            errorSpan.innerHTML = errorMsg;
            field.classList.add('invalid');
            errorSpan.classList.add('danger');

            return false;
        } else {
            errorSpan.innerHTML = "";
            if (errorSpan.classList.contains('danger')) {
                errorSpan.classList.remove('danger');
            }
            if (field.classList.contains('invalid')) {
                field.classList.remove('invalid');
            }
        }
    }

    return true;
}

function needsToBeValidated(field) {
    return ['submit', 'reset', 'button', 'hidden', 'fieldset'].indexOf(field.type) === -1;
}

function isEmail(input) {
    return input.match(/^([a-z0-9_.\-+]+)@([\da-z.\-]+)\.([a-z\.]{2,})$/);
}









