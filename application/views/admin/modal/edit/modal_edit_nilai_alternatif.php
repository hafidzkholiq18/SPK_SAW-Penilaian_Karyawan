<!-- Modal Edit Kriteria-->

<?php foreach ($kriteria as $k) : ?>
    <div class="modal fade" id="editKriteriaModal" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="edit">Ubah Kriteria</h5>
                </div>
                <?= form_open_multipart('nilai_alternatif/editNilaiKriteria'); ?>
                <input type="hidden" name="id" value="">

                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="atribut" name="atribut" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="bobot" name="bobot" value="">
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