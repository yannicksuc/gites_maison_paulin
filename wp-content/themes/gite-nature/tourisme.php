<?php
/**
 * Page Tourisme
 * Template Name: Page Tourisme
 * @package llorix-one-lite
 */
get_header();
?>
</div> <!-- /END COLOR OVER IMAGE --> </header> <!-- /END HOME / HEADER  -->


<section id="tourism" class="container">
    <div id="map" style="height: 100vh;"></div>
</section>


<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMWsEAmhNixlC48B_sHfUhLKzA43aOS6s&callback=initMap" async defer></script>

<?php get_footer(); ?>
