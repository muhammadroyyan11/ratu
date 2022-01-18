<div class="container m-lg-auto">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th><b>IS ACTIVE?</b></th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>NO TELP</th>
                    <th>ROLE</th>
                    <th>NAMA KAPAL</th>
                    <th>JABATAN</th>
                    <th>SHIPPING COMPANY</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($user_account as $ua) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><b><?= $ua->nama ?></b></td>
                        <td><?= $ua->is_active ?></td>
                        <td><?= $ua->username ?></td>
                        <td><?= $ua->email ?></td>
                        <td><?= $ua->no_telp ?></td>
                        <td><?= $ua->role ?></td>
                        <td><?= $ua->namaKapal ?></td>
                        <td><?= $ua->jabatan ?></td>
                        <td><?= $ua->shipping ?></td>
                        <td>
                            <a href="<?= base_url(); ?>data/edit/<?= $ua->id_user; ?>" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="<?= base_url(); ?>data/delete/<?= $ua->id_user; ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>