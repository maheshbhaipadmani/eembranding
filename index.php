<?php
include_once __DIR__ . '/A_Models/BLOG_Blog.php';
$Title = "Branding Agency in Ahmedabad | Shaping Brand Futures";
$MetaDescription = "As a trusted branding agency in Ahmedabad, we deliver innovative solutions that combine creativity, strategy, and design to elevate your brand.";
$MetaKeywords = "branding agency in Ahmedabad, best branding agency, advertising agency Ahmedabad, logo design Ahmedabad, digital marketing agency Ahmedabad, SEO services Ahmedabad, social media marketing Ahmedabad, PPC advertising Ahmedabad, 3D rendering company, brochure design Ahmedabad, creative design agency, website development Ahmedabad, mobile app development Ahmedabad, UI UX design Ahmedabad, branding solutions, business branding services, corporate branding Ahmedabad, brand identity design, best digital marketing agency, content marketing services";
?>

<?php
include __DIR__ . '/A_Layout/Header/header.php';
$testOBJ = new BLOG_Blog();
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$limit = 3;
$myaraa = $testOBJ->selectblog($page, $limit);
$total = $testOBJ->getBlogCount();
$totalPages = ceil($total / $limit);

reset($myaraa);
?>

<main>
    <!--1. start hero banner    -->
<picture>

<!-- 4K Screen -->
<source media="(min-width:1921px)" srcset="./assest/img/home/hero/eem-1920×108012.png">

<!-- Desktop / Laptop -->
<source media="(min-width:1010px)" srcset="./assest/img/home/hero/eem-1920×1080.webp">

<!-- Tablet -->
<source media="(min-width:768px)" srcset="./assest/img/home/hero/eem-768×1024.png">

<!-- Mobile -->
<img src="./assest/img/home/hero/eem-480×800.webp" alt="Hero Banner">

</picture>

