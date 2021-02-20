<div class="modal fade" id="matpel_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <p class="modal-title font-weight-bold" id="modaltitle"><?= $page ?></p>
            </div>
            <div class="modal-body ">
                <form id="form" action="<?= base_url('admin/matpel_add') ?>" method="post">
                    <div class="form-group">
                        <label for="matpel">MataPelajaran</label>
                        <input type="text" name="matpel" class="form-control" id="matpel" placeholder="matapelajaran">
                        <button id="matpel_submmit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-upload fa-sm "></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>