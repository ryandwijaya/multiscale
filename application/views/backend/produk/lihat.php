<div class="dt-card__body">

	<!-- Form -->
	<?= form_open('admin/produk/update/'.$produk['produk_id'],array('enctype'=>'multipart/form-data')) ?>

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="normal-input-1">Nama Produk</label>

		<div class="col-md-10 col-sm-9">
			<input type="text" class="form-control" id="normal-input-1"
				   placeholder="Nama Produk" name="nama" readonly value="<?=$produk['produk_nama']?>" autocomplete="off">
		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="normal-input-1">Kategori</label>

		<div class="col-md-10 col-sm-9">
			<input type="text" class="form-control" id="normal-input-1"
				   placeholder="Nama Produk" name="nama" readonly value="<?=$produk['kategori_nama']?>" autocomplete="off">

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
					  placeholder="Deskripsi" name="deskripsi" readonly autocomplete="off"><?=$produk['produk_deskripsi']?></textarea>
		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="normal-input-1">Harga</label>

		<div class="col-md-10 col-sm-9">
			<input type="text" class="form-control" id="normal-input-1" name="harga"
				   placeholder="Harga" readonly value="Rp. <?=nominal($produk['produk_harga'])?>" autocomplete="off">
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
			<img src="<?=base_url('assets/upload/images/produk/'.$produk['produk_foto'])?>" width="100%" alt="Foto">

		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Group -->
	<div class="form-group form-row">
		<div class="col-xl-10 offset-xl-2">
			<a href="<?=base_url('admin/produk')?>" class="btn btn-outline-primary text-uppercase" name="update"><i class="fa fa-backward"></i> &nbsp;Kembali</a>
			<a href="<?=base_url('admin/produk/update/'.$produk['produk_id'])?>" class="btn btn-success text-uppercase" name="update"><i class="fa fa-edit"></i> &nbsp;Update
			</a>
		</div>
	</div>
	<!-- /form group -->


	<?= form_close() ?>
	<!-- /form -->

</div>
