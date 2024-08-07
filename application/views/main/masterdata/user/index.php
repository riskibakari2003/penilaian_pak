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
            <h1 class="m-0">Master Tahun Ajaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Master Tahun Ajaran</li>
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
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<table id="tbltahun" class="table table-bordered table-striped">
										<thead>
												<tr>
														<th>No</th>
														<th>Username</th>
														<th>Nama</th>
														<th>NIK</th>
														<th>Aksi</th>
												</tr>
										</thead>
										<tbody>
												<?php $no = 1; foreach($user as $row): ?>
														<tr>
																<td><?= $no++; ?></td>
																<td><?= $row->username; ?></td>
																<td><?= $row->nama; ?></td>
																<td><?= $row->nik; ?></td>
																<td>
																		<a href="<?= base_url('master/user/update-password/'.$row->nik); ?>" class="btn btn-warning btn-sm">Reset Password</a>
																		<button class="btn btn-warning btn-sm btn-update-nik" data-nik="<?= $row->nik; ?>">Update NIK</button>
																		<a href="<?= base_url('master/user/delete/'.$row->nik); ?>" class="btn btn-danger btn-sm">Hapus</a>
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

	<div class="modal fade" id="updateNikModal" tabindex="-1" aria-labelledby="updateNikModalLabel" aria-hidden="true">
			<div class="modal-dialog">
					<div class="modal-content">
							<div class="modal-header">
									<h5 class="modal-title" id="updateNikModalLabel">Update NIK</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
									</button>
							</div>
							<form action="<?= base_url() ?>" method="POST">
								<div class="modal-body">
												<div class="form-group">
														<label for="old_nik">NIK Lama</label>
														<input type="text" class="form-control" id="old_nik" name="old_nik" readonly>
												</div>
												<div class="form-group">
														<label for="new_nik">NIK Baru</label>
														<input type="text" class="form-control" id="new_nik" name="new_nik" >
												</div>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-info">Update</button>
								</div>
							</form>
					</div>
			</div>
	</div>
<?php ob_start(); ?>
<script>
    $(function () {
        $("#tbltahun").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        }).buttons().container().appendTo('#tbltahun_wrapper .col-md-6:eq(0)');
    });

		$('.btn-update-nik').on('click', function() {
        var nik = $(this).data('nik');

        $('#updateNikModal #old_nik').val(nik);

        $('#updateNikModal').modal('show');
    });
</script>
<?php $footer_js = ob_get_clean(); ?>
<?php $this->load->view('template/footer', ['footer_js' => $footer_js]); ?>
