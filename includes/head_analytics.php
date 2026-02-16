<!-- Analytics Tracking -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Page View
        fetch('https://dashboard.bbproservice.it/api.php?site_id=8&type=page_view');

        // Visit (One per session)
        if (!sessionStorage.getItem('visit_tracked')) {
            fetch('https://dashboard.bbproservice.it/api.php?site_id=8&type=visit');
            sessionStorage.setItem('visit_tracked', 'true');
        }
    });
</script>