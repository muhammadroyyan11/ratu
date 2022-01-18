<div class="card-content">
    <div class="card-body card-dashboard">
        <div class="table-responsive">
            <table class="table zero-configuration" id="example">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA KAPAL</th>
                        <th>TANDA PANGGIL</th>
                        <th>PEMILIK KAPAL</th>
                        <th>BENDERA NEGARA</th>
                        <th>PELABUHAN TERDAFTAR</th>
                        <th>TAHUN PEMBANGUNAN</th>
                        <th>TIPE KAPAL</th>
                        <th>RUTE PELAYARAN</th>
                        <th>KLASIFIKASI</th>
                        <th>BERAT KOTOR</th>
                        <th>BERAT BERSIH</th>
                        <th>BERAT MATI</th>
                        <th>PANJANG KAPAL TOTAL</th>
                        <th>PANJANG ANTARA TEGAK LURUS</th>
                        <th>LEBAR KAPAL MOLDED</th>
                        <th>TINGGI MOLDED KE DECK</th>
                        <th>BAGIAN TERCELUP</th>
                        <th>TIPE MESIN KAPAL</th>
                        <th>KAPASITAS KARGO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($user_kapal as $du) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b><?= $du->namaKapal ?></b></td>
                            <td><?= $du->tandaPanggil ?></td>
                            <td><b><?= $du->nama ?></b></td>
                            <td><?= $du->benderaNegara ?></td>
                            <td><?= $du->pelabuhanTerdaftar ?></td>
                            <td><?= $du->tahunPembangunan ?></td>
                            <td><?= $du->tipeKapal ?></td>
                            <td><?= $du->rutePelayaran ?></td>
                            <td><?= $du->klasifikasi ?></td>
                            <td><?= $du->beratKotor ?></td>
                            <td><?= $du->beratBersih ?></td>
                            <td><?= $du->beratMati ?></td>
                            <td><?= $du->panjangKapalKeseluruhan ?></td>
                            <td><?= $du->panjangAntaraTegakLurus ?></td>
                            <td><?= $du->lebarKapalMolded ?></td>
                            <td><?= $du->tinggiMoldedHinggaDeck ?></td>
                            <td><?= $du->bagianTercelup ?></td>
                            <td><?= $du->tipeMesinKapal ?></td>
                            <td><?= $du->kapasitasKargo ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>