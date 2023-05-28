<div class="container">
<div class="p-6 p-mt-2 pt-5">
    <div class="row">
        <div class="col-12">
        <form action='' method='POST'>
        <div class="form-group">
                    <label for="exampleFormControlInput1">NIM</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="MASUKKAN NIM"
                        name="nim" value="<?=$anggota['nim']?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput2">NAMA ANGGOTA</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2"
                        placeholder="MASUKKAN NAMA ANGGOTA" name="nama_anggota" value="<?=$anggota['nama_anggota']?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput4">JENIS KELAMIN</label>
                    <select class="form-control" id="exampleFormControlInput4"
                        aria-label="Floating label select example" name="jenis_kelamin" value="<?=$anggota['jenis_kelamin']?>">
                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                        <option value="PEREMPUAN">PEREMPUAN</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput3">KELAS</label>
                    <select class="form-control" id="exampleFormControlInput3"
                        aria-label="Floating label select example" name="kelas" value="<?=$anggota['kelas']?>">
                        <option value="REGULER-L1">REGULER-L1</option>
                        <option value="REGULER-L2">REGULER-L2</option>
                        <option value="REGULER-L3">REGULER-L3</option>
                        <option value="REGULER-L4">REGULER-L4</option>
                        <option value="BILINGUAL-P1">BILINGUAL-P1</option>
                        <option value="BILINGUAL-P2">BILINGUAL-P2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput5">DOMISILI</label>
                    <select class="form-control" id="exampleFormControlInput5"
                        aria-label="Floating label select example" name="domisili" value="<?=$anggota['domisili']?>">
                        <option value="INDRALAYA">INDRALAYA</option>
                        <option value="PALEMBANG">PALEMBANG</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput6">ANGKATAN</label>
                    <select class="form-control" id="exampleFormControlInput6"
                        aria-label="Floating label select example" name="angkatan" value="<?=$anggota['angkatan']?>">
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput7">DIVISI</label>
                    <select class="form-control" id="exampleFormControlInput7"
                        aria-label="Floating label select example" name="divisi" value="<?=$anggota['divisi']?>">
                        <option value="ADMINISTRASI">ADMINISTRASI</option>
                        <option value="AKADEMIK-PIP">AKADEMIK - PENGEMBANGAN ILMU PENGETAHUAN</option>
                        <option value="AKADEMIK-PTI">AKADEMIK - PENGEMBANGAN TEKNOLOGI INFORMASI</option>
                        <option value="KASTRAD-ADKAM">KAJIAN STRATEGI DAN ADVOKASI - ADVOKASI DAN KESEJAHTERAAN
                            MAHASISWA</option>
                        <option value="KASTRAD-POLPRO">KAJIAN STRATEGI DAN - POLITIK DAN PROPAGANDA</option>
                        <option value="KEWIRAUSAHAAN">KEWIRAUSAHAAN</option>
                        <option value="KOMINFO-HUMAS">KOMUNIKASI DAN INFORMASI - HUBUNGAN MASYARAKAT</option>
                        <option value="KOMINFO-MULMED">KOMUNIKASI DAN INFORMASI - MULTIMEDIA</option>
                        <option value="PMB-OLAHRAGA">PENGEMBANGAN MINAT DAN BAKAT - OLAHRAGA</option>
                        <option value="PMB-SENI">PENGEMBANGAN MINAT DAN BAKAT - SENI</option>
                        <option value="PSDM">PENGEMBANGAN SUMBER DAYA MANUSIA</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput8">ALAMAT</label>
                    <input type="text" class="form-control" id="exampleFormControlInput8" placeholder="MASUKKAN ALAMAT"
                        name="alamat" value="<?=$anggota['alamat']?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput9">NOMOR TELEPON</label>
                    <input type="text" class="form-control" id="exampleFormControlInput9"
                        placeholder="MASUKKAN NOMOR TELEPON" name="telepon" value="<?=$anggota['telepon']?>">
                </div>
  
  <button type="submit" class="btn btn-success" onclick="return confirm('Apakah anda yakin akan mengubah data ini?')"><i class="fas fa-save mr-1" ></i>Simpan</button>
  
</form>
        </div>
    </div>
</div>