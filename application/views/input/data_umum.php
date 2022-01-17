    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <div class="p-5">
                            <p>prosedur untuk mengembangkan deskripsi lengkap perjalanan kapal dari awal sampai akhir desain meninggalkan pai
                                dari area pelabuhan. bagian dari perjalanan pelayaran mendekati tujuan</p>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><b>Data Umum Kapal</b></h1>
                            </div>
                            <form class="input" method="POST" action="">
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="namaKapal" name="namaKapal" placeholder="Nama Kapal">
                                        <?= form_error('namaKapal', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="tandaPanggil" name="tandaPanggil" placeholder="Tanda Panggil">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="pemilikKapal" name="pemilikKapal" placeholder="Pemilik Kapal">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="benderaNegara" name="benderaNegara" placeholder="Bendera Negara">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="pelabuhanTerdaftar" name="pelabuhanTerdaftar" placeholder="Pelabuhan Terdaftar">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="tahunPembangunan" name="tahunPembangunan" placeholder="Tahun Pembangunan">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="tipeKapal" name="tipeKapal" placeholder="Tipe Kapal">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="rutePelayaran" name="rutePelayaran" placeholder="Rute Pelayaran">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="klasifikasi" name="klasifikasi" placeholder="Klasifikasi">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="beratKotor" name="beratKotor" placeholder="Berat Kotor">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="beratBersih" name="beratBersih" placeholder="Berat Bersih">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="beratMati" name="beratMati" placeholder="Berat Mati">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="panjangKapalKeseluruhan" name="panjangKapalKeseluruhan" placeholder="Panjang Kapal Keseluruhan">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="panjangAntaraTegakLurus" name="panjangAntaraTegakLurus" placeholder="Panjang Antara Tegak Lurus">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="lebarKapalMolded" name="lebarKapalMolded" placeholder="Lebar Kapal Molded">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="tinggiMoldedHinggaDeck" name="tinggiMoldedHinggaDeck" placeholder="Tinggi Molded Hingga Deck">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="bagianTercelup" name="bagianTercelup" placeholder="Bagian Tercelup">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="tipeMesinKapal" name="tipeMesinKapal" placeholder="Tipe Mesin Kapal">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" id="kapasitasKargo" name="kapasitasKargo" placeholder="Kapasitas Kargo (TEUS)">
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-danger btn-user btn-block">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>