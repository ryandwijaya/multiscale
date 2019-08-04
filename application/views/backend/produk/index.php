
<div class="dt-card">

    <!-- Card Body -->
    <div class="dt-card__body">

        <a href="<?=base_url('admin/produk/tambah')?>" class="btn btn-outline-primary btn-sm" style=""><i class="fa fa-plus"></i> Tambah Produk</a><hr>
        <!-- Tables -->
        <div class="table-responsive">

            <table id="data-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th class="text-center"><i class="fa fa-cog animation-customizer"></i></th>
                </tr>
                </thead>
                <tbody>
				<?php
				$no = 1;
				foreach ($produk as $key=>$value):
				?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$value['produk_nama']?></td>
                    <td><?=$value['kategori_nama']?></td>
                    <td><?=$value['produk_harga']?></td>
                    <td class="text-center">
                        <a href="#" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-html="true" title data-original-title="Lihat"><i class="fa fa-eye"></i></a>
                        <a href="#" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-html="true" title data-original-title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-html="true" title data-original-title="Hapus"><i class="fa fa-trash"></i></a>
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
