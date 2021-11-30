<!-- Modal Edit Pengguna -->
<?php foreach ($pengguna as $p) : ?>
  <div class="modal fade" id="editUserModal<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Ubah Pengguna</h5>
        </div>
        <?= form_open_multipart('pengguna/editPengguna'); ?>
        <input type="hidden" name="id" value="<?= $p['id']; ?>">

        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $p['nama']; ?>" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" value="<?= $p['email']; ?> " placeholder="Email">
          </div>
          <div class="input-group">
            <img src="<?= base_url('assets/images/') . $p['image']; ?>" style="width:100px; margin-bottom:10px;">
            <input type="file" class="form-control" id="image" name="image" value="<?= $p['image']; ?>">
            <span class="input-group-btn">
              <p class="btn btn-info">Foto Profil</p>
            </span>
          </div>
          <div class="form-group">
            <select class="form-control" name="role_id">
              <option value="<?= $p['role_id']; ?>"> Role
                <?php
                  if ($p['role_id'] == 1) {
                    $p['role_id'] = 'Admin';
                  } else {
                    $p['role_id'] = 'Karyawan';
                  }
                  ?>
                <?= $p['role_id']; ?></option>
              <option>Pilih Role</option>
              <option value="1">Admin</option>
              <option value="2">Karyawan</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" name="is_active">
              <option value="<?= $p['id']; ?>"> Status
                <?php
                  if ($p['is_active'] == 1) {
                    $p['is_active'] = 'Aktif';
                  } else {
                    $p['is_active'] = 'Tidak Aktif';
                  }
                  ?>
                <?= $p['is_active']; ?> </option>
              <option>Status Pengguna</option>
              <option value="1">Aktif</option>
              <option value="0">Tidak Aktif</option>
            </select>
          </div>
          <div class="form-group">
            <input type="date" class="form-control" id="date_created" name="date_created" <?= $p['date_created']; ?>placeholder="Tanggal">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-round btn-primary">Edit</button>
        </div>
        </form>
      </div>
    </div>
  </div>


<?php endforeach; ?>