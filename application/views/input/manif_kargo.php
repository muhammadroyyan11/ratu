    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <div class="p-5">
                            <p>prosedur untuk mengidentifikasi kandungan pada kargo yang tedapat di kontainer</p>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><b>Manifest Kargo</b></h1>
                            </div>
                            <form class="input" method="POST" action="">
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="namaKapal" placeholder="Nama Kapal">
                                        <?= form_error('namaKapal', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="pelabAsal" placeholder="Pelabuhan Asal">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="ETD" placeholder="Perkiraan Waktu Keberangkatan (ETD)">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="pelabTujuan" placeholder="Pelabuhan Tujuan">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="ETA" placeholder="Perkiraan Waktu Tiba (ETA)">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="namaPengirim" placeholder="Nama Pengirim">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="alamatPengirim" placeholder="Alamat Pengirim">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="kontakPengirim" placeholder="Kontak Pengirim">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="namaShipper" placeholder="Nama Shipper">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="alamatShipper" placeholder="Alamat Shipper">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="kontakShipper" placeholder="Kontak Shipper">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="nomorKontainer" placeholder="Nomor Kontainer">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="tipeKontainer" placeholder="Tipe Kontainer">
                                        <label for="tipeKontainer">dry, reefer, open sided, open top, tank, flat track</label>
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="beratTara" placeholder="Berat Tara">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="beratBersih" placeholder="Berat Bersih">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="komoditas" placeholder="Komoditas">
                                        <label for="komoditas">(Dangerous Good/Non DG)</label>
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="deskripsiMuatan" placeholder="Deskripsi Muatan">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="ukuranKontainer" placeholder="Ukuran Kontainer (ft)">
                                        <label for="ukuranKontainer">20, 40</label>
                                    </div><br>
                                    <label>Stowage</label>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="bay" placeholder="Bay">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="raw" placeholder="Raw">
                                    </div><br>
                                    <div class="col-lg-12">
                                        <input type="text" class="form-control form-control-user" name="tier" placeholder="Tier">
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