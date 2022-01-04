<div class="container">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold"><?= $user['nama']; ?></span>
                <span class="text-black-50"><?= $user['email']; ?></span>
            </div>
        </div>
        <?= form_open_multipart('', ['class' => 'col-md-7 border-right'], ['id_user' => $user['id_user']]); ?>

        <div class="p-3 py-5 ">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Profile Detail</h4>
            </div>
            <div class="row mt-2">
                <div class="col-md-12"><label class="labels">Full Name</label><input type="text" class="form-control" placeholder="full name" value="<?= set_value('nama', $user['nama']); ?>" name="nama"></div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12"><label class="labels">Nomer Telp</label><input type="number" class="form-control" placeholder="full name" value="<?= set_value('no_telp', $user['no_telp']); ?>" name="no_telp"></div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="Email.." value="<?= set_value('email', $user['email']); ?>" name="email"></div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12"><label class="labels">Password (Ter-enkripsi Otomatis)</label>
                    <input type="password" class="form-control" placeholder="password.." value="<?= set_value('password', $user['password']); ?>" name="password" id="password">
                    <input style="margin: 10px;" type="checkbox" onclick="myFunction()"> Show Password
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12"><label class="labels">Ship Name</label><input type="text" class="form-control" placeholder="Nama Kapal" value="<?= set_value('namaKapal', $user['namaKapal']); ?>" name="namaKapal"></div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12"><label class="labels">Jabatan</label><input type="text" class="form-control" placeholder="Jabatan" value="<?= set_value('jabatan', $user['jabatan']); ?>" name="jabatan"></div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12"><label class="labels">Shipping Company</label><input type="text" class="form-control" placeholder="Shipping Company" value="<?= set_value('shipping', $user['shipping']); ?>" name="shipping"></div>
            </div>

            <div class="mt-5 text-center">
                <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
            </div>

        </div>
        <?= form_close(); ?>
    </div>
</div>
<script src="<?= base_url('assets/js/app.js') ?>"></script>