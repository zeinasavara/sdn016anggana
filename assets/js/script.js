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
		confirmButtonColor: '#008000',
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

$('.konfirReset').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Anda akan me-reset foto?',
		text: "Pilih 'Reset' jika ingin menggunakan foto default dari sistem.",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#d33',
		confirmButtonText: 'Reset',
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

$('.terimaPesan').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Pesan Sangat Membantu?',
		text: "Pilih 'Terima' jika pesan dari pengunjung sangat membantu.",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Terima',
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

$('.tolakPesan').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Pesan Tidak Pantas?',
		text: "Pilih 'Tolak' jika pesan tidak pantas. Pesan akan dihapus dari databases.",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#d33',
		confirmButtonText: 'Tolak',
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