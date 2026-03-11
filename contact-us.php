<?php
$Title = "Contact EEM Branding | Get in Touch with Our Experts";
$MetaDescription = "Reach out to EEM Branding for expert branding, marketing, and design services in Ahmedabad. Contact us today to discuss how we can elevate your brand.";
$MetaKeywords = "contact EEM Branding, branding services Ahmedabad, marketing consultation, design services inquiry, get in touch";
?>

<?php
include __DIR__ . '/A_Layout/Header/header.php';
?>

<main>

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
                            src="./assest/img/icon/Untitled-2.png"
                            loading="lazy" alt="Shape">
                        <img src="./assest/img/icon/Untitled-3.png"
                            loading="lazy" alt="Shape">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <div class="mb-3">
                        <img src="./assest/img/contact/phone.png" alt="Phone"
                            width="50" height="50">
                    </div>
                    <div class="card-body p-0">
                        <p class="mb-0">+91 9081813238</p>
                        <p class="mb-0">+91 9913535550</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <div class="mb-3">
                        <img src="./assest/img/contact/email.png" alt="Email"  loading="lazy"
                            width="50" height="50">
                    </div>
                    <div class="card-body p-0">
                        <p class="mb-0">info@eembranding.com</p>
                        <p class="mb-0">eembranding@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 text-center border-0 shadow-sm p-4">
                    <div class="mb-3">
                        <img src="./assest/img/contact/address.png"  loading="lazy"
                            alt="Address" width="50" height="50">
                    </div>
                    <div class="card-body p-0">
                        <p class="mb-0 text-muted">KP Epitome, A-1116, near Dav Intl. School, Makarba Ahmedabad - 380051
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section class="py-5 bg-light">
    <div class="container-fluid px-4">
        <div class="row g-4 align-items-stretch">
            
            <div class="col-lg-3 d-none d-lg-flex align-items-center justify-content-center">
                <div class="p-3">
                    <img src="./assest/img/contact/contact_img.png" 
                         class="img-fluid rounded shadow-sm" 
                         alt="Contact Illustration"
                         style="max-height: 400px; object-fit: contain;">
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4 p-md-5">
                        <div class="mb-4">
                            <h2 class="fw-bold mb-1">Get in Touch</h2>
                            <p class="text-muted">Fill out the form and our team will reach out.</p>
                        </div>
                        
                        <form id="contact-form">
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control py-2" id="name" placeholder="Full Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control py-2" id="email" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control py-2" id="number" placeholder="Phone Number">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control py-2" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="mb-4">
                                <textarea class="form-control" id="message" rows="6" placeholder="Your Message" style="resize: none;"></textarea>
                            </div>
                            <div class="d-inline-block">
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-bold" id="submit-button">
                                Send Message
                            </button>
                            </div>
                        </form>

                        <div id="feedback-container" class="mt-3">
                            <div id="feedback" class="alert d-none small" role="alert"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="h-100 rounded shadow-sm overflow-hidden border bg-white">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.633513360677!2d72.5029497!3d23.0005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b33a7556f8f%3A0x7d6b412e8b0b5362!2sKP%20Epitome!5e0!3m2!1sen!2sin!4v1709820000000" 
                        width="100%" 
                        height="100%" 
                        style="border:0; min-height: 450px;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>


    <script src="../../../assest/js/pContact-mail.js"></script>

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