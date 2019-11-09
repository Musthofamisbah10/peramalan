<section class="content-header">
	<h1>
		<?= $header ?>
		<small><?= $sistem ?></small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active"><?= $header ?></li>
	</ol>
</section>

<!-- MAIN CONTENTS -->
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><?= $table ?></h3>
					<div class="box-body">
						<table  id="table_id" class="table"  cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Jabatan</th>
									<th class="text-center" width="10px" colspan="2">Kelolah</th>
								</tr>
							</thead>
							<!-- <tbody>
								<tr>
									<td>1</td>
									<td>Misbah</td>
									<td width="10px">
										<a href="" class="btn-sm btn-flat btn-danger"><i class="fa fa-fw fa-trash"></i></a>
									</td>
									<td width="10px">
										<a href="" class="btn-sm btn-flat btn-warning"><i class="fa fa-fw fa-pencil"></i></a>
									</td>
								</tr>
							</tbody> -->
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box">
				<div class="box-header with-border">
					<h3 id="title-form" class="box-title">Tambah Data Kategori</h3>
					<div class="box-body">
						<form action="" id="form-kategori">
							<input type="hidden" value="" name="id_kategori">
							<div class="form-group">
								<label for="id_kategori" class="label-control">Kategori</label>
								<input type="text" name="kategori" class="form-control" id="kategori" placeholder="kategori">
								<span class="help-block"></span>
							</div>
							<button id="tambah-data" onclick="tambah()" type="submit" class="btn-primary btn-sm btn-flat pull-right">Tambah Data</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- AND MAIN CONTENTS -->

<!-- <script>
	var table;
	$(document).ready(function () {
    table = $('#table_id').DataTable();
} );
</script> -->