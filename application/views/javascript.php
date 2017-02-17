<!-- Load Jquery and other -->
<script type="text/javascript" src="<?= base_url().'mdb/' ?>js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?= base_url().'mdb/' ?>js/tether.min.js"></script>
<script type="text/javascript" src="<?= base_url().'mdb/' ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url().'mdb/' ?>js/mdb.min.js"></script>

<!--Google Maps-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCkm2F_yKGkLUzsDHms75dlQEposSjCB50"></script>

<script>
    function init_map() {

        var var_location = new google.maps.LatLng(-8.131093, 112.247058);
        var var_mapoptions = {
            center: var_location,
            zoom: 16
        };

        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: "Lokasi Kami"
        });

        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);

        var_marker.setMap(var_map);

    }

    google.maps.event.addDomListener(window, 'load', init_map);
</script>

<!-- Custom JS -->
<script>
// SideNav init
$(document).ready(function() {
  $('.mdb-select').material_select();
});

$(".button-collapse").sideNav();
var el = document.querySelector('.custom-scrollbar');
Ps.initialize(el);

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

</script>

<script>
new WOW().init();
</script>
