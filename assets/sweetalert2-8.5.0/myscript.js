const flash_sukses = $('.flash-data1').data('flashdata');
if (flash_sukses){
	Swal.fire({
		title: 'Data ',
		text: flash_sukses,
		type: 'success'
	});
}
const flash_gagal = $('.flash-data2').data('flashdata');
if (flash_gagal){
	Swal.fire({
		title: 'Data ',
		text: flash_gagal,
		type: 'error'
	});
}
$('.sweet_hapus').on('click', function(e){
	// Menghentikan perintah pada a href
	e.preventDefault();
	// Penting mengambil atribut a href
	const href = $(this).attr('href');

	Swal.fire({
	  title: 'Y A K I N ?',
	  text: "Data Akan Dihapus!",
	  type: 'question',
	  showCancelButton: true,
	  confirmButtonColor: '#d33',
	  cancelButtonColor: '#3085d6',
	  confirmButtonText: 'Hapus!'

	}).then((result) => {
  	if (result.value) {
    	document.location.href = href;
  	}
	})
});

$('.sweet_simpan').on('click', function(e){
	e.preventDefault();
	Swal.fire({
		title: 'Y A K I N ?',
		text: "Data Akan Disimpan!",
		type: 'question',
		showCancelButton: true,
		confirmButtonColor: '#d33',
		cancelButtonColor: '#3085d6',
		confirmButtonText: 'Simpan!',
	}).then((result) => {
		if (result.value) {
			$("#sweet_form").submit();
	  }
  })
});

$('.sweet_ubah').on('click', function(e){
	e.preventDefault();
	Swal.fire({
		title: 'Y A K I N ?',
		text: "Edit Data Akan Disimpan!",
		type: 'question',
		showCancelButton: true,
		confirmButtonColor: '#d33',
		cancelButtonColor: '#3085d6',
		confirmButtonText: 'Update!',
	}).then((result) => {
		if (result.value) {
			$("#sweet_form").submit();
	  }
  })
});