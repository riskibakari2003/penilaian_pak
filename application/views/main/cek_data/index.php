<?php $this->load->view('template/header', ['title' => $title]); ?>
<?php $this->load->view('template/navbar'); ?>	
<?php $this->load->view('template/topbar', ['title' => $title]); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
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

				<?php if ($session->role != 1) : ?>
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="btn-container">
                    <button id="btnBelumSelesai" onclick="tblBelumSelesai()" class="btn btn-info">Belum Verifikasi</button>
                    <button id="btnSelesai" onclick="tblSelesai()" class="btn btn-secondary">Sudah Verifikasi</button>
                </div>
            </div>
        </div>
				<?php endif; ?>

				 <div class="row">
					 <div class="col-md-12">
						<?php if ($session->role == 1) : ?>
							<div class="card">
								<div class="card-body">
									<table id="tblcekdata" class="table table-bordered table-striped">
											<thead>
													<tr>
															<th>Nama</th>
															<th>NIDN</th>
															<th>Email</th>
															<th>No Telfon</th>
															<th>Tahun Ajaran</th>
															<th>Jabatan Usulan</th>
															<th>Institusi</th>
															<th>Status</th>
															<th>Aksi</th>
													</tr>
											</thead>
											<tbody>
												<?php foreach($penilaian as $row): ?>
													<td><?= $row->nama ?></td>
													<td><?= $row->nip_nidn ?></td>
													<td><?= $row->email ?></td>
													<td><?= $row->no_telp ?></td>
													<td><?= $row->tahun_ajaran ?></td>
													<td><?= $row->jabatan ?></td>
													<td><?= $row->nama_institusi ?></td>
													<td><?= $row->status == 0 ? "Belum Diverifikasi" : "Sudah Terverifikasi"; ?></td>
													<td>
														<a href="<?= base_url('cek-data/'.$row->id_verifikasi) ?>" class="btn btn-primary">Detail</a>
													</td>
												<?php endforeach; ?>
											</tbody>
									</table>
								</div>
							</div>
						<?php else : ?>									
							<div class="card" id="belum_selesai">
								<div class="card-body">
									<table id="tblcekdatabelum" class="table table-bordered table-striped">
											<thead>
													<tr>
															<th>Nama</th>
															<th>NIDN</th>
															<th>Email</th>
															<th>No Telfon</th>
															<th>Tahun Ajaran</th>
															<th>Jabatan Usulan</th>
															<th>Institusi</th>
															<th>Status</th>
															<th>Aksi</th>
													</tr>
											</thead>
											<tbody>
												<?php foreach($penilaianBelum as $row): ?>
													<td><?= $row->nama ?></td>
													<td><?= $row->nip_nidn ?></td>
													<td><?= $row->email ?></td>
													<td><?= $row->no_telp ?></td>
													<td><?= $row->tahun_ajaran ?></td>
													<td><?= $row->jabatan ?></td>
													<td><?= $row->nama_institusi ?></td>
													<td><?= $row->status == 0 ? "Belum Diverifikasi" : "Sudah Terverifikasi"; ?></td>
													<td>
														<a href="<?= base_url('cek-data/'.$row->id_verifikasi) ?>" class="btn btn-primary">Detail</a>
													</td>
												<?php endforeach; ?>
											</tbody>
									</table>
								</div>
							</div>
					
							<div class="card" id="selesai">
								<div class="card-body">
									<table id="tblcekdatasudah" class="table table-bordered table-striped">
											<thead>
													<tr>
															<th>Nama</th>
															<th>NIDN</th>
															<th>Email</th>
															<th>No Telfon</th>
															<th>Tahun Ajaran</th>
															<th>Jabatan Usulan</th>
															<th>Institusi</th>
															<th>Status</th>
															<th>Aksi</th>
													</tr>
											</thead>
											<tbody>
												<?php foreach($penilaianSudah as $row): ?>
													<td><?= $row->nama ?></td>
													<td><?= $row->nip_nidn ?></td>
													<td><?= $row->email ?></td>
													<td><?= $row->no_telp ?></td>
													<td><?= $row->tahun_ajaran ?></td>
													<td><?= $row->jabatan ?></td>
													<td><?= $row->nama_institusi ?></td>
													<td><?= $row->status == 0 ? "Belum Diverifikasi" : "Sudah Terverifikasi"; ?></td>
													<td>
														<a href="<?= base_url('cek-data/'.$row->id_verifikasi) ?>" class="btn btn-primary">Detail</a>
													</td>
												<?php endforeach; ?>
											</tbody>
									</table>
								</div>
							</div>
						<?php endif; ?>
						</div>
				 </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.main content -->
  </div>
  <!-- /.content-wrapper -->

<?php ob_start(); ?>
<script>
		$('#selesai').hide();
		
    $(function () {
        $("#tblcekdata").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#tblcekdata_wrapper .col-md-6:eq(0)');
    });

    $(function () {
        $("#tblcekdatasudah").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#tblcekdata_wrapper .col-md-6:eq(0)');
    });

    $(function () {
        $("#tblcekdatabelum").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#tblcekdata_wrapper .col-md-6:eq(0)');
    });

		function tblBelumSelesai() {
        $('#belum_selesai').show();
        $('#selesai').hide();
        $('#btnBelumSelesai').addClass('btn-info').removeClass('btn-secondary');
        $('#btnSelesai').addClass('btn-secondary').removeClass('btn-info');
    }

    function tblSelesai() {
        $('#belum_selesai').hide();
        $('#selesai').show();
        $('#btnBelumSelesai').addClass('btn-secondary').removeClass('btn-info');
        $('#btnSelesai').addClass('btn-info').removeClass('btn-secondary');
    }
</script>
<?php $footer_js = ob_get_clean(); ?>
<?php $this->load->view('template/footer', ['footer_js' => $footer_js]); ?>
