$(document).ready(function () {
	// ------------------------------------------------------------------------------------------
	// start
	// ------------------------------------------------------------------------------------------
	var root = window.location.origin + '/multiscale/';

	// ------------------------------------------------------------------------------------------
	// Kategori
	// ------------------------------------------------------------------------------------------
	$('.kategori-edit').click(function () {
		var id = $(this).val();
		var getUrl = root + 'admin/kategori/updateForm/' + id;
		$.ajax({
			url : getUrl,
			type : 'ajax',
			dataType : 'json',
			success: function (response) {
				console.log(response);
				$('#kategori-id').val(response.kategori_id);
				$('#kategori-nama').val(response.kategori_nama);
			},
			error: function (response) {
				console.log(response.status + 'error');
			}
		})
	});
	// ------------------------------------------------------------------------------------------

	$('.kategori-hapus').click(function () {
		var id = $(this).val();
		var html = '' +
			'<a href="'+root+'admin/kategori/hapus/'+id+'" class="btn btn-danger btn-sm">Hapus</a>';
		$('.btn-hapus-kategori').html(html);
	});

	// ------------------------------------------------------------------------------------------
});

function showInput() {
	document.getElementById('ganti-foto').style.display = "block";
}
