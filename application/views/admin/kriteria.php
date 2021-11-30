<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Kriteria</h3>
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
          <!-- <a href="" class="btn btn-round btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Tambah Kriteria</a> -->
          <div class="x_content">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Nama Kriteria</th>
                  <th>Atribut</th>
                  <th>Bobot</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($kriteria as $k) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $k['kode']; ?></td>
                    <td><?= $k['nama_kriteria']; ?></td>
                    <td><?= $k['atribut']; ?></td>
                    <td><?= $k['bobot']; ?></td>
                    <td>
                      <a href="" class="btn btn-sm btn-round btn-success" data-toggle="modal" data-target="#editMenuModal<?= $k['id_kriteria']; ?>">Edit</a>

                      <!-- <a href="<?= base_url('kriteria/hapusKriteria/') . $k['id_kriteria']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus?')" class="btn btn-sm btn-round btn-danger">Delete</a> -->
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