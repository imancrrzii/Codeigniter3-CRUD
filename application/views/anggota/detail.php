<div class="container">
    <div class="p-6 p-mt-2 pt-5">
        <div class="row">
            <div class="col-md">
                <div class="card card-dark">
                    <h5 class="card-header">Detail Anggota</h5>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $anggota['nama_anggota']; ?>
                        </h5>
                        <p class="card-text">
                            <?= $anggota['nim']; ?>
                        </p>
                        <p class="card-text">
                            <?= $anggota['kelas']; ?>
                        </p>
                        <p class="card-text">
                            <?= $anggota['divisi']; ?>
                        </p>
                        <p class="card-text">
                            <?= $anggota['angkatan']; ?>
                        </p>
                        <p class="card-text">
                            <?= $anggota['telepon']; ?>
                        </p>


                        <a href="<?= base_url('anggota'); ?>" class="btn btn-primary"><i
                                class="fa-solid fa-rotate-left mr-2"></i>Kembali ke Halaman Sebelumnya</a>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>
</div>