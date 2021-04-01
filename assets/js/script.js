const flashData = $('.flashdata').data('flashdata');
const flash = $('.flashdata').data('flash');

if (flash == 'Success') {
	Swal.fire({
		title: 'Sukses',
		text: flashData,
		icon: 'success',
		timer: 2000,
		timerProgressBar: true,
		confirmButtonText: 'Tutup',
		confirmButtonColor: '#d33',
		customClass: 'swal-wide'
	});
} 

if (flash == 'Failed') {
	Swal.fire({
		title: 'Gagal',
		text: flashData,
		icon: 'error',
		timer: 2000,
		timerProgressBar: true,
		confirmButtonText: 'Tutup',
		confirmButtonColor: '#d33',
		customClass: 'swal-wide'
	});
}

$('.konfirHapus').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Yakin ingin menghapus data?',
		text: "Data tidak bisa dikembalikan jika sudah terhapus.",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus data!',
		cancelButtonText: 'Batal',
		customClass: 'swal-wide'
	}).then((result) => {
		if (result) {
            if (result.isConfirmed) {
                document.location.href = href;
            }
		}
	})
});

$('.konfirLogout').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Anda akan logout?',
		text: "Pilih 'Logout' jika anda ingin keluar dari aplikasi.",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#d33',
		confirmButtonText: 'Logout',
		cancelButtonText: 'Batal',
		customClass: 'swal-wide'
	}).then((result) => {
		if (result) {
            if (result.isConfirmed) {
                document.location.href = href;
            }
		}
	})
});