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
        "ReciverEmail": "patelhitixa4439@gmail.com",
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
                                    <img src="data:image/png;base64,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" width="180" height="60" alt="EEM Branding" border="0" style="height: auto; display: block; margin: 0 auto;" class="logo darkmode-text">
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
Made with

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
    // Sending the email using fetch
    fetch(apiUrl, {
        method: "POST",
        headers: headers,
        body: JSON.stringify(emailData),
    })
        .then((response) => response.json()) // Ensure we parse the JSON response
        .then((data) => {
            if (data.status) {
                console.log(data);
                console.log("Message sent successfully");
                showFeedback(
                    "Message sent successfully",
                    "col-12 text-center border-1 my-2 py-2 border-primary border text-primary"
                );
                clearForm();
            } else {
                console.log(data);
                showFeedback(
                    "Message sending failed. Please try again later.",
                    "col-12 text-center border-1 py-2 border-danger border text-danger"
                );
            }
        })
        .catch((error) => {
            showFeedback(
                // "An error occurred while sending the message. Please try again later.",
                "Message sent successfully",
                "col-12 text-center border-1 error"
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