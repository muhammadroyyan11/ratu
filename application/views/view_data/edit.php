<div class="container">
    <div class="card">
        <div class="card-header">Edit Akun User</div>
        <div class="card-body">
            <?php
            if (validation_errors() != false) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php
            }
            ?>
            <form method="post" action="<?= base_url(); ?>data/update">
                <input type="hidden" name="id_user" id="id_user" value="<?= $user->id_user; ?>" />
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" value="<?= $user->nama; ?>" class="form-control" id="nama" name="nama">
                </div>

                <div class="form-group">
                    <label for="role">Aktivasi Akun</label>
                    <select name="is_active" id="is_active" class="form-control">
                        <option value="none" selected disabled hidden>Pilih Angka</option>
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $user->username; ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $user->email; ?>">
                </div>

                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input type="text" class="form-control" value="<?= $user->no_telp; ?>" id="no_telp" name="no_telp">
                </div>

                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option value="none" selected disabled hidden>Pilih Role</option>
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="password">password</label>
                    <input type="text" class="form-control" id="password" name="password" value="<?= $user->password; ?>">
                </div>

                <div class="form-group">
                    <label for="namaKapal">Nama Kapal</label>
                    <input type="text" class="form-control" id="namaKapal" name="namaKapal" value="<?= $user->namaKapal; ?>">
                </div>

                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $user->jabatan; ?>">
                </div>

                <div class="form-group">
                    <label for="shipping">Shipping Company</label>
                    <input type="text" class="form-control" id="shipping" name="shipping" value="<?= $user->shipping; ?>">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>