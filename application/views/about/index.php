<div class="container">
    <div class="col-lg-6">
        <h1>About Me</h1>
        <p class="lead"><?= $name; ?></p>
        <button class="btn btn-danger mb-5" id="btn">Coba click saya </button>
    </div>
</div>

<a href="<?= base_url(); ?>about/he" class="btn btn-info">pindah </a>

<script>
    const btn = document.getElementById("btn");
    btn.addEventListener("click", function() {
        Swal.fire({
            title: "Assalamualaikum",
            icon: "success",
            confirmButtonText: "Tutup",
            confirmButtonColor: "#DC3545",
            background: "gray",
            color: "black"
        })
    })
</script>