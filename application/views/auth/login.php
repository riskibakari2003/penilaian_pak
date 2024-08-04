<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Penilaian PAK | LogIn</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('public/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('public/dist/css/adminlte.min.css') ?>">
  <!-- Alert -->
  <link rel="stylesheet" href="<?= base_url('public/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('public/plugins/toastr/toastr.min.css') ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url('auth') ?>" class="h1"><b>Penilaian</b> PAK</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login Untuk Memulai Sesi anda.</p>

      <form action="#" method="post">

        <div class="input-group mb-3">
          <input type="text" id="login" name="login" class="form-control" placeholder="Email atau Username" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8"></div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('public/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('public/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('public/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<script src="<?= base_url('public/plugins/toastr/toastr.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('public/dist/js/adminlte.min.js') ?>"></script>
<script>
    <?php if ($this->session->flashdata('login_error')): ?>
        <script>
            toastr.error('<?= $this->session->flashdata('login_error'); ?>', 'Error', {
                "progressBar": true,
                "timeOut": 3000
            });
        </script>
    <?php endif; ?>
</script>
</body>
</html>
