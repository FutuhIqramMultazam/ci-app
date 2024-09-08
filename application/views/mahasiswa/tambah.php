<div class="container">

    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card mb-5">
                <div class="card-header">
                    <h4>Tambah Data Mahasiswa</h4>
                </div>

                <div class="card-body">

                    <!-- kalo mau pake notifikasi sekelompok pake nya ini -->
                    <!-- <?php //if (validation_errors()): 
                            ?>
                        <div class="alert alert-danger" role="alert">
                            <? //= validation_errors(); 
                            ?>
                        </div>
                    <?php //endif; 
                    ?> -->

                    <form action="" method="post">

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama" placeholder="ketik nama di sini...">
                            <div class="form-text text-danger"><?= form_error("nama"); ?></div>
                        </div>

                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input name="nim" type="text" class="form-control" id="nim" placeholder="ketik nim di sini...">
                            <div class="form-text text-danger"><?= form_error("nim"); ?></div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="text" class="form-control" id="email" placeholder="ketik email di sini...">
                            <div class="form-text text-danger"><?= form_error("email"); ?></div>
                        </div>

                        <div class="mb-5">
                            <label for="jurusan" class="form-label">jurusan</label>
                            <select name="jurusan" class="form-select" id="jurusan">
                                <option disabled selected>--Pilih Jurusan--</option>
                                <option value="Sistem Infromasi">Sistem Informasi</option>
                                <option value="Teknik informatika">Teknik informatika</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Arsitek">Arsitek</option>
                            </select>
                            <div class="form-text text-danger"><?= form_error("jurusan"); ?></div>
                        </div>

                        <a href="<?= base_url() ?>mahasiswa" class="btn btn-danger float-start ms-2">Batal</a>
                        <button name="tambah" type="submit" class="btn btn-success float-end">Tambah</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>