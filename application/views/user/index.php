<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data User</h3>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Profile</h2>
            <div class="clearfix"></div>
            <div class="card mb-3" style="max-width: 640px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="<?= base_url('assets/images/') . $user['image'] ?>" class="img-thumbnail">
                </div>
                <div class="col-md-8" style="padding-top: 30px;">
                  <div class="card-body">
                    <h5 class="card-title"><?= $user['nama']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="text-muted">Terdaftar sejak <?= (new DateTime($user['date_created']))->format('d F Y'); ?></small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->