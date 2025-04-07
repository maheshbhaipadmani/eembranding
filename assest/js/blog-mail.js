const contactform = document.getElementById("contact-form");
contactform.addEventListener("submit", function (event) {
    event.preventDefault();
    console.log("Form submitted event triggered.");

    // Gather data from the form
    const fullName = document.getElementById("fullName").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const subject = document.getElementById("subject").value;
    const message = document.getElementById("description").value;

    console.log("Collected form data:", { fullName, email, phone, subject, message });

    // Create email data
    const emailData = {
        "Host": "216.10.241.228",
        "Port": "587",   
    "SMTPSecure": "ssl", 
        "SenderEmail": "hitixa.bhuva@uniqueconsumerservices.com",
        "SenderEmailPassword": "EWE1{@1@^9cE",
        "ReciverEmail": "patelhitixa4439@gmail.com",
        "Subject": subject,   
        "Body": `Name: ${fullName}
        Number: ${phone}
        Email: ${email}
        Message: ${message}`  
    };

    console.log("Email data prepared:", emailData);

    const apiUrl = "./Mail/test.php";
    const headers = {
        "Content-Type": "application/json",
    };

    console.log("API URL:", apiUrl);

    function toggleClassForField(fieldId, className, duration) {
        console.log(`Adding class ${className} to ${fieldId} for ${duration}ms`);
        const field = document.getElementById(fieldId);
        field.classList.add(className);
        setTimeout(() => {
            field.classList.remove(className);
            console.log(`Removed class ${className} from ${fieldId}`);
        }, duration);
    }

    console.log("Checking form validation...");

    if (!fullName || !email || !message || !phone || !subject) {
        console.log("Validation failed: Missing required fields.");

        if (!fullName) {
            toggleClassForField('fullName', 'border-danger', 3000);
        }
        if (!phone) {
            toggleClassForField('phone', 'border-danger', 3000);
        }
        if (!email) {
            toggleClassForField('email', 'border-danger', 3000);
        }
        if (!message) {
            toggleClassForField('description', 'border-danger', 3000);
        }
        if (!subject) {
            toggleClassForField('subject', 'border-danger', 3000);
        }

        showFeedback('Please fill in all required fields.', 'col-12 text-center py-2 border-danger border text-danger mt-3');
        return;
    }

    console.log("Validating email...");
    if (!isValidEmail(email)) {
        console.log("Invalid email entered.");
        showFeedback('Please enter a valid email address.', 'col-12 text-center border-1 py-2 border-info border text-info mt-3');
        return;
    }

    console.log("Sending email request...");
   // Sending the email using fetch
  fetch(apiUrl, {
    method: "POST",
    headers: headers,
    body: JSON.stringify(emailData),
  })
    .then((response) => response.json())
    .then((data) => {
        document.querySelector('input[name="fullName"]').value = "";
        document.querySelector('input[name="email"]').value = "";
        document.querySelector('input[name="phone"]').value = "";
        document.querySelector('input[name="subject"]').value = "";
        document.querySelector('textarea[name="description"]').value = "";
      showFormFeedback("Message sent successfully", "text-primary", true);

    })
    .catch((error) => {
      console.error("Error sending email:", error);
      showFormFeedback(
        "Message sending failed. Please try again late.",
        "text-danger"
      );
    });

});

function isValidEmail(email) {
    console.log("Checking email format...");
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const isValid = emailRegex.test(email);
    console.log(`Email validation result for ${email}: ${isValid}`);
    return isValid;
}

function showFormFeedback(message, className) {
    const feedbackElement = document.createElement("div");
    feedbackElement.className = `alert ${className}`;
    feedbackElement.textContent = message;

    // Append feedback message to the form (adjust based on your form structure)
    const form = document.getElementById("contact-form"); // Change to your form ID
    form.appendChild(feedbackElement);

    // Remove message after 5 seconds
    setTimeout(() => {
        feedbackElement.remove();
    }, 5000);
}

function clearForm() {
    console.log("Clearing form fields...");
    document.getElementById('fullName').value = '';
    document.getElementById('phone').value = '';
    document.getElementById('email').value = '';
    document.getElementById('subject').value = '';
    document.getElementById('description').value = '';
    console.log("Form reset successfully.");
}
