<div class="dt-card">

	<!-- Card Body -->
	<div class="dt-card__body">

		<a href="<?=base_url('admin/banner/tambah')?>" class="btn btn-outline-primary btn-sm" style=""><i class="fa fa-plus"></i> Tambah Banner</a><hr>
		<!-- Tables -->
		<div class="table-responsive">

			<table id="data-table" class="table table-striped table-bordered table-hover">
				<thead>
				<tr>
					<th width="1%">No</th>
					<th width="60%">Foto</th>
					<th width="14%">Judul</th>
					<th width="20%">Deskripsi</th>
					<th width="5" class="text-center"><i class="fa fa-cog animation-customizer"></i></th>
				</tr>
				</thead>
				<tbody>
				<?php
				$no = 1;
				foreach ($banner as $key=>$value):
					?>
					<tr>
						<td><?= $no ?></td>
						<td><img src="<?=base_url('assets/upload/images/banner/'. $value['banner_foto'])?>" alt="<?=$value['banner_foto']?>" width="100%"></td>
						<td><?= $value['banner_judul'] ?></td>
						<td><?= $value['banner_deskripsi'] ?></td>
						<td class="text-center">
							<a href="<?= base_url('admin/banner/update/' . $value['banner_id']) ?>"
							   class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-html="true" title
							   data-original-title="Update"><i class="fa fa-edit"></i></a>
							<a href="<?= base_url('admin/banner/hapus/' . $value['banner_id']) ?>"
							   class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-html="true" title
							   data-original-title="Hapus"><i class="fa fa-trash" onclick="return confirm('Hapus Data Banner ?')"></i></a>
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
