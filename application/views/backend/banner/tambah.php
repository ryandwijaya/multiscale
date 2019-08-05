<div class="dt-card__body">

	<!-- Form -->
	<?= form_open('admin/banner/tambah',array('enctype'=>'multipart/form-data')) ?>

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="normal-input-1">Judul</label>

		<div class="col-md-10 col-sm-9">
			<input type="text" class="form-control" id="normal-input-1"
				   placeholder="Judul Banner" name="judul" required autocomplete="off">
		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="text-area-1-1">Deskripsi</label>

		<div class="col-md-10 col-sm-9">
			<textarea class="form-control" id="text-area-1" rows="3"
					  placeholder="Deskripsi" name="deskripsi" required autocomplete="off"></textarea>
		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="file-field">Foto</label>

		<div class="col-md-10 col-sm-9">
			<div class="custom-file">
				<input type="file" class="custom-file-input" id="file-field" name="foto" required>
				<label class="custom-file-label" for="file-field">Pilih foto...</label>
			</div>
		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Group -->
	<div class="form-group form-row">
		<div class="col-xl-10 offset-xl-2">
			<a href="<?=base_url('admin/banner')?>" class="btn btn-outline-primary text-uppercase" name="update"><i class="fa fa-backward"></i> &nbsp;Kembali</a>
			<button type="submit" class="btn btn-primary text-uppercase" name="simpan"><i class="fa fa-save"></i> &nbsp;Simpan
			</button>
		</div>
	</div>
	<!-- /form group -->


	<?= form_close() ?>
	<!-- /form -->

</div>
