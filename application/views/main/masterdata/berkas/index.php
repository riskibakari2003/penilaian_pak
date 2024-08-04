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
            <h1 class="m-0">Master Berkas Upload</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Master Berkas Upload</li>
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
				 <div class="row">
					<div class="col-md-5">

					<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Berkas Upload</h3>
              </div>
							
              <form action="<?= base_url('master/berkas/new') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_berkas">Nama Berkas</label>
                    <input type="text" class="form-control" id="nama_berkas" placeholder="Nama Berkas" name="nama_berkas">
                  </div>
                  <div class="form-group">
                    <label for="singkatan_berkas">Nama Singkatan Berkas</label>
                    <input type="text" class="form-control" id="singkatan_berkas" placeholder="Nama Singkatan Berkas" name="singkatan_berkas">
                  </div>
                  <div class="form-group">
                    <label for="jenis_berkas">Jenis Berkas</label>
										<select class="form-control" name="jenis_berkas" id="jenis_berkas">
											<option value="">Pilih Jenis Berkas</option>
											<option value="1">Data Dukung</option>
											<option value="2">Data Penilaian PAK</option>
										</select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </form>
            </div>
					</div>
					<div class="col-md-7">
						<div class="card">
							<div class="card-body">
								<table id="berkas" class="table table-bordered table-striped">
										<thead>
												<tr>
														<th>No</th>
														<th>Nama Berkas</th>
														<th>Singkatan</th>
														<th>Jenis Berkas</th>
														<th>Aksi</th>
												</tr>
										</thead>
										<tbody>
												<?php $no = 1; foreach($berkas as $row): ?>
														<tr>
																<td><?= $no++; ?></td>
																<td><?= $row->berkas_name; ?></td>
																<td><?= $row->berkas_singkatan; ?></td>
																<td><?= $row->jenis_berkas; ?></td>
																<td>
																		<a href="<?= base_url('master/berkas/delete/'.$row->id_berkas_upload); ?>" class="btn btn-danger btn-sm">Hapus</a>
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
    $(function () {
        $("#berkas").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
<?php $footer_js = ob_get_clean(); ?>
<?php $this->load->view('template/footer', ['footer_js' => $footer_js]); ?>
