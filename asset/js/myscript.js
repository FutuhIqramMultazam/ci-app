const flashData = $(".flash-data").data("flashdata");

if (flashData) {
	Swal.fire({
		title: "Data Mahasiswa",
		text: "Berhasil " + flashData,
		icon: "success",
		// showClass: {
		// 	popup: `
		//       animate__animated
		//       animate__zoomInDown
		//       animate__faster
		//     `,
		// },
		// hideClass: {
		// 	popup: `
		//       animate__animated
		//       animate__zoomOutDown
		//       animate__faster
		//     `,
		// },
	});
}

// tombol hapus
$(".tombol-hapus").on("click", function (e) {
	e.preventDefault(); // mematikan fungsi href yang ada ddi tag "a"
	const href = $(this).attr("href");

	Swal.fire({
		title: "Apakah anda yakin?",
		text: "data mahasiswa akan dihapus!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus Data!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});
