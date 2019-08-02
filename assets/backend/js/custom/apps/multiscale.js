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
});
