<!-- Modal Tambah -->

<?php foreach ($nilai as $a) : ?>
    <div class="modal fade" id="ModalNilaiAlternatif<?= $a['id_nilai']; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalNilaiAlternatifLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="ModalNilaiAlternatif">Silahkan Nilai Alternatif</h5>
                </div>
                <?= form_open_multipart('nilaialternatif/NilaiAlternatif'); ?>
                <input type="hidden" name="id_nilai" value="<?= $a['id_nilai']; ?>">
                <input type="hidden" name="id_alternatif" value="<?= $a['id_alternatif']; ?>">

                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control" id="C1" name="C1" value="<?= $a['C1']; ?>">
                            <option>-Kepemimpinan-</option>
                            <option>Sangat Baik</option>
                            <option>Baik</option>
                            <option>Cukup</option>
                            <option>Buruk</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="C2" name="C2">
                            <option>-Kreativitas-</option>
                            <option>Sangat Baik</option>
                            <option>Baik</option>
                            <option>Cukup</option>
                            <option>Buruk</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="C3" name="C3">
                            <option>-Kedisiplinan-</option>
                            <option>Sangat Baik</option>
                            <option>Baik</option>
                            <option>Cukup</option>
                            <option>Buruk</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="C4" name="C4">
                            <option>-Tanggung Jawab-</option>
                            <option>Sangat Baik</option>
                            <option>Baik</option>
                            <option>Cukup</option>
                            <option>Buruk</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="C5" name="C5">
                            <option>-Kerja Tim-</option>
                            <option>Sangat Baik</option>
                            <option>Baik</option>
                            <option>Cukup</option>
                            <option>Buruk</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="C6" name="C6" placeholder="Inovasi">
                            <option>-Inovasi-</option>
                            <option>Sangat Baik</option>
                            <option>Baik</option>
                            <option>Cukup</option>
                            <option>Buruk</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-round btn-primary">Nilai</button>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>