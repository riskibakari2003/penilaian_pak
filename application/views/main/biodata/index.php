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
				<form action="<?= base_url('biodata/update/'). (isset($biodata->nik) ? $biodata->nik : '') ?>" method="POST">
				 <div class="row">
					<div class="col-md-6">

					<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Biodata</h3>
              </div>
							
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" value="<?= isset($biodata->nama) ? $biodata->nama : '' ?>">
                  </div>
                  <div class="form-group">
                    <label for="nip_nidn">NIP / NIDN</label>
                    <input type="text" class="form-control" id="nip_nidn" placeholder="NIP / NIDN" name="nip_nidn" value="<?= isset($biodata->nip_nidn) ? $biodata->nip_nidn : '' ?>">
                  </div>
                  <div class="form-group">
                    <label for="provinsi">Provinsi</label>
										<select class="form-control" name="provinsi" id="provinsi">
											<option value="">Pilih Provinsi</option>
											<?php foreach($provinsi as $row): ?>
												<option value="<?= $row->id_provinsi ?>" <?= isset($biodata->id_provinsi) && $biodata->id_provinsi == $row->id_provinsi ? 'selected' : '' ?>><?= $row->provinsi ?></option>
											<?php endforeach; ?>
										</select>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?= isset($biodata->email) ? $biodata->email : '' ?>">
                  </div>
                  <div class="form-group">
                    <label for="no_telfon">No Telfon</label>
                    <input type="text" class="form-control" id="no_telfon" placeholder="No Telfon" name="no_telfon" value="<?= isset($biodata->no_telp) ? $biodata->no_telp : '' ?>">
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="pangkat">Pangkat</label>
											<select class="form-control" name="pangkat" id="pangkat">
												<option value="">Pilih Pangkat</option>
												<?php foreach($pangkat as $row): ?>
													<option value="<?= $row->id_pangkat ?>" <?= isset($biodata->id_pangkat) && $biodata->id_pangkat == $row->id_pangkat ? 'selected' : '' ?>><?= $row->pangkat ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="golongan">Golongan</label>
											<select class="form-control" name="golongan" id="golongan">
												<option value="">Pilih Golongan</option>
												<?php foreach($golongan as $row): ?>
													<option value="<?= $row->id_golongan ?>" <?= isset($biodata->id_golongan) && $biodata->id_golongan == $row->id_golongan ? 'selected' : '' ?>><?= $row->golongan ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
								</div>
                  <div class="form-group">
                    <label for="jabfung_terakhir">Jabfung Terakhir</label>
										<select class="form-control" name="jabfung_terakhir" id="jabfung_terakhir">
											<option value="">Pilih Jabfung Terakhir</option>
											<?php foreach($jabatan as $row): ?>
												<option value="<?= $row->id_jabatan ?>" <?= isset($biodata->id_jabatan_fungsional) && $biodata->id_jabatan_fungsional == $row->id_jabatan ? 'selected' : '' ?>><?= $row->jabatan ?></option>
											<?php endforeach; ?>
										</select>
                  </div>
                  <div class="form-group">
                    <label for="jabatan_usulan">Jabatan Usulan</label>
										<select class="form-control" name="jabatan_usulan" id="jabatan_usulan">
											<option value="">Pilih Jabatan Usulan</option>
											<?php foreach($jabatan as $row): ?>
												<option value="<?= $row->id_jabatan ?>" <?= isset($biodata->id_jabatan_usulan) && $biodata->id_jabatan_usulan == $row->id_jabatan ? 'selected' : '' ?>><?= $row->jabatan ?></option>
											<?php endforeach; ?>
										</select>
                  </div>
                  <div class="form-group">
                    <label for="institusi">Perguruan Tinggi</label>
										<select class="form-control" name="institusi" id="institusi">
											<option value="">Pilih Perguruan Tinggi</option>
											<?php foreach($institusi as $row): ?>
												<option value="<?= $row->id_institusi ?>" <?= isset($biodata->id_institusi) && $biodata->id_institusi == $row->id_institusi ? 'selected' : '' ?>><?= $row->nama_institusi ?></option>
											<?php endforeach; ?>
										</select>
                  </div>
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
              </form>
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
	
</script>
<?php $footer_js = ob_get_clean(); ?>
<?php $this->load->view('template/footer', ['footer_js' => $footer_js]); ?>
