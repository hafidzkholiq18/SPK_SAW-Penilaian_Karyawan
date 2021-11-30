<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data User</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title"></div>
          <h2>Ubah Password</h2>
          <?= $this->session->flashdata('message'); ?>
          <div class="clearfix"></div>
          <div class="x_content">
            <form class="form-horizontal form-label-left input_mask" action="<?= base_url('pimpinan/ubahPassword'); ?>" method="POST">
              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="password" class="form-control has-feedback-left" id="current_password" name="current_password" placeholder="Password lama">
                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="password" class="form-control has-feedback-left" id="new_password1" name="new_password1" placeholder="Password baru">
                <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="password" class="form-control has-feedback-left" id="new_password2" name="new_password2" placeholder="Konfirmasi password baru">
                <span class="fa fa-unlock form-control-feedback left" aria-hidden="true"></span>
                <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <button class="btn btn-warning" type="reset">Reset</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->