<div class="dt-card__body">

	<!-- Form -->
	<?= form_open('admin/banner/update/'.$banner['banner_id'],array('enctype'=>'multipart/form-data')) ?>

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="normal-input-1">Judul</label>

		<div class="col-md-10 col-sm-9">
			<input type="text" class="form-control" id="normal-input-1"
				   placeholder="Judul Banner" value="<?=$banner['banner_judul']?>" name="judul" required autocomplete="off">
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
					  placeholder="Deskripsi" name="deskripsi" required autocomplete="off"><?=$banner['banner_deskripsi']?></textarea>
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
			<img src="<?=base_url('assets/upload/images/banner/'.$banner['banner_foto'])?>" width="100%" alt="Foto">
			<hr>
			<button type="button"  class="btn btn-outline-primary btn-xs" onclick="showInput()">Ganti Foto ?</button>
			<br>
			<div class="custom-file"  id="ganti-foto" style="display: none">
				<input type="file" class="custom-file-input" id="file-field" name="foto">
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
			<button type="submit" class="btn btn-success text-uppercase" name="update"><i class="fa fa-edit"></i> &nbsp;Update
			</button>
		</div>
	</div>
	<!-- /form group -->


	<?= form_close() ?>
	<!-- /form -->

</div>
