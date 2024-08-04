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
            <h1 class="m-0">Master Data Institusi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Master Data Institusi</li>
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
                <h3 class="card-title">New Institusi</h3>
              </div>
							
              <form action="<?= base_url('master/institusi/new') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_institusi">Nama Institusi</label>
                    <input type="text" class="form-control" id="nama_institusi" placeholder="Nama Institusi" name="nama_institusi">
                  </div>
                  <div class="form-group">
                    <label for="alamat_institusi">Alamat Institusi</label>
                    <textarea class="form-control" id="alamat_institusi" name="alamat_institusi"></textarea>
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
								<table id="tblinstitusi" class="table table-bordered table-striped">
										<thead>
												<tr>
														<th>No</th>
														<th>Institusi</th>
														<th>Alamat</th>
														<th>Aksi</th>
												</tr>
										</thead>
										<tbody>
												<?php $no = 1; foreach($institusi as $row): ?>
														<tr>
																<td><?= $no++; ?></td>
																<td><?= $row->nama_institusi; ?></td>
																<td><?= $row->alamat_institusi; ?></td>
																<td>
																		<a href="<?= base_url('master/institusi/delete/'.$row->id_institusi); ?>" class="btn btn-danger btn-sm">Hapus</a>
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
        $("#tblinstitusi").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#tblinstitusi_wrapper .col-md-6:eq(0)');
    });
</script>
<?php $footer_js = ob_get_clean(); ?>
<?php $this->load->view('template/footer', ['footer_js' => $footer_js]); ?>
