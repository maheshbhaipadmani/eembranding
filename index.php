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
<!-- Slick CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<main>
    <!-- start hero banner    -->
    <section class="hero-banner">
            <picture>
                <!-- Large screens -->
                <source media="(min-width: 1921px)" srcset="eem-2560x1440.jpg">

                <!-- Desktop -->
                <source media="(min-width: 1024px)" srcset="eem-1920x1080.jpg">

                <!-- Tablet -->
                <source media="(min-width: 600px)" srcset="eem-768x1024.jpg">

                <!-- Mobile -->
                <img src="eem-480x800.jpg" alt="Hero Banner">
            </picture>
        </section>
    <!-- start hero banner    -->
</main>
<main class="main-area">
    <div data-elementor-type="wp-page" data-elementor-id="495" class="elementor elementor-495">
    

        <!-- Branding Agency In Ahmedabad -->
        <div class="elementor-element elementor-element-b41f9b7 e-flex e-con-boxed e-con e-parent" data-id="b41f9b7"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-dfe69f4 e-con-full e-flex e-con e-child"
                    data-id="dfe69f4" data-element_type="container">
                    <div class="elementor-element elementor-element-cb5e0db elementor-widget elementor-widget-tg-heading"
                        data-id="cb5e0db" data-element_type="widget" data-widget_type="tg-heading.default">
                        <div class="elementor-widget-container">
                            <div class="section-title-two tg-heading-subheading animation-style3">
                                <h3 class="title tg-element-title">
                                    <div>
                                        <h1>Branding Agency In Ahmedabad </h1>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-95ffdd0 elementor-widget elementor-widget-text-editor"
                        data-id="95ffdd0" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p><span style="font-weight: 400;">Transform Your Business with Expert Branding,
                                    Marketing, and Design</span></p>
                            <p><span style="font-weight: 400;">At our </span><a
                                    href="services/advertising-agency-in-ahmedabad"><b>branding
                                        and advertising agency</b></a><span style="font-weight: 400;">, we believe
                                    that strong branding is the cornerstone of business success. Our creative team
                                    works closely with you to craft a unique identity that reflects your values,
                                    engages your audience, and sets you apart from competitors. Whether it’s a
                                    complete brand overhaul or a new campaign launch, we deliver solutions that
                                    drive impact.</span></p>
                            <p><span style="font-weight: 400;">In the digital age, visibility is everything.
                                    Our</span> <a href="services/digital-marketing-agency-ahmedabad"><b>digital
                                        marketing services</b></a><span style="font-weight: 400;"> are designed to
                                    help you reach the right audience through data-driven strategies. From search
                                    engine optimization (SEO) and social media marketing to pay-per-click
                                    advertising, we ensure your business gains the exposure it deserves.</span></p>
                            <p><span style="font-weight: 400;">For businesses in the laminate industry, we offer
                                    professional</span><a href="services/catalogue-design-company-in-ahmedabad">
                                    <b>laminate catalogue design services</b></a><span style="font-weight: 400;">
                                    that highlight the quality and variety of your products. Our catalogues are
                                    designed to be visually stunning and informative, providing your clients with a
                                    clear representation of your offerings.</span></p>
                            <p><span style="font-weight: 400;">Your website is your digital storefront. Our
                                </span><a href="services/website-design-company-in-ahmedabad"><b>website
                                        design services</b></a><span style="font-weight: 400;"> focus on creating
                                    modern, responsive websites that offer seamless user experiences. We blend
                                    creativity with functionality to develop websites that not only look great but
                                    are also optimized for search engines and conversions.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CREATIVE SOLUTIONS -->
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-87de0e2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="87de0e2" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8fe1e3b"
                    data-id="8fe1e3b" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-0edc3e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="0edc3e7" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2b88d25"
                                    data-id="2b88d25" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-d75879b elementor-widget__width-initial elementor-absolute elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-invisible elementor-widget elementor-widget-image"
                                            data-id="d75879b" data-element_type="widget"
                                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img fetchpriority="high" decoding="async" width="512" height="512"
                                                    src="https://eembranding.com/assest/img/home/icon/3-digital-Marketing.png"
                                                    class="attachment-large size-large wp-image-5646" loading="lazy"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-85d5e43 text-center elementor-widget elementor-widget-tg-heading"
                                            data-id="85d5e43" data-element_type="widget"
                                            data-widget_type="tg-heading.default">
                                            <section class="blog-title-section py-5 text-center">
                                                <div class="container">

                                                    <div
                                                        class="blog-small-title d-flex align-items-center justify-content-center mb-3">
                                                        <span class="line"></span>
                                                        <span class="mx-3 blog-text">Creative Solutions</span>
                                                        <span class="line"></span>
                                                    </div>

                                                    <h2 class="blog-main-title">
                                                        Your Growth, Our Mission : Leading Digital Marketing Agency.
                                                    </h2>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                        <div class="elementor-element elementor-element-2b1c2d9 services-icon elementor-widget elementor-widget-tg-servicesBox"
                            data-id="2b1c2d9" data-element_type="widget" data-widget_type="tg-servicesBox.default">
                            <div class="elementor-widget-container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="services-item-two wow fadeInUp" data-wow-delay=".0s"
                                            style="visibility: hidden; animation-delay: 0s; animation-name: none;">
                                            <div class="services-icon-two">
                                                <img decoding="async"
                                                    src="https://eembranding.com/assest/img/home/icon/3-digital-Marketing.png"
                                                    loading="lazy" alt="Icon">
                                            </div>
                                            <div class="services-content-two">
                                                <h2 class="title">
                                                    <a href="services/catalogue-design-company-in-ahmedabad">Laminate
                                                        Catalogue Design Services In Ahmedabad</a>
                                                </h2>
                                                <p>Transform your brand's identity into tangible excellence with our
                                                    bespoke laminate folder designs. From sleek and professional to
                                                    eye-catching and vibrant, our designs elevate your marketing
                                                    materials, leaving a lasting impression on clients and partners
                                                    alike.</p>
                                                <a href="services/catalogue-design-company-in-ahmedabad"
                                                    class="link-btn">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="services-item-two wow fadeInUp" data-wow-delay=".2s"
                                            style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                                            <div class="services-icon-two">
                                                <img decoding="async"
                                                    src="https://eembranding.com/assest/img/home/icon/2-creative-design.png"
                                                    loading="lazy" alt="Icon">
                                            </div>
                                            <div class="services-content-two">
                                                <h2 class="title">
                                                    <a href="services/creative-design-agency-in-ahmedabad">Creative
                                                        Designing Agency In Ahmedabad</a>
                                                </h2>
                                                <p>Elevate your brand's visual identity with our innovative and
                                                    captivating creative designing services. From logos to branding
                                                    materials, we bring your vision to life with flair and finesse.
                                                </p>
                                                <a href="services/creative-design-agency-in-ahmedabad"
                                                    class="link-btn">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="services-item-two wow fadeInUp" data-wow-delay=".4s"
                                            style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                            <div class="services-icon-two">
                                                <img decoding="async"
                                                    src="https://eembranding.com/assest/img/home/icon/3-digital-Marketing.png"
                                                    loading="lazy" alt="Icon">
                                            </div>
                                            <div class="services-content-two">
                                                <h2 class="title">
                                                    <a href="services/digital-marketing-agency-ahmedabad">Digital
                                                        Marketing Agency In Ahmedabad</a>
                                                </h2>
                                                <p>Amplify your brand's online presence and generate targeted
                                                    traffic with our comprehensive digital marketing services. From
                                                    strategic planning to execution, we guide you through the
                                                    digital landscape for maximum impact and ROI.</p>
                                                <a href="services/digital-marketing-agency-ahmedabad"
                                                    class="link-btn">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="services-item-two wow fadeInUp" data-wow-delay=".6s"
                                            style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                                            <div class="services-icon-two">
                                                <img decoding="async"
                                                    src="https://eembranding.com/assest/img/home/icon/4-UIUx.png"
                                                    loading="lazy" alt="Icon">
                                            </div>
                                            <div class="services-content-two">
                                                <h2 class="title">
                                                    <a href="services/ui-ux-design-company-in-ahmedabad">Ui
                                                        Ux Design Company In Ahmedabad</a>
                                                </h2>
                                                <p>Enhance user satisfaction and engagement with our UI/UX Designing
                                                    services, meticulously crafted to deliver intuitive and visually
                                                    appealing digital experiences."
                                                    From wireframes to prototypes, we specialise in creating
                                                    user-centric designs that elevate your brand and drive
                                                    conversions.</p>
                                                <a href="services/ui-ux-design-company-in-ahmedabad"
                                                    class="link-btn">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="services-item-two wow fadeInUp" data-wow-delay=".8s"
                                            style="visibility: hidden; animation-delay: 0.8s; animation-name: none;">
                                            <div class="services-icon-two">
                                                <img decoding="async"
                                                    src="https://eembranding.com/assest/img/home/icon/5-website-development.png"
                                                    loading="lazy" alt="Icon">
                                            </div>
                                            <div class="services-content-two">
                                                <h2 class="title">
                                                    <a href="services/website-design-company-in-ahmedabad">Website
                                                        Design &amp; Development Company In Ahmedabad</a>
                                                </h2>
                                                <p>Empower your online presence with our cutting-edge website
                                                    development services tailored to your unique needs</p>
                                                <a href="services/website-design-company-in-ahmedabad"
                                                    class="link-btn">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="services-item-two wow fadeInUp" data-wow-delay=".10s"
                                            style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                                            <div class="services-icon-two">
                                                <img decoding="async"
                                                    src="https://eembranding.com/assest/img/home/icon/6-mobile-app.png"
                                                    loading="lazy" alt="Icon">
                                            </div>
                                            <div class="services-content-two">
                                                <h2 class="title">
                                                    <a href="services/mobile-app-development-company-ahmedabad">Mobile
                                                        App Design &amp; Development Company In Ahmedabad</a>
                                                </h2>
                                                <p>Transform your ideas into stunning, user-friendly mobile
                                                    applications with our comprehensive design and development
                                                    services. From concept to launch, we're here to bring your app
                                                    vision to life with cutting-edge technology and intuitive
                                                    design.</p>
                                                <a href="services/mobile-app-development-company-ahmedabad"
                                                    class="link-btn">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="services-item-two wow fadeInUp" data-wow-delay=".10s"
                                            style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                                            <div class="services-icon-two">
                                                <img decoding="async"
                                                    src="https://eembranding.com/assest/img/home/icon/ExhibitionIcon.png"
                                                    loading="lazy" alt="Icon">
                                            </div>
                                            <div class="services-content-two">
                                                <h2 class="title">
                                                    <a href="services/exhibition-stall-design-company-ahmedabad">Creative
                                                        & Custom Exhibition Stall Design Services in India</a>
                                                </h2>
                                                <p>We create custom exhibition stalls with 3D design and full setup
                                                    across India. Perfect for trade shows in Ahmedabad, Delhi, Mumbai,
                                                    and more.</p>
                                                <a href="services/exhibition-stall-design-company-ahmedabad"
                                                    class="link-btn">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="services-item-two wow fadeInUp" data-wow-delay=".14s"
                                            style="visibility: hidden; animation-delay: 0.14s; animation-name: none;">
                                            <div class="services-icon-two">
                                                <img decoding="async"
                                                    src="https://eembranding.com/assest/img/home/icon/8-3d-rendering.png"
                                                    loading="lazy" alt="Icon">
                                            </div>
                                            <div class="services-content-two">
                                                <h2 class="title">
                                                    <a href="services/3d-rendering-company-in-ahmedabad">3d
                                                        Rendering Services In Ahmedabad</a>
                                                </h2>
                                                <p>Elevate your projects with stunning visualisations through our
                                                    precise 3D rendering services. From architectural designs to
                                                    digital walk through, we bring your ideas to life with
                                                    unparalleled realism and detail.</p>
                                                <a href="services/3d-rendering-company-in-ahmedabad"
                                                    class="link-btn">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="services-item-two wow fadeInUp" data-wow-delay=".16s"
                                            style="visibility: hidden; animation-delay: 0.16s; animation-name: none;">
                                            <div class="services-icon-two">
                                                <img decoding="async"
                                                    src="https://eembranding.com/assest/img/home/icon/9-outdoor-branding.png"
                                                    loading="lazy" alt="Icon">
                                            </div>
                                            <div class="services-content-two">
                                                <h2 class="title">
                                                    <a href="services/advertising-agency-in-ahmedabad">Advertising
                                                        Agency In Ahmedabad</a>
                                                </h2>
                                                <p>Elevate your brand's visibility with captivating outdoor branding
                                                    solutions tailored to leave a lasting impression on your target
                                                    audience. From eye-catching billboards to engaging signage, we
                                                    help you stand out in the great outdoors.</p>
                                                <a href="services/advertising-agency-in-ahmedabad" class="link-btn">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-89541a9 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                            data-id="89541a9" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="134" height="134"
                                    src="https://eembranding.com/assest/img/icon/Untitled-3.png"
                                    class="attachment-large size-large wp-image-5081" loading="lazy" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Projects -->
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-ffe4d1e elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            data-id="ffe4d1e" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0a8b6dd"
                    data-id="0a8b6dd" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-6b74726 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="6b74726" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-30ff143"
                                    data-id="30ff143" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-b57a11c elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                                            data-id="b57a11c" data-element_type="widget"
                                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img decoding="async" width="58" height="58"
                                                    src="https://eembranding.com/assest/img/icon/Untitled-2.png"
                                                    class="attachment-large size-large wp-image-5080" loading="lazy"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-701f65a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="701f65a" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3157e1e"
                                    data-id="3157e1e" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-7233517 elementor-widget elementor-widget-project-list"
                                            data-id="7233517" data-element_type="widget"
                                            data-widget_type="project-list.default">
                                            <div class="elementor-widget-container">
                                                <div class="project-area-two">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="project-item-two wow fadeInUp"
                                                                data-wow-delay=".1s"
                                                                style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                                                                <img decoding="async"
                                                                    src="https://eembranding.com/assest/img/home/catalogue/00-Thumbnail-8.avif"
                                                                    loading="lazy" alt="Image">
                                                                <a href="portfolio/moonshineenchanting"
                                                                    class="link-icon">
                                                                    <img decoding="async"
                                                                        src="https://eembranding.com/assest/img/home/icon/arrow-right.svg"
                                                                        loading="lazy" alt="Icon">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="project-item-two wow fadeInUp"
                                                                data-wow-delay=".2s"
                                                                style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                                                                <img decoding="async"
                                                                    src="https://eembranding.com/assest/img/home/catalogue/00-Thumbnail-11.avif"
                                                                    loading="lazy" alt="Image">
                                                                <a href="portfolio/fabrino-fabric" class="link-icon">
                                                                    <img decoding="async"
                                                                        src="https://eembranding.com/assest/img/home/icon/arrow-right.svg"
                                                                        loading="lazy" alt="Icon">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="project-item-two wow fadeInUp"
                                                                data-wow-delay=".3s"
                                                                style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                                                                <img decoding="async"
                                                                    src="https://eembranding.com/assest/img/home/catalogue/00-Thumbnail-7.avif"
                                                                    loading="lazy" alt="Image">
                                                                <a href="portfolio/dazzle-berryenpastel"
                                                                    class="link-icon">
                                                                    <img decoding="async"
                                                                        src="https://eembranding.com/assest/img/home/icon/arrow-right.svg"
                                                                        loading="lazy" alt="Icon">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="project-item-two wow fadeInUp"
                                                                data-wow-delay=".4s"
                                                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                                                <img decoding="async"
                                                                    src="https://eembranding.com/assest/img/home/catalogue/00-Thumbnail-12.avif"
                                                                    loading="lazy" alt="Image">
                                                                <a href="portfolio/ranwood-rega" class="link-icon">
                                                                    <img decoding="async"
                                                                        src="https://eembranding.com/assest/img/home/icon/arrow-right.svg"
                                                                        loading="lazy" alt="Icon">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="project-item-two wow fadeInUp"
                                                                data-wow-delay=".5s"
                                                                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                                                <img decoding="async"
                                                                    src="https://eembranding.com/assest/img/home/catalogue/00-Thumbnail.avif"
                                                                    loading="lazy" alt="Image">
                                                                <a href="portfolio/kooyoo-enchanting" class="link-icon">
                                                                    <img decoding="async"
                                                                        src="https://eembranding.com/assest/img/home/icon/arrow-right.svg"
                                                                        loading="lazy" alt="Icon">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="project-item-two wow fadeInUp animated"
                                                                data-wow-delay=".6s"
                                                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                                                <img decoding="async"
                                                                    src="https://eembranding.com/assest/img/home/catalogue/00-Thumbnail-3.avif"
                                                                    loading="lazy" alt="Image">
                                                                <a href="portfolio/kiana" class="link-icon">
                                                                    <img decoding="async"
                                                                        src="https://eembranding.com/assest/img/home/icon/arrow-right.svg"
                                                                        loading="lazy" alt="Icon">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="elementor-element elementor-element-418c0cc elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image"
                            data-id="418c0cc" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;zoomIn&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="134" height="134"
                                    src="https://eembranding.com/assest/img/icon/Untitled-3.png"
                                    class="attachment-large size-large wp-image-5081" loading="lazy" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- start Our Projects -->
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
                <div class="elementor-widget-container">
                    <a href="" target="_self" rel="nofollow" class="btn">
                        More Projects<span></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end Our Projects -->

        <!-- start Testimonial -->
        <section class="new-component">

            <div class="container">

                <div class="section-label">Testimonial</div>
                <h2 class="section-title">Sincere Remarks</h2>

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

        <!-- blogs  -->
        <div class="elementor-element elementor-element-319dc0b e-flex e-con-boxed e-con e-parent e-lazyloaded"
            data-id="319dc0b" data-element_type="container">
            <div class="e-con-inner">
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
                <div class="elementor-element elementor-element-aac83e7 section-title-style-default readmore-btn-only-text meta-visibility-show title_position_default title_hover_border_default title-default img_hover_animation_default meta_position_default tpg-category-position-default grid-hover-overlay-type-always tpg-el-box-border-enable tpg-border-bottom-disable elementor-widget elementor-widget-tpg-grid-layout"
                    data-id="aac83e7" data-element_type="widget" data-widget_type="tpg-grid-layout.default">
                    <div class="elementor-widget-container">
                        <div class="rt-container-fluid rt-tpg-container tpg-el-main-wrapper clearfix grid-layout4-main "
                            id="rt-tpg-container-2422815129" data-layout="grid-layout4"
                            data-grid-style="tpg-full-height" data-sc-id="elementor" data-el-settings=""
                            data-el-query="" data-el-path="">
                            <div class="tpg-header-wrapper ">
                                <div class="tpg-widget-heading-wrapper rt-clear heading-default ">
                                    <span class="tpg-widget-heading-line line-left"></span>
                                    <h2 class="tpg-widget-heading">
                                        <span>
                                        </span>
                                    </h2> <span class="tpg-widget-heading-line line-right"></span>
                                </div>
                            </div>
                            <div data-title="Loading ..."
                                class="rt-row rt-content-loader grid-layout4 grid-behaviour tpg-full-height grid_layout_wrapper">
                                <?php
                                while ($item = current($myaraa)) {
                                    ?>
                                    <div class="rt-col-md-4 rt-col-sm-6 rt-col-xs-12 default rt-grid-item" data-id="7100">
                                        <div class="rt-holder tpg-post-holder">
                                            <div class="rt-detail rt-el-content-wrapper">
                                                <div class="rt-img-holder tpg-el-image-wrap has-thumbnail">
                                                    <a data-id="7100" href="<?php echo $item["URL"]; ?>"
                                                        class="tpg-post-link" target="_self">
                                                        <img fetchpriority="high" decoding="async"
                                                            src="<?php echo $item['Thumbnail']; ?>"
                                                            class="rt-img-responsive" width="1200" height="800"
                                                            loading="lazy"
                                                            alt="The Power of Graphic Design in Brand Identity Building">
                                                    </a>
                                                    <div class="overlay grid-hover-content"></div>
                                                </div>

                                                <div class="entry-title-wrapper">
                                                    <div class="tpg-separate-category style1 top_left cat-above-title">
                                                        <span class="categories-links">
                                                            <a class="blogs" href="blogs">Blogs</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="entry-title">
                                                        <a data-id="7100" href="<?php echo $item["URL"]; ?>"
                                                            class="tpg-post-link" target="_self">
                                                            <?php echo $item["BlogTitle"]; ?>

                                                        </a>
                                                    </h3>
                                                </div>

                                                <div class="tpg-excerpt tpg-el-excerpt">
                                                    <div class="tpg-excerpt-inner">
                                                        <?php
                                                        if (!empty($item["BlogContent"])) {
                                                            $decodedContent = html_entity_decode($item["BlogContent"]);
                                                            $plainTextContent = strip_tags($decodedContent);
                                                            $excerpt = mb_substr(trim($plainTextContent), 0, 150, 'UTF-8');
                                                            $lastSpace = mb_strrpos($excerpt, ' ', 0, 'UTF-8');
                                                            if ($lastSpace !== false) {
                                                                $excerpt = mb_substr($excerpt, 0, $lastSpace, 'UTF-8');
                                                            }
                                                            echo $excerpt . '...';
                                                        } else {
                                                            echo 'No content available...';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>

                                                <div class="post-footer">
                                                    <div class="read-more">
                                                        <a data-id="7100" href="<?php echo $item["URL"]; ?>"
                                                            class="tpg-post-link" target="_self">Read More...</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    // Move to next item
                                    next($myaraa);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-678f840 elementor-widget elementor-widget-tg-btn"
                    data-id="678f840" data-element_type="widget" data-widget_type="tg-btn.default">
                    <div class="elementor-widget-container">
                        <a href="blogs" target="_blank" rel="nofollow" class="btn">
                            Our Blogs<span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ready to elevate your brand's digital -->
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-08773b0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="08773b0" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a489b65"
                    data-id="a489b65" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-c0962ad elementor-widget elementor-widget-tg-cta"
                            data-id="c0962ad" data-element_type="widget" data-widget_type="tg-cta.default">
                            <div class="elementor-widget-container">
                                <div class="newsletter-inner">
                                    <div class="newsletter-content">
                                        <div
                                            class="section-title white-title mb-30 tg-heading-subheading animation-style2">
                                            <span class="">
                                                <h6 class="text-white"> Ready to elevate your brand's digital
                                                    presence?</h6>
                                            </span>
                                            <h2 class="title tg-element-title">
                                                Transform your vision into reality today!
                                            </h2>
                                        </div><a href="contact-us" target="_self" rel="nofollow" class="btn">Call Now
                                            <span></span></a>
                                    </div>
                                    <div class="newsletter-img">
                                        <img decoding="async"
                                            src="https://eembranding.com/assest/img/home/newslettar_img.png"
                                            loading="lazy" alt="Image" class="wow fadeInRight wp-content-newslettar"
                                            data-wow-delay=".2s">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brand Logo Slider -->

        <div class="newbrand-slider-wrapper">
            <div class="newbrand-slide-track">
                <!-- Repeat logos to simulate infinite loop -->
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/nalisha.png"
                        alt="Nalisha"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/nelson.png"
                        alt="Nelson"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/sun-touch.png"
                        alt="Sun Touch"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/bite-bazzar.png"
                        alt="Bite Bazzar"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/bravio.png"
                        alt="Bravio"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/durian.png"
                        alt="Durian"></div>

                <!-- Repeating again for infinite feel -->
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/nalisha.png"
                        alt="Nalisha"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/nelson.png"
                        alt="Nelson"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/sun-touch.png"
                        alt="Sun Touch"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/bite-bazzar.png"
                        alt="Bite Bazzar"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/bravio.png"
                        alt="Bravio"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/durian.png"
                        alt="Durian"></div>
                <!-- Repeating again for infinite feel -->
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/nalisha.png"
                        alt="Nalisha"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/nelson.png"
                        alt="Nelson"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/sun-touch.png"
                        alt="Sun Touch"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/bite-bazzar.png"
                        alt="Bite Bazzar"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/bravio.png"
                        alt="Bravio"></div>
                <div class="newbrand-slide"><img
                        src="https://eembranding.com/assest/img/portfolio/logo/durian.png"
                        alt="Durian"></div>
            </div>
        </div>
        <!-- Slick JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


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
        <script>
            class SecondPhoneViewTestimonialSlider {
                constructor() {
                    this.currentSlide = 0;
                    this.totalSlides = 3;
                    this.track = document.getElementById('secondphoneview-track');
                    this.dots = document.querySelectorAll('.secondphoneview-pagination-dot');
                    this.prevBtn = document.getElementById('secondphoneview-prevBtn');
                    this.nextBtn = document.getElementById('secondphoneview-nextBtn');
                    this.slider = document.getElementById('secondphoneview-slider');

                    this.init();
                }

                init() {
                    this.bindEvents();
                    this.updateSlider();
                    this.setupTouchEvents();
                }

                bindEvents() {
                    this.prevBtn.addEventListener('click', () => this.prevSlide());
                    this.nextBtn.addEventListener('click', () => this.nextSlide());

                    this.dots.forEach((dot, index) => {
                        dot.addEventListener('click', () => this.goToSlide(index));
                    });

                    // Keyboard navigation
                    document.addEventListener('keydown', (e) => {
                        if (e.key === 'ArrowLeft') this.prevSlide();
                        if (e.key === 'ArrowRight') this.nextSlide();
                    });
                }

                setupTouchEvents() {
                    let startX = 0;
                    let endX = 0;
                    let isDragging = false;

                    this.slider.addEventListener('touchstart', (e) => {
                        startX = e.touches[0].clientX;
                        isDragging = true;
                    });

                    this.slider.addEventListener('touchmove', (e) => {
                        if (!isDragging) return;
                        e.preventDefault();
                        endX = e.touches[0].clientX;
                    });

                    this.slider.addEventListener('touchend', () => {
                        if (!isDragging) return;
                        isDragging = false;

                        const diff = startX - endX;
                        const threshold = 50;

                        if (Math.abs(diff) > threshold) {
                            if (diff > 0) {
                                this.nextSlide();
                            } else {
                                this.prevSlide();
                            }
                        }
                    });

                    // Mouse events for desktop
                    this.slider.addEventListener('mousedown', (e) => {
                        startX = e.clientX;
                        isDragging = true;
                        this.slider.style.cursor = 'grabbing';
                    });

                    document.addEventListener('mousemove', (e) => {
                        if (!isDragging) return;
                        e.preventDefault();
                        endX = e.clientX;
                    });

                    document.addEventListener('mouseup', () => {
                        if (!isDragging) return;
                        isDragging = false;
                        this.slider.style.cursor = 'grab';

                        const diff = startX - endX;
                        const threshold = 50;

                        if (Math.abs(diff) > threshold) {
                            if (diff > 0) {
                                this.nextSlide();
                            } else {
                                this.prevSlide();
                            }
                        }
                    });
                }

                goToSlide(index) {
                    this.currentSlide = index;
                    this.updateSlider();
                }

                nextSlide() {
                    this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                    this.updateSlider();
                }

                prevSlide() {
                    this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
                    this.updateSlider();
                }

                updateSlider() {
                    const translateX = -this.currentSlide * 33.333;
                    this.track.style.transform = `translateX(${translateX}%)`;

                    // Update dots
                    this.dots.forEach((dot, index) => {
                        dot.classList.toggle('active', index === this.currentSlide);
                    });

                    // Update navigation buttons
                    this.prevBtn.disabled = this.currentSlide === 0;
                    this.nextBtn.disabled = this.currentSlide === this.totalSlides - 1;
                }
            }

            // Initialize slider when DOM is loaded
            document.addEventListener('DOMContentLoaded', () => {
                new SecondPhoneViewTestimonialSlider();
            });

            // Auto-play functionality (optional)
            let secondPhoneViewAutoPlayInterval;
            const startSecondPhoneViewAutoPlay = () => {
                secondPhoneViewAutoPlayInterval = setInterval(() => {
                    const slider = window.secondPhoneViewTestimonialSlider || new SecondPhoneViewTestimonialSlider();
                    slider.nextSlide();
                }, 5000);
            };

            const stopSecondPhoneViewAutoPlay = () => {
                clearInterval(secondPhoneViewAutoPlayInterval);
            };

            // Start auto-play after 3 seconds of inactivity
            let secondPhoneViewInactivityTimer;
            const resetSecondPhoneViewInactivityTimer = () => {
                clearTimeout(secondPhoneViewInactivityTimer);
                stopSecondPhoneViewAutoPlay();
                secondPhoneViewInactivityTimer = setTimeout(startSecondPhoneViewAutoPlay, 3000);
            };

            document.addEventListener('click', resetSecondPhoneViewInactivityTimer);
            document.addEventListener('touchstart', resetSecondPhoneViewInactivityTimer);
            document.addEventListener('keydown', resetSecondPhoneViewInactivityTimer);

            // Store slider instance globally
            window.secondPhoneViewTestimonialSlider = new SecondPhoneViewTestimonialSlider();
        </script>
        <?php
        include __DIR__ . '/A_Layout/Footer/footer.php';
        ?>