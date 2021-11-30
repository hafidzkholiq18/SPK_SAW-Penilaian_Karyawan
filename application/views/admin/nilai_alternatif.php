<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?= $judul; ?></h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?= $Tabel; ?></h2>
                        <div class="clearfix"></div>
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <!-- <a href="" class="btn btn-round btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Simpan Nilai</a> -->
                    <div class="x_content">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Alternatif</th>
                                    <?php foreach ($kriteria as $k) : ?>
                                        <th><?= $k['nama_kriteria']; ?></th>
                                    <?php endforeach; ?>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($nilai as $a) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $a['kode']; ?></td>
                                        <td><?= $a['nama']; ?></td>
                                        <td><?= $a['C1']; ?></td>
                                        <td><?= $a['C2']; ?></td>
                                        <td><?= $a['C3']; ?></td>
                                        <td><?= $a['C4']; ?></td>
                                        <td><?= $a['C5']; ?></td>
                                        <td><?= $a['C6']; ?></td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-round btn-success" data-toggle="modal" data-target="#ModalNilaiAlternatif<?= $a['id_nilai']; ?>">Nilai</a>
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