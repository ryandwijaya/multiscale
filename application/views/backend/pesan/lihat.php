<div class="dt-card__body">

	<!-- Form -->
	<?= form_open('admin/produk/update/'.$pesan['pesan_id'],array('enctype'=>'multipart/form-data')) ?>

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="normal-input-1">Nama Pengirim</label>

		<div class="col-md-10 col-sm-9">
			<input type="text" class="form-control" id="normal-input-1"
				   placeholder="Nama Produk" name="nama" readonly value="<?=$pesan['pesan_nama']?>" autocomplete="off">
		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="normal-input-1">Email </label>

		<div class="col-md-10 col-sm-9">
			<input type="text" class="form-control" id="normal-input-1"
				   placeholder="Nama Produk" name="nama" readonly value="<?=$pesan['pesan_email']?>" autocomplete="off">

		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="text-area-1-1">Isi</label>

		<div class="col-md-10 col-sm-9">
			<textarea class="form-control" id="text-area-1" rows="5"
					  placeholder="Deskripsi" name="deskripsi" readonly autocomplete="off"><?=$pesan['pesan_isi']?></textarea>
		</div>
	</div>
	<!-- /form row -->

	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

	<!-- Form Row -->
	<div class="form-row">
		<label class="col-md-2 col-sm-3 col-form-label text-sm-right"
			   for="normal-input-1">Waktu Dikirim </label>

		<div class="col-md-10 col-sm-9">
			<?php
			$waktu = explode(' ',$pesan['pesan_date_created']);
			?>
			<input type="text" class="form-control" id="normal-input-1"
				   placeholder="Nama Produk" name="nama" readonly value="<?=date_indo($waktu[0])?> | <?=$waktu[1]?>" autocomplete="off">

		</div>
	</div>
	<!-- /form row -->


	<!-- Separator -->
	<hr class="border-dashed my-8">
	<!-- /separator -->

		<!-- Form Group -->
	<div class="form-group form-row">
		<div class="col-xl-10 offset-xl-2">
			<a href="<?=base_url('admin/pesan')?>" class="btn btn-outline-primary text-uppercase" name="update"><i class="fa fa-backward"></i> &nbsp;Kembali</a>

		</div>
	</div>
	<!-- /form group -->


	<?= form_close() ?>
	<!-- /form -->

</div>
