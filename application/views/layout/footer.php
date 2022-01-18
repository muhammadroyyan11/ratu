  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>2021</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-free-bootstrap-theme/ -->
        Designed by <a href="">Ratu Balqis Fernando</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>


  <script src="<?= base_url() ?>assets/app-assets/vendors/js/charts/apexcharts.min.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/extensions/tether.min.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/extensions/shepherd.min.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="<?= base_url() ?>assets/app-assets/js/core/app-menu.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/js/core/app.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/js/scripts/components.js"></script>
  <!-- END: Theme JS-->

  <!-- Datepicker -->
  <script src="<?= base_url(); ?>assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.min.js"></script>

  <!-- BEGIN: Page JS-->
  <script src="<?= base_url() ?>assets/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/js/scripts/datatables/datatable.js"></script>
  <script src="<?= base_url() ?>assets/assets/js/ajax.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>

  <script src="<?= base_url() ?>assets/app-assets/vendors/js/calendar/fullcalendar.min.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/calendar/extensions/daygrid.min.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/calendar/extensions/timegrid.min.js"></script>
  <script src="<?= base_url() ?>assets/app-assets/vendors/js/calendar/extensions/interactions.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>

  <script type="text/javascript">
    $(function() {

      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end) {
        $('#tangalrange').val(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
      }

      $('#tanggalrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
          'Hari ini': [moment(), moment()],
          'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          '7 hari terakhir': [moment().subtract(6, 'days'), moment()],
          '30 hari terakhir': [moment().subtract(29, 'days'), moment()],
          'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
          'Bulan lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
          'Tahun ini': [moment().startOf('year'), moment().endOf('year')],
          'Tahun lalu': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')]
        }
      }, cb);

      cb(start, end);
    });

    $(document).ready(function() {
      var table = $('#dataTable').DataTable({
        buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
        dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
          "<'row'<'col-md-12'tr>>" +
          "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
        lengthMenu: [
          [5, 10, 25, 50, 100, -1],
          [5, 10, 25, 50, 100, "All"]
        ],
        columnDefs: [{
          targets: -1,
          orderable: false,
          searchable: false
        }]
      });

      table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
    });
  </script>

  </body>

  </html>