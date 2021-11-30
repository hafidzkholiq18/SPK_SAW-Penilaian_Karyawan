<!-- Modal Tambah Kriteria-->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="apasih">Tambah Kriteria</h5>
            </div>
            <?= form_open_multipart('kriteria/tambahKriteria'); ?>


            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="kode" name="kode" value="<?= $kode; ?>" readonly>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" placeholder="Kriteria">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="atribut" name="atribut" placeholder="Atribut">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="bobot" name="bobot" placeholder="Bobot">
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