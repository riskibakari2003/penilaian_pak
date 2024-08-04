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
            <h1 class="m-0">Master Data Jabatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Master Data Jabatan</li>
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
                <h3 class="card-title">New Jabatan</h3>
              </div>
							
              <form action="<?= base_url('master/jabatan/new') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="jabatan">Nama Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" placeholder="Nama Jabatan" name="jabatan">
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
								<table id="tbljabatan" class="table table-bordered table-striped">
										<thead>
												<tr>
														<th>No</th>
														<th>jabatan</th>
														<th>Aksi</th>
												</tr>
										</thead>
										<tbody>
												<?php $no = 1; foreach($jabatan as $row): ?>
														<tr>
																<td><?= $no++; ?></td>
																<td><?= $row->jabatan; ?></td>
																<td>
																		<a href="<?= base_url('master/jabatan/delete/'.$row->id_jabatan); ?>" class="btn btn-danger btn-sm">Hapus</a>
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
        $("#tbljabatan").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#tbljabatan_wrapper .col-md-6:eq(0)');
    });
</script>
<?php $footer_js = ob_get_clean(); ?>
<?php $this->load->view('template/footer', ['footer_js' => $footer_js]); ?>
