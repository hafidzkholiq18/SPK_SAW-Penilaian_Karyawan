      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3><?= $judul; ?></h3>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?= $Tabel1; ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                    <?= $this->session->flashdata('message'); ?>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode</th>
                          <th>Nama Alternatif</th>
                          <th>C1</th>
                          <th>C2</th>
                          <th>C3</th>
                          <th>C4</th>
                          <th>C5</th>
                          <th>C6</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kecocokan as $k) : ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $k['kode']; ?></td>
                            <td><?= $k['nama']; ?></td>
                            <td><?= $k['C1']; ?></td>
                            <td><?= $k['C2']; ?></td>
                            <td><?= $k['C3']; ?></td>
                            <td><?= $k['C4']; ?></td>
                            <td><?= $k['C5']; ?></td>
                            <td><?= $k['C6']; ?></td>
                            <td><a href="<?= base_url('perhitungan/hapusKecocokan/') . $k['id_alternatif']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus?')" class="btn btn-sm btn-round btn-danger">Delete</a></td>
                          </tr>
                          <?php $i++; ?>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?= $Tabel2; ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode</th>
                          <th>Nama Alternatif</th>
                          <th>C1</th>
                          <th>C2</th>
                          <th>C3</th>
                          <th>C4</th>
                          <th>C5</th>
                          <th>C6</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kecocokan as $k) : ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $k['kode']; ?></td>
                            <td><?= $k['nama']; ?></td>
                            <td><?= $k['C1'] / $MaxC1['C1']; ?></td>
                            <td><?= $k['C2'] / $MaxC2['C2']; ?></td>
                            <td><?= $k['C3'] / $MaxC3['C3']; ?></td>
                            <td><?= $k['C4'] / $MaxC4['C4']; ?></td>
                            <td><?= $k['C5'] / $MaxC5['C5']; ?></td>
                            <td><?= $k['C6'] / $MaxC6['C6']; ?></td>
                          </tr>
                          <?php $i++; ?>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ini batas akhir tabel hasil normalisasi -->

              <!-- ini awal tabel ranking -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?= $Tabel3; ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode</th>
                          <th>Nama Alternatif</th>
                          <th>Total Nilai</th>
                          <th>Rank</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kecocokan as $k) : ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $k['kode']; ?></td>
                            <td><?= $k['nama']; ?></td>
                            <?php
                            //simpan divariabel jumlah kemudian lakukan perhitungan masing2 kriteria
                            $jumlahC1 = ($k['C1'] / $MaxC1['C1']) * $BobotC1['bobot'];
                            $jumlahC2 = ($k['C2'] / $MaxC2['C2']) * $BobotC2['bobot'];
                            $jumlahC3 = ($k['C3'] / $MaxC3['C3']) * $BobotC3['bobot'];
                            $jumlahC4 = ($k['C4'] / $MaxC4['C4']) * $BobotC4['bobot'];
                            $jumlahC5 = ($k['C5'] / $MaxC5['C5']) * $BobotC5['bobot'];
                            $jumlahC6 = ($k['C6'] / $MaxC6['C6']) * $BobotC6['bobot'];
                            ?>
                            <?php $sum = [$jumlahC1, $jumlahC2, $jumlahC3, $jumlahC4, $jumlahC5, $jumlahC6];
                            $total = array_sum($sum);
                            ?>
                            <!-- <?php $ranking = array($total);
                                  arsort($ranking);
                                  ?> -->
                            <td><?= $total; ?></td>
                            <!-- <td><?= $ranking; ?></!--> -->
                            <td></td>
                          </tr>
                          <?php $i++; ?>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- ini akhir tabel perankingan -->
            </div>
          </div>
        </div>

        <!-- /page content -->