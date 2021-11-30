<!-- modal -->

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambahSubmenu" tabindex="-1" role="dialog" aria-labelledby="modalTambahSubmenuLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="modalTambahSubmenu">Tambah Submenu</h5>
            </div>
            <?= form_open_multipart('menu/submenu'); ?>
            <div class="modal-body">

                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nama submenu" required>
                </div>

                <div class="form-group">
                    <select name="menu_id" id="menu_id" class="form-control">
                        <option value="">Pilih Menu</option>
                        <?php foreach ($menu as $m) : ?>
                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu ikon" required>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                        <label class="form-check-label" for="is_active">
                            Aktif?
                        </label>
                    </div>
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