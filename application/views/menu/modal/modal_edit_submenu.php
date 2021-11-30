<!-- modal -->

<!-- Modal Edit -->
<?php foreach ($submenu as $sm) : ?>


    <div class="modal fade" id="modalEditSubmenu<?= $sm['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalEditSubmenuLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="modalEditSubmenu">Edit Submenu</h5>
                </div>
                <?= form_open_multipart('menu/editSubmenu'); ?>
                <input type="hidden" name="id" value="<?= $sm['id']; ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Nama submenu" value="<?= $sm['title']; ?>" required>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="menu_id" id="menu_id">
                            <option value="<?= $sm['menu']; ?>"> Menu =
                                <?php
                                    if ($sm['menu'] == 1) {
                                        $sm['menu'] = 'Admin';
                                    } elseif ($sm['menu'] == 2) {
                                        $sm['menu'] = 'Member';
                                    } elseif ($sm['menu'] == 3) {
                                        $sm['menu'] = 'Member';
                                    }
                                    ?>
                                <?= $sm['menu']; ?>
                            </option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['menu']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url" value="<?= $sm['url']; ?>" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu ikon" value="<?= $sm['icon']; ?>" required>
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
                    <button type="submit" class="btn btn-round btn-primary">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>