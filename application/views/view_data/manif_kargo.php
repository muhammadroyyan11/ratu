<div class="card-content">
    <div class="card-body card-dashboard">
        <div class="table-responsive">
            <table class="table zero-configuration" id="example">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA KAPAL</th>
                        <th>PEMILIK KAPAL</th>
                        <th>PELABUHAN ASAL</th>
                        <th>ETD</th>
                        <th>PELABUHAN TUJUAN</th>
                        <th>NAMA PENGIRIM</th>
                        <th>ALAMAT PENGIRIM</th>
                        <th>KONTAK PENGIRIM</th>
                        <th>NAMA SHIPPER</th>
                        <th>ALAMAT SHIPPER</th>
                        <th>KONTAK SHIPPER</th>
                        <th>NO KONTAINER</th>
                        <th>TIPE KONTAINER</th>
                        <th>BERAT TARA</th>
                        <th>BERAT BERSIH</th>
                        <th>KOMODITAS</th>
                        <th>DESC MUATAN</th>
                        <th>UKURAN KONTAINER</th>
                        <th>BAY</th>
                        <th>RAW</th>
                        <th>TIER</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($user_kapal as $mk) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><b><?= $mk->namaKapal ?></b></td>
                            <td><b><?= $mk->nama ?></b></td>
                            <td><?= $mk->pelabAsal ?></td>
                            <td><?= $mk->ETD ?></td>
                            <td><?= $mk->pelabTujuan ?></td>
                            <td><?= $mk->ETA ?></td>
                            <td><?= $mk->namaPengirim ?></td>
                            <td><?= $mk->alamatPengirim ?></td>
                            <td><?= $mk->kontakPengirim ?></td>
                            <td><?= $mk->namaShipper ?></td>
                            <td><?= $mk->alamatShipper ?></td>
                            <td><?= $mk->kontakShipper ?></td>
                            <td><?= $mk->nomorKontainer ?></td>
                            <td><?= $mk->tipeKontainer ?></td>
                            <td><?= $mk->beratTara ?></td>
                            <td><?= $mk->beratBersih ?></td>
                            <td><?= $mk->komoditas ?></td>
                            <td><?= $mk->deskripsiMuatan ?></td>
                            <td><?= $mk->bay ?></td>
                            <td><?= $mk->raw ?></td>
                            <td><?= $mk->tier ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>