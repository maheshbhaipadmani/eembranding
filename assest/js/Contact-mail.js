const contactform = document.getElementById("contact-form");
contactform.addEventListener("submit", function (event) {
    event.preventDefault();
    console.log("Form submitted event triggered.");

    // Gather data from the form
 // Accessing the form field values
const name = document.getElementById("name").value;
const email = document.getElementById("email").value;
const number = document.getElementById("number").value;
const subject = document.getElementById("subject").value;
const message = document.getElementById("message").value;


console.log("Collected form data:", { name, email, number, subject, message });


    // Create email data
    const emailData = {
        "Host": "216.10.241.228",
        "Port": "587",
        "SMTPSecure": "ssl",
        "SenderEmail": "hitixa.bhuva@uniqueconsumerservices.com",
        "SenderEmailPassword": "1f1UOc{3U*64",  
        "ReciverEmail": "eembranding@gmail.com",
        "Subject": subject,
        "Body": `
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEM Branding - Contact Information</title>
    <!--[if mso]>
    <noscript>
    <xml>
        <o:OfficeDocumentSettings>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    </noscript>
    <![endif]-->
    <style type="text/css">
        /* Client-specific resets */
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; }
       
        /* Reset styles */
        img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
       
        /* iOS blue links */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
       
        /* Gmail blue links */
        u + #body a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
        }
             .title-logo{
            font-size: 35px;
        }
             .title-logo span{
            color: #de202a;
        }
       
        /* Samsung blue links */
        #MessageViewBody a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
        }
       
        /* Dark mode styles */
        @media (prefers-color-scheme: dark) {
            .darkmode-bg { background-color: #222222 !important; }
            .darkmode-text { color: #f1f1f1 !important; }
            .darkmode-button { background-color: #e42c3b !important; border-color: #e42c3b !important; }
            .darkmode-link { color: #e67981 !important; }
            .darkmode-border { border-color: #444444 !important; }
            .darkmode-secondary-bg { background-color: #333333 !important; }
            .darkmode-table-border { border-color: #444444 !important; }
            .darkmode-table-header { background-color: #333333 !important; }
            .darkmode-table-row-alt { background-color: #2a2a2a !important; }
        }
       
        /* Responsive styles */
        @media screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
                max-width: 100% !important;
            }
            .fluid {
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            .stack-column-center {
                text-align: center !important;
            }
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
            .content-padding {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }
            .small-table-padding {
                padding: 5px !important;
            }
            
            /* REMOVED: The table stacking styles are removed below */
            /* Instead, we'll add styles to keep the table layout intact but make it scrollable */
            .data-table-container {
                overflow-x: auto !important;
                -webkit-overflow-scrolling: touch !important;
                display: block !important;
                width: 100% !important;
            }
            
            .data-table {
                min-width: 100% !important;
                width: 100% !important;
            }
            
            .data-table td, 
            .data-table th {
                white-space: nowrap !important;
                font-size: 12px !important;
                padding: 8px !important;
            }
            
            /* Adjust column widths for mobile */
            .data-table th:nth-child(1),
            .data-table td:nth-child(1) {
                width: 8% !important;
            }
            
            .data-table th:nth-child(2),
            .data-table td:nth-child(2) {
                width: 32% !important;
            }
            
            .data-table th:nth-child(3),
            .data-table td:nth-child(3) {
                width: 60% !important;
            }
            
            .logo {
                max-width: 200px !important;
                height: auto !important;
            }
        }
    </style>
</head>
<body bgcolor="#f4f4f4" class="darkmode-bg" width="100%" style="margin: 0; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 1.5; color: #444444; -webkit-font-smoothing: antialiased;">
    <!-- Preheader text -->
    <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
        Your contact details have been received - EEM Branding will connect with you shortly.
    </div>
   
    <center style="width: 100%; background-color: #f4f4f4;" class="darkmode-bg">
        <div style="max-width: 680px; margin: 0 auto;" class="email-container">
            <!-- Email Body -->
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                <!-- Brand Strip -->
                <tr>
                    <td style="padding: 0;">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td bgcolor="#e42c3b" style="height: 5px; font-size: 0; line-height: 0;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
               
                <!-- Header -->
                <tr>
                    <td style="padding: 0;">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td bgcolor="#ffffff" class="darkmode-bg" style="text-align: center; padding: 30px 20px 25px 20px;">
                                    
                                <h1>EEM Branding </h1>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
               
                <!-- Hero Section -->
                <tr>
                    <td bgcolor="#e42c3b" style="padding: 40px 30px; color: #ffffff; text-align: center;">
                        <h1 style="margin: 0 0 10px 0; font-weight: 700; font-size: 28px; line-height: 36px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; letter-spacing: -0.5px;">Contact Details</h1>
                        <p style="margin: 0; font-size: 16px; line-height: 24px;">Below is a summary of the information you provided in your request. We'll be in touch shortly to discuss your needs.</p>
                    </td>
                </tr>
             
                <!-- Contact Data Table -->
                <tr>
                    <td bgcolor="#ffffff" class="darkmode-bg content-padding" style="padding: 30px 30px 30px 30px;">
                        <!-- Added a wrapper div with overflow properties -->
                        <div class="data-table-container" style="overflow-x: auto; -webkit-overflow-scrolling: touch; width: 100%;">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-radius: 6px; overflow: hidden; box-shadow: 0 3px 10px rgba(0,0,0,0.08);" class="darkmode-border">
                                <tr>
                                    <td style="padding: 0;">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" class="data-table">
                                            <!-- Table Header -->
                                            <tr style="background-color: #f8f8f8;" class="darkmode-table-header">
                                                <th style="text-align: left; padding: 12px 15px; font-size: 13px; font-weight: 600; color: #333333; border-bottom: 2px solid #e42c3b; width: 10%;" class="darkmode-text">#</th>
                                                <th style="text-align: left; padding: 12px 15px; font-size: 13px; font-weight: 600; color: #333333; border-bottom: 2px solid #e42c3b; width: 35%;" class="darkmode-text">Contact Form Data</th>
                                                <th style="text-align: left; padding: 12px 15px; font-size: 13px; font-weight: 600; color: #333333; border-bottom: 2px solid #e42c3b; width: 55%;" class="darkmode-text">Profile Details</th>
                                            </tr>
                                           
                                            <!-- Table Row 1 -->
                                            <tr>
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #555555; text-align: center;" class="darkmode-text darkmode-table-border">1</td>
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #333333; font-weight: 600;" class="darkmode-text darkmode-table-border">Full Name</td>
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #555555;" class="darkmode-text darkmode-table-border">${name}</td>
                                            </tr>
                                           
                                            <!-- Table Row 2 -->
                                            <tr style="background-color: #fafafa;" class="darkmode-table-row-alt">
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #555555; text-align: center;" class="darkmode-text darkmode-table-border">2</td>
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #333333; font-weight: 600;" class="darkmode-text darkmode-table-border">Company Name</td>
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #555555;" class="darkmode-text darkmode-table-border">${email}</td>
                                            </tr>
                                           
                                            <!-- Table Row 3 -->
                                            <tr>
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #555555; text-align: center;" class="darkmode-text darkmode-table-border">3</td>
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #333333; font-weight: 600;" class="darkmode-text darkmode-table-border">Phone Number</td>
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #555555;" class="darkmode-text darkmode-table-border">${number}</td>
                                            </tr>
                                           
                                            <!-- Table Row 4 -->
                                            <tr style="background-color: #fafafa;" class="darkmode-table-row-alt">
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #555555; text-align: center;" class="darkmode-text darkmode-table-border">4</td>
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #333333; font-weight: 600;" class="darkmode-text darkmode-table-border">Email Address</td>
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #555555;" class="darkmode-text darkmode-table-border">${subject}</td>
                                            </tr>
                                           
                                            <!-- Table Row 5 -->
                                            <tr>
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #555555; text-align: center;" class="darkmode-text darkmode-table-border">5</td>
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #333333; font-weight: 600;" class="darkmode-text darkmode-table-border">Subject</td>
                                                <td style="padding: 14px 15px; font-size: 14px; border-bottom: 1px solid #eeeeee; color: #555555;" class="darkmode-text darkmode-table-border">${message}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </center>
</body>
</html>

    `,
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

    if (!name || !email || !number || !subject || !message) {
        console.log("Validation failed: Missing required fields.");
    
        if (!name) {
            toggleClassForField('name', 'border-danger', 3000);
        }
        if (!message) {   // OPTIONAL: if you want to validate company name too
            toggleClassForField('message', 'border-danger', 3000);
        }
        if (!subject) {
            toggleClassForField('subject', 'border-danger', 3000);
        }
        if (!email) {
            toggleClassForField('email', 'border-danger', 3000);
        }
        if (!number) {
            toggleClassForField('number', 'border-danger', 3000);
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

    const submitButton = document.getElementById("submit-button");
submitButton.disabled = true;
// submitButton.innerHTML = 'Sending... <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'; // Optional: show loading indicator

    // Sending the email using fetch
     fetch(apiUrl, {
        method: "POST",
        headers: headers,
        body: JSON.stringify(emailData),
    })
    .then((response) => response.json())
    .then((data) => {
        submitButton.disabled = false;
        submitButton.innerHTML = 'Send a message <span></span>';

        if (data.status) {
            console.log("Message sent successfully", data);
            showFeedback(
                "Message sent successfully",
                "col-12 text-center border-1 my-2 py-2 border-primary border text-primary"
            );
            clearForm();
        } else {
            console.log("Server returned an error", data);
            showFeedback(
                "Message sending failed. Please try again later.",
                "col-12 text-center border-1 py-2 border-danger border text-danger"
            );
        }
    })
    .catch((error) => {
        console.error("Error while sending request:", error);
        submitButton.disabled = false;
        submitButton.innerHTML = 'Send a message <span></span>';
        showFeedback(
            "An error occurred while sending the message. Please try again later.",
            "col-12 text-center border-1 py-2 border-danger border text-danger"
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

function showFeedback(message, classNames) {
    console.log(`Showing feedback: "${message}"`);
    const feedback = document.getElementById('feedback');
    feedback.textContent = message;
    feedback.className = classNames;
    setTimeout(() => {
        console.log("Clearing feedback message.");
        feedback.textContent = '';
        feedback.className = ''; // Remove all classes
    }, 3000); // Remove feedback after 3 seconds 
}

function clearForm() {
    console.log("Clearing form fields...");
    document.getElementById('name').value = '';
    document.getElementById('email').value = '';
    document.getElementById('number').value = '';
    document.getElementById('subject').value = '';
    document.getElementById('message').value = '';
    console.log("Form reset successfully.");
}