<!-- Default Footer Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>

<?php if (!isset($data['minimal_footer']) || !$data['minimal_footer']): ?>
    <!-- plugins:js -->
    <script src="<?= BASEURL; ?>/vendors/js/vendor.bundle.base.js"></script>
    <!-- End inject -->
    <!-- Plugin js for this page -->
    <script src="<?= BASEURL; ?>/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= BASEURL; ?>/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="<?= BASEURL; ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="<?= BASEURL; ?>/js/dataTables.select.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= BASEURL; ?>/js/off-canvas.js"></script>
    <script src="<?= BASEURL; ?>/js/hoverable-collapse.js"></script>
    <script src="<?= BASEURL; ?>/js/template.js"></script>
    <script src="<?= BASEURL; ?>/js/settings.js"></script>
    <script src="<?= BASEURL; ?>/js/todolist.js"></script>
    <!-- End inject -->
    <!-- Custom js for this page -->
    <script src="<?= BASEURL; ?>/js/dashboard.js"></script>
    <script src="<?= BASEURL; ?>/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page -->
<?php endif; ?>

</body>
</html>
