<div class="dt-card">

	<!-- Card Body -->
	<div class="dt-card__body">

		<!-- Tables -->
		<div class="table-responsive">

			<table id="data-table" class="table table-striped table-bordered table-hover">
				<thead>
				<tr>
					<th>No</th>
					<th>Nama Pengirim</th>
					<th>Email</th>
					<th>Waktu Diterima</th>
					<th>Status</th>
					<th class="text-center"><i class="fa fa-cog animation-customizer"></i></th>
				</tr>
				</thead>
				<tbody>
				<?php
				$no = 1;
				foreach ($pesan as $key=>$value):
				?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $value['pesan_nama'] ?></td>
					<td><?= $value['pesan_email'] ?></td>
					<td><?php
						$waktu = explode(' ',$value['pesan_date_created']);
						?>
						<?= date_indo($waktu[0]) ?> | <?= $waktu[1] ?>
					</td>
					<td>
						<?php
						if ($value['pesan_status'] == 'belum'):
						?>
							<label class="badge badge-warning" style="color: white">Belum Dibaca</label>
						<?php
						elseif ($value['pesan_status'] == 'baca'):
							?>
							<label class="badge badge-success">Sudah Dibaca</label>
						<?php
						endif;
						?>
					</td>
					<td class="text-center">
						<a href="<?= base_url('admin/pesan/lihat/' . $value['pesan_id']) ?>"
						   class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-html="true" title
						   data-original-title="Lihat"><i class="fa fa-eye"></i></a>
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
