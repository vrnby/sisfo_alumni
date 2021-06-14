<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- adminlte -->
<script src="<?php echo base_url() ?>assets/js/sidebar-navbar/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sidebar-navbar/jquery-knob/jquery.knob.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sidebar-navbar/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sidebar-navbar/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sidebar-navbar/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url() ?>assets/js/sidebar-navbar/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sidebar-navbar/overlayscroll/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sidebar-navbar/adminlte/adminlte.js"></script>

<script>
    // tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>