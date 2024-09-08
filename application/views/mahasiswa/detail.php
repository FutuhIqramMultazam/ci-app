<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama: <?= $mahasiswa["nama"]; ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Email: <?= $mahasiswa["email"] ?></h6>
                    <p class="card-text">NIM: <?= $mahasiswa["nim"] ?></p>
                    <p class="card-text">Jurusan: <?= $mahasiswa["jurusan"] ?></p>
                    <a href="<?= base_url() ?>mahasiswa" class="btn btn-danger">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>