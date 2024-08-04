<footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y'); ?> <a href="#">Penilaian PAK</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.1
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('public/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('public/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('public/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('public/plugins/chart.js/Chart.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('public/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/toastr/toastr.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('public/plugins/sparklines/sparkline.js') ?>"></script>
<!-- JQVMap -->
<script src="<?= base_url('public/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('public/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('public/plugins/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/daterangepicker/daterangepicker.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('public/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('public/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('public/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
<!-- Select2 -->
<script src="<?= base_url('public/plugins/select2/js/select2.full.min.js') ?>"></script>
<!-- InputMask -->
<script src="<?= base_url('public/plugins/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/inputmask/jquery.inputmask.min.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('public/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>"></script>
<!-- BS-Stepper -->
<script src="<?= base_url('public/plugins/bs-stepper/js/bs-stepper.min.js') ?>"></script>
<!-- dropzonejs -->
<script src="<?= base_url('public/plugins/dropzone/min/dropzone.min.js') ?>"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url('public/plugins/bs-custom-file-input/bs-custom-file-input.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('public/dist/js/adminlte.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('public/dist/js/demo.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('public/dist/js/pages/dashboard.js') ?>"></script>
	<?php if (is_object($this->session) && $this->session->flashdata('error')): ?>
        <script>
            toastr.error('<?= $this->session->flashdata('error'); ?>', 'Error', {
                "progressBar": true,
                "timeOut": 3000
            });
        </script>
    <?php endif; ?>

    <?php if (is_object($this->session) && $this->session->flashdata('success')): ?>
        <script>
            toastr.success('<?= $this->session->flashdata('success'); ?>', 'Success', {
                "progressBar": true,
                "timeOut": 3000
            });
        </script>
    <?php endif; ?>
	<?php if (isset($footer_js)) echo $footer_js; ?>
</body>
</html>
