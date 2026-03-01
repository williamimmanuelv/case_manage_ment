</div>
<!-- End Content -->

<!-- Start Footer -->
<footer class="footer d-block d-md-flex justify-content-center text-md-start text-center">
  <p class="mb-md-0 mb-1">
    Copyright &copy;
    <script type="text/javascript">
      document.write(new Date().getFullYear());
    </script>
    <a href="javascript:void(0);" class="link-primary text-decoration-underline">Jails Court Case Management</a>
  </p>
</footer>
<!-- End Footer -->
</div>

<!-- ========================
      End Page Content
    ========================= -->
</div>
<!-- End Wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery-3.7.1.min.js" type="text/javascript"></script>

<script>
  $(document).ready(function () {
    if (!$.fn.DataTable.isDataTable('.datatable')) {
      $('.datatable').DataTable({
        pageLength: 10,
        lengthMenu: [10, 25, 50],
        language: {
          paginate: {
            previous: '<i class="ti ti-arrow-left"></i>',
            next: '<i class="ti ti-arrow-right"></i>'
          },
          info: "Showing _START_ to _END_ of _TOTAL_ entries"
        },
        dom:
          "<'row align-items-center mb-3'<'col-md-6'l><'col-md-6 d-flex justify-content-end'f>>" +
          "<'row'<'col-sm-12'tr>>" +
          "<'row mt-3'<'col-sm-12 col-md-6'i><'col-sm-12 col-md-6 d-flex justify-content-end'p>>",
        responsive: true
      });
    }
  });
</script>

<!-- Bootstrap Core JS -->
<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

<!-- Apexchart JS -->
<script src="assets/plugins/apexchart/apexcharts.min.js" type="text/javascript"></script>
<script src="assets/plugins/apexchart/chart-data.js" type="text/javascript"></script>

<!-- Daterangepikcer JS -->
<script src="assets/js/moment.min.js" type="text/javascript"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<!-- Datatable JS -->
<script src="assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="assets/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>
<!-- <script src="assets/plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script> -->
<!-- <script src="assets/plugins/datatables/js/dataTables.bootstrap5.min.js" type="text/javascript"></script> -->

<!-- Simplebar JS -->
<script src="assets/plugins/simplebar/simplebar.min.js" type="text/javascript"></script>

<!-- Select2 JS -->
<script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>

<!-- Choices Js -->
<script src="assets/plugins/choices.js/public/assets/scripts/choices.min.js" type="text/javascript"></script>

<!-- Main JS -->
<!-- <script src="assets/json/leads-reports.js" type="text/javascript"></script> -->
<script src="assets/js/script.js" type="text/javascript"></script>
</body>

</html>