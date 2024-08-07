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
              <li class="breadcrumb-item"><a href="<?= base_url('cek-data') ?>"><?= $title ?></a></li>
              <li class="breadcrumb-item active"><?= $session->role == 1 ? "Detail Data" : "Verifikasi Berkas"; ?></li>
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
		 
				<div class="row mb-3">
					<div class="col-md-10">
						<div class="btn-container">
							<button id="btnBelumSelesai" onclick="tblBelumSelesai()" class="btn btn-info">Berkas Dukung</button>
							<button id="btnSelesai" onclick="tblSelesai()" class="btn btn-secondary">Berkas PAK</button>
						</div>
					</div>
					<?php if ($session->role != 1) : ?>
						<?php if ($penilaian->verifikasi->status == 0) : ?>
							<div class="col-md-2">
								<div class="btn-container">
								<a href="<?= base_url('cek-data/verifikasi/'.$penilaian->verifikasi->id_verifikasi_detail) ?>" class="btn btn-info" style="width:250px;">Verifikasi</a>
								</div>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				</div>

				 <div class="row">
					 <div class="col-md-12">								
							<div class="card" id="belum_selesai">
								<div class="card-body">
										<h4>
											<b>No Surat : <?= $penilaian->verifikasi->no_surat_pengantar ?></b>
											<b><small class="float-right">Date: <?= date('d/m/Y', strtotime($penilaian->verifikasi->tgl_surat_pengatar)) ?></small></b>
										</h4>
										<hr>
									<table id="tblcekdatabelum" class="table table-bordered table-striped">
											<thead>
													<tr>
														<th>Nama Berkas</th>
														<th>Status Berkas</th>
														<th>Catatan</th>
														<th>Aksi</th>
													</tr>
											</thead>
											<tbody>
												<?php foreach ($penilaian->dd as $key => $value) : ?>
													<tr>
														<td><?= $value->berkas_name ?></td>
														<td><?= $value->status_berkas == 0 ? 'Belum Terverifikasi' : 'Terverifikasi'; ?></td>
														<td><?= $value->catatam ?></td>
														<td>
															<a href="<?= base_url('uploads/'.$penilaian->verifikasi->nik.'/DD/'.$penilaian->verifikasi->id_data_pendukung.'/'. $value->nama_berkas) ?>" class="btn btn-info" target="_blank">Lihat Berkas</a>
														</td>
													</tr>	
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
															<th>Nama Berkas</th>
															<th>Status Berkas</th>
															<th>Catatan</th>
															<th>Aksi</th>
														</tr>
												</thead>
												<tbody>
													<?php foreach ($penilaian->pak as $key => $value) : ?>
														<tr>
															<td><?= $value->berkas_name ?></td>
															<td><?= $value->status_berkas == 0 ? 'Belum Terverifikasi' : 'Terverifikasi'; ?></td>
															<td><?= $value->catatam ?></td>
															<td>
																<a href="<?= base_url('uploads/'.$penilaian->verifikasi->nik.'/DPAK/'.$penilaian->verifikasi->id_data_pak.'/'. $value->nama_berkas) ?>" class="btn btn-info" target="_blank">Lihat Berkas</a>
															</td>
														</tr>							
													<?php endforeach; ?>					
												</tbody>
										</table>
								</div>
							</div>
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
