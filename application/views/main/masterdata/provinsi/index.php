<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
		<br>
		<hr>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8" style="text-align: center; display: flex; justify-content: center; align-items: center; height: 20px;">
				<h4>SELAMAT DATANG DI APLIKASI PENILAIAN ANGKA KREDIT JABATAN</h4>
			</div>
			<div class="col-lg-2"></div>
		</div>
		<hr>
		<br>
		<?php if($session->role == 0 || $session->role == 2 ){ ?>
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $dataBelumVerif ?></h3>

                <p>Belum Verifikasi</p>
              </div>
              <div class="icon">
                <i class="ion ion-cros"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $dataVerif ?></h3>

                <p>Sudah Verifikasi</p>
              </div>
              <div class="icon">
                <i class="ion ion-check"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
		<?php } ?>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.main content -->
  </div>
  <!-- /.content-wrapper -->
