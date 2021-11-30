<!-- Modal Tambah -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="apasih">Tambah Gejala</h5>
      </div>
      <form action="<?= base_url('gejala/tambahGejala'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode gejala">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="gejala" name="gejala" placeholder="Nama gejala">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-round btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>