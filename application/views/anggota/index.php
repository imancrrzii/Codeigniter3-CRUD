<div class="container">
    <div class="p-6 p-mt-2 pt-5">
        <h3>Data Anggota</h3>
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Keyword" name="keyword"
                            autocomplete="off" autofocus>
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php if (empty($anggota)):?>
<div class="alert alert-danger" role="alert">Maaf, data tidak ditemukan</div>
<?php endif; ?>
    <a class="btn btn-primary mt-3 mb-3" href="<?= base_url() ?>anggota/tambah" role="button"><i
            class="fa-solid fa-plus mr-2"></i>Tambah Anggota</a>


    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th scope="col">NO</th>
                        <th scope="col">NIM</th>
                        <th scope="col">NAMA ANGGOTA</th>
                        <th scope="col">JENIS KELAMIN</th>
                        <th scope="col">KELAS</th>
                        <th scope="col">DOMISILI</th>
                        <th scope="col">ANGKATAN</th>
                        <th scope="col">DIVISI</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">NOMOR TELEPON</th>
                        <th scope="col">TINDAKAN</th>

                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach ($anggota as $agg): ?>
                        <tr class="text-center">
                            <th scope="row">
                                <?= ++$start ?>
                            </th>
                            <td>
                                <?= $agg['nim'] ?>
                            </td>
                            <td>
                                <?= $agg['nama_anggota'] ?>
                            </td>
                            <td>
                                <?= $agg['jenis_kelamin'] ?>
                            </td>
                            <td>
                                <?= $agg['kelas'] ?>
                            </td>
                            <td>
                                <?= $agg['domisili'] ?>
                            </td>
                            <td>
                                <?= $agg['angkatan'] ?>
                            </td> 
                            <td>
                                <?= $agg['divisi'] ?>
                            </td>
                            <td>
                                <?= $agg['alamat'] ?>
                            </td> 
                            <td>
                                <?= $agg['telepon'] ?>
                            </td>

                            <td>
                                <a href="<?= base_url() ?>anggota/detail/<?= $agg['nim'] ?>"> <i
                                        class="fa-solid fa-circle-info text-primary mr-2"></i></a>
                                <a href="<?= base_url() ?>anggota/edit/<?= $agg['nim'] ?>"> <i
                                        class="fa-solid fa-pen-to-square text-warning"> </i></a>
                                <a href="<?= base_url() ?>anggota/hapus/<?= $agg['nim'] ?>"
                                    onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')"
                                    class="fa-solid fa-trash text-danger ml-2"></a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>