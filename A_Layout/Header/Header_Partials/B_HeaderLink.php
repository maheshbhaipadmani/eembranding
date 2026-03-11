<?php
echo
    '
 <!-- Preconnect -->
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

<!-- Favicon -->
<link rel="icon" href="https://eembranding.com/assest/img/logo/cropped-cropped-logo-small-32x32.png" sizes="32x32">
<link rel="icon" href="https://eembranding.com/assest/img/logo/cropped-cropped-logo-small-192x192.png" sizes="192x192">
<link rel="apple-touch-icon" href="https://eembranding.com/assest/img/logo/cropped-cropped-logo-small-180x180.png">

<!-- External CSS (Preload for faster rendering) -->
<link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" as="style" onload="this.rel=&quot;stylesheet&quot;">
<noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"></noscript>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer"/>

<!-- Custom CSS (Combine & minify for performance) -->
<link rel="stylesheet" href="https://eembranding.com/assest/css/dev-style.css">
<link rel="stylesheet" href="https://eembranding.com/assest/css/whatsapp.css">

<!-- jQuery (defer to prevent render-block) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>

<!-- Google Tag Manager -->
<script>
        (function(w,d,s,l,i){
            w[l]=w[l]||[];
            w[l].push({\'gtm.start\': new Date().getTime(), event:\'gtm.js\'});
            var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),
                dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';
            j.async=true;
            j.src=\'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;
            f.parentNode.insertBefore(j,f);
        })(window,document,\'script\',\'dataLayer\',\'GTM-TRZNTVHB\');
    </script>
'
    ?>