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
            <h1 class="m-0">Data PAK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data PAK</li>
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
        <!-- Small boxes (Stat box) -->
				 <div class="row">
					<div class="col-md-12">

					<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data PAK</h3>
              </div>
							
								<form action="<?= base_url('data-pak/new') ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <?php foreach($file as $row): ?>
                  	<div class="form-group">
                  	    <label for="berkas_<?= $row->id_berkas_upload ?>"><?= $row->berkas_name ?> </label>
                  	    <input type="file" class="form-control" id="berkas_<?= $row->id_berkas_upload ?>" name="berkas[<?= $row->id_berkas_upload ?>]" accept="application/pdf">
                  	</div>
                  <?php endforeach; ?>
                </div>
                <!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Upload</button>
							</div>
              </form>
            </div>
					</div>
				 </div>
        <!-- /.row -->
				 
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
