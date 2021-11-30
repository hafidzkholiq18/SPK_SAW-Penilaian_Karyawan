<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Alternatif</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><?= $namaTabel; ?></h2>
            <div class="clearfix"></div>
            <?= $this->session->flashdata('message'); ?>
          </div>
          <a href="<?= base_url('admin/addAlternatif'); ?>" class="btn btn-round btn-primary ">Tambah Alternatif</a>
          <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Jabatan</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Tgl Lahir</th>
                  <th>Alamat</th>
                  <th>Profil</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($alternatif as $a) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $a['kode']; ?></td>
                    <td><?= $a['nama']; ?></td>
                    <td><?= $a['email']; ?></td>
                    <td><?= $a['jabatan']; ?></td>
                    <td><?= $a['jenis_kelamin']; ?></td>
                    <td><?= $a['tempat_lahir']; ?></td>
                    <td><?= $a['tgl_lahir']; ?></td>
                    <td><?= $a['alamat']; ?></td>
                    <td><img width="100px" src="<?= base_url('assets/images/') . $a['image']; ?>"></td>
                    <td>
                      <a href="<?= base_url('alternatif/edit/') . $a['id_alternatif']; ?>" class="btn btn-sm btn-round btn-success">Edit</a>
                      <a href="<?= base_url('alternatif/hapusAlternatif/') . $a['id_alternatif']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus?')" class="btn btn-sm btn-round btn-danger">Delete</a>
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