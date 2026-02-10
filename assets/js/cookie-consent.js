// Cookie Consent Manager
(function () {
    'use strict';

    const CONSENT_KEY = 'cookie_consent';
    const CONSENT_ACCEPTED = 'accepted';
    const CONSENT_REJECTED = 'rejected';

    // Check if user has already given consent
    function hasConsent() {
        return localStorage.getItem(CONSENT_KEY) === CONSENT_ACCEPTED;
    }

    function hasRejected() {
        return localStorage.getItem(CONSENT_KEY) === CONSENT_REJECTED;
    }

    // Load Google Analytics
    function loadGoogleAnalytics() {
        if (window.gtag) {
            return; // Already loaded
        }

        // Create script tag
        const script = document.createElement('script');
        script.async = true;
        script.src = 'https://www.googletagmanager.com/gtag/js?id=G-PNRRBC5F4B';
        document.head.appendChild(script);

        // Initialize gtag
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        window.gtag = gtag;
        gtag('js', new Date());
        gtag('config', 'G-PNRRBC5F4B');
    }

    // Accept cookies
    function acceptCookies() {
        localStorage.setItem(CONSENT_KEY, CONSENT_ACCEPTED);
        loadGoogleAnalytics();
        hideBanner();
    }

    // Reject cookies
    function rejectCookies() {
        localStorage.setItem(CONSENT_KEY, CONSENT_REJECTED);
        hideBanner();
    }

    // Show banner
    function showBanner() {
        const banner = document.getElementById('cookie-consent-banner');
        if (banner) {
            banner.style.display = 'block';
        }
    }

    // Hide banner
    function hideBanner() {
        const banner = document.getElementById('cookie-consent-banner');
        if (banner) {
            banner.style.display = 'none';
        }
    }

    // Initialize
    function init() {
        // If already consented, load GA
        if (hasConsent()) {
            loadGoogleAnalytics();
            return;
        }

        // If rejected or no decision, show banner
        if (!hasRejected()) {
            showBanner();
        }

        // Attach event listeners
        const acceptBtn = document.getElementById('cookie-accept');
        const rejectBtn = document.getElementById('cookie-reject');

        if (acceptBtn) {
            acceptBtn.addEventListener('click', acceptCookies);
        }

        if (rejectBtn) {
            rejectBtn.addEventListener('click', rejectCookies);
        }
    }

    // Expose revoke function globally
    window.revokeCookieConsent = function () {
        localStorage.removeItem(CONSENT_KEY);
        location.reload();
    };

    // Run when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
