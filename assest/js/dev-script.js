window.addEventListener('load', function() {
    const preloader = document.getElementById('preloader');
    
    // Add a slight delay so the user actually sees the nice animation (optional)
    setTimeout(() => {
        // Option A: Simple hide
        // preloader.style.display = 'none';

        // Option B: Smooth Fade out (Recommended)
        preloader.style.transition = 'opacity 0.5s ease';
        preloader.style.opacity = '0';
        
        // Completely remove from DOM after fade
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 500);
    }, 1000); // 1000ms = 1 second delay
});