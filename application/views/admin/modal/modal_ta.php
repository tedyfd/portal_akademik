<div class="modal fade" id="ta_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <p class="modal-title font-weight-bold" id="modaltitle"><?= $page ?></p>
            </div>
            <div class="modal-body ">
                <form id="form" action="<?= base_url('admin/ta_add') ?>" method="post">
                    <div class="form-row">
                        <div class="row">
                            <label for="ta">Tahun ajaran</label>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="ta1" class="form-control" id="ta" placeholder="ta">
                            </div>

                            <p>/</p>

                            <div class="col">
                                <input type="text" name="ta2" class="form-control" id="ta" placeholder="ta">
                            </div>
                            <button id="ta_submmit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-upload fa-sm "></i>Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>