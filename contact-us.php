<?php
$Title = "Contact EEM Branding | Get in Touch with Our Experts";
$MetaDescription = "Reach out to EEM Branding for expert branding, marketing, and design services in Ahmedabad. Contact us today to discuss how we can elevate your brand.";
$MetaKeywords = "contact EEM Branding, branding services Ahmedabad, marketing consultation, design services inquiry, get in touch";
?>

<?php
include __DIR__ . '/A_Layout/Header/header.php';
?>
   
    <main class="main-area">
        
        <section class="breadcrumb-area-two ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="breadcrumb-content-two">
                            <h1 class="title">Contact Us</h1>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="breadcrumb-shape">
                            <img data-parallax="{&quot;x&quot; : 0 , &quot;y&quot; : 100 }"
                                src="./assest/img/icon/Untitled-2.png" alt="Shape">
                            <img src="./assest/img/icon/Untitled-3.png" alt="Shape">
                        </div>
                    </div>
                </div>
            </div>
        </section>

                <div data-elementor-type="wp-page" data-elementor-id="214" class="elementor elementor-214">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-d0422a7 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                data-id="d0422a7" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c399357"
                        data-id="c399357" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-70f6d47 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                                data-id="70f6d47" data-element_type="section" style="margin-top:3rem;"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ec2eac5"
                                        data-id="ec2eac5" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-2a4a9fa elementor-widget elementor-widget-image"
                                                data-id="2a4a9fa" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img fetchpriority="high" decoding="async" width="514" height="481"
                                                        src="./assest/img/contact/contact_img.png"
                                                        class="attachment-full size-full wp-image-1081" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-20eaf75"
                                        data-id="20eaf75" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-dd5388d elementor-widget elementor-widget-heading"
                                                data-id="dd5388d" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Send a
                                                        Message</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f02b63c elementor-widget elementor-widget-shortcode"
                                                data-id="f02b63c" data-element_type="widget"
                                                data-widget_type="shortcode.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-shortcode">
                                                        <div class="wpcf7 js" id="wpcf7-f1342-p214-o1" lang="en-US"
                                                            dir="ltr" data-wpcf7-id="1342">
                                                            <div class="screen-reader-response">
                                                                <p role="status" aria-live="polite" aria-atomic="true">
                                                                </p>
                                                                <ul></ul>
                                                            </div>
                                                            <form class="contact-form"  id="contact-form">
                                                              <div style="display: flex; gap:10px; margin-bottom: 10px;">
                                                                <input type="text" id="name" placeholder="Your Name">
                                                                <input type="email" id="email" placeholder="Email address">
                                                              </div>
                                                              <div style="display: flex; gap:10px; margin-bottom: 10px;">
                                                                <input type="text" id="number" placeholder="Phone number">
                                                                <input type="text" id="subject" placeholder="Subject">
                                                              </div>
                                                              <textarea placeholder="Write message" id="message" rows="4" style="height:180px"></textarea>
                                                               <button type="submit" class="btn">Send a message <span></span></button>
                                                               <!-- Feedback -->
                                                             <div id="feedback-container" class="fixed top-0 end-0 p-3 z-[1050]">
                                                               <div id="feedback" class="hidden alert" role="alert"></div>
                                                             </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

            
        </div>

        <script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.wpcf7-form');
    
    if (!form) return;

    form.addEventListener('submit', function (e) {
        // Clear previous errors
        form.querySelectorAll('.form-error').forEach(el => el.remove());
        let isValid = true;

        // Input fields
        const name = form.querySelector('input[name="your-name"]');
        const email = form.querySelector('input[name="your-email"]');
        const phone = form.querySelector('input[name="your-number"]');
        const subject = form.querySelector('input[name="your-subject"]');
        const message = form.querySelector('textarea[name="your-message"]');

        // Helper: show error
        const showError = (input, msg) => {
            const error = document.createElement('div');
            error.className = 'form-error';
            error.style.color = 'red';
            error.style.fontSize = '0.9em';
            error.textContent = msg;
            input.parentNode.appendChild(error);
            isValid = false;
        };

        // Validations
        if (!name.value.trim()) showError(name, 'Name is required');
        if (!email.value.trim()) showError(email, 'Email is required');
        else if (!/^\S+@\S+\.\S+$/.test(email.value)) showError(email, 'Enter a valid email');
        
        if (!phone.value.trim()) showError(phone, 'Phone is required');
        else if (!/^\d{10}$/.test(phone.value)) showError(phone, 'Enter a valid 10-digit number');

        if (!subject.value.trim()) showError(subject, 'Subject is required');
        if (!message.value.trim()) showError(message, 'Message is required');

        if (!isValid) e.preventDefault();
    });
});
</script>

<style>
    .form-error {
  margin-top: 5px;
  color: red;
  font-weight: 400;
}

</style>
        <?php
include __DIR__ . '/A_Layout/Footer/footer.php';
?>