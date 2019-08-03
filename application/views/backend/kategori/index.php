
<div class="dt-card">

    <!-- Card Body -->
    <div class="dt-card__body">
        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
				data-target="#form-input-kategori"><i class="fa fa-plus"></i> Tambah Kategori</button><hr>
        <!-- Tables -->
        <div class="table-responsive">

            <table id="data-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th class="text-center"><i class="fa fa-cog animation-customizer"></i></th>
                </tr>
                </thead>
                <tbody>
				<?php
				$no = 1;
				foreach ($kategori as $key=>$value):
				?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$value['kategori_nama']?></td>
                    <td class="text-center">
                        <button type="button" class="btn btn-outline-success btn-sm kategori-edit" data-toggle="modal" data-target="#form-edit-kategori" title="Edit" value="<?=$value['kategori_id']?>"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-outline-danger btn-sm kategori-hapus" data-toggle="modal" data-target="#modal-hapus-kategori" title="Hapus" value="<?=$value['kategori_id']?>"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
				<?php
				$no++;
				endforeach;
				?>
                </tbody>
            </table>

        </div>
        <!-- /tables -->

    </div>
    <!-- /card body -->

	<!-- Modal input -->
	<div class="modal fade" id="form-input-kategori" tabindex="-1" role="dialog"
		 aria-labelledby="model-8"
		 aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">

			<!-- Modal Content -->
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h3 class="modal-title" id="model-8">Tambah Data Kategori</h3>
					<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!-- /modal header -->

				<!-- Modal Body -->
				<?=form_open('admin/kategori/tambah')?>
				<div class="modal-body">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Nama Kategori:</label>
						<input class="form-control" id="recipient-name" name="kategori" type="text" required autocomplete="off">
					</div>
				</div>
				<!-- /modal body -->

				<!-- Modal Footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-sm"
							data-dismiss="modal">Tutup
					</button>
					<button type="submit" name="simpan" class="btn btn-primary btn-sm"
							>Simpan
					</button>
				</div>
				<?=form_close()?>
				<!-- /modal footer -->

			</div>
			<!-- /modal content -->

		</div>
	</div>
	<!-- /modal -->

	<!-- Modal Edit -->
	<div class="modal fade" id="form-edit-kategori" tabindex="-1" role="dialog"
		 aria-labelledby="model-8"
		 aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">

			<!-- Modal Content -->
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h3 class="modal-title" id="model-8">Update Data Kategori</h3>
					<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!-- /modal header -->

				<!-- Modal Body -->
				<?=form_open('admin/kategori/update',array('class'=>'update'))?>
				<div class="modal-body">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Nama Kategori:</label>
						<input id="kategori-id" name="kategori_id" type="hidden">
						<input class="form-control" id="kategori-nama" name="kategori" type="text" required autocomplete="off">
					</div>
				</div>
				<!-- /modal body -->

				<!-- Modal Footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-sm"
							data-dismiss="modal">Tutup
					</button>
					<button type="submit" name="update" class="btn btn-primary btn-sm"
							>Simpan
					</button>
				</div>
				<?=form_close()?>
				<!-- /modal footer -->

			</div>
			<!-- /modal content -->

		</div>
	</div>
	<!-- /modal -->

	<!-- Modal Hapus -->
	<div class="modal fade" id="modal-hapus-kategori" tabindex="-1" role="dialog"
		 aria-labelledby="model-8"
		 aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">

			<!-- Modal Content -->
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h3 class="modal-title" id="model-8">Hapus Data Kategori ?</h3>
					<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!-- /modal header -->

				<!-- Modal Body -->
				<!-- /modal body -->

				<!-- Modal Footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-primary btn-sm"
							data-dismiss="modal">Tutup
					</button>
					<div class="btn-hapus-kategori"></div>
				</div>
				<?=form_close()?>
				<!-- /modal footer -->

			</div>
			<!-- /modal content -->

		</div>
	</div>
	<!-- /modal -->
