<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Pengguna</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="x_panel">
          <div class="x_title">
            <h2><?= $nama_tabel; ?></h2>

            <div class="clearfix"></div>

            <?= $this->session->flashdata('message'); ?>
          </div>
          <a href="" class="btn btn-round btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Tambah Pengguna</a>

          <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Profil</th>
                  <th>Role ID</th>
                  <th>Status</th>
                  <th>Tgl Registrasi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($pengguna as $p) : ?>
                  <?php
                    if ($p['is_active'] == 1) {
                      $p['is_active'] = 'Aktif';
                    } else {
                      $p['is_active'] = 'Tidak Aktif';
                    }
                    ?>
                  <?php
                    if ($p['role_id'] == 1) {
                      $p['role_id'] = 'Admin';
                    } else if ($p['role_id'] == 2) {
                      $p['role_id'] = 'Member';
                    } else {
                      $p['role_id'] = 'Gaje';
                    }
                    ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $p['nama']; ?></td>
                    <td><?= $p['email']; ?></td>
                    <td><img width="100px" src="<?= base_url('assets/images/') . $p['image']; ?>"></td>
                    <td><?= $p['role_id']; ?></td>
                    <td><?= $p['is_active']; ?></td>
                    <td><?= (new DateTime($p['date_created']))->format('d F Y'); ?></td>
                    <td>
                      <a href="" class="btn btn-sm btn-round btn-success" data-toggle="modal" data-target="#editUserModal<?= $p['id']; ?>">Edit</a>
                      <a href="<?= base_url('pengguna/hapusPengguna/') . $p['id']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus?')" class="btn btn-sm btn-round btn-danger">Delete</a>
                    </td>
                  </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </tbody>
            </table>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->