</section>
    <!-- start hero banner    -->

    <!--2. start Branding Agency In Ahmedabad -->
    <div class="container mt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <div class="hero-intro-section ">
                    <div class="hero-intro-container">
                        <div class="hero-intro-content">
                            <div class="hero-intro-heading">
                                <h1>Branding Agency In Ahmedabad</h1>
                            </div>
                            <div class="hero-intro-text">
                                <p><span class="text-normal">Transform Your Business with Expert Branding, Marketing,
                                        and
                                        Design</span></p>
                                <p><span class="text-normal">At our </span><a
                                        href="services/advertising-agency-in-ahmedabad"><b>branding
                                            and advertising agency</b></a><span class="text-normal">, we believe
                                        that strong branding is the cornerstone of business success. Our creative team
                                        works closely with you to craft a unique identity that reflects your values,
                                        engages your audience, and sets you apart from competitors. Whether it’s a
                                        complete brand overhaul or a new campaign launch, we deliver solutions that
                                        drive impact.</span></p>
                                <p><span class="text-normal">In the digital age, visibility is everything. Our</span> <a
                                        href="services/digital-marketing-agency-ahmedabad"><b>digital marketing
                                            services</b></a><span class="text-normal"> are designed to help you reach
                                        the right
                                        audience through data-driven strategies. From search engine optimization (SEO)
                                        and social
                                        media marketing to pay-per-click advertising, we ensure your business gains the
                                        exposure it
                                        deserves.</span></p>
                                <p><span class="text-normal">For businesses in the laminate industry, we offer
                                        professional</span><a href="services/catalogue-design-company-in-ahmedabad">
                                        <b>laminate catalogue design services</b></a><span class="text-normal">
                                        that highlight the quality and variety of your products. Our catalogues are
                                        designed to be visually stunning and informative, providing your clients with a
                                        clear representation of your offerings.</span></p>
                                <p><span class="text-normal">Your website is your digital storefront. Our </span><a
                                        href="services/website-design-company-in-ahmedabad"><b>website design
                                            services</b></a><span class="text-normal"> focus on creating modern,
                                        responsive websites that offer seamless user
                                        experiences. We blend creativity with functionality to develop websites that not
                                        only look
                                        great but are also optimized for search engines and conversions.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Branding Agency In Ahmedabad -->
    <!--3. CREATIVE SOLUTIONS -->
    <section class="services-section py-5" style="background-color: #f3f9ff;">
        <div class="container">
            <div class="text-center mb-5">
                <div class="blog-small-title d-flex align-items-center justify-content-center mb-3">
                    <span class="line"></span>
                    <span class="mx-3 blog-text text-uppercase fw-bold text-danger">Creative Solutions</span>
                    <span class="line"></span>
                </div>
                <h2 class="blog-main-title fw-bold">Your Growth, Our Mission: <br> Leading Digital Marketing Agency.
                </h2>
            </div>

            <div class="row d-flex justify-content-center">
                <dic class="col-12">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card h-100 p-4 shadow-sm border-0 position-relative">
                                <div class="service-icon-box mb-4">
                                    <img src="./assest/img/home/icon/3-digital-Marketing.png"
                                        alt="Icon" class="service-icon">
                                </div>
                                <div class="service-content">
                                    <h4 class="title mb-3">
                                        <a href="services/catalogue-design-company-in-ahmedabad"
                                            class="text-decoration-none text-dark">Laminate
                                            Catalogue Design Services In Ahmedabad</a>
                                    </h4>
                                    <p class="text-muted">Transform your brand's identity into tangible excellence
                                        with our
                                        bespoke laminate folder designs. From sleek and professional to
                                        eye-catching and vibrant, our designs elevate your marketing
                                        materials, leaving a lasting impression on clients and partners
                                        alike.</p>
                                    <a href="services/catalogue-design-company-in-ahmedabad"
                                        class="btn btn-danger btn-sm read-more-btn">Read More</a>
                                </div>
                                <div class="hover-border-bottom"></div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card h-100 p-4 shadow-sm border-0 position-relative">
                                <div class="service-icon-box mb-4">
                                    <img src="./assest/img/home/icon/2-creative-design.png"
                                        alt="Icon" class="service-icon">
                                </div>
                                <div class="service-content">
                                    <h4 class="title mb-3">
                                        <a href="services/creative-design-agency-in-ahmedabad"
                                            class="text-decoration-none text-dark">Creative
                                            Designing Agency In Ahmedabad</a>
                                    </h4>
                                    <p class="text-muted">Elevate your brand's visual identity with our innovative
                                        and
                                        captivating creative designing services. From logos to branding
                                        materials, we bring your vision to life with flair and finesse.
                                    </p>
                                    <a href="services/creative-design-agency-in-ahmedabad"
                                        class="btn btn-danger btn-sm read-more-btn">Read More</a>
                                </div>
                                <div class="hover-border-bottom"></div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card h-100 p-4 shadow-sm border-0 position-relative">
                                <div class="service-icon-box mb-4">
                                    <img src="./assest/img/home/icon/3-digital-Marketing.png"
                                        alt="Icon" class="service-icon">
                                </div>
                                <div class="service-content">
                                    <h4 class="title mb-3">
                                        <a href="services/digital-marketing-agency-ahmedabad"
                                            class="text-decoration-none text-dark">Digital
                                            Marketing Agency In Ahmedabad</a>
                                    </h4>
                                    <p class="text-muted">Amplify your brand's online presence and generate targeted
                                        traffic with our comprehensive digital marketing services. From
                                        strategic planning to execution, we guide you through the
                                        digital landscape for maximum impact and ROI.</p>
                                    <a href="services/digital-marketing-agency-ahmedabad"
                                        class="btn btn-danger btn-sm read-more-btn">Read More</a>
                                </div>
                                <div class="hover-border-bottom"></div>
                            </div>

                        </div>
                    </div>
                    <div class="row g-4 justify-content-center mt-5">

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card h-100 p-4 shadow-sm border-0 position-relative">
                                <div class="service-icon-box mb-4">
                                    <img src="./assest/img/home/icon/4-UIUx.png"
                                        alt="Icon" class="service-icon">
                                </div>
                                <div class="service-content">
                                    <h4 class="title mb-3">
                                        <a href="services/ui-ux-design-company-in-ahmedabad"
                                            class="text-decoration-none text-dark">Ui
                                            Ux Design Company In Ahmedabad</a>
                                    </h4>
                                    <p class="text-muted">Enhance user satisfaction and engagement with our UI/UX
                                        Designing
                                        services, meticulously crafted to deliver intuitive and visually
                                        appealing digital experiences."
                                        From wireframes to prototypes, we specialise in creating
                                        user-centric designs that elevate your brand and drive
                                        conversions.</p>
                                    <a href="services/ui-ux-design-company-in-ahmedabad"
                                        class="btn btn-danger btn-sm read-more-btn">Read More</a>
                                </div>
                                <div class="hover-border-bottom"></div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card h-100 p-4 shadow-sm border-0 position-relative">
                                <div class="service-icon-box mb-4">
                                    <img src="./assest/img/home/icon/5-website-development.png"
                                        alt="Icon" class="service-icon">
                                </div>
                                <div class="service-content">
                                    <h4 class="title mb-3">
                                        <a href="services/website-design-company-in-ahmedabad"
                                            class="text-decoration-none text-dark">Website
                                            Design & Development Company In Ahmedabad</a>
                                    </h4>
                                    <p class="text-muted">Empower your online presence with our cutting-edge website
                                        development services tailored to your unique needs</p>
                                    <a href="services/website-design-company-in-ahmedabad"
                                        class="btn btn-danger btn-sm read-more-btn">Read More</a>
                                </div>
                                <div class="hover-border-bottom"></div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card h-100 p-4 shadow-sm border-0 position-relative">
                                <div class="service-icon-box mb-4">
                                    <img src="./assest/img/home/icon/6-mobile-app.png"
                                        alt="Icon" class="service-icon">
                                </div>
                                <div class="service-content">
                                    <h4 class="title mb-3">
                                        <a href="services/mobile-app-development-company-ahmedabad"
                                            class="text-decoration-none text-dark">Mobile
                                            App Design & Development Company In Ahmedabad</a>
                                    </h4>
                                    <p class="text-muted">Transform your ideas into stunning, user-friendly mobile
                                        applications with our comprehensive design and development
                                        services. From concept to launch, we're here to bring your app
                                        vision to life with cutting-edge technology and intuitive
                                        design.</p>
                                    <a href="services/mobile-app-development-company-ahmedabad"
                                        class="btn btn-danger btn-sm read-more-btn">Read More</a>
                                </div>
                                <div class="hover-border-bottom"></div>
                            </div>

                        </div>
                    </div>
                </dic>
            </div>
        </div>
    </section>
    <!--3. CREATIVE SOLUTIONS -->

    <!--4. star Our product -->
    <section class="products-section">
        <div class="container">
             <div class="text-center mb-5">
                <div class="blog-small-title d-flex align-items-center justify-content-center mb-3">
                    <span class="line"></span>
                    <span class="mx-3 blog-text text-uppercase fw-bold text-danger">Our Premium Collections</span>
                    <span class="line"></span>
                </div>
                <h2 class="blog-main-title fw-bold">Explore Our Products</h2>
            </div>

            <div class="product-grid">
                <div class="product-item">
                    <div class="product-image-wrapper">
                        <img src="./assest/img/home/catalogue/00-Thumbnail-8.avif"
                            alt="Product Image">
                        <div class="product-overlay">
                            <a href="portfolio/moonshineenchanting" class="view-btn">
                                <img src="./assest/img/home/icon/arrow-right.svg"
                                    alt="Arrow">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="product-item">
                    <div class="product-image-wrapper">
                        <img src="./assest/img/home/catalogue/00-Thumbnail-11.avif"
                            alt="Product Image">
                        <div class="product-overlay">
                            <a href="portfolio/fabrino-fabric" class="view-btn">
                                <img src="./assest/img/home/icon/arrow-right.svg"
                                    alt="Arrow">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-image-wrapper">
                        <img src="./assest/img/home/catalogue/00-Thumbnail-7.avif"
                            alt="Product Image">
                        <div class="product-overlay">
                            <a href="portfolio/fabrino-fabric" class="view-btn">
                                <img src="./assest/img/home/icon/arrow-right.svg"
                                    alt="Arrow">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-image-wrapper">
                        <img src="./assest/img/home/catalogue/00-Thumbnail-12.avif"
                            alt="Product Image">
                        <div class="product-overlay">
                            <a href="portfolio/fabrino-fabric" class="view-btn">
                                <img src="./assest/img/home/icon/arrow-right.svg"
                                    alt="Arrow">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-image-wrapper">
                        <img src="./assest/img/home/catalogue/00-Thumbnail.avif"
                            alt="Product Image">
                        <div class="product-overlay">
                            <a href="portfolio/fabrino-fabric" class="view-btn">
                                <img src="./assest/img/home/icon/arrow-right.svg"
                                    alt="Arrow">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-image-wrapper">
                        <img src="./assest/img/home/catalogue/00-Thumbnail-3.avif"
                            alt="Product Image">
                        <div class="product-overlay">
                            <a href="portfolio/fabrino-fabric" class="view-btn">
                                <img src="./assest/img/home/icon/arrow-right.svg"
                                    alt="Arrow">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--4. end Our product -->

    <!-- 5. start Our Projects -->
    <div class="blog-title-section py-5 text-center">
        <div class="container">

            <div class="blog-small-title d-flex align-items-center justify-content-center mb-3">
                <span class="line"></span>
                <span class="mx-3 blog-text">Our Projects</span>
                <span class="line"></span>
            </div>

            <h2 class="blog-main-title">
                Explore our showcased portfolio to see <br>
                how we transform creative vision into captivating audio-visual
                masterpieces.
            </h2>
            <div class="d-flex justify-content-center my-5">
            <a href="Portfolio" class="new-all-button">More Projects</a>
        </div>
        </div>
    </div>
    <!-- end Our Projects -->
    <!--6 start Testimonial -->
    <section class="new-component">

        <div class="container">

            <div class="section-label">Testimonial</div>
            <h2 class="section-title text-start">Sincere Remarks</h2>

            <div class="slider-wrapper">

                <div class="slider-track">

                    <div class="slide">
                        <div class="testimonial-card">
                            <p class="testimonial-text">
                                Thank you for masterfully encapsulating our
                                local essence and cultural heritage.
                            </p>
                            <h4 class="client-name">Iscon Gathiya</h4>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="testimonial-card">
                            <p class="testimonial-text">
                                The team demonstrated extraordinary
                                creativity and meticulous attention to
                                detail.
                            </p>
                            <h4 class="client-name">Rosewood</h4>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="testimonial-card">
                            <p class="testimonial-text">
                                Their creativity and precision in designing
                                our premium catalogues.
                            </p>
                            <h4 class="client-name">Suntouch</h4>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="testimonial-card">
                            <p class="testimonial-text">
                                On time Delivery, with a clear thought
                                process to deliver what we wanted.
                            </p>
                            <h4 class="client-name">Nalisha Valves</h4>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="testimonial-card">
                            <p class="testimonial-text">
                                Designing a producing excellent creative
                                Laminate Catalogues for us.
                            </p>
                            <h4 class="client-name">Nelson Laminate</h4>
                        </div>
                    </div>

                </div>

            </div>

            <div class="dot-container">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

        </div>

    </section>
    <!-- end Testimonial -->
    <!--7. start blogs section  -->
    <section>
        <div class="blog-title-section py-5 text-center">
            <div class="container">

                <div class="blog-small-title d-flex align-items-center justify-content-center mb-3">
                    <span class="line"></span>
                    <span class="mx-3 blog-text">Blog Post</span>
                    <span class="line"></span>
                </div>

                <h2 class="blog-main-title">
                    Interesting Articles Updates
                </h2>
            </div>
        </div>
        <div class="blog-grid">
            <?php while ($item = current($myaraa)): ?>
                <div class="blog-card">
                    <div class="blog-image">
                        <a href="<?php echo $item["URL"]; ?>">
                            <img src="<?php echo $item['Thumbnail']; ?>" alt="<?php echo $item["BlogTitle"]; ?>"
                                loading="lazy">
                        </a>
                    </div>

                    <div class="blog-body">
                        <h3 class="blog-title">
                            <a href="<?php echo $item["URL"]; ?>">
                                <?php echo $item["BlogTitle"]; ?>
                            </a>
                        </h3>

                        <p class="blog-excerpt">
                            <?php
                            if (!empty($item["BlogContent"])) {
                                $plainTextContent = strip_tags(html_entity_decode($item["BlogContent"]));
                                $excerpt = mb_substr(trim($plainTextContent), 0, 150, 'UTF-8');
                                echo $excerpt . '...';
                            } else {
                                echo 'No content available...';
                            }
                            ?>
                        </p>

                        <a href="<?php echo $item["URL"]; ?>" class="blog-read-more">Read More...</a>
                    </div>
                </div>
                <?php next($myaraa); endwhile; ?>
        </div>
        <div class="d-flex justify-content-center my-5">
            <a href="blogs" class="new-all-button">More Blog</a>
        </div>
    </section>
    <!--7. end blogs section  -->
    <!-- 8. start cta section -->
    <section class="cta-section">
        <div class="cta-container">
            <div class="cta-card">
                <div class="cta-content">
                    <div class="cta-heading">
                        <h6>Ready to elevate your brand's digital presence?</h6>
                        <h2>Transform your vision <br> into reality today!</h2>
                    </div>
                    <a href="contact-us" class="btn cta-button">Call Now</a>
                </div>
                <div class="cta-image">
                    <img src="./assest/img/home/newslettar_img.png"
                        alt="3D Character">
                </div>
            </div>
        </div>
    </section>
    <!-- 8. start cta section -->

    <!--9. start Brand Logo Slider -->
    <div class="newbrand-slider-wrapper">
        <div class="newbrand-slide-track">
            <!-- Repeat logos to simulate infinite loop -->
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/nalisha.png"
                    alt="Nalisha"></div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/nelson.png" alt="Nelson">
            </div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/sun-touch.png"
                    alt="Sun Touch"></div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/bite-bazzar.png"
                    alt="Bite Bazzar"></div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/bravio.png" alt="Bravio">
            </div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/durian.png" alt="Durian">
            </div>

            <!-- Repeating again for infinite feel -->
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/nalisha.png"
                    alt="Nalisha"></div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/nelson.png" alt="Nelson">
            </div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/sun-touch.png"
                    alt="Sun Touch"></div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/bite-bazzar.png"
                    alt="Bite Bazzar"></div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/bravio.png" alt="Bravio">
            </div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/durian.png" alt="Durian">
            </div>
            <!-- Repeating again for infinite feel -->
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/nalisha.png"
                    alt="Nalisha"></div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/nelson.png" alt="Nelson">
            </div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/sun-touch.png"
                    alt="Sun Touch"></div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/bite-bazzar.png"
                    alt="Bite Bazzar"></div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/bravio.png" alt="Bravio">
            </div>
            <div class="newbrand-slide"><img
                    src="./assest/img/portfolio/logo/durian.png" alt="Durian">
            </div>
        </div>
    </div>
    <!--9. end Brand Logo Slider -->
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

    let track = document.querySelector(".slider-track");
    let slides = document.querySelectorAll(".slide");
    let dots = document.querySelectorAll(".dot");

    let index = 0;
    function updateSlider() {
        let cardWidth = slides[0].offsetWidth + 20;
        track.style.transform = "translateX(-" + (index * cardWidth) + "px)";
        dots.forEach(dot => dot.classList.remove("active"));
        dots[index % dots.length].classList.add("active");

    }

    function nextSlide() {
        index++;
        if (index > slides.length - 2) {
            index = 0;
        }
        updateSlider();
    }

    setInterval(nextSlide, 4000);
    dots.forEach((dot, i) => {
        dot.addEventListener("click", () => {
            index = i;
            updateSlider();
        });
    });

</script>

<?php
include __DIR__ . '/A_Layout/Footer/footer.php';
?